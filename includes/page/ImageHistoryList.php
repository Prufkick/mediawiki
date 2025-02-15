<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

use MediaWiki\HookContainer\ProtectedHookAccessorTrait;
use MediaWiki\MediaWikiServices;

/**
 * Builds the image revision log shown on image pages
 *
 * @ingroup Media
 */
class ImageHistoryList extends ContextSource {
	use ProtectedHookAccessorTrait;

	/**
	 * @var Title
	 */
	protected $title;

	/**
	 * @var File
	 */
	protected $img;

	/**
	 * @var ImagePage
	 */
	protected $imagePage;

	/**
	 * @var File
	 */
	protected $current;

	protected $repo, $showThumb;
	protected $preventClickjacking = false;

	/**
	 * @param ImagePage $imagePage
	 */
	public function __construct( $imagePage ) {
		$context = $imagePage->getContext();
		$this->current = $imagePage->getPage()->getFile();
		$this->img = $imagePage->getDisplayedFile();
		$this->title = $imagePage->getTitle();
		$this->imagePage = $imagePage;
		$this->showThumb = $context->getConfig()->get( 'ShowArchiveThumbnails' ) &&
			$this->img->canRender();
		$this->setContext( $context );
	}

	/**
	 * @return ImagePage
	 */
	public function getImagePage() {
		return $this->imagePage;
	}

	/**
	 * @return File
	 */
	public function getFile() {
		return $this->img;
	}

	/**
	 * @param string $navLinks
	 * @return string
	 */
	public function beginImageHistoryList( $navLinks = '' ) {
		// Styles for class=history-deleted
		$this->getOutput()->addModuleStyles( 'mediawiki.interface.helpers.styles' );

		return Xml::element( 'h2', [ 'id' => 'filehistory' ], $this->msg( 'filehist' )->text() )
		. "\n"
		. "<div id=\"mw-imagepage-section-filehistory\">\n"
		. $this->msg( 'filehist-help' )->parseAsBlock()
		. $navLinks . "\n"
		. Xml::openElement( 'table', [ 'class' => 'wikitable filehistory' ] ) . "\n"
		. '<tr><th></th>'
		. ( $this->current->isLocal()
		&& ( $this->getAuthority()->isAllowedAny( 'delete', 'deletedhistory' ) ) ? '<th></th>' : '' )
		. '<th>' . $this->msg( 'filehist-datetime' )->escaped() . '</th>'
		. ( $this->showThumb ? '<th>' . $this->msg( 'filehist-thumb' )->escaped() . '</th>' : '' )
		. '<th>' . $this->msg( 'filehist-dimensions' )->escaped() . '</th>'
		. '<th>' . $this->msg( 'filehist-user' )->escaped() . '</th>'
		. '<th>' . $this->msg( 'filehist-comment' )->escaped() . '</th>'
		. "</tr>\n";
	}

	/**
	 * @param string $navLinks
	 * @return string
	 */
	public function endImageHistoryList( $navLinks = '' ) {
		return "</table>\n$navLinks\n</div>\n";
	}

	/**
	 * @internal
	 * @param bool $iscur
	 * @param File $file
	 * @param string $formattedComment
	 * @return string
	 */
	public function imageHistoryLine( $iscur, $file, $formattedComment ) {
		$user = $this->getUser();
		$lang = $this->getLanguage();
		$linkRenderer = MediaWikiServices::getInstance()->getLinkRenderer();
		$timestamp = wfTimestamp( TS_MW, $file->getTimestamp() );
		// @phan-suppress-next-line PhanUndeclaredMethod
		$img = $iscur ? $file->getName() : $file->getArchiveName();
		$uploader = $file->getUploader( File::FOR_THIS_USER, $user );

		$local = $this->current->isLocal();
		$row = '';

		// Deletion link
		if ( $local && ( $this->getAuthority()->isAllowedAny( 'delete', 'deletedhistory' ) ) ) {
			$row .= '<td>';
			# Link to remove from history
			if ( $this->getAuthority()->isAllowed( 'delete' ) ) {
				$row .= $linkRenderer->makeKnownLink(
					$this->title,
					$this->msg( $iscur ? 'filehist-deleteall' : 'filehist-deleteone' )->text(),
					[],
					[ 'action' => 'delete', 'oldimage' => $iscur ? null : $img ]
				);
			}
			# Link to hide content. Don't show useless link to people who cannot hide revisions.
			$canHide = $this->getAuthority()->isAllowed( 'deleterevision' );
			if ( $canHide || ( $this->getAuthority()->isAllowed( 'deletedhistory' )
					&& $file->getVisibility() ) ) {
				if ( $this->getAuthority()->isAllowed( 'delete' ) ) {
					$row .= '<br />';
				}
				// If file is top revision or locked from this user, don't link
				if ( $iscur || !$file->userCan( File::DELETED_RESTRICTED, $user ) ) {
					$row .= Linker::revDeleteLinkDisabled( $canHide );
				} else {
					$query = [
						'type' => 'oldimage',
						'target' => $this->title->getPrefixedText(),
						'ids' => explode( '!', $img, 2 )[0],
					];
					$row .= Linker::revDeleteLink( $query,
						$file->isDeleted( File::DELETED_RESTRICTED ), $canHide );
				}
			}
			$row .= '</td>';
		}

		// Reversion link/current indicator
		$row .= '<td>';
		if ( $iscur ) {
			$row .= $this->msg( 'filehist-current' )->escaped();
		} elseif ( $local && $this->getAuthority()->probablyCan( 'edit', $this->title )
			&& $this->getAuthority()->probablyCan( 'upload', $this->title )
		) {
			if ( $file->isDeleted( File::DELETED_FILE ) ) {
				$row .= $this->msg( 'filehist-revert' )->escaped();
			} else {
				$row .= $linkRenderer->makeKnownLink(
					$this->title,
					$this->msg( 'filehist-revert' )->text(),
					[],
					[
						'action' => 'revert',
						'oldimage' => $img,
					]
				);
			}
		}
		$row .= '</td>';

		// Date/time and image link
		$selected = $file->getTimestamp() === $this->img->getTimestamp()
			? "class='filehistory-selected'"
			: '';
		$row .= "<td $selected style='white-space: nowrap;'>";
		if ( !$file->userCan( File::DELETED_FILE, $user ) ) {
			# Don't link to unviewable files
			$row .= Html::element( 'span', [ 'class' => 'history-deleted' ],
				$lang->userTimeAndDate( $timestamp, $user )
			);
		} elseif ( $file->isDeleted( File::DELETED_FILE ) ) {
			$timeAndDate = $lang->userTimeAndDate( $timestamp, $user );
			if ( $local ) {
				$this->setPreventClickjacking( true );
				# Make a link to review the image
				$url = $linkRenderer->makeKnownLink(
					SpecialPage::getTitleFor( 'Revisiondelete' ),
					$timeAndDate,
					[],
					[
						'target' => $this->title->getPrefixedText(),
						'file' => $img,
						'token' => $user->getEditToken( $img )
					]
				);
			} else {
				$url = htmlspecialchars( $timeAndDate );
			}
			$row .= '<span class="history-deleted">' . $url . '</span>';
		} elseif ( !$file->exists() ) {
			$row .= Html::element( 'span', [ 'class' => 'mw-file-missing' ],
				$lang->userTimeAndDate( $timestamp, $user )
			);
		} else {
			$url = $iscur ? $this->current->getUrl() : $this->current->getArchiveUrl( $img );
			$row .= Xml::element(
				'a',
				[ 'href' => $url ],
				$lang->userTimeAndDate( $timestamp, $user )
			);
		}
		$row .= "</td>";

		// Thumbnail
		if ( $this->showThumb ) {
			$row .= '<td>' . $this->getThumbForLine( $file ) . '</td>';
		}

		// Image dimensions + size
		$row .= '<td>';
		$row .= htmlspecialchars( $file->getDimensionsString() );
		$row .= $this->msg( 'word-separator' )->escaped();
		$row .= '<span style="white-space: nowrap;">';
		$row .= $this->msg( 'parentheses' )->sizeParams( $file->getSize() )->escaped();
		$row .= '</span>';
		$row .= '</td>';

		// Uploading user
		$row .= '<td>';
		// Hide deleted usernames
		if ( $uploader && $local ) {
			$row .= Linker::userLink( $uploader->getId(), $uploader->getName() );
			$row .= '<span style="white-space: nowrap;">';
			$row .= Linker::userToolLinks( $uploader->getId(), $uploader->getName() );
			$row .= '</span>';
		} elseif ( $uploader ) {
			$row .= htmlspecialchars( $uploader->getName() );
		} else {
			$row .= '<span class="history-deleted">'
				. $this->msg( 'rev-deleted-user' )->escaped() . '</span>';
		}
		$row .= '</td>';

		// Don't show deleted descriptions
		if ( $file->isDeleted( File::DELETED_COMMENT ) ) {
			$row .= '<td><span class="history-deleted">' .
				$this->msg( 'rev-deleted-comment' )->escaped() . '</span></td>';
		} else {
			$contLang = MediaWikiServices::getInstance()->getContentLanguage();
			$row .= Html::rawElement( 'td', [ 'dir' => $contLang->getDir() ], $formattedComment );
		}

		$rowClass = null;
		$this->getHookRunner()->onImagePageFileHistoryLine( $this, $file, $row, $rowClass );
		$classAttr = $rowClass ? " class='$rowClass'" : '';

		return "<tr{$classAttr}>{$row}</tr>\n";
	}

	/**
	 * @param File $file
	 * @return string
	 */
	protected function getThumbForLine( $file ) {
		$lang = $this->getLanguage();
		$user = $this->getUser();
		if ( $file->allowInlineDisplay() && $file->userCan( File::DELETED_FILE, $user )
			&& !$file->isDeleted( File::DELETED_FILE )
		) {
			$timestamp = wfTimestamp( TS_MW, $file->getTimestamp() );

			$thumbnail = $file->transform( [ 'width' => '120', 'height' => '120' ] );
			$options = [
				'alt' => $this->msg( 'filehist-thumbtext',
					$lang->userTimeAndDate( $timestamp, $user ),
					$lang->userDate( $timestamp, $user ),
					$lang->userTime( $timestamp, $user ) )->text(),
				'file-link' => true,
			];

			if ( !$thumbnail ) {
				return $this->msg( 'filehist-nothumb' )->escaped();
			}

			return $thumbnail->toHtml( $options );
		} else {
			return $this->msg( 'filehist-nothumb' )->escaped();
		}
	}

	/**
	 * @param bool $enable
	 * @deprecated since 1.38, use ::setPreventClickjacking() instead
	 */
	protected function preventClickjacking( $enable = true ) {
		$this->preventClickjacking = $enable;
	}

	/**
	 * @param bool $enable
	 * @since 1.38
	 */
	protected function setPreventClickjacking( bool $enable ) {
		$this->preventClickjacking = $enable;
	}

	/**
	 * @return bool
	 */
	public function getPreventClickjacking() {
		return $this->preventClickjacking;
	}
}
