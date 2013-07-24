<?php
/** Karachay-Balkar (къарачай-малкъар)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Don Alessandro
 * @author GerardM
 * @author Iltever
 * @author Kaganer
 * @author Reedy
 * @author Къарачайлы
 */

$fallback = 'ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Къуллукъ',
	NS_TALK             => 'Сюзюу',
	NS_USER             => 'Къошулуучу',
	NS_USER_TALK        => 'Къошулуучуну_сюзюу',
	NS_PROJECT_TALK     => '$1_сюзюу',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Файлны_сюзюу',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki-ни_сюзюу',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Шаблонну_сюзюу',
	NS_HELP             => 'Болушлукъ',
	NS_HELP_TALK        => 'Болушлукъну_сюзюу',
	NS_CATEGORY         => 'Категория',
	NS_CATEGORY_TALK    => 'Категорияны_сюзюу',
);

// Remove Russian aliases
$namespaceGenderAliases = array();

$specialPageAliases = array(
	'Activeusers'               => array( 'Тири_къошулуучула' ),
	'Allmessages'               => array( 'Системаны_билдириулери' ),
	'Allpages'                  => array( 'Бютеу_бетле' ),
	'Blankpage'                 => array( 'Бош_бет' ),
	'Block'                     => array( 'Блок_эт' ),
	'Blockme'                   => array( 'Мени_блок_эт' ),
	'Booksources'               => array( 'Китабланы_къайнакълары' ),
	'BrokenRedirects'           => array( 'Джыртылгъан_редиректле' ),
	'Categories'                => array( 'Категорияла' ),
	'ChangeEmail'               => array( 'E-mail’ни_ауушдур' ),
	'ChangePassword'            => array( 'Паролну_ауушдур' ),
	'ComparePages'              => array( 'Бетлени_тенглешдириу' ),
	'Confirmemail'              => array( 'E-mail’ни_тюзлюгюн_бегит' ),
	'Contributions'             => array( 'Къошум' ),
	'CreateAccount'             => array( 'Тергеу_джазыуну_къура', 'Къошулуучуну_къура', 'Регистрация_эт' ),
	'Deadendpages'              => array( 'Чыкъмазча_бетле' ),
	'DeletedContributions'      => array( 'Кетерилген_къошум' ),
	'Disambiguations'           => array( 'Кёб_магъаналы' ),
	'DoubleRedirects'           => array( 'Экили_редирект' ),
	'EditWatchlist'             => array( 'Кёздеги_тизмени_тюрлендир' ),
	'Emailuser'                 => array( 'Къошулуучугъа_джазма', 'Джазма_ий' ),
	'Export'                    => array( 'Экспорт', 'Къотарыу' ),
	'FileDuplicateSearch'       => array( 'Файлланы_дубликатларын_излеу' ),
	'Filepath'                  => array( 'Файлгъа_джол' ),
	'Import'                    => array( 'Импорт' ),
	'BlockList'                 => array( 'Блок_этиулени_тизмеси', 'Блок_этиуле' ),
	'LinkSearch'                => array( 'Джибериуле_излеу' ),
	'Listadmins'                => array( 'Администраторланы_тизмеси' ),
	'Listbots'                  => array( 'Ботланы_тизмеси' ),
	'Listfiles'                 => array( 'Файлланы_тизмеси', 'Суратланы_тизмеси' ),
	'Listgrouprights'           => array( 'Къошулуучу_къауумланы_хакълары', 'Къауумланы_хакъларыны_тизмеси' ),
	'Listredirects'             => array( 'Редиректлени_тизмеси' ),
	'Listusers'                 => array( 'Къошулуучуланы_тизмеси' ),
	'Lockdb'                    => array( 'Билгиле_базаны_блок_эт' ),
	'Log'                       => array( 'Журналла', 'Журнал' ),
	'Lonelypages'               => array( 'Изоляция_этилген_бетле' ),
	'Longpages'                 => array( 'Узун_бетле' ),
	'MergeHistory'              => array( 'Тарихлени_бирикдириу' ),
	'MIMEsearch'                => array( 'MIME’ге_кёре_излеу' ),
	'Mostimages'                => array( 'Эм_кёб_хайырланнган_файлла' ),
	'Movepage'                  => array( 'Бетни_атын_тюрлендириу', 'Атны_тюрлендириу', 'Атны_тюрлендир' ),
	'Mycontributions'           => array( 'Мени_къошумум' ),
	'Mypage'                    => array( 'Мени_бетим' ),
	'Mytalk'                    => array( 'Мени_сюзюуюм' ),
	'Myuploads'                 => array( 'Мени_джюклегенлерим' ),
	'Newimages'                 => array( 'Джангы_файлла' ),
	'Newpages'                  => array( 'Джангы_бетле' ),
	'PasswordReset'             => array( 'Паролну_ийиу' ),
	'PermanentLink'             => array( 'Дайым_джибериу' ),
	'Popularpages'              => array( 'Популяр_бетле' ),
	'Preferences'               => array( 'Джарашдырыула' ),
	'Protectedpages'            => array( 'Джакъланнган_бетле' ),
	'Protectedtitles'           => array( 'Джакъланнган_атла' ),
	'Randompage'                => array( 'Эсде_болмагъан_бет', 'Эсде_болмагъан' ),
	'Recentchanges'             => array( 'Ахыр_тюрлениуле' ),
	'Recentchangeslinked'       => array( 'Байламлы_тюрлениуле' ),
	'Revisiondelete'            => array( 'Кетерилген_тюрлениуле' ),
	'Search'                    => array( 'Излеу' ),
	'Shortpages'                => array( 'Къысха_бетле' ),
	'Specialpages'              => array( 'Энчи_бетле' ),
	'Statistics'                => array( 'Статистика' ),
	'Tags'                      => array( 'Белгиле' ),
	'Unblock'                   => array( 'Блокну_алыу' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#джибериу', '#редирект', '#перенаправление', '#перенапр', '#REDIRECT' ),
	'notoc'                     => array( '0', '__БАШЛАСЫЗ__', '__БЕЗ_ОГЛАВЛЕНИЯ__', '__БЕЗ_ОГЛ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '_ГАЛЛЕРЕЯСЫЗ__', '__БЕЗ_ГАЛЕРЕИ__', '__NOGALLERY__' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Джибериулени черт:',
'tog-justify' => 'Текстни бетни кенглигине кёре тиз',
'tog-hideminor' => 'Джангы тюрлениулени тизмесинде гитче тюрлениулени кёргюзме',
'tog-hidepatrolled' => 'Джангы тюрлениулени тизмесинде тинтилген тюрлениулени кёргюзме',
'tog-newpageshidepatrolled' => 'Джангы бетлени тизмесинде тинтилген бетлени кёргюзме',
'tog-extendwatchlist' => 'Кёзде тургъан тизмени, къуру ахыр тюл, бютеу тюрлениулени кёрюр ючюн кенгерт',
'tog-usenewrc' => 'Ахыр тюрлениуледе эм кёздеги тизмеде бетлени къауум тюрлениулери (JavaScript керекди)',
'tog-numberheadings' => 'Башлыкъланы (бёлюмлени атлары) автомат номерленсинле',
'tog-showtoolbar' => 'Тюрлендирген сагъатда, башындагъы адыр панелни кёргюз (JavaScript)',
'tog-editondblclick' => 'Эки басыу бла тюрлендириу бет ачылсын (JavaScript)',
'tog-editsection' => 'Хар бёлюмге «тюрлендир» джибериуню кёргюз',
'tog-editsectiononrightclick' => 'Бёлюмлени бёлюм башлыкъгъа басханлай тюрлендириу бетин ач',
'tog-showtoc' => 'Башларын кёргюз (3-ден кёб бёлюм башлыгъы болгъан бетлеге)',
'tog-rememberpassword' => 'Бу компьютерде мени тергеў джазыўуму сакъла (эм кёб $1 {{PLURAL:$1|кюн|кюн}})',
'tog-watchcreations' => 'Мен къурагъан (башлагъан) бетлени эм мен джюклеген файлланы кёзюмде тургъан тизмеме къош',
'tog-watchdefault' => 'Мен тюрлендирген бетлени эм файлланы кёзюмде тургъан тизмеме къош',
'tog-watchmoves' => 'Мен атларын ауушдургъан бетлени эм файлланы кёзюмде тургъан тизмеме къош',
'tog-watchdeletion' => 'Мен кетерген бетлени эм файлланы кёзюмде тургъан тизмеме къош',
'tog-minordefault' => 'Тынгылау бла бары тюрлениулени «аз магъаналы» белгиле',
'tog-previewontop' => 'Ал къарауну тюрлендириу бетни башы бла кёргюз',
'tog-previewonfirst' => 'Тюрледириу бетге кёчгенде ал къарауну кёргюз',
'tog-nocache' => 'Бетлени браузерге кэш этерге къойма',
'tog-enotifwatchlistpages' => 'Кёзюмде тургъан тизмемдеги бетлени неда файлланы тюрлениулерин e-mail бла билдир',
'tog-enotifusertalkpages' => 'Энчи бетими тюрлениулерин e-mail бла билдир',
'tog-enotifminoredits' => 'Бетлени неда файлланы гитче тюрлениулерин огъуна E-mail бла',
'tog-enotifrevealaddr' => 'E-mail адресими билдириу письмолада кёргюз',
'tog-shownumberswatching' => 'Бетни, кёзде тургъан тизмелерине къошханланы санын кёргюз',
'tog-oldsig' => 'Бусагъатдагъы къол салыннган:',
'tog-fancysig' => 'Къол салыуну энчи вики-тексти (автомат джибериусюз)',
'tog-showjumplinks' => '«Бар» болушлукъ джибериуню джандыр',
'tog-uselivepreview' => 'Терк ал къарауну хайырландыр (JavaScript, экспериментал халда)',
'tog-forceeditsummary' => 'Тюрлендириуню ачыкълау тизгини бош къалса, билдир',
'tog-watchlisthideown' => 'Кёзюмде тургъан бетден мени тюрлендириулерими джашыр',
'tog-watchlisthidebots' => 'Кёзюмде тургъан бетден ботланы тюрлендириулерин джашыр',
'tog-watchlisthideminor' => 'Гитче тюрлендириулени кёзде тургъан бетден джашыр',
'tog-watchlisthideliu' => 'Авторизация этген къошулуучуланы тюрлендириулерин кёзде тургъан тизмеден джашыр',
'tog-watchlisthideanons' => 'Аноним къошулуучуланы тюрлендириулерин кёзде тургъан тизмеден джашыр',
'tog-watchlisthidepatrolled' => 'Тинтилген тюрлендириулени кёзде тургъан тизмеден джашыр',
'tog-ccmeonemails' => 'Башха къошулуучулагъа джиберген письмоларымы копияларын меннге да джибер',
'tog-diffonly' => 'Версия тенглешдириуню тюбю бла бетни ичиндегисин кёргюзме',
'tog-showhiddencats' => 'Джашыртын категорияланы кёргюз',
'tog-norollbackdiff' => 'Къайтарыудан сора версияланы башхалыкъларын кёргюзме',
'tog-useeditwarning' => 'Тюрлендириулени сакълатмай редакторлау бетден кетген сагъатымда билдир',

'underline-always' => 'Хаманда',
'underline-never' => 'Бир заманда да',
'underline-default' => 'Браузерни джарашдырыуларын хайырландыр',

# Font style option in Special:Preferences
'editfont-style' => 'Тюрлендириу джерни шрифтини тиби:',
'editfont-default' => 'Браузерни джарашдырыуларындан шрифт',
'editfont-monospace' => 'Кенгленнген шрифт',
'editfont-sansserif' => 'Sans-serif шрифт',
'editfont-serif' => 'Сериф шрифт',

# Dates
'sunday' => 'Ыйых кюн',
'monday' => 'Баш кюн',
'tuesday' => 'Гюрге кюн',
'wednesday' => 'Бараз кюн',
'thursday' => 'Орта кюн',
'friday' => 'Байрым кюн',
'saturday' => 'Шабат кюн',
'sun' => 'Ый',
'mon' => 'Бш',
'tue' => 'Гр',
'wed' => 'Брз',
'thu' => 'Орт',
'fri' => 'Брм',
'sat' => 'Шб',
'january' => 'январь',
'february' => 'февраль',
'march' => 'март',
'april' => 'апрель',
'may_long' => 'май',
'june' => 'июнь',
'july' => 'июль',
'august' => 'август',
'september' => 'сентябрь',
'october' => 'октябрь',
'november' => 'ноябрь',
'december' => 'декабрь',
'january-gen' => 'январь',
'february-gen' => 'февраль',
'march-gen' => 'март',
'april-gen' => 'апрель',
'may-gen' => 'май',
'june-gen' => 'июнь',
'july-gen' => 'июль',
'august-gen' => 'август',
'september-gen' => 'сентябрь',
'october-gen' => 'октябрь',
'november-gen' => 'ноябрь',
'december-gen' => 'декабрь',
'jan' => 'янв',
'feb' => 'фев',
'mar' => 'мар',
'apr' => 'апр',
'may' => 'май',
'jun' => 'июн',
'jul' => 'июл',
'aug' => 'авг',
'sep' => 'сен',
'oct' => 'окт',
'nov' => 'ноя',
'dec' => 'дек',
'january-date' => '$1 январь',
'february-date' => '$1 февраль',
'march-date' => '$1 март',
'april-date' => '$1 апрель',
'may-date' => '$1 май',
'june-date' => '$1 июнь',
'july-date' => '$1 июль',
'august-date' => '$1 август',
'september-date' => '$1 сентябрь',
'october-date' => '$1 октябрь',
'november-date' => '$1 ноябрь',
'december-date' => '$1 декабрь',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Категория|Категорияла}}',
'category_header' => '«$1» категориядагъы бетле',
'subcategories' => 'Тюбкатегорияла',
'category-media-header' => '«$1» категориядагъы файлла',
'category-empty' => "''Бу категория бусагъатда бошду.''",
'hidden-categories' => '{{PLURAL:$1|Джашырылгъан категория|Джашырылгъан категорияла}}',
'hidden-category-category' => 'Джашыртын категорияла',
'category-subcat-count' => '{{PLURAL:$2|Бу категориягъа къуру баргъан тюбкатегория киреди.|$2 тюбкатегориядан $1 киреди бу категориягъа.}}',
'category-subcat-count-limited' => 'Бу категорияда {{PLURAL:$1|$1 тюбкатегория}} барды.',
'category-article-count' => '{{PLURAL:$2|Бу категорияда къуру бир бет барды.|Бу категориядагъы $2 бетден $1 кёргюзюлгенди.}}',
'category-article-count-limited' => 'Бу категорияда {{PLURAL:$1|$1 бет}} барды.',
'category-file-count' => '{{PLURAL:$2|Бу категорияда къуру бир файл барды.|Категориядагъы $2 файлдан {{PLURAL:$1|$1 файлы кёргюзюлгенди}}.}}',
'category-file-count-limited' => 'Бу категория да {{PLURAL:$1|$1 файл}} барды.',
'listingcontinuesabbrev' => '(баргъаны)',
'index-category' => 'Индексленнген бетле',
'noindex-category' => 'Индексленмеген бетле',
'broken-file-category' => 'Ишлемеген файл джибериулери болгъан бетле',

'about' => 'Суратлау',
'article' => 'Статья',
'newwindow' => '(джангы терезеде ачылады)',
'cancel' => 'Ызына алыу',
'moredotdotdot' => 'Баргъаны…',
'morenotlisted' => 'Энди джукъ джокъду...',
'mypage' => 'Бет',
'mytalk' => 'Сюзюу',
'anontalk' => 'Бу IP-адресге сюзюу бет',
'navigation' => 'Навигация',
'and' => '&#32;эм',

# Cologne Blue skin
'qbfind' => 'Излеу',
'qbbrowse' => 'Къарау',
'qbedit' => 'Тюрлендир',
'qbpageoptions' => 'Бу бет',
'qbmyoptions' => 'Бетлерим',
'qbspecialpages' => 'Къуллукъчу бетле',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Джангы тема къош',
'vector-action-delete' => 'Кетер',
'vector-action-move' => 'Атын ауушдур',
'vector-action-protect' => 'Джакъла',
'vector-action-undelete' => 'Къайтар',
'vector-action-unprotect' => 'Джакълауну тюрлендир',
'vector-simplesearch-preference' => 'Тынч излеуде болушлукъланы джандыр (къуру «Вектор» мотив ючюн)',
'vector-view-create' => 'Къура',
'vector-view-edit' => 'Тюрлендир',
'vector-view-history' => 'Тарихин кёргюз',
'vector-view-view' => 'Окъу',
'vector-view-viewsource' => 'Кодха къара',
'actions' => 'Этиуле',
'namespaces' => 'Атланы аламы',
'variants' => 'Вариантла',

'navigation-heading' => 'Навигация меню',
'errorpagetitle' => 'Халат',
'returnto' => '«$1» бетге къайт',
'tagline' => '{{SITENAME}} сайтдан',
'help' => 'Джардам',
'search' => 'Излеу',
'searchbutton' => 'Таб',
'go' => 'Бар',
'searcharticle' => 'Кёч',
'history' => 'Бетни тарихи',
'history_short' => 'Тарих',
'updatedmarker' => 'Ахыр киргенимден сора джангыргъанды',
'printableversion' => 'Басмагъа версиясы',
'permalink' => 'Дайым джибериу',
'print' => 'Басмала',
'view' => 'Къарау',
'edit' => 'Тюрлендир',
'create' => 'Къура',
'editthispage' => 'Бу бетни тюрлендир',
'create-this-page' => 'Бу бетни къура',
'delete' => 'Кетер',
'deletethispage' => 'Бу бетни кетер',
'undelete_short' => '$1 {{PLURAL:$1|тюрлендириуню}} къайтар',
'viewdeleted_short' => '{{PLURAL:$1|1|$1}} кетерилген тюрлендириуге къарау',
'protect' => 'Джакъла',
'protect_change' => 'тюрлендир',
'protectthispage' => 'Бу бетни джакъла',
'unprotect' => 'Джакълауну тюрлендир',
'unprotectthispage' => 'Бу бетни джакълауун тюрлендир',
'newpage' => 'Джангы бет',
'talkpage' => 'Бу бетни сюз',
'talkpagelinktext' => 'сюзюу',
'specialpage' => 'Къуллукъ бет',
'personaltools' => 'Энчи адырла',
'postcomment' => 'Джангы бёлюм',
'articlepage' => 'Статьягъа къарау',
'talk' => 'Сюзюу',
'views' => 'Къараула',
'toolbox' => 'Адырла',
'userpage' => 'Къошулуучуну энчи бетине къарау',
'projectpage' => 'Проектни бетине къара',
'imagepage' => 'Файлны бетине къара',
'mediawikipage' => 'Билдириуню бетине къара',
'templatepage' => 'Шаблонну бетине къара',
'viewhelppage' => 'Болушлукъну бетине къара',
'categorypage' => 'Категорияны бетине къара',
'viewtalkpage' => 'Сюзюуню бетине къара',
'otherlanguages' => 'Башха тилледе',
'redirectedfrom' => '(«$1» бетден джиберилгенди)',
'redirectpagesub' => 'Башха бетге джибериучю бет',
'lastmodifiedat' => 'Бу бетни ахыр тюрленнгени: $2, $1.',
'viewcount' => 'Бу бетге {{PLURAL:$1|1|$1}} кере киргендиле.',
'protectedpage' => 'Джакъланнган бет',
'jumpto' => 'Бери кёчерге:',
'jumptonavigation' => 'навигация',
'jumptosearch' => 'излеу',
'view-pool-error' => 'Кечгинлик, бусагъатда серверле бош тюйюлдюле.
Бу бетге къараргъа излегенле асыры кёбдюле.
Кечирек кириб кёрюгюз.

$1',
'pool-timeout' => 'Блокланыуну сакълау заман ётдю',
'pool-queuefull' => 'Соруула джыйыучу толуду',
'pool-errorunknown' => 'Билинмеген халат',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => '{{SITENAME}} сайтны юсюнден',
'aboutpage' => 'Project:Суратлау',
'copyright' => 'Информация мунга кёре хайырланады: $1',
'copyrightpage' => '{{ns:project}}:Авторлукъ хакъла',
'currentevents' => 'Бусагъатда бола тургъанла',
'currentevents-url' => 'Project:Бусагъатда бола тургъанла',
'disclaimers' => 'Джууаблылыкъны унамау',
'disclaimerpage' => 'Project:Джууаблылыкъны унамау',
'edithelp' => 'Тюрлендириуню юсюнден болушлукъ',
'helppage' => 'Help:Болушлукъ',
'mainpage' => 'Баш бет',
'mainpage-description' => 'Баш бет',
'policy-url' => 'Project:Джорукъла',
'portal' => 'Джамагъат портал',
'portal-url' => 'Project:Джамагъат портал',
'privacy' => 'Джашыргъанлыкъ политика',
'privacypage' => 'Project:Джашыргъанлыкъ политика',

'badaccess' => 'Кириуню халаты',
'badaccess-group0' => 'Сизни соргъан амалны этерге эркинлигигиз джокъду.',
'badaccess-groups' => 'Сиз соргъан амалны къуру $1 {{PLURAL:$2|группаны|группаланы}} къошулуучуларыны этерге мадарлары барды.',

'versionrequired' => 'MediaWiki-ни $1 версиясы керекди',
'versionrequiredtext' => 'Бу бетде ишлер ючюн MediaWiki-ни $1 версиясы керекди.  [[Special:Version|Хайырладырылгъан программаны версияларыны юсюнден информациягъа]] къара.',

'ok' => 'ОК',
'retrievedfrom' => 'Чыкъгъаны — «$1»',
'youhavenewmessages' => 'Сизге $1 келдиле ($2).',
'newmessageslink' => 'джангы билдириуле',
'newmessagesdifflink' => 'сюзюу бетигизни ахыр тюрлениую',
'youhavenewmessagesfromusers' => '{{PLURAL:$3|Башха бир къошулуучудан|$3 къошулуучудан}} сеннге $1 келди ($2).',
'youhavenewmessagesmanyusers' => 'Талай къошулуучудан $1 барды. ($2)',
'newmessageslinkplural' => '{{PLURAL:$1|джангы билдириу|джангы билдириуле}}',
'newmessagesdifflinkplural' => 'ахыр {{PLURAL:$1|тюрлениу}}',
'youhavenewmessagesmulti' => '$1 бетде джангы билдириуле бардыла.',
'editsection' => 'тюрлендир',
'editold' => 'тюрлендир',
'viewsourceold' => 'Башланнган кодха къара',
'editlink' => 'тюрлендир',
'viewsourcelink' => 'башланнган кодха къара',
'editsectionhint' => '$1 бёлюмню тюрлендир',
'toc' => 'Башлары',
'showtoc' => 'кёргюз',
'hidetoc' => 'джашыр',
'collapsible-collapse' => 'джашыр',
'collapsible-expand' => 'кёргюз',
'thisisdeleted' => '$1 къараргъа неда къайтарыргъа (тургъузтургъа)?',
'viewdeleted' => '$1 къараймыса?',
'restorelink' => 'кетерилген {{PLURAL:$1|1|$1}} тюрлендириу',
'feedlinks' => 'Бу кёрюмде:',
'feed-invalid' => 'Джазылыу каналны типи терсди.',
'feed-unavailable' => 'Синдикация лентала табылынмайла бусагъатда',
'site-rss-feed' => '$1 — RSS-лента',
'site-atom-feed' => '$1 — Atom лентасы',
'page-rss-feed' => '«$1» — RSS-лентасы',
'page-atom-feed' => '«$1» — Atom-лентасы',
'red-link-title' => '$1 (быллай бет джокъду)',
'sort-descending' => 'Кем болуугъа кёре тиз',
'sort-ascending' => 'Ёсюуге кёре тиз',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Статья',
'nstab-user' => 'Къошулуучуну бети',
'nstab-media' => 'Мультимедиа',
'nstab-special' => 'Къуллукъчу бет',
'nstab-project' => 'Проектни бети',
'nstab-image' => 'Файл',
'nstab-mediawiki' => 'Билдириу',
'nstab-template' => 'Шаблон',
'nstab-help' => 'Болушлукъ бет',
'nstab-category' => 'Категория',

# Main script and global functions
'nosuchaction' => 'Быллай амал джокъду',
'nosuchactiontext' => 'URL-да белгиленнген амал терсди.
Сиз URL-ну терс джазгъан болурсуз, неда терс джибериу бла кёчгенсиз.
Бу {{SITENAME}} проектде да хатаны кёргюзюрге боллукъду.',
'nosuchspecialpage' => 'Быллай къуллукъ бет джокъду',
'nospecialpagetext' => '<strong>Сиз излеген къуллукъ бет джокъду.</strong>

Болгъан къуллукъ бетлени тизмеси: [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Халат',
'databaseerror' => 'Информация базада халат',
'dberrortext' => 'Информация базагъа джиберилген сорууда синтаксис халат табылды.
Программада халатны ачыкъларгъа да боллукъду ол.
Информация базагъа ахыр соруу:
<blockquote><code>$1</code></blockquote>
«<code>$2</code>» функциясындан болгъанды.
База «<samp>$3: $4</samp>» халатны къайтарды.',
'dberrortextcl' => 'Информация базагъа джиберилген сорууда синтаксис халат табылды.
Информация базагъа ахыр соруу:
«$1»
«$2» функциясындан болгъанды.
База «$3: $4»  халатны къайтарды.',
'laggedslavemode' => 'Эс бёлюгюз! Бу бетге ахыр джангыртыула болмазгъа боллукъдула.',
'readonly' => 'Информация база джабыкъды',
'enterlockreason' => 'Блок этилиуню чурумун эм заманын белгилегиз.',
'readonlytext' => 'Информация базаны тюрлендирген амал джабылыбды бусагъатда. Ол план ишлемле ючюн болгъан болур.
Джабхан оператор быллай билдириу къойгъанды:
$1',
'missing-article' => 'Билгилени базасында табылыргъа керек болгъан, сорулгъан бетни тексти табылмагъанды, «$1» $2.

Быллай турум, кетерилген бетни тюрлениулерини тарихине эски болгъан джибериу бла кирирге изленсе болады.

Иш мында тюл эсе, сиз программа баджарыуда халат табхансыз. Халатны юсюнден URL-ну белгилеб [[Special:ListUsers/sysop|администраторгъа]] билдиригиз.',
'missingarticle-rev' => '(версия № $1)',
'missingarticle-diff' => '(башхалыкъ: $1, $2)',
'readonly_lag' => 'Информация база, экинчи сервер биринчи сервер бла синхронизацияны тындыргъынчы, тюрлендириуледен автомат джабылыб турады.',
'internalerror' => 'Ич халат',
'internalerror_info' => 'Ич халат: $1',
'fileappenderrorread' => '«$1» окъулуналмагъанды къошулгъан заманда',
'fileappenderror' => '«$1» файл «$2» файлгъа къошулмайды.',
'filecopyerror' => '«$2» файлны «$1» файлгъа копия этиб болмайды.',
'filerenameerror' => '«$1» файлны атын «$2» атха алышдырыргъа болмайды.',
'filedeleteerror' => '«$1» файлны кетерирге болмайды.',
'directorycreateerror' => '«$1» директория къураргъа болмайды.',
'filenotfound' => '«$1» файл табылынмайды.',
'fileexistserror' => '«$1» файлгъа джазаргъа болмайды: ол энди барды',
'unexpected' => 'Келишмеген магъана: «$1»=«$2».',
'formerror' => 'Халат: форма ташылмайды',
'badarticleerror' => 'Бу бетде этилирге болмайды быллай амал.',
'cannotdelete' => '«$1» файлны неда бетни кетерирге болмайды.
Башха къошулуучу кетерген болургъа боллукъду аны.',
'cannotdelete-title' => '«$1» бетни кетерирге болмайды',
'delete-hook-aborted' => 'Тюрлениу тохтатыучу процедура бла ызына алынды.
Ачыкълау берилмегенди.',
'badtitle' => 'Джарамагъан ат',
'badtitletext' => 'Сорулгъан бетни аты терсди, бошду, неда интервики аты терс джазылгъанды. Келишмеген (хайырланыргъа болмагъан) символла хайырланыргъада боллукъдула атында.',
'perfcached' => 'Бу информация кэшден алыннганды, ахыр тюрлениулени кёргюзмезге боллукъду. Кэшде максимум {{PLURAL:$1|джазыу}} сакъланады.',
'perfcachedts' => 'Бу кэшден алыннган информацияды, ахыр кере ол $1 джангыртылыннганды. Кэшде эм кёбю бла  {{PLURAL:$4|джазыу|джазыу}} сакъланады.',
'querypage-no-updates' => 'Бу бетни бусагъатда джангыртыргъа болмайды.
Мында келтирилген информация къабыл этилинник тюйюлдю.',
'wrong_wfQuery_params' => 'wfQuery()<br /> функциягъа джарамагъан параметрле<br />
Функция: $1<br />
Соруу: $2',
'viewsource' => 'Къарау',
'viewsource-title' => '$1 бетни чыкъгъан текстине къарау',
'actionthrottled' => 'Терклик чекленнгенди',
'actionthrottledtext' => 'Спамгъа къаршчы кюрешиуню себебинден, аз заманны ичинде бу амал бла кёб кере хайырланыу тыйылыбды. Кечирек джангыдан кёрюгюз.',
'protectedpagetext' => 'Редакторлукъ неда башха зат этилмез ючюн бу бет джакъланыбды.',
'viewsourcetext' => 'Сиз бу бетни башланнган текстине къараргъа эм аны копия этерге боллукъсуз:',
'viewyourtext' => "Бу бетде '''кесигизни тюрлендириулеригизни''' къайнакъ текстине къараргъа эм копия этерге боллукъсуз:",
'protectedinterface' => 'Бу бетде программаны интерфейс билдириую барды.
Бютеу викиледе да бу билдириуню кёчюрмесин къошар неда тюрлендирир ючюн MediaWiki-ни локализациясыны сайты [//translatewiki.net/ translatewiki.net]-ни хайырландырыгъыз.',
'editinginterface' => "'''Эс бёл:''' Сен системаны интерфейс бетин тюрлендире тураса. Бу, викини башха къошулуучуларына да тиерик затды. Кёчюрюр ючюн неда кёчюрмелени тюрлендирир ючюн, MediaWiki-ни локализация этиу проекти [//translatewiki.net/ translatewiki.net]-ни хайырландырыгъыз.",
'sqlhidden' => '(SQL соруу джашырылыбды)',
'cascadeprotected' => 'Бу бет тюрлениуледен джакъланыбды, ол каскадлы джакълау къабыл этилиннген  {{PLURAL:$1|бетге|бетлеге}} киргени ючюндю:
$2',
'namespaceprotected' => '«$1» ат аламда бетлени тюрлендирирге эркинлигигиз джокъду.',
'customcssprotected' => 'Бу CSS-бетни тюрлендирирге эркинлигигиз джокъду, бу бетде башха къошулуучуну энчи джарашдырыулары барды.',
'customjsprotected' => 'Бу JavaScript-бетни тюрлендирирге эркинлигигиз джокъду, бу бетде башха къошулуучуну энчи джарашдырыулары барды.',
'ns-specialprotected' => '«{{ns:special}}» ат аламны бетлерин тюрлендирирге болмайды.',
'titleprotected' => "Быллай атлы бет къураргъа [[User:$1|$1]]  къоймайды.
Белгиленнген чурум: ''$2''.",
'filereadonlyerror' => "«$2» гезен «къуру окъур ючюн» режимде болгъаны себебли «$1» файл тюрленмейди.

Бу режимни салгъан администратор бу ангылатыуну къойгъанды: «''$3''».",
'invalidtitle-knownnamespace' => '«$2» ат аламы бла эм «$3» тексти бла джарамагъан башлыкъ.',
'invalidtitle-unknownnamespace' => '$1 белгили болмагъан алам номери бла эм «$2» тексти бла джарамагъан башлыкъ',
'exception-nologin' => 'Авторизацияны ётмегенсиз',
'exception-nologin-text' => 'Бу бетге къарар ючюн неда сорулгъан ишни этер ючюн авторизацияны ётерге керекди.',

# Virus scanner
'virus-badscanner' => "Джарашдырыуну хатасы. Белгисиз вирус сканер: ''$1''",
'virus-scanfailed' => 'скан этиуню хатасы (код $1)',
'virus-unknownscanner' => 'белгисиз антивирус:',

# Login and logout pages
'logouttext' => "'''Аккаунтугъуздан чыкъдыгъыз.'''

Сиз {{SITENAME}} сайтда аноним халда къалыргъа боллкъсуз. неда <span class='plainlinks'>[$1 джангыдан кирирге]</span>.
Талай бетле сиз тергеу джазыу (аккаунт) бла киргенча кёрюнюрге боллукъдула, аны кетерир ючюн кэшни джангыртыгъыз.",
'welcomeuser' => 'Сау кел, $1!',
'welcomecreation-msg' => 'Сизни тергеу джазыуугъуз (аккаунтугъуз) къуралды.
{{SITENAME}} сайтда [[Special:Preferences|джарашдырыуларыгъызны]] тюрлендирирге унутмагъыз.',
'yourname' => 'Къошулуучуну аты',
'userlogin-yourname' => 'Тергеу джазыуну аты',
'userlogin-yourname-ph' => 'Тергеу джазыуунгу атын джаз',
'yourpassword' => 'Паролюгъуз:',
'userlogin-yourpassword' => 'Пароль',
'userlogin-yourpassword-ph' => 'Паролунгу джаз',
'createacct-yourpassword-ph' => 'Пароль джаз',
'yourpasswordagain' => 'Паролну джангыдан джаз:',
'createacct-yourpasswordagain' => 'Паролну бегит',
'createacct-yourpasswordagain-ph' => 'Паролну энтда бир кере джаз',
'remembermypassword' => 'Бу компьютерде мени тергеў джазыўуму унутма (эм кёб $1 {{PLURAL:$1|кюн|кюн}})',
'userlogin-remembermypassword' => 'Системада туруу',
'userlogin-signwithsecure' => 'Джакъланнган байлам',
'securelogin-stick-https' => 'Чыкъгъандан сора да HTTPS бла байламлы къой',
'yourdomainname' => 'Сизни доменигиз:',
'password-change-forbidden' => 'Бу викиде паролугъузну тюрлендиреллик тюлсюз.',
'externaldberror' => 'Тыш информация базаны болушлугъу бла аутентификация, халатлы болду, неда тыш аккаунтугъузну тюрлендирирге хакъларагъыз джетмейди.',
'login' => 'Кириу',
'nav-login-createaccount' => 'Кириу / регистрация этиу',
'loginprompt' => '{{SITENAME}} сайтха кирир ючюн «cookies» эркин этерге керексиз.',
'userlogin' => 'Кир / регистрация эт',
'userloginnocreate' => 'Кириу',
'logout' => 'Чыгъыу',
'userlogout' => 'Чыгъыу',
'notloggedin' => 'Авторизация ётмегенсиз',
'userlogin-noaccount' => 'Аккаунтунг джокъмуду?',
'userlogin-joinproject' => '{{SITENAME}} сайтха къошул',
'nologin' => 'Тергеу джазыуугъуз (аккаунтугъуз) джокъмуду? $1.',
'nologinlink' => 'Тергеу джазыу (аккаунт) къурагъыз',
'createaccount' => 'Джангы къошулуучуну регистрация эт',
'gotaccount' => 'Тергеу джазыуугъуз (аккаунтугъуз) энди бармыды? $1.',
'gotaccountlink' => 'Кириу',
'userlogin-resetlink' => 'Кирир ючюн билгилеригизни унутхан этгенмисиз?',
'userlogin-resetpassword-link' => 'Паролну джибериу',
'helplogin-url' => 'Help:Кириу',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Системагъа кириуде болушлукъ]]',
'createacct-join' => 'Билгилеринги тюбюрекде джаз.',
'createacct-emailrequired' => 'Электрон почтаны адреси',
'createacct-emailoptional' => 'Электрон почтаны адреси (амалсыз тюлдю)',
'createacct-email-ph' => 'Электрон почта адресигизни джазыгъыз',
'createaccountmail' => 'Эсде болмагъанлай генерация этилген болджаллы паролну хайырландыр эм тюбюрекде берилген электрон почта адресге ий:',
'createacct-realname' => 'Керти атыгъыз (ажымсыз керек тюлдю)',
'createaccountreason' => 'Чурум:',
'createacct-reason' => 'Чурум',
'createacct-reason-ph' => 'Башха тергеу джазыуну нек къураусыз',
'createacct-captcha' => 'Къоркъуусузлукъну тинтиу',
'createacct-imgcaptcha-ph' => 'Башыракъда кёрюннген текстни джаз',
'createacct-submit' => 'Тергеу джазыуну къура',
'createacct-benefit-heading' => '{{SITENAME}} сизнича адамла бла къуралгъанды.',
'createacct-benefit-body1' => '{{PLURAL:$1|тюрлениу}}',
'createacct-benefit-body2' => '{{PLURAL:$1|бет}}',
'createacct-benefit-body3' => 'арт заманда {{PLURAL:$1|къошум этген}}',
'badretype' => 'Джазгъан паролларыгъыз бир-бирине келишмейдиле.',
'userexists' => 'Джазылгъан ат хайырландырылады.
Башха ат сайлагъыз.',
'loginerror' => 'Кириу хата',
'createacct-error' => 'Тергеу джазыу къурауда халат',
'createaccounterror' => 'Быллай тергеу джазыу (аккаунт) къураргъа болмайды: $1',
'nocookiesnew' => 'Къошлуучу регистрацияны ётгенди, алай кирмегенди. {{SITENAME}} къошулуучуланы таныр ючюн «cookies»-ни хайырландырады. Сиз «cookies»-ни эркин этмегенсиз. «Cookies»-ни эркин этигиза да, андан сора джангы атыгъыз эм паролюгъуз бла киригиз.',
'nocookieslogin' => '{{SITENAME}} къошулуучуланы таныр ючюн «cookies»-ни хаырландырады. Сиз аны джукълатыб турасыз. «Cookies»-ни эркин этигизда джангыдан кёрюгюз.',
'nocookiesfornew' => 'Къайнагъын тинтир амал болмагъаны себебли тергеу джазыу къуралмады.
«Cookies» ачыкъ болгъанына ишексиз болугъуз, бетни джангыртыгъыз эм энтда бир кере кёрюгюз.',
'noname' => 'Терс атны джазгъансыз.',
'loginsuccesstitle' => 'Авторизация тыйыншлы ётдю',
'loginsuccess' => "'''Энди {{SITENAME}} сайтха «$1» ат бла кирдигиз.'''",
'nosuchuser' => '$1 аты бла къошулуучу джокъду.
Къошулуучу атла харифни регистрин (уллу-гитчеликлерин) айырады.
Атны тюз джазылгъанына къарагъыз неда [[Special:UserLogin/signup|джангы тергеу джазыу (аккаунт) къурагъаз]].',
'nosuchusershort' => '$1 аты бла къшулуучу джокъду. Атны тюз джазылгъанына къарагъыз.',
'nouserspecified' => 'Сиз къошулуучу атыгъызны джазаргъа керексиз.',
'login-userblocked' => 'Бу къошулуучу блокга салыннганды. Кирирге мадары джокъду.',
'wrongpassword' => 'Сиз джазгъан пароль терсди. Джангыдан кёрюгюз.',
'wrongpasswordempty' => 'Пароль джазылмай къалгъанды. Джангыдан кёрюгюз.',
'passwordtooshort' => '$1 {{PLURAL:$1|символдан}} аз болмазгъа керекди пароль.',
'password-name-match' => 'Пароль къошулуучу атдан башха тюрлю болургъа керекди.',
'password-login-forbidden' => 'Бу къошулуучу ат бла паролну хайырландыргъан джарамайды.',
'mailmypassword' => 'Меннге e-mail бла джангы пароль джибер',
'passwordremindertitle' => '{{SITENAME}}  къошулуучугъа джангы болджаллы пароль',
'passwordremindertext' => 'Ким эседа (сиз болургъа боллукъсуз, IP-адрес: $1) {{SITENAME}} ($4) къошулуучугъа джангы пароль къураргъа соргъанды. $2 къошулуучугъа джангы пароль: $3. Сорууну джиберген сиз болгъан эсегиз, системагъа кирирге эм паролну алышдырыргъа тыйычлыды. Джангы паролну $5 {{PLURAL:$5|кюнню}} ичинде амалы боллукъду.

Паролну алышдырыргъа сорууну сиз джибермеген эсегиз, неда эсигизге тюшген эсе паролюгъуз, бу билдириуге эс бёлмегизда къоюгъуз, эски паролюгъузну хайырландырыгъыз.',
'noemail' => '$1 аты бла къошулуучугъа e-mail адрес джазылмагъанды.',
'noemailcreate' => 'Сизге тюз e-mail адресни джазаргъа керекди',
'passwordsent' => 'Джангы пароль $1 къошулуучуну электрон почтасына джиберилди.

Паролну алгъандан сора, джангыдан киригиз системагъа.',
'blocked-mailpassword' => 'Сизни IP-адресигиз блокланыб турады, аны бла паролну къайтарыу функцияда.',
'eauthentsent' => 'Джазылгъан электрон почтагъа адресни тюрлениуюн бегитирге соруу джиберилгенди. Письмода бу сизни электрон почтагъызны адреси болгъанын бегитир ючюн не этерге керек болгъаны да чертилгенди.',
'throttled-mailpassword' => 'Паролну билдириу амал {{PLURAL:$1|ахыр $1 сагъатны}} ичинде бир кере хайырланылгъанды.
Джорукъдан чыгъыудан сакъланыр ючюн $1 {{PLURAL:$1|сагъатны}} ичинде къуру бир билдириу алыргъа болады.',
'mailerror' => 'Почта джибериу хата: $1',
'acct_creation_throttle_hit' => 'Кюн бла кечеге сизни IP-адресигизден {{PLURAL:$1|$1 тергеу джазыу (аккаунт)}} къуралгъанды. Бу амал энди бусагъатда джабыкъды.',
'emailauthenticated' => 'Сизни электрон почта адресигиз бегитилгенди: $3, $2.',
'emailnotauthenticated' => 'Сизни элктрон почта адресигиз алкъын бегитилмегенди, викини электрон почта бла ишлеу амаллары джукъланыбдыла.',
'noemailprefs' => 'Электрон почта адрес джазылмагъанды, викини электрон почта бла ишлеу амаллары джукъланыбдыла.',
'emailconfirmlink' => 'Электрон почта адресигизни бегитигиз.',
'invalidemailaddress' => 'Электрон почта адресигизи къабыл этилинирге болмайды, форматха келишмегени ючюн.
Тюз адрес джазыгъыз неда тизгинни бош къоюгъуз.',
'cannotchangeemail' => 'Тергеу джазыуну электрон почтасыны адреслерин бу викиде тюрлендирирге болмайды.',
'emaildisabled' => 'Бу сайт, электрон потча бла билдириуле иймейди.',
'accountcreated' => 'Тергеу джазыу (аккаунт) къуралды',
'accountcreatedtext' => '$1 къошулуучугъа тергеу джазыу (аккаунт) къуралды.',
'createaccount-title' => '{{SITENAME}}: тергеу джазыу (аккаунт) къурау',
'createaccount-text' => 'Ким эсе да, электрон почтагъызны адресин джазыб  {{SITENAME}} ($4) проектде «$3» пароль бла «$2» тергеу джазыу (аккаунт) къурагъанды. Сиз кириб паролну тюрлендирсегиз тыйыншлыды.

Тергеу джазыуну (аккаунтну) халат бла къурагъан эсегиз, игнор этигиз да къоюгъуз бу билдириуню.',
'usernamehasherror' => 'Къошулуучуну атында «#» символ болургъа джарамайда.',
'login-throttled' => 'Сиз асыры кёб кере кирирге кюрешгенсиз.
Джангыдан кёргюнчю бираз заман ётдюрюгюз.',
'login-abort-generic' => 'Системагъа кириу джетишимсиз болду',
'loginlanguagelabel' => 'Тил: $1',
'suspicious-userlogout' => 'Терс браузер неда кэш этиучу прокси берген соруугъа ушагъаны ючюн, Сизни чыгъаргъа сорууугъуз алынмагъанды.',

# Email sending
'php-mail-error-unknown' => "PHP's mail() функцияда белгили болмагъан халат",
'user-mail-no-addy' => 'Бир e-mail адрес болмагъанлай e-mail иерге кюрешди',
'user-mail-no-body' => 'Бош неда магъанасыз къысха джазыу бла билдириу иерге изледи.',

# Change password dialog
'resetpass' => 'Паролну тюрлендириу',
'resetpass_announce' => 'Сиз, электрон почта бла ийилген, болджаллы пароль бла киргенсиз. Системагъа кириуню тамамларча, джангы пароль къурагъыз.',
'resetpass_header' => 'Тергеу джазыуну (аккаунтну) паролун тюрлендириу',
'oldpassword' => 'Эски пароль:',
'newpassword' => 'Джангы пароль:',
'retypenew' => 'Джангы паролну къайтарыгъыз:',
'resetpass_submit' => 'Паролну бегит эм кир',
'resetpass_success' => 'Сизни паролюгъуз тыйыншлы тюрлендирилди! Системагъа кириу барады…',
'resetpass_forbidden' => 'Пароль тюрленирге болмайды',
'resetpass-no-info' => 'Бу бетни кёрюр ючюн сиз системагъа тергеу джазыуугъуз (аккаунтугъуз) бла кирирге керексиз.',
'resetpass-submit-loggedin' => 'Паролну тюрлендир',
'resetpass-submit-cancel' => 'Ызына алыу',
'resetpass-wrong-oldpass' => 'Терс пароль.
Сиз энди паролну тюрлендирген неда джангы болджаллы пароль соргъан болурсуз.',
'resetpass-temp-password' => 'Болджаллы пароль:',
'resetpass-abort-generic' => 'Пароль тюрлендириуню кенгертиу тыйды.',

# Special:PasswordReset
'passwordreset' => 'Паролну джибериу',
'passwordreset-text-one' => 'Паролугъуз джиберилир ючюн бу форманы толтуругъуз.',
'passwordreset-text-many' => '{{PLURAL:$1|Пароль ийилир ючюн билгилени бир бёлюмюн джазыгъыз.}}',
'passwordreset-legend' => 'Паролну атыу',
'passwordreset-disabled' => 'Бу викиде паролла атыу амал джукъланыбды.',
'passwordreset-emaildisabled' => 'Бу викиде электрон почтаны функциялары джукъланыбдыла.',
'passwordreset-username' => 'Къошулуучуну аты:',
'passwordreset-domain' => 'Домен:',
'passwordreset-capture' => 'Джазылгъан билдириуню эсебине къара?',
'passwordreset-capture-help' => 'Бу белгини салсагъыз, къошулуучугъа ийилген болджаллы пароль бла билдириу сизге кёргюзюллюкдю.',
'passwordreset-email' => 'Электрон почтаны адреси:',
'passwordreset-emailtitle' => '{{SITENAME}} сайтдагъы тергеу джазыуну юсюнден билгиле',
'passwordreset-emailelement' => 'Къошулуучуну аты: $1
Болджаллы пароль: $2',
'passwordreset-emailsent' => 'Пароль бла e-mail ийилди.',
'passwordreset-emailsent-capture' => 'Ийилген пароль эсгертиу e-mail тюбюрекде берилибди.',
'passwordreset-emailerror-capture' => 'Пароль эсгертиу e-mail генерация этилди (тюбюрекде берилибди), аны {{GENDER:$2|къошулуучугъа}} ашырыу джетишимсиз болду, чурум: $1',

# Special:ChangeEmail
'changeemail' => 'Электрон почтаны адресин ауушдур',
'changeemail-header' => 'Электрон почтаны адресин ауушдуруу',
'changeemail-text' => 'Сизни e-mail адресигизни тюрлендирир ючюн бу форманы толтуругъуз. Тюрлениуню бегитир ючюн паролну джазаргъа керек боллукъду.',
'changeemail-no-info' => 'Бу бетни кёрюр ючюн сиз системагъа тергеу джазыуугъуз (аккаунтугъуз) бла кирирге керексиз.',
'changeemail-oldemail' => 'Почтаны бусагъатдагъы адреси:',
'changeemail-newemail' => 'Электрон почтаны джангы адреси:',
'changeemail-none' => '(джокъ)',
'changeemail-password' => '«{{SITENAME}}» проектде паролугъуз:',
'changeemail-submit' => 'Адресни тюрлендир',
'changeemail-cancel' => 'Ызына алыу',

# Edit page toolbar
'bold_sample' => 'Къалын джазыу',
'bold_tip' => 'Къалын джазыу',
'italic_sample' => 'Курсив джазыу',
'italic_tip' => 'Курсив джазыу',
'link_sample' => 'Джибериуню башлыгъы',
'link_tip' => 'Ич джибериу',
'extlink_sample' => 'http://www.example.com линкни ачыкълауу',
'extlink_tip' => 'Тыш джибериу (http:// префиксни унутмагъыз)',
'headline_sample' => 'Башлыкъны тексти',
'headline_tip' => '2-чи дараджалы башлыкъ',
'nowiki_sample' => 'Формат этилинмеген текстни бери салыгъыз',
'nowiki_tip' => 'Вики-формат этиуню игнор эт',
'image_tip' => 'Эндирилген файл',
'media_tip' => 'Медиа-файлгъа джибериу',
'sig_tip' => 'Къол салыуугъуз эмда заман',
'hr_tip' => 'Горизонтал сыз (кёб хайырландырмагъыз)',

# Edit pages
'summary' => 'Тюрлениулени къысха ачыкълау:',
'subject' => 'Тема/башлыкъ:',
'minoredit' => 'Бу гитче тюрлениудю',
'watchthis' => 'Бу бетни кёздеги тизмеме къош',
'savearticle' => 'Бетни сакъла',
'preview' => 'Ал къарау',
'showpreview' => 'Ал къарау',
'showlivepreview' => 'Терк ал къарау',
'showdiff' => 'Къошулгъан тюрлениуле',
'anoneditwarning' => "'''Эс бёлюгюз''': Сиз системагъа кирмегенсиз. Сизни IP-адресигиз бу бетни тюрлениу тарихине джазыллыкъды.",
'anonpreviewwarning' => "''Сиз тергеу джазыуугъуз бла кирмегенсиз. Бетде тюрлениулени сакълатсагъыз, бетни тюрлениу тарихине IP-адресигиз джазыллыкъды.''",
'missingsummary' => "'''Эс бёлюгюз.'''  Тюрлениулеге къысха ачыкълау джазмагъансыз.
Сиз «Бетни сакъла» дегеннге энтда бассагъыз, тюрлениуле комментарийлесиз сакъланныкъдыла.",
'missingcommenttext' => 'Тюбю бла ачыкълау джазыгъыз.',
'missingcommentheader' => "'''Эс бёлюгюз:''' Сиз ачыкълаугъа тема/башлыкъ джазмагъансыз.
«{{int:savearticle}}» тиекден джангыдан бассагъыз, тюрлендириулеригиз башлыкъсыз сакъланныкъдыла.",
'summary-preview' => 'Суратлауу былай боллукъду:',
'subject-preview' => 'Башлыкъны ал къарау:',
'blockedtitle' => 'Къошулуучу блок этилиниб турады',
'blockedtext' => "'''Сизни тергеу джазыуугъуз (аккаунтугъуз) неда IP-адресигиз блокга салыннганды.'''

Блокга салгъан администратор: $1.
Чертилген чурум: ''«$2»''.

* Блокну башланнганы: $8
* Блокну бошалыуу: $6
* Блокга салыннган: $7

Сиз $1 къошулуучугъа неда башха [[{{MediaWiki:Grouppage-sysop}}|администраторгъа]] письмо джиберирге боллукъсуз, блокну сюзер ючюн.
Сиз регистрацияны ётюб электрон почтагъызны адресин [[Special:Preferences|энчи джарашдырыулада]] бегитмеген эсегиз эмда блок бла письмола джиберирге къоюлмай эсе, администраторгъа письмо джибераллыкъ тюйюлсюз.
Сизни IP-адресигиз — $3, блокну идентификатору — #$5.
Бу информацияны ажымсыз чертигиз билдириулеригизде.",
'autoblockedtext' => "Сизни IP-адресигиз автомат блокга салыннганды, алгъа къайсы эседа бир блокга салыннган къошулуучу хайырланнган ючюн. Аны блокга салгъан  $1 администратор чертген чурум:

:''«$2»''.

* Блокну башланнганы: $8
* Блокну бошалыуу: $6
* Блокга салыннган: $7

Сиз $1 къошулуучугъа неда башха [[{{MediaWiki:Grouppage-sysop}}|администраторгъа]] письмо джиберирге боллукъсуз, блокну сюзер ючюн.
Сиз регистрацияны ётюб электрон почтагъызны адресин [[Special:Preferences|энчи джарашдырыулада]] бегитмеген эсегиз эмда блок бла письмола джиберирге къоюлмай эсе, администраторгъа письмо джибераллыкъ тюйюлсюз.
Сизни IP-адресигиз — $3, блокну идентификатору — #$5.
Бу информацияны ажымсыз чертигиз билдириулеригизде.",
'blockednoreason' => 'Чурум белгиленмегенди',
'whitelistedittext' => 'Бетни тюрлендирир ючюн $1 тыйыншлысыз.',
'confirmedittext' => 'Бетни тюрледирирни аллы бла сиз электрон почтагъызны адресин бегитирге керексиз.
[[Special:Preferences|Джарашдырыуланы бетинде]] джазыгъыз эм бегитигиз электрон почтагъызны адресин.',
'nosuchsectiontitle' => 'Бёлюм джокъду',
'nosuchsectiontext' => 'Сиз болмагъан бетни тюрлендирирге кюрешесиз.
Бу бетге къарагъан заманыгъызда, кетерилирге неда башха джерге кёчюрюлюрге боллукъду.',
'loginreqtitle' => 'Кирирге керекди',
'loginreqlink' => 'Кириу',
'loginreqpagetext' => 'Сиз башха бетлеге къарар ючюн $1 керексиз.',
'accmailtitle' => 'Пароль джиберилди',
'accmailtext' => "[[User talk:$1|$1]] къошулуучугъа къуралгъан пароль $2 адресине джиберилгенди.

Регистрацияны тындыргъындан сора,  ''[[Special:ChangePassword|паролну тюрлендирирге]]'' боллукъсуз.",
'newarticle' => '(Джангы)',
'newarticletext' => "Сиз джибериу бла алкъын къуралмагъан бетге кёчгенсиз.
Аны къурар ючюн тюбюндеги терезеде статьяны текстин басмалагъыз (толуракъ [[{{MediaWiki:Helppage}}|ангылатыу бетде]] къарагъыз).
Джангылыб кирген эсегиз а уа бери, браузеригизни '''артха''' тиегин басыгъызда къоюгъуз.",
'anontalkpagetext' => "----''Бу сюзюу бет, тергеу джазыу (аккаунт) къурамагъан неда аны бла хайырланмагъан аноним къошулуучунукъуду.
Аны ючюн идентификация этерге IP-адрес хайырланады.
Талай башха къошулуучуланы да болургъа боллукъ быллай адреслери.
Сиз аноним къошулуучу эсегиз эмда сизге джиберилмеген билдириуле алама деб суна эсегиз, ангылашылмаула болмаз ючюн [[Special:UserLogin|тергеу джазыу (аккаунт) къурагъыз]] неда [[Special:UserLogin/signup|системагъа киригиз]].''",
'noarticletext' => "Бусагъатда бу бетде текст джокъду.
Сиз [[Special:Search/{{PAGENAME}}|бу атны башха статьялада]] излерге , <span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} журналлагъа къараргъа], неда '''[{{fullurl:{{FULLPAGENAME}}|action=edit}} быллай атлы джангы бет къураргъа боллукъсуз]'''</span>.",
'noarticletext-nopermission' => 'Бусагъатда бу бетде текст джокъду.
Сиз [[Special:Search/{{PAGENAME}}|бу атны таныгъан]] башха статьяланы, неда <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} журналлада джазылгъанланы]</span> табаргъа боллукъсуз, алай а бу бетни къураргъа эркинлигигиз джокъду.',
'userpage-userdoesnotexist' => '«<nowiki>$1</nowiki>» тергеу джазыу (аккаунт) джокъду. Къураргъа/тюрлендирирге излеймисиз бу бетни?',
'userpage-userdoesnotexist-view' => '«$1» тергеу джазыу (аккаунт) джокъду.',
'blocked-notice-logextract' => 'Бу къошулуучу бусагъатда блокланыб турады.
Тюбюнде блокланыуланы журналындан ахыр джазыу бериледи:',
'clearyourcache' => "'''Эслегиз.''' Бетде сакъланнгандан сора тюрлендириуле кёрюнюрча браузеригизни кэшин ариулатыргъа керек болургъа боллукъду.
* '''Firefox / Safari''': ''Shift'' тиекни басыб тургъанлай адырланы панелинде ''Джангырт'' тиекни басыгъыз, неда ''Ctrl-F5'' басыгъыз, неда ''Ctrl-R'' (Mac-да — ''⌘-R'')
* '''Google Chrome:''' ''Ctrl-Shift-R'' басыгъыз (Mac-да — ''⌘-Shift-R'')
* '''Internet Explorer:''' ''Ctrl'' тиекни басыб тургъанлай ''Джангырт'' тиекни басыгъыз, неда ''Ctrl-F5'' басыгъыз
* '''Opera:''' ''Адырла → Джарашдырыула'' менюда кэшни ариулауну сайлагъыз",
'usercssyoucanpreview' => "'''Юретиу.''' «{{int:showpreview}}» тиекни басыгъыз, джангы CSS-файлны сакълатырыгъызны аллы бла тинтиб кёрюрча.",
'userjsyoucanpreview' => "'''Юретиу.''' «{{int:showpreview}}» тиекни басыгъыз, джангы JS-файлны сакълатырыгъызны аллы бла тинтиб кёрюрча.",
'usercsspreview' => "'''Эсде тутугъуз, бу къуру ал къарауду, CSS файлыгъыз алкъын сакъланмагъанды!'''",
'userjspreview' => "'''Эсде тутугъуз, бу къуру ал къарауду, javascript файлыгъыз алкъын сакъланмагъанды!'''",
'sitecsspreview' => "'''Эслегиз, бу CSS-ни къуру ал къараууду.'''
 '''Ол алкъын сакъланмагъанды!'''",
'sitejspreview' => "'''Эслегиз, бу JavaScript-кодну къуру ал къараууду.'''
 '''Ол алкъын сакъланмагъанды!'''",
'userinvalidcssjstitle' => "'''Эс бёлюгюз:''' «$1» атлы тема джокъду. Эсде тутугъуз, .css эм .js бетле атлары ажымсыз къуру гитче харифледен болургъа керекди, сёз ючюн: {{ns:user}}:Foo/vector.css, былай  {{ns:user}}:Foo/Vector.css тюйюл!",
'updated' => '(Джангыртылды)',
'note' => "'''Белги:'''",
'previewnote' => "'''Бу къуру ал къарауду.'''
Сиз этген тюрлениуле алкъын сакъланмагъандыла!",
'continue-editing' => 'Тюрлендириулени бардырыгъыз',
'previewconflict' => 'Бу ал къарау, башындагъы тюрлендириу терезеде текстни сакъланнганча кёргюзеди.',
'session_fail_preview' => "'''Джарсыугъа, сессияны идентификаторуну тас этгени себебли, сервер сизни тюрлендириуюгюзни сакълаталмагъанды.
Энтдада кёрюгюз.
Бу хата къайтарылынса, [[Special:UserLogout|чыгъыгъыз]] да джангыдан кириб кёрюгюз.'''",
'session_fail_preview_html' => "'''Джарсыугъа, сессияны билгилерин тас этгени себебли, сервер сизни тюрлендириуюгюзни сакълаталмагъанды.'''
''{{SITENAME}} таза HTML-ны хайырландырыргъы къойгъаны себебли, ал къарау,  JavaScript-атакалагъа каршчылыкъ этген халда, джабыкъды''
'''Сиз ашхы ниет бла тюрлендирирге излеген эсегиз, энтда кёрюгюз.'''
Джангыдан тюрлендириуюгюз ётмей эсе, [[Special:UserLogout|чыгъыгъыз]] да джангыдан кириб кёрюгюз.'''",
'token_suffix_mismatch' => "'''Сизни тюрлендириуюгюз къабыл этилинмегенди.
Себеби: браузеригиз редактор терезеде пунктуация белгилени терс кёргюзеди, аны ючюн статьяны тексти бузулургъа боллукъду.
Бу халатлары болгъан аноним веб-проксилени хайырландырылгъанлары ючюн болургъа боллукъду'''",
'editing' => '«$1» бетни тюрлендириу',
'creating' => '«$1» бетни къурау',
'editingsection' => '«$1» бетде бёлюмню тюрлендириу',
'editingcomment' => '«$1» бетни тюрлендириу (джангы бёлюм)',
'editconflict' => 'Тюрлендириу конфликт: $1',
'explainconflict' => 'Сиз тюрлендире тургъан сагъатда, ким эседа бы бетни тюрлендирген этгенди.
Баш терезеде сиз бусагъатдагъы текстни кёресиз.
Тюбюнде терезеде сизни варинтды.
Сиз этген тюрлениулени тюб терезеден баш терезеге кёчюрюгюз.
«{{int:savearticle}}» басылса баш терезеде текст сакъланныкъды.',
'yourtext' => 'Сизни текстигиз',
'storedversion' => 'Сакъланнган версия',
'nonunicodebrowser' => "'''Эсгертиу: сизни браузеригиз Юникод кодировканы танымайдв.'''
Бетлени тюрлендирген сагъатда ASCII болмагъан символла оналтылыкъ кодларына алышдырыллыкъдыла.",
'editingold' => "'''Эсгертиу: сиз бу бетни эскирген версиясын тюрлендиресиз.'''
Сакълатхан тиекге басхан сагъатда, джангы версиялада этилген тюрлендириуле тас боллукъдула.",
'yourdiff' => 'Айырмала',
'copyrightwarning' => "Статьяны текстинде бютеу къошуула, тюрлендириуле $2 лицензияны тамалында (къарагъыз: $1) чыкъгъаннга саналгъанына эс бёлюгюз!
Сизни текстлеригизни хар излегеннге эркин джайыллыгъын эмда тюрлендириллигин излеймей эсегиз, аланы бери салмагъыз.<br />
Дагъыда сиз, этилген тюрлениулени автору болгъаныгъызгъа, неда аланы эркин джайылыргъа эмда тюрлендирирге эркинлик берген джерледен алыннганына шагъатлыкъ этесиз.<br />
'''АВТОР ХАКЪ БЛА ДЖАКЪЛАННГАН МАТЕРИАЛЛАНЫ ЭРКИНЛИКСИЗ САЛМАГЪЫЗ!'''",
'copyrightwarning2' => "{{SITENAME}} сайтха бютеу къошханыгъызны башха къошулуучула тюрлендирирге неда кетерирге боллукъдула.
Башхала сизни текстлеригизни тюрлендиргенлерин излемей эсегиз, былайгъа салмагъыз.<br />
Сиз дагъыда этген къошакъларыгъызны автору болгъаныгъызны неда информацияны чыкъгъан джери эркин джаяргъа эм тюрлендирирге къойгъанын аны бегитесиз (къарагъыз: $1).
'''ЭРКИНЛИКСИЗ АВТОР ХАКЪ БЛА ДЖАКЪЛАННГАН МАТЕРИАЛЛА САЛМАГЪЫЗ БЫЛАЙГЪА!'''",
'longpageerror' => "'''ХАЛАТ: сиз сакълатхан текстни  {{PLURAL:$1|бир килобайт|$1 килобайт}} ёлчеми барды, ол {{PLURAL:$2|бир килобайт|$2 килобайт}} чекден кёбдю. Бет сакъланныкъ тюлдю.'''",
'readonlywarning' => "'''Эсгертиу. Кереклилерин тындырыу ишле себебли, билгилени базасы бусагъатда киритленибди. Ол себебден тюрлениулеригизни бусагъатда сакълаталлыкъ тюлсюз.''' Джазгъанларыгъызны башха бир текст файлда сакълаб, кечирек къошаргъа боллукъсуз. Киритлеген администратор бу билдириуню къойгъанды: $1",
'protectedpagewarning' => "'''Эсгертиу: бу бет тюрлениуледен джакъланыбды, къуру администарторла тюрлендирелликдиле'''
Тюбюнде, билги ючюн  журналдагъы ахыр джазыу берилгенди:",
'semiprotectedpagewarning' => "'''Эсгертиу:''' бу бетни джангыз регистрация этген къошулуучула тюрлендирелликдиле.
Тюбюнде, билги ючюн журналны ахыр джазыуу берилгенди:",
'cascadeprotectedwarning' => "'''Эсгертиу:''' Бу бетни къуру Администраторла къауумдагъы къошулуучула тюрлендирирге боллукъду. Каскад джакълау {{PLURAL:$1|бетде|бетде}} хайырланнганы себебли:",
'titleprotectedwarning' => "'''Эсгертиу: Бу бет джакъланыбды. Джангыз [[Special:ListGroupRights|энчи хакълары]] болгъанла текстни салыргъа боллукъдула.'''
Тюбюнде, билги ючюн журналдан ахыр джазыу берилгенди:",
'templatesused' => 'Бу бетде хайырланылгъан {{PLURAL:$1|шаблон|шаблонла}}:',
'templatesusedpreview' => 'Ал къаралыучу бетде хайырланнган {{PLURAL:$1|шаблон|шаблонла}}:',
'templatesusedsection' => 'Бу бетде хайырланнган {{PLURAL:$1|шаблон|шаблонла}}:',
'template-protected' => '(джакъланнган)',
'template-semiprotected' => '(джарты джакъланыбды)',
'hiddencategories' => 'Бу бет $1 {{PLURAL:$1|1 джашырылыннган категориягъа|$1 джашырылыннган категориялагъа}} киреди:',
'edittools' => '<!-- Былайда орналгъан текст тюрлениу эмда джюклениу формада кёрюннюкдю. -->',
'nocreatetext' => 'Бу сайтда джангы бет къуралыу тыйылгъанды.
Ызына къайтыб болгъан бетни тюрлендирирге боллукъсуз, [[Special:UserLogin|системагъа кесигизни танытыргъа неда джангы тергеу джазыу (аккаунт) къураргъа]].',
'nocreate-loggedin' => 'Джангы бетле къураргъа эркинлигигиз джокъду.',
'sectioneditnotsupported-title' => 'Бёлюмлени тюрлендирир мадар джокъду.',
'sectioneditnotsupported-text' => 'Бу бетде бёлюмлени тюрлендирирге болмайды.',
'permissionserrors' => 'Эркинликлени халатлары',
'permissionserrorstext' => 'Былайдагъы {{PLURAL:$1|чурум|чурумла}} ючюн, буну этерге хакъыгъыз джокъду:',
'permissionserrorstext-withaction' => "«'''$2'''» этерге амалыгъыз джокъду. {{PLURAL:$1|Чуруму|Чурумлары}}:",
'recreate-moveddeleted-warn' => "'''Эс бёлюгюз! Сиз алгъын кетерилген бетни джангыдан къураргъа излейсиз'''

Бетни джангыдан къураргъа кереклигине сагъыш этигиз.
Бетни кетериу бла атын тюрлендирилиуню журналы тюбюнде кёргюзюлгенди.",
'moveddeleted-notice' => 'Бу бет кетерилгенди.
Хапарлашдырыу ючюн тюбюрек кетериуле бла ат тюрлендириулени журналы берилгенди.',
'log-fulllog' => 'Журналгъа толулай къара',
'edit-hook-aborted' => 'Тюрлениу тохтатыучу процедура бла тыйылда.
Ачыкълау берилмегенди.',
'edit-gone-missing' => 'Бет джангыртылмайды.
Кетерилген болур.',
'edit-conflict' => 'Тюрлендириулени конфликти.',
'edit-no-change' => 'Текстде тюрлениуле эсленмегени ючюн, сизни тюрлендириуюгюз къабыл этилмеди.',
'postedit-confirmation' => 'Тюрлендириуюгюз сакъланды.',
'edit-already-exists' => 'Джангы бет къураргъа боллукъ тюлдю.
Алайсызда барды бу атлы бет.',
'defaultmessagetext' => 'Тынгылау бла текст',
'content-failed-to-parse' => '$2 контент $1 типге келишмейди: $3',
'invalid-content-data' => 'Джаламагъан билгиле',
'content-not-allowed-here' => '[[$2]] бетни ичинде "$1" контент джарамайды',
'editwarning-warning' => 'Башха бетге кёчсегиз, этген тюрлениулеригиз тас болургъа боллукъдула.
Системада регистрацияны ётген эсегиз, бу билдириуню джарашдырыуларыгъызны «Тюрлендириу» деген бёлюмюнде джукълатыргъа боллукъсуз.',

# Content models
'content-model-wikitext' => 'вики-текст',
'content-model-text' => 'тюз текст',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Эсгериу:''' Бу бетде асыры кёб къайнакълы функция барды.
Бу $2 чакъырыудан аз болургъа керекди, бусагъатда {{PLURAL:$1|1 чакъырыу барды|$1 чакъырыу барды}}.",
'expensive-parserfunction-category' => 'Асыры кёб къайнакълы функциялары болгъан бетле',
'post-expand-template-inclusion-warning' => "'''Эсгериу:''' къошулгъан шаблонланы ёлчеми асыры уллуду.
Бир-бир шаблонла бетге къошуллукъ тюлдюле.",
'post-expand-template-inclusion-category' => 'Къошулгъан шаблонланы ёлчемлери асыры уллу болгъан бетле',
'post-expand-template-argument-warning' => "'''Эсгериу:''' Бу бетде, салыргъа асыры уллу ёлчеми болгъан, эм азы бла бир шаблонну аргументи барды.
Быллай аргументле къоюлгъандыла.",
'post-expand-template-argument-category' => 'Джарамагъан шаблон аргументлери болгъан бетле',
'parser-template-loop-warning' => 'Шаблон тюйюмчек табылгъанды: [[$1]]',
'parser-template-recursion-depth-warning' => 'Шаблонну рекурсиясыны теренлигини мардасындан тышына чыгъылды ($1)',
'language-converter-depth-warning' => 'Тилни тюрлетиуюню мардасы толду  ($1)',
'node-count-exceeded-category' => 'Тюйюмчеклени саны оздурулгъан бетле',
'node-count-exceeded-warning' => 'Бетде тюйюмчеклени саны оздурулгъанды',
'expansion-depth-exceeded-category' => 'Кериуню теренлиги оздурулгъан бетле',
'expansion-depth-exceeded-warning' => 'Бетде ичине салыныуну чеги оздурулгъанды',
'parser-unstrip-loop-warning' => 'Джабылмагъан pre табылды',
'parser-unstrip-recursion-limit' => 'Рекурсияны чеги ($1) оздурулду',
'converter-manual-rule-error' => 'Тилни башха тюрлю этиуню къол джоругъунда халат',

# "Undo" feature
'undo-success' => 'Бу тюрлениу ызына алыныргъа боллукъду. Тилейбиз, версияланы тенглешдириуюн осмакълагъыз, керти да бу тюрлендириулени этерге излегенигизден ишексиз болугъуз, сора, тюрлениуле къабыл этилир ючюн, «Бетни къош» деген тиекден басыгъыз.',
'undo-failure' => 'Бир-бирине келишмегени себебли, тюрлениу ызына алынамады.',
'undo-norev' => 'Болмагъаны неда кетерилгени ючюн, тюрлениу ызына алыналлыкъ тюлдю.',
'undo-summary' => '$1 тюрлениу [[Special:Contributions/$2|$2]] ([[User talk:$2|сюзюу]]) ызына алынды.',

# Account creation failure
'cantcreateaccounttitle' => 'Акууант къурар мадар джокъду',
'cantcreateaccount-text' => "Бу IP-адресден ('''$1''') хайырланыучу къошулуу, [[User:$3|$3]] джанындан тыйылгъанды.


$3 джанындан берилген сылтау: ''$2''",

# History pages
'viewpagelogs' => 'Бу бетни журналларына къара',
'nohistory' => 'Бу бетни тюрлениулерини тарихи джокъду.',
'currentrev' => 'Бусагъатдагъы версия',
'currentrev-asof' => 'Бусагъатдагъы версия, $1',
'revisionasof' => '$1 версиясы',
'revision-info' => '$2 джанындан этилген $1 версия',
'previousrevision' => '← Алдагъы',
'nextrevision' => 'Эндиги →',
'currentrevisionlink' => 'Бусагъатдагъы версия',
'cur' => 'бусагъатдагъы',
'next' => 'эндиги',
'last' => 'алдагъы',
'page_first' => 'биринчи',
'page_last' => 'ахыргъы',
'histlegend' => "Ангылатыула: '''({{int:cur}})''' — бусагъатдагъы версиядан башхалыгъы, '''({{int:last}})''' — алдагъы версиядан башхалыгъы; '''({{int:last}})''' — гитче тюрлениу",
'history-fieldset-title' => 'Тарихине къара',
'history-show-deleted' => 'Къуру кетерилгенле',
'histfirst' => 'Эм эски',
'histlast' => 'Эм джангы',
'historysize' => '($1 {{PLURAL:$1|байт|байт}})',
'historyempty' => '(бош)',

# Revision feed
'history-feed-title' => 'Тюрлениулени тарихи',
'history-feed-description' => 'Викиде бу бетни трюрлениулерини тарихи',
'history-feed-item-nocomment' => '$1, $2',
'history-feed-empty' => 'Сиз излеген бет табылмагъанды.
Бет викиден кетерилирге неда аты тюрленирге болур.
Темасы аннга ушагъан бетлени табар ючюн [[Special:Search|викиде излеб]] кёрюгюз.',

# Revision deletion
'rev-deleted-comment' => '(тюрлендириуню суратлауу кетерилгенди)',
'rev-deleted-user' => '(къошулуучуну аты кетерилгенди)',
'rev-deleted-event' => '(джазыу кетерилгенди)',
'rev-deleted-user-contribs' => '[къошулуучуну аты неда IP-адреси кетерилгенди — тюрлендириу къошакъны бетинде кёргюзюлмейди]',
'rev-deleted-text-permission' => "Бетни бу версиясы '''кетерилгенди'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Кетериулени журналында] табыб къояргъа боллукъсуз.",
'rev-deleted-text-unhide' => "Бетни бу версиясы '''кетерилгенди'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Кетериулени журналында] чурумла ангылатылгъандыла.
Сюйсегиз [$1 бу версияны кёрюрге боллукъсуз].",
'rev-suppressed-text-unhide' => "Бетни бу версиясы '''джашырылыбды'''.
[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Джашырылыуланы журналында] чурумла берилгендиле.
Сюйсегиз [$1 версияны кёрюрге боллукъсуз].",
'rev-deleted-text-view' => "Бетни бу версиясы '''кетерилибди'''.
Сюйсегиз къараргъа боллукъсуз. Ангылатыула [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} кетериулени журналында] бардыла.",
'rev-suppressed-text-view' => "Бетни бу версиясы '''джашырылыбды'''.
Сюйсегиз къараргъа боллукъсуз. Ангылатыула [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} кетериулени журналында] бардыла.",
'rev-deleted-no-diff' => "Бетни версияларыны бири '''кетерилгени''' ючюн, тенглешдиреллик тюлсюз.
Ангылатыула [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} кетериулени журналында] болургъа боллукъдула.",
'rev-suppressed-no-diff' => "Бетни бу версияларын тенглешдиреллик тюлсюз, аладан бири '''кетерилиб''' турады.",
'rev-deleted-unhide-diff' => "Бетни версияларындан бири '''кетерилибди'''.
Ангылатыула [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} кетериулени журналында] бардыла.
Сюйсегиз [$1 версияланы башхалыкъларына къараргъа боллукъсуз].",
'rev-suppressed-unhide-diff' => "Бетни версияларындан бири ''''''джашырылыбды''''''.
Ангылатыула [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} кетериулени журналында] бардыла.
Сюйсегиз [$1 версияланы башхалыкъларына къараргъа боллукъсуз].",
'rev-deleted-diff-view' => "Бу тенглешдириуню версияларыны бири '''кетерилибди'''.
Сюйсегиз бу тенглештириуге къараргъа боллукъсуз. Ангылатыула [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} кетериулени журналында] бардыла.",
'rev-suppressed-diff-view' => "Бу тенглешдириуню версияларыны бири '''джашырылыбды'''.
Сюйсегиз бу тенглештириуге къараргъа боллукъсуз. Ангылатыула [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} кетериулени журналында] бардыла.",
'rev-delundel' => 'кёргюзюу/джашырыу',
'rev-showdeleted' => 'кёргюз',
'revisiondelete' => 'Бетни версияларын кетер/къайтар',
'revdelete-nooldid-title' => 'Нюзюрлю версиясы берилмегенди',
'revdelete-nooldid-text' => 'Бу функцияны тындырыр ючюн нюзюрленнген версиягъыз (неда версияларыгъыз) джокъду. Теджеген версиягъыз джараулу тюлдю, неда джараулу версияны джарырыгъа излейсиз.',
'revdelete-nologtype-title' => 'Журналны типи белгиленмегенди',
'revdelete-nologtype-text' => 'Иш тындырыргъа керек болгъан журналны типин белгилемегенсиз.',
'revdelete-nologid-title' => 'Журналда джазыу халатлыды',
'revdelete-nologid-text' => 'Бу функцияны тындырыр ючюн чырт бир журнал типи белгиленмегенди, неда белгиленген журнал тип джараусузду.',
'revdelete-no-file' => 'Белгиленнген файл джокъду.',
'revdelete-show-file-confirm' => '«<nowiki>$1</nowiki>» файлны $2 $3 датада кетерилген версиясына къараргъа излегенигизге ишексизмисиз?',
'revdelete-show-file-submit' => 'Хоу',
'revdelete-selected' => "'''[[:$1]] бетни {{PLURAL:$2|Сайланнган версия|сайланнган версиялары}}:'''",
'logdelete-selected' => "'''Журналны {{PLURAL:$1|Сайланнган джазыу|сайланнган джазыулары}}:'''",
'revdelete-text' => "'''Кетерилге версияла бла болуула алкъын бетни тарихи бла журналлада кёрюннюкдю, алай а бир кесеги тюз кириучюледен джашырыллыкъды.'''
{{SITENAME}} сайтдагъы башха администраторла джашырылгъан ичге кирирге эмда аны ызына салыргъа боллукъдула.",
'revdelete-confirm' => 'Тилейбиз, буну этерге излегенигизни, эсеблерин ангылагъаныгъызны, эм буну [[{{MediaWiki:Policy-url}}|джорукълагъа]] кёре этгенигизни билдиригиз.',
'revdelete-suppress-text' => "Джашырыу '''джангыз''' бу турумлада этиледи:
* Келишмеген энчи информация
*: ''юй адресле эм телефон номерле, паспорт номер эмда башхала''",
'revdelete-legend' => 'Чеклеуле сал:',
'revdelete-hide-text' => 'Бетни бу версиясыны текстин джашыр',
'revdelete-hide-image' => 'Файлны ичин джашыр',
'revdelete-hide-name' => 'Ишлеу бла аны объектин джашыр',
'revdelete-hide-comment' => 'Тюрлениулени ангылатыуларын джашыр',
'revdelete-hide-user' => 'Авторну атын/IP адресин джашыр',
'revdelete-hide-restricted' => 'Администраторладан да джашыр билгилени',
'revdelete-radio-same' => '(тюрлендирмей къой)',
'revdelete-radio-set' => 'Хоу',
'revdelete-radio-unset' => 'Огъай',
'revdelete-suppress' => 'Администраторладан да джашыра тур билгилени',
'revdelete-unsuppress' => 'Ызына къайтарылгъан версияладан тыйгъычланы кетер',
'revdelete-log' => 'Чурум:',
'revdelete-submit' => '{{PLURAL:$1|Сайланнган версия|Сайланнган версиялада}} хайырлан',
'revdelete-success' => "'''Версияны кёрюнюую джетишимли тюрлендирилгенди'''",
'revdelete-failure' => "'''Версияны кёрюнюую тюрленеллик тюлдю'''
$1",
'logdelete-success' => "'''Болууланы кёрюнюую тюрленнгенди.'''",
'logdelete-failure' => "'''Журналны кёрюнюую салыналмады:'''
$1",
'revdel-restore' => 'кёрюнюуню тюрлендир',
'revdel-restore-deleted' => 'кетерилген версияла',
'revdel-restore-visible' => 'кёрюннген версияла',
'pagehist' => 'Бетни тарихи',
'deletedhist' => 'Кетериулени тарихи',
'revdelete-hide-current' => '$2 $1 даталада джазыуну джашырыууну халаты: бу бусагъатдагъы версиясыды.
Джашырыламаз.',
'revdelete-show-no-access' => '$2 $1 замандагъы джазыуну ачыуда халат: бу джазыу «чеклендирилген» кибик белгиленнгенди.
Сизни аннга кирир эркинлигигиз джокъду.',
'revdelete-modify-no-access' => '$2 $1 замандагъы джазыуну тюрлендириуде халат: бу джазыу «чекленнген» деб белгиленнгенди.
Сизни аннга кирир эркинлигигиз джокъду.',
'revdelete-modify-missing' => '$1 ID-си болгъан джазыуну тюрлениуюню халаты барды, билгилени базасында джокъду!',
'revdelete-no-change' => "'''Эсгериу:''' $2 $1 замандагъы джазыу кёрюнюуню изленнген джарашыуларына алайсызда иеди.",
'revdelete-concurrent-change' => '$2 $1 замандагъы джазыуну хатасы барды: аны статусу сиз тюрлендирирге кюреше тургъан заманда, башха бири бла тюрледирилгенди.
Тилейбиз, журналланы осмакълагъыз.',
'revdelete-only-restricted' => '$2, $1 Джазыуланы, джашырыуну башха джарашдырыуларындан бирин сайламай, администраторладан джашыраллыкъ тюлсюз.',
'revdelete-reason-dropdown' => '* Кетериуню стандарт чурумлары
** Автор хакъланы бузуу
** Орунсуз энчи билгиле
** Джарамагъан къошулуучу ат
** Адамны юсюнден джалгъан билгиле',
'revdelete-otherreason' => 'Башха/къошакъ чурум:',
'revdelete-reasonotherlist' => 'Башха чурум',
'revdelete-edit-reasonlist' => 'Чурумланы тизмесин тюрлендир',
'revdelete-offender' => 'Бетни версиясыны автору:',

# Suppression log
'suppressionlog' => 'Джашырыуланы журналы',
'suppressionlogtext' => 'Тюбюндеги, администраторладан джашырылгъан материаллада болгъан кетериуле бла блок этиулени тизмесиди.
[[Special:BlockList|Блок этиулени тизмесинде]] бусагъатдагъы блокланы табаргъа боллукъду.',

# History merging
'mergehistory' => 'Бетни тарихлерини бирлештириую.',
'mergehistory-header' => 'Бу бет, эки башха бетни тюрлендириулерини тарихин бирлешдирирге мадар береди.
Бу тюрлениуню бетни тарихине заран келтирмезине ишексиз болугъуз.',
'mergehistory-box' => 'Эки бетни тарихин бирлешдир',
'mergehistory-from' => 'Тамал бет:',
'mergehistory-into' => 'Нюзюр бет:',
'mergehistory-list' => 'Бирлешдирирге боллукъ тюрлениулени тарихи',
'mergehistory-merge' => '[[:$1]] версияла [[:$2]]-гъа бирлешдирилирге боллукъдула.
Джангыз белгиленнген заманда эмда аны аллында этилген версияланы бирлешдирир ючюн радио тиекни хайырланыгъыз.
Эсигизде болсун, навигация джибериулени хайырландырсагъыз, билгиле тас боллукъдула.',
'mergehistory-go' => 'Бирлешиннген тюрлендириулени кёргюз',
'mergehistory-submit' => 'Тюрлениулени бирлештир',
'mergehistory-empty' => 'Бирлешдирир ючюн тюрлениуле табылмагъандыла',
'mergehistory-success' => '[[:$1]] бетни $3 {{PLURAL:$3|тюрлендириую|тюрлендириую}} тыйыншлы [[:$2]] ичинде бирлешдирилди.',
'mergehistory-fail' => 'Бетлине тарихлери бирлешемеди, тилейбиз бетни эмда заманны параметрлерин джангыдан сынагъыз.',
'mergehistory-no-source' => '$1 тамал бет джокъду',
'mergehistory-no-destination' => '$1 нюзюр бет джокъду',
'mergehistory-invalid-source' => 'Къайнакъ бетни джараулу башлыгъы болургъа керекди.',
'mergehistory-invalid-destination' => 'Нюзюр бетни джараулу башлыгъы болургъа керекди.',
'mergehistory-autocomment' => '[[:$1]], [[:$2]] бетге бирлешдирилди',
'mergehistory-comment' => '[[:$1]] бла [[:$2]] бирлешдирилди: $3',
'mergehistory-same-destination' => 'Тамал эмда нюзюрдеги бетле бирча болургъа болмайды',
'mergehistory-reason' => 'Чурум:',

# Merge log
'mergelog' => 'Бирлешиулени журналы',
'pagemerge-logentry' => '[[$1]] бла [[$2]] бирлешдирилгенди ($3 дери версияла)',
'revertmerge' => 'Бёлюрге',
'mergelogpagetext' => 'Тюбюрек бетлени тарихлерини ахыр бирлешдириулери берилгенди.',

# Diffs
'history-title' => '$1 — тюрлениу тарихи',
'difference-title' => '$1 — версияларыны арасында башхалыкъла',
'difference-title-multipage' => '«$1» эм «$2» бетлени арасында башхалыкъла',
'difference-multipage' => '(Бетле арасында башхалыкъ)',
'lineno' => 'Тизгин $1:',
'compareselectedversions' => 'Сайланнган версияланы тенглешдириу',
'showhideselectedversions' => 'Сайланнган версияланы кёргюз/джашыр',
'editundo' => 'ызына алыу',
'diff-multi' => '({{PLURAL:$2|Бир къошулуучу|$2 къошулуучу}} этген {{PLURAL:$1|$1 аралыкъ тюрлениу|$1 аралыкъ тюрлениу}} кёргюзюлмегенди)',
'diff-multi-manyusers' => '($2 къошулуучудан кёб {{PLURAL:$2|Бир къошулуучу|къошулуучу}} этген {{PLURAL:$1|бир аралыкъ тюрлениу|$1 аралыкъ тюрлениу}} кёргюзюлмегенди)',
'difference-missing-revision' => 'Бу тенглешдириу ($1) ючюн {{PLURAL:$2|$2 версия}} {{PLURAL:$2|табылмады}}.


Бу, эскирген джибериу бла кетерилген бетни версияларын тенглешдириуге кёчген сагъатда кёбюсюне болады.
Толуракъ информация [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} кетериулени журналында] болургъа боллукъду.',

# Search results
'searchresults' => 'Излеуню эсеби',
'searchresults-title' => '«$1» ючюн излеуню эсеблери',
'searchresulttext' => 'Проектни бетлеринде излеуню юсюндет толу информация табарча [[{{MediaWiki:Helppage}}|{{int:help}}]] бетге киригиз.',
'searchsubtitle' => 'Изленнген «[[:$1]]» ([[Special:Prefixindex/$1|бу ат бла башланнган бетле]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|бу атха джибериу берген бетле]])',
'searchsubtitleinvalid' => '«$1» сордугъуз',
'toomanymatches' => 'Асыры кёб бирчалыкъ барды, джангыдан соруу джиберирге кюрешигиз',
'titlematches' => 'Бетлени атында бирчалыкъ барды',
'notitlematches' => 'Бетлени атларында бирчалыкълары джокъду',
'textmatches' => 'Бетлени текстлеринде бирчалыкъла барды',
'notextmatches' => 'Бетлени текстлеринде бирчалыкъ джокъду',
'prevn' => 'алдагъы {{PLURAL:$1|$1}}',
'nextn' => 'эндиги {{PLURAL:$1|$1}}',
'prevn-title' => 'Алдагъы $1 {{PLURAL:$1|эсеб|эсеб}}',
'nextn-title' => 'Артдагъы $1 {{PLURAL:$1|эсеб|эсеб}}',
'shown-title' => 'Бетде $1 {{PLURAL:$1|джазыуну}} кёргюз',
'viewprevnext' => 'Къара: ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Излеуню джарашдырыулары',
'searchmenu-exists' => "'''Бу викиде «[[:$1]]» бет барды'''",
'searchmenu-new' => "'''Бу вики-проектде «[[:$1]]» бетни къура!'''",
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Бу префикс бла бетни кёргюз]]',
'searchprofile-articles' => 'Баш бетле',
'searchprofile-project' => 'Болушлукъ эм проект бетле',
'searchprofile-images' => 'Мультимедия',
'searchprofile-everything' => 'Хар къайда',
'searchprofile-advanced' => 'Кенгерген',
'searchprofile-articles-tooltip' => '$1 ичинде изле',
'searchprofile-project-tooltip' => '$1 ичинде изле',
'searchprofile-images-tooltip' => 'Файлланы изле',
'searchprofile-everything-tooltip' => 'Бютеу бетледе изле (сюзюу бетледе да)',
'searchprofile-advanced-tooltip' => 'Энчи ат аланладада изле',
'search-result-size' => '$1 ({{PLURAL:$2|$2 сёз}})',
'search-result-category-size' => '{{PLURAL:$1|1 элемент|$1 элемент}} ({{PLURAL:$2|1 тюбкатегория|$2 тюбкатегория}}, {{PLURAL:$3|1 файл|$3 файл}})',
'search-result-score' => 'Келишиулюк: $1%',
'search-redirect' => '(Джиберилиниу $1)',
'search-section' => '($1 бёлюм)',
'search-suggest' => 'Муну излей болурмусуз: $1',
'search-interwiki-caption' => 'Джууукъ проектле',
'search-interwiki-default' => '$1 эсеблери:',
'search-interwiki-more' => '(дагъыда)',
'search-relatedarticle' => 'Байламлы',
'mwsuggest-disable' => 'Излеуде юретиулени джукълат',
'searcheverything-enable' => 'Атланы бютеу аламларында изле',
'searchrelated' => 'бейламлы',
'searchall' => 'бютеу',
'showingresults' => 'Тюбюрек №&nbsp;<strong>$2</strong> башлаб <strong>$1</strong> {{PLURAL:$1|эсеб|эсебле}} {{PLURAL:$1|кёргюзюлгенди|кёргюзюлгендиле}}.',
'showingresultsnum' => 'Тюбюрек №&nbsp;<strong>$2</strong> башлаб <strong>$3</strong> {{PLURAL:$3|эсеб|эсебле}} {{PLURAL:$3|кёргюзюлгенди|кёргюзюлгендиле}}.',
'showingresultsheader' => "'''$4''' ючюн {{PLURAL:$5|'''$3''' эсебден '''$1'''|'''$1 — $2''' арасы '''$3''' эсеб}}",
'nonefound' => "'''Эсгериу:''' тынгылау бла излеу бютеу атланы аламында бардырылмайды. Бютеу атланы аламында (къошулуучуланы сюзюулери, шаблонла эмда башхала) излер ючюн аллындан ''all:'' префиксни хайырландырыгъыз неда керекли атланы аламын белгилегиз.",
'search-nonefound' => 'Соруу бла келишген эсеб джокъду',
'powersearch' => 'Кенг излеу',
'powersearch-legend' => 'Кенг излеу',
'powersearch-ns' => 'Атла аламда излеу:',
'powersearch-redir' => 'Джибериулени кёргюз',
'powersearch-field' => 'Излеу:',
'powersearch-togglelabel' => 'Белгиле:',
'powersearch-toggleall' => 'Барысы да',
'powersearch-togglenone' => 'Бири да',
'search-external' => 'Тыш излеу',
'searchdisabled' => '{{SITENAME}} сайтда излеу талай заманнга тохтатылгъанды. Бусагъатда Google бла хайырланыб {{SITENAME}} ичинде излеу этерге боллукъсуз. Излеу сайтлада индекслери бир кесек эски болургъа боллугъун унутмагъыз.',
'search-error' => 'Излеуде халат чыкъды: $1',

# Preferences page
'preferences' => 'Джарашдырыула',
'mypreferences' => 'Джарашдырыула',
'prefs-edits' => 'Тюрлендириулени саны:',
'prefsnologin' => 'Системагъа кесигизни танытмагъансыз',
'prefsnologintext' => 'Къошулуучуну джарашдырыуларын тюрлендирир ючюн <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} системагъа кесигизни танытыргъа]</span> керексиз.',
'changepassword' => 'Паролну ауушдур',
'prefs-skin' => 'Джасауу',
'skin-preview' => 'Ал къарау',
'datedefault' => 'Сайлау джокъду',
'prefs-beta' => 'Бета-амалла',
'prefs-datetime' => 'Дата бла сагъат',
'prefs-labs' => 'Эксперимент амалла',
'prefs-user-pages' => 'Къошулуучуну бетлери',
'prefs-personal' => 'Энчи билгиле',
'prefs-rc' => 'Ахыр тюрлениуле',
'prefs-watchlist' => 'Кёзде тургъан тизме',
'prefs-watchlist-days' => 'Кёзде тургъан тизмеде кёргюзюллюк кюнлени саны:',
'prefs-watchlist-days-max' => 'Максимум $1 {{PLURAL:$1|кюн|кюн}}',
'prefs-watchlist-edits' => 'Кёзде тургъан тизмени кенглешдирилген вариантында кёргюзюллюк тюрлениулени саны:',
'prefs-watchlist-edits-max' => 'Максимум саны:1000',
'prefs-watchlist-token' => 'Кёзде тургъан тизмени токени:',
'prefs-misc' => 'Башха джарашдырыула',
'prefs-resetpass' => 'Паролну тюрлендир',
'prefs-changeemail' => 'Электрон почтаны адресин ауушдур',
'prefs-setemail' => 'Лл. почтаны адресин айырыу',
'prefs-email' => 'Электрон почтаны параметрлери',
'prefs-rendering' => 'Кёрюнюую',
'saveprefs' => 'Сакъла',
'resetprefs' => 'Тюрлениулени ызына къайтар',
'restoreprefs' => 'Тынгылау бла джарашдырыуланы ызына къайтар',
'prefs-editing' => 'Тюрлендириу',
'rows' => 'Тизгинле:',
'columns' => 'Колонкала:',
'searchresultshead' => 'Излеу',
'resultsperpage' => 'Бетде кёргюзюллюк табылгъан джазыуланы саны:',
'stub-threshold' => '<a href="#" class="stub">Стаблагъа джибериуню</a> формат этер ючюн марда (байтлада):',
'stub-threshold-disabled' => 'Джукъланыбды',
'recentchangesdays' => 'Ахыр тюрлениуледе кёргюзюллюк кюнле:',
'recentchangesdays-max' => '(максимум $1 {{PLURAL:$1|кюн|кюн}})',
'recentchangescount' => 'Тынгылау бла кёргюзюллюк тюрлениулени саны:',
'prefs-help-recentchangescount' => 'Бу, ахыр тюрлениулени, бетни тарихлерин эмда журналланы ичине къошады.',
'prefs-help-watchlist-token' => 'Бу аланны джашыртын ачхыч бла толтуруу, кёзде тургъан тизмегиз ючюн бир RSS-трансляция къурайды.
Бу аландагъы ачхычны билгенле кёзде тургъан тизмегизни окъургъа боллукъду, ол себебден сырлы магъана сайлагъыз.
Сакъланмагъанлай генерация этилген магъананы хайырландырыргъа боллукъсуз: $1',
'savedprefs' => 'Джарашдырыуларыгъыз сакъландыла.',
'timezonelegend' => 'Заман бел:',
'localtime' => 'Джерли заман:',
'timezoneuseserverdefault' => 'Серверни джарашдырыуларын хайырландыр ($1)',
'timezoneuseoffset' => 'Башха (тебиндириуню беригиз)',
'timezoneoffset' => 'Тебиндириу¹:',
'servertime' => 'Сервер заман:',
'guesstimezone' => 'Браузерден толтур',
'timezoneregion-africa' => 'Африка',
'timezoneregion-america' => 'Америка',
'timezoneregion-antarctica' => 'Антарктика',
'timezoneregion-arctic' => 'Арктика',
'timezoneregion-asia' => 'Азия',
'timezoneregion-atlantic' => 'Атлантика океан',
'timezoneregion-australia' => 'Австралия',
'timezoneregion-europe' => 'Европа',
'timezoneregion-indian' => 'Индий океан',
'timezoneregion-pacific' => 'Шош океан',
'allowemail' => 'Башха къошулуучуладан электрон почтаны келмеге къой',
'prefs-searchoptions' => 'Излеу',
'prefs-namespaces' => 'Атла алам',
'defaultns' => 'Башха халда бу атла аламлада изле:',
'default' => 'тынгылау бла',
'prefs-files' => 'Файлла',
'prefs-custom-css' => 'Энчи CSS',
'prefs-custom-js' => 'Энчи JS',
'prefs-common-css-js' => 'Бир CSS/JS-ле, халны бары темаларына да:',
'prefs-reset-intro' => 'Бу бетни джарашдырыуларыгъызны тынгылыау бла салыннган джарашдырыулагъа кёчюрюрге хайырланаллыкъсыз.
Бу ишлемни къабыл этсегиз, ызына къайтараллыкъ тюлсюз.',
'prefs-emailconfirm-label' => 'Электрон почтаны бегитиу:',
'youremail' => 'Электрон почта:',
'username' => '{{GENDER:$1|Къошулуучу ат}}:',
'uid' => '{{GENDER:$1|Къошулуучуну}} коду:',
'prefs-memberingroups' => '{{PLURAL:$1|Группаны|Группаланы}} {{GENDER:$2|члени}}:',
'prefs-memberingroups-type' => '$1',
'prefs-registration' => 'Регистрацияны этилген заманы:',
'prefs-registration-date-time' => '$1',
'yourrealname' => 'Керти атыгъыз:',
'yourlanguage' => 'Интерфейсни тили:',
'yourvariant' => 'Ичиндегисини тилини варианты:',
'prefs-help-variant' => 'Викини бетлерин кёргюзтюрге сайланнган тилни неда орфографияны варианты',
'yournick' => 'Псевдонимигиз (къол салыулагъа):',
'prefs-help-signature' => 'Сюзюу бетледеги комментарийлеге «<nowiki>~~~~</nowiki>» символла къошулуб къол салыныргъа керекди, бу, къолугъузгъа эмда заман тамгъагъа буруллукъду.',
'badsig' => 'Джараусуз къол салыныу.
HTML теглени осмакълагъыз.',
'badsiglength' => 'Къол салыуугъуз бек узунду.
$1 {{PLURAL:$1|символдан|символладан}} кеб болургъа болмайды.',
'yourgender' => 'Эркиши/Тиширыу:',
'gender-unknown' => 'Белгиленмегенди',
'gender-male' => 'эркиши',
'gender-female' => 'тиширыу',
'prefs-help-gender' => 'Излеуге байламлы: джазылым джанындан къошулуучуну ырхызына кёре хайырланады.
Бу билги хар кимгеда ачыкъды.',
'email' => 'Электрон почта',
'prefs-help-realname' => 'Керти ат (излеуге байламлы).
Аны кёргюзюрге излесегиз, сиз тюрлендирген бетлеригизни,сиз тюрлендиргенигизи белгили боллукъду.',
'prefs-help-email' => 'Электрон почтагъызны адресин джазаргъа амалсыз керек тюлдю, алай а, паролюгъузну унутсагъыз, ажымсыз керек боллукъду.',
'prefs-help-email-others' => 'Ол сизни энчи бетигизде болгъан джибериуню юсю бла сизни бла байлам этерге амал береди; электрон почтагъызны адресин да ачыкъ этерге керек болмайсыз.',
'prefs-help-email-required' => 'Электрон почтагъызны кёргюзюгюз.',
'prefs-info' => 'Баш билгиле',
'prefs-i18n' => 'Интернационализация',
'prefs-signature' => 'Къол',
'prefs-dateformat' => 'Датаны форматы',
'prefs-timeoffset' => 'Заманны офсети',
'prefs-advancedediting' => 'Кенгленнген джарашдырыула',
'prefs-advancedrc' => 'Кенгленнген джарашдырыула',
'prefs-advancedrendering' => 'Кенгленнген джарашдырыула',
'prefs-advancedsearchoptions' => 'Кенгленнген джарашдырыула',
'prefs-advancedwatchlist' => 'Кенгленнген джарашдырыула',
'prefs-displayrc' => 'Кёрюнюуню джарашдырыулары',
'prefs-displaysearchoptions' => 'Кёрюнюуню джарашдырыулары',
'prefs-displaywatchlist' => 'Кёрюнюуню джарашдырыулары',
'prefs-diffs' => 'Версияланы башхалыкълары',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'E-mail адрес тюзге ушайды',
'email-address-validity-invalid' => 'Тюз e-mail адрес джазыгъыз!',

# User rights
'userrights' => 'Къошулуучуну хакъларына оноу этиу',
'userrights-lookup-user' => 'Къошулуучуланы къауумуна оноу эт',
'userrights-user-editname' => 'Къошулуучуну атын джазыгъыз:',
'editusergroup' => 'Къошулуучу къауумланы тюрлендир',
'editinguser' => "[[User:$1|$1]]''' $2 къошулуучуну хакъларын тюрлендириу",
'userrights-editusergroup' => 'Къошулуучу къауумну тюрлендир',
'saveusergroups' => 'Къошулуучу къауммланы сакъла',
'userrights-groupsmember' => 'Къауумланы члени:',
'userrights-groupsmember-auto' => 'Джангы член:',
'userrights-groups-help' => 'Бу къошулуучу ичинде болгъан къауумланы тюрлендирирге боллукъсуз:
* Къауумну атыны къатында белгичик бар эсе, къошулуучу бу къауумгъа киреди
* Белгичик джокъ эсе, къошулуучу кирмейди бу къауумгъа.
* * белги, сиз къошулуучуну къауумгъа къошсагъыз, кетералмазлыгъыгъызны, неда кетерсегиз къошалмазлыгъыгъызны билдиреди.',
'userrights-reason' => 'Чурум:',
'userrights-no-interwiki' => 'Башха викиледеги къошлуучуланы хакъларын тюрлендирирге эркинлигигиз джокъду.',
'userrights-nodatabase' => '$1 белги базасы джокъду неда локаль тюлдю.',
'userrights-nologin' => 'Къошулуучулагъа хакъланы берир ючюн администратор кибик [[Special:UserLogin|кирирге керексиз]].',
'userrights-notallowed' => 'Сизни тергеу джазыуугъуздан къошулуучулагъа хакъла берирге эмда кетерирге эркинлик джокъду.',
'userrights-changeable-col' => 'Сиз тюрлендиреллик къауумла',
'userrights-unchangeable-col' => 'Сиз тюрлендирелмезлик къауумла',
'userrights-irreversible-marker' => '$1*',
'userrights-conflict' => 'Къошулуучу хакъланы конфликти! Тюрлендириуню джангыдан сакълатыб кёрюгюз.',

# Groups
'group' => 'Группа:',
'group-user' => 'Къошулуучула',
'group-autoconfirmed' => 'Автомат бегитилген къошулуучула',
'group-bot' => 'Ботла',
'group-sysop' => 'Администраторла',
'group-bureaucrat' => 'Бюрократла',
'group-suppress' => 'Ревизорла',
'group-all' => '(бютеу)',

'group-user-member' => '{{GENDER:$1|къошулуучу}}',
'group-autoconfirmed-member' => '{{GENDER:$1|автомат бегитилген къошулуучу}}',
'group-bot-member' => '{{GENDER:$1|бот}}',
'group-sysop-member' => '{{GENDER:$1|администратор}}',
'group-bureaucrat-member' => '{{GENDER:$1|бюрократ}}',
'group-suppress-member' => '{{GENDER:$1|ревизор}}',

'grouppage-user' => '{{ns:project}}:Къошулуучула',
'grouppage-autoconfirmed' => '{{ns:project}}:Автомат бегитилген къошулуучула',
'grouppage-bot' => '{{ns:project}}:Ботла',
'grouppage-sysop' => '{{ns:project}}:Администраторла',
'grouppage-bureaucrat' => '{{ns:project}}:Бюрократла',
'grouppage-suppress' => '{{ns:project}}:Ревизорла',

# Rights
'right-read' => 'бетлеге къарау',
'right-edit' => 'бетлени тюрлендириу',
'right-createpage' => 'бетлени къурау (сюзюуле болмагъан)',
'right-createtalk' => 'сюзюу бетле къурагъан',
'right-createaccount' => 'джангы тергеу джазыула (аккаунтла) къурау',
'right-minoredit' => '«гитче тюрлениу» белги салыу',
'right-move' => 'бетлени атларын тюрлендириу',
'right-move-subpages' => 'бетлени атларын тюббетлери бла бирге тюрлендириу',
'right-move-rootuserpages' => 'Къошулуучуланы тамыр бетлерин атын тюрлендир',
'right-movefile' => 'файлланы атларын тюрлендириу',
'right-suppressredirect' => 'Бетни атытюрленсе, эски атындан джбериу этилмейди',
'right-upload' => 'файлла джюклеу',
'right-reupload' => 'Болгъан файлланы юслери бла джазыу',
'right-reupload-own' => 'Кеси джюклеген файлны юсюне джазыу',
'right-reupload-shared' => 'Орта файл сакълау джерни, локал бла ауушдур',
'right-upload_by_url' => 'URL адресинден файлла джюклеу',
'right-purge' => 'Мюкюл бетсиз бетлени кешлерин ариула',
'right-autoconfirmed' => 'Джарым-джакълы бетлени тюрлендир',
'right-bot' => 'Автомат процесс кибик сана',
'right-nominornewtalk' => 'Къошулуучу сюзюу бетде этген гитче тюрлениуле, къошулуучугъа джангы билдириу бла билдирилмез',
'right-apihighlimits' => 'API-соруулагъа мийик лимит хайырлан',
'right-writeapi' => 'API джазыугъа хайырланыуу',
'right-delete' => 'белтени кетериу',
'right-bigdelete' => 'узун тарихли бетлени кетериу',
'right-deletelogentry' => 'журналны белгили бир джазыуларын кетериу эм ызына салыу.',
'right-deleterevision' => 'бетлени белгили версияларыны кетериу эмда ызына къайтарыу',
'right-deletedhistory' => 'Узакъдагъы эркинликсиз кетерилген бетлени тарихине къара',
'right-deletedtext' => 'Кетерилген текстни эм кетерилген версияланы арасындагъы тюрлениулеге къара',
'right-browsearchive' => 'Кетерилген бетлени изле',
'right-undelete' => 'Бетни кетериуню ызына ал',
'right-suppressrevision' => 'Администраторлада джашырылгъан версиялагъа къара эмда ызына джюкле',
'right-suppressionlog' => 'энчи журналлагъа къарау',
'right-block' => 'Башха къошулуучуланы тюрлендириу этиулерин тый',
'right-blockemail' => 'Къошулуучуну электрон почтаны джибериуюн тый',
'right-hideuser' => 'Къошулуучуну атын тый эмда аны джашыр',
'right-ipblock-exempt' => 'IP тыйылуаны, автомат тыйыуланы эм диапозонланы тыйыуланы ётюдюр',
'right-proxyunbannable' => 'Проксилени автомат тыйыуларыны ётдюр',
'right-unblockself' => 'кеслерини блокларын алыу',
'right-protect' => 'Къорууну дараджасын тюрлендир эмда къорууланнган бетледе тюрлениуле эт',
'right-editprotected' => 'Къорууланнган бетледе тюрлениу эт (секиртмесиз джакъсыз)',
'right-editinterface' => 'Къошулуучу интерфейсни тюрлендир',
'right-editusercssjs' => 'Башха къошулуучуланы CSS- эм JS-файлларына тюрлениу эт',
'right-editusercss' => 'Башха къошулуучуланы CSS-файлларына тюрлениу эт',
'right-edituserjs' => 'Башха къошулуучуланы JS-файлларына тюрлениу эт',
'right-rollback' => 'Белгили бетни тюрлендирген ахыр къошулуучуну тюрлениулерин дженгил ызына къайтар',
'right-markbotedits' => 'Ызына къайтарылгъан тюрлениулени, бот тюрлениуле кибик белгиле',
'right-noratelimit' => 'Теркликде чеклениу джокъду',
'right-import' => 'Башха викиледен бетлени импорту',
'right-importupload' => 'Файл джюклеуден бетлени импорт эт',
'right-patrol' => 'Башхаланы тюрлениулерини осмакъланнганларын белгиле',
'right-autopatrol' => 'Тюрлениуле автоматик осмакъланнган кибик белгиленедиле',
'right-patrolmarks' => 'Ахыр тюрлениулени осмакъланыуларыны белгилерине къара',
'right-unwatchedpages' => 'Кёзде тургъан тизмегизде болмагъан бетлени тизмесине къарау',
'right-mergehistory' => 'Бетлени тарихлерини бирлешдир',
'right-userrights' => 'Бютеу къошулуучуланы хакъларыны тюрлендириу',
'right-userrights-interwiki' => 'Башха викиледеги къошулуучуларыны хакъларын тюрлендир',
'right-siteadmin' => 'Билги базаны киритле эмда киритни ач',
'right-override-export-depth' => 'Бетлени, теренлиги 5-ге дери байламлы бетле бла бирге экспорт эт',
'right-sendemail' => 'Башха къошулуучулагъа электрон почта джиберирге',
'right-passwordreset' => "пароль тюрлениуле бла e-mail'леге къарау",

# Special:Log/newusers
'newuserlogpage' => 'Къошулуучуланы регистрацияларыны журналы',
'newuserlogpagetext' => 'Кёб болмай регистрация этген къошулуучуланы тизмеси.',

# User rights log
'rightslog' => 'Къошулуучуну хакъларыны журналы',
'rightslogtext' => 'Бу къошулуучуну хакъларыны тюрлениуюню журналыды',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'бу бетни окъуу',
'action-edit' => 'бу бетни тюрлендириу',
'action-createpage' => 'бетни къурау',
'action-createtalk' => 'сюзюу бетни къурау',
'action-createaccount' => 'бу тергеу джазыуну (аккаунтну) къурау',
'action-minoredit' => 'бу тюрлениуню гитче кибик белгилеу',
'action-move' => 'бу бетни атын тюрлендириу',
'action-move-subpages' => 'Бу бетни бютеу бёлюмлери бла атын тюрлендириу',
'action-move-rootuserpages' => 'къошулуучуланы тамыр бетлерини атларын тюрлендириу',
'action-movefile' => 'бу файлны атын тюрлендириу',
'action-upload' => 'бу файлны джюклеу',
'action-reupload' => 'болгъан файлны юсюне джаздырыу',
'action-reupload-shared' => 'файлланы ортакъ сакълау джеринден бу файлны джараусуз этиу',
'action-upload_by_url' => 'URL адресден бу файлны джюклеу',
'action-writeapi' => 'API хайырландырыу тюрлендириулеге',
'action-delete' => 'бу бетни кетериу',
'action-deleterevision' => 'бетни бу версиясын кетериу',
'action-deletedhistory' => 'бу бетни кетерилген тарихине къарау',
'action-browsearchive' => 'кетерилген бетлени излеу',
'action-undelete' => 'бу бетни ызына салыу',
'action-suppressrevision' => 'бу джашырылгъан версиясына бетни къарау эм ызына салыу',
'action-suppressionlog' => 'бу энчи журналгъа къарау',
'action-block' => 'Къошулуучуну блок этиу, тюрлендириуле этерге къоймау',
'action-protect' => 'бу бетни джакълау дараджасын тюрлендириу',
'action-rollback' => 'бетни ахыр тюрлендирген къошулуучуну тюрлендириулерин дженгил ызына алыу',
'action-import' => 'бу бетни башха викиден импорт этиу',
'action-importupload' => 'бу бетни джюкленнген файлдан импорт этиу',
'action-patrol' => 'башхаланы тюрлендириулерин патруль этилиннгенлеча белгилеу',
'action-autopatrol' => 'кесими тюрлендириулерими патруль этилиннгенлеча белгилеу',
'action-unwatchedpages' => 'киши кёзюнде тутмагъан бетлени тизмесине къарау',
'action-mergehistory' => 'бу бетлени тарихлерин бирлешдириу',
'action-userrights' => 'къошулуучуну бютеу хакъларын тюрлендириу',
'action-userrights-interwiki' => 'къошулуучуланы башха викиледе хакъларын тюрлендириу',
'action-siteadmin' => 'билгилени базасын блокга салыу эм блокдан алыу',
'action-sendemail' => 'E-mail джибериу',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|тюрлениу|тюрлениу}}',
'recentchanges' => 'Ахыр тюрлениуле',
'recentchanges-legend' => 'Ахыр тюрлениулени джарашдырыулары',
'recentchanges-summary' => 'Тюбюнде, Википедияда этилген ахыр тюрлениуле хронология бла тизилиб турадыла.',
'recentchanges-feed-description' => 'Викиде бу лентада тюрлениулени кёзде тут.',
'recentchanges-label-newpage' => 'Бу тюрлендириу бла джангы бет къуралгъанды',
'recentchanges-label-minor' => 'Бу гитче тюрлениудю',
'recentchanges-label-bot' => 'Бу тюрлендириуню бот этгенди',
'recentchanges-label-unpatrolled' => 'Бу тюрлендириу алкъын патруль этилинмегенди',
'rcnote' => '$4 $5 заманнга, арт {{PLURAL:$1|1|$1}} тюрлениу {{PLURAL:$2|1|$2}}  кюнню ичинде',
'rcnotefrom' => 'Тюбюрекде <strong>$2</strong> башлаб (<strong>$1</strong> дери) тюрлендириуле кёрюнедиле',
'rclistfrom' => '$1 башлаб джангы тюрлениулени кёргюз',
'rcshowhideminor' => 'гитче тюрлендириулени $1',
'rcshowhidebots' => 'ботланы $1',
'rcshowhideliu' => 'кирген къошулуучуланы $1',
'rcshowhideanons' => 'анонимлени $1',
'rcshowhidepatr' => '$1 патруль этилиннген тюрлендириуле',
'rcshowhidemine' => 'кесими тюрлендириулерими $1',
'rclinks' => 'Ахыр $2 кюнню ичинде этилиннген $1 тюрлениуню кёргюз;<br /> $3',
'diff' => 'башх.',
'hist' => 'тарих',
'hide' => 'джашыр',
'show' => 'кёргюз',
'minoreditletter' => 'г',
'newpageletter' => 'Дж',
'boteditletter' => 'б',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|кёзюнде тутуучу къошулуучу}}]',
'rc_categories' => 'Категориялагъа юлеш («|» бла айыр)',
'rc_categories_any' => 'Къайсы да',
'rc-change-size' => '$1',
'rc-change-size-new' => 'Тюрлениуден сора ёлчеми: $1 {{PLURAL:$1|байт}}',
'newsectionsummary' => '/* $1 */ Джангы бёлюм',
'rc-enhanced-expand' => 'Къошакъланы кёргюз (JavaScript хайырланады)',
'rc-enhanced-hide' => 'Къошакъланы джашыр',
'rc-old-title' => 'биринчи «$1» деб къуралгъан',

# Recent changes linked
'recentchangeslinked' => 'Байламлы тюрлениуле',
'recentchangeslinked-feed' => 'Байламлы тюрлендириуле',
'recentchangeslinked-toolbox' => 'Байламлы тюрлендириуле',
'recentchangeslinked-title' => '$1 бет бла байламлы тюрлендириуле',
'recentchangeslinked-summary' => "Белгиленнген бет (неда белгиленнген категориягъа киргенле) джиберген бетледе джангы тюрлениулени тизмеси.
[[Special:Watchlist|Кёзде тургъан тизмеге]] кирген бетле '''чертилибдиле'''.",
'recentchangeslinked-page' => 'Бетни аты:',
'recentchangeslinked-to' => 'Муну орнуна, бу бетге джиберген бетледе тюрлениулени кёргюз',

# Upload
'upload' => 'Файл джюкле',
'uploadbtn' => 'Файл джюкле',
'reuploaddesc' => 'Джюклеу формасына ызына къайт',
'upload-tryagain' => 'Тюрлетилген файл ангылатыуну джибер',
'uploadnologin' => 'Сиситемагъа кирмегенсиз',
'uploadnologintext' => 'Файлла джюклер ючюн [[Special:UserLogin|системагъа кирирге]] керексиз.',
'upload_directory_missing' => 'Джюклеу директория ($1) табылмайды эмда веб-сервер бла къуралалмайды.',
'upload_directory_read_only' => 'Веб-сервер файл джюкленнегн ($1) папкагъа джазыу эркинлиги джокъду.',
'uploaderror' => 'Джюклеуню хатасы',
'upload-recreate-warning' => "'''Эс бёлюгюз. Быллай аты бла файл кетерилген этгенди неда аты тюрленилиннгенди.'''

Бу бетге кетериуле бла ат тюрлендириулени журналы тюбюрекде бериледи:",
'uploadtext' => "Файл джюклер ючюн тюбюндеги форманы хайырлан.
Алландан джюкленнген файлланы кёрюр неда излер ючюн [[Special:FileList|джюкленнген файлланы тизмесине]] къарагъыз, (джангыдан) джюкленнгенле [[Special:Log/upload|джюклеу журналында]], кетерилгенле [[Special:Log/delete|кетериу журналында]] тутуладыла.

Бетге файл салыр ючюн байлмыгъызда тюбюндеги формаларыны бирин хайырланыгъыз;
* Файлны бютеу ёлчемини салыр ючюн: '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>'''
* Сол къыйрда бир тёртгюл ичинде, тюбюндеда ангылатыуу бла, 200 пиксел ёлчеми бла хайырландырыргъа излей эсегиз: '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|тюбюнде ангылатыу]]</nowiki></code>'''
* Файлны кёргюзмей, файлгъа дижбиреиу берирге излей эсегиз: '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>'''",
'upload-permitted' => 'Эркинлик берилген файлланы типлери: $1.',
'upload-preferred' => 'Изленнген файлланы типлери: $1.',
'upload-prohibited' => 'Джасакъ этилген файлланы типлери: $1.',
'uploadlog' => 'Джюклеулени журналы',
'uploadlogpage' => 'Джюклеулени журналы',
'uploadlogpagetext' => 'Тюбюнде эм ахыр къошулгъан файлланы тизмеси барды.
Дагъыда [[Special:NewFiles|dosyalджангы файлланы галереясына]] къара, анда джангы джюклеулени юсюнден билгиле толу кёрюгюзюлгендиле.',
'filename' => 'Файлны аты',
'filedesc' => 'Къысха ачыкълау',
'fileuploadsummary' => 'Къысха ачыкълау:',
'filereuploadsummary' => 'Файлны тюрлениулери:',
'filestatus' => 'Джайылыу хакълары:',
'filesource' => 'Къайнакъ:',
'uploadedfiles' => 'Джюкленнген файлла',
'ignorewarning' => 'Эсгертиулеге къарамай сакълат файлны',
'ignorewarnings' => 'Эсгертиулеге къарама',
'minlength1' => 'Файлны аты эм азы бла бир харифден болургъа керекди.',
'illegalfilename' => '«$1» файл атда хайырланыугъа къабыл этилмеген символла бардыла.
Файлны атын тюрлендириб, джангыдан джюклегиз.',
'filename-toolong' => 'Файлланы атлары 240 байтдан кёб болмазгъа керекдиле.',
'badfilename' => 'Файлны аты $1 болуб ауушду.',
'filetype-mime-mismatch' => '«.$1» файл MIME-типге ($2) келишмейди.',
'filetype-badmime' => '«$1» MIME типли файлланы джюклениуюне эркинлик берлимейди.',
'filetype-bad-ie-mime' => 'Internet Explorer, буну эркинлик берилмеген эмда потенциал заран берлик «$1» файл тип кибик таныгъаны ючюн бу файл джюклениллик тюлдю.',
'filetype-unwanted-type' => "'''\".\$1\"''' изленмеген файл типиди.
Изленнген {{PLURAL:\$3|файл тип|файл типле}} \$2.",
'filetype-banned-type' => "'''«.$1»''' — {{PLURAL:$4|джасакъланнган файл типди|джасакъланнган файл типледиле}}.
Эркинлик берилген {{PLURAL:$3|файл тип|файл типле}}: $2.",
'filetype-missing' => 'Файлны кенглешиуу джокъду (сёз ючюн, «.jpg» кибик)',
'empty-file' => 'Сиз ийген файл бошду.',
'file-too-large' => 'Сиз ийген файл асыры уллуду.',
'filename-tooshort' => 'Файлны аты асыры къысхады.',
'filetype-banned' => 'Быллай типли файлла джасакъланыбдыла.',
'verification-error' => 'Бу файл тинтилиу процедураны ётмегенди.',
'hookaborted' => 'Сиз теджеген тюрлендириуню кенгертиуню сюзюучю джасакълагъанды.',
'illegal-filename' => 'Джарамагъан файл ат.',
'overwrite' => 'Болгъан файлны ауушдурургъа болмайды.',
'unknown-error' => 'Белгили болмагъан халат.',
'tmp-create-error' => 'Болджаллы файл къуралмайды.',
'tmp-write-error' => 'Болджаллы файлгъ джазыуну халаты.',
'large-file' => 'Файлланы $1 байтдан уллу болмасы изленеди (бу файлны ёлчеми $2)',
'largefileserver' => 'Бу файл сервер эркинлик бергенден уллуду.',
'emptyfile' => 'Джюклеген файлыгъыз бош кёрюнеди. Буну чуруму файлны атыны джазыуда халат болургъа болур. Файлны джюклерге излегенигизден ишексиз болугъуз.',
'windows-nonascii-filename' => 'ASCII таблицада болмагъан символла бла файл атланы бу вики тутмайды',
'fileexists' => 'Быллай атлы файл барды.
Аны ауушдурурда аккылы эсегиз, алгъын <strong>[[:$1]]</strong> файлгъа кёз джетдиригиз.
[[$1|thumb]]',
'filepageexists' => 'Бу файл ючюн ангылатыу бет <strong>[[:$1]]</strong> адресинде алайсызда барды, алай а бу атлы файл бусагъатда джокъду.
Ангылатыуугъуз файлны ангылатыу бетинде чыгъарыкъ тюлдю.
Джангы ангылтаыу къошар ючюн, буну къол бла тюрлендирирге керексиз.
[[$1|thumb]]',
'fileexists-extension' => 'Ушаш аты бла башха файл барды: [[$2|thumb]]
* Джюкленнген файлны аты: <strong>[[:$1]]</strong>
* Бар болгъан файлны аты: <strong>[[:$2]]</strong>
Башха ат сайларыгъыгъызны тилейбиз.',
'fileexists-thumbnail-yes' => "Бу файл, гитче этилген весриягъа (миниатурагъа) ушайды ''(thumbnail)''. [[$1|thumb]]
Тилейбиз <strong>[[:$1]]</strong> файлны контроль этигиз .
Контроль этилген файл бла оригинал бир эсе, айры аны гитче этилген версиясын джюклерге керек джокъду.",
'file-thumbnail-no' => "Бу файлны аты <strong>$1</strong> бла башланады.
Бу башха суратны гитче этилген версиясына ушайды ''(thumbnail)''
Сизде бу суратны толу версиясы бар эсе, аны джюклегиз неда файлны атын тюрлендиригиз.",
'fileexists-forbidden' => 'Бу ат бла файл барды, эмда аны юсюне джазылылмайды.
Файлыгъызны джангыдан джюклерге излей эсегиз, ызына къайтыб джангы ат хайырланыгъыз. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Быллай атлы файл файлланы сакълауну джеринде барды.
Дагъыда файлыгъызны джюклерге излей эсегиз, ызына къайтыб джангы ат хайырланыгыз. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Бу файл эндиги {{PLURAL:$1|файлны|файлланы}} дубликатыды:',
'file-deleted-duplicate' => 'Бу файлны ушашы болгъан башха файл ([[:$1]]) алгъаракъ кетерилгенди. Бу файлны джангыдан джюклерни аллы бла файлны кетериуюню тарихи бла танышыгъыз.',
'uploadwarning' => 'Эсгертиу',
'uploadwarning-text' => 'Файлны тюбюрекде келтирилген ачыкълауун тюрлендиригиз да джангыдан кёрюгюз.',
'savefile' => 'Файлны сакълат',
'uploadedimage' => '«[[$1]]» джюкленнгенди',
'overwroteimage' => '«[[$1]]» суратны джангы версиясы джюкленнгенди',
'uploaddisabled' => 'Джюклеуге эркинлик джокъду',
'copyuploaddisabled' => 'URL кёре джюклеу джукъланыбды.',
'uploadfromurl-queued' => 'Сизни джюклеуюгюз кёзюуге салыннганды.',
'uploaddisabledtext' => 'Файлланы джюклеу мадар джукъланыбды',
'php-uploaddisabledtext' => 'PHP-да файл джюклеу амал джукъланыбды.
file_uploads джарашдырыулагъа бир къарагъыз.',
'uploadscripted' => 'Бу файл, браузер бла халатлы таныргъа боллукъ, HTML-код неда скрипт джюрютеди.',
'uploadvirus' => 'Файл вируслуду! $1 къара.',
'uploadjava' => 'Файл, Java .class файлы болгъан ZIP-архивди.
Къоркъуусузлукъ бла байламлы, Java-файлла джюклеген джарамайды.',
'upload-source' => 'Къайнакъ файл',
'sourcefilename' => 'Къайнакъ аты файлны:',
'sourceurl' => 'Къайнакъны URL-адреси:',
'destfilename' => 'Файлны джангы аты:',
'upload-maxfilesize' => 'Файлны максимал ёлчеми: $1',
'upload-description' => 'Файлны ачыкълауу',
'upload-options' => 'Джюклеуню опциялары',
'watchthisupload' => 'Бу файлны кёзде тут',
'filewasdeleted' => 'Быллай аты бла файл алгъаракъ джюкленнгенди, алай а артдан кетерилгенди. Файлны джюклеуню аллы бла, $1 бетге бир кёз джетдиригиз.',
'filename-bad-prefix' => "Джюклене тургъан файлны аты '''«$1»''' бла башланады эмда цифра камера суратларына берген шаблон ат болургъа болур.
Файлны ангылатхан ат атаргъа кюрешигиз.",
'filename-prefix-blacklist' => ' #<!-- бу тизгинни тургъаныча къоюгъуз --> <pre>
# Синтаксис быллайды:
#  * «#» символдан башланнган барысыда комментарийге саналады (тизгинни артына дери)
#  * Хар джараусуз тизгин — файлны стандарт атыны префиксиди (цифра камера бериуюченди)
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # бир-бир мобил телефонла
IMG # орта
JD # Jenoptik
MGP # Pentax
PICT # тюрлю-тюрлюле
  #</pre> <!-- бу тизгинни тургъаныча къоюгъуз -->',
'upload-success-subj' => 'Джюклеу тыйыншлы ётдю',
'upload-success-msg' => '[$2] джюклемигиз тыйыншлы ётдю. Сиз джюклеген былайдады: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Джюклеу бла проблема',
'upload-failure-msg' => '[$2] адресден джюклемигиз бла проблема болгъанды:

$1',
'upload-warning-subj' => 'Джюклеуде эсгертиу',
'upload-warning-msg' => '[$2] джюклеуюгюз бла халат болду. Халатны тюзетир ючюн [[Special:Upload/stash/$1|джюклеу формагъа]] къайтыгъыз.',

'upload-proto-error' => 'Халатлы протокол',
'upload-proto-error-text' => 'Узакъдан джюклеу,<code>http://</code> неда <code>ftp://</code> бла башланнган URL-ле керекдиле.',
'upload-file-error' => 'Ич халат',
'upload-file-error-text' => 'Серверде кёзюулю файл къуралгъан заманда ич халат болгъанды.
[[Special:ListUsers/sysop|администраторгъа]] джазыгъыз.',
'upload-misc-error' => 'Билинмеген джюклеу халат',
'upload-misc-error-text' => 'Джюклеуню кёзюуюнде билинмеген халат болду.
URL-адрес тюз болгъанын осмакълагъыз эмда джангыдан сынагъыз.
Проблема джангыдан чыкъса, [[Special:ListUsers/sysop|администраторгъа]] джазыгъыз.',
'upload-too-many-redirects' => 'URL асыры кёб джибериу тутады',
'upload-unknown-size' => 'Билинмеген ёлчем',
'upload-http-error' => 'HTTP хата болду: $1',

# File backend
'backend-fail-stream' => '«$1» файл окъулмады.',
'backend-fail-backup' => '«$1» файлны резерв копиясын этерге болмайды.',
'backend-fail-notexists' => '$1 файл джокъду.',
'backend-fail-delete' => '«$1» файл кетерилмеди.',
'backend-fail-alreadyexists' => '«$1» файл алгъадан барды.',
'backend-fail-store' => '$1 файл $2 ичинде сакъланылынмады.',
'backend-fail-copy' => '«$2» файл «$1» файлгъа копия этилмеди.',
'backend-fail-move' => '«$1» файлны «$2» файлгъа кёчюрюлмеди.',
'backend-fail-opentemp' => 'Болджаллы файлны ачалмайды.',
'backend-fail-writetemp' => 'Болджаллы файлгъа джазалмады.',
'backend-fail-closetemp' => 'Болджаллы файлны джабалмайды.',
'backend-fail-read' => '«$1» файлны окъуялмады.',
'backend-fail-create' => '«$1» файлны джазалмады.',
'backend-fail-maxsize' => 'Ёлчеми {{PLURAL:$2|бир байт|$2 байт}}дан кёб болгъаны себебли «$1» файл джазылмады.',

# Special:UploadStash
'uploadstash' => 'Джашыртын джюклеу',
'uploadstash-clear' => 'Джашырылгъан файлланы ариула',
'uploadstash-nofiles' => 'Сизни джашырылгъан файлларыгъыз джокъду',
'uploadstash-refresh' => 'Файлланы тизмесин джангырт',
'invalid-chunk-offset' => 'Фрагментни джарамагъан офсети',

# img_auth script messages
'img-auth-accessdenied' => 'Эркинлик джасакъланнганды',
'img-auth-nopathinfo' => '<code>PATH_INFO</code> джокъду.
Серверигиз бу билгилени джиберир ючюн джарашмагъанды.
CGI тамалында ишлерге эмда <code>img_auth</code> бла ишлемезге болур.
Къарагъыз: https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Изленнген джол джюклениулени папкасы бла байламлы тюлдю.',
'img-auth-badtitle' => '«$1» бла джараулу башлыкъ этилмейди.',
'img-auth-nologinnWL' => 'Сиз системагъа кирмедигиз, эмда «$1» акъ тизмеде тюлдю.',
'img-auth-nofile' => '«$1» файл джокъду.',
'img-auth-isdir' => '«$1» каталогга кирирге излейсиз.
Къуру файллагъа кирирге эркинлик барды.',
'img-auth-streaming' => '«$1» ырхы бериу',
'img-auth-public' => 'img_auth.php-ни фунцкиясы энчи джабыкъ викиден чыгъарыуду.
Бу вики орта вики кибик джарашдырылгъанды.
Эм келишиу къоркъуусузлукъ ючюн img_auth.php джукълатылгъанды.',
'img-auth-noread' => 'Къоушулуучуну «$1» файлыны окъургъа эркинлиги джокъду.',

# HTTP errors
'http-invalid-url' => 'Терс URL: $1',
'http-invalid-scheme' => '«$1» схемалы адресле тутулмайла',
'http-request-error' => 'Соруу ийгенни халаты.',
'http-read-error' => 'HTTP окъууну халаты.',
'http-timed-out' => 'HTTP-сорууну сакълау заман ётдю.',
'http-curl-error' => 'Бу URL-гъа сорууну халаты: $1',
'http-bad-status' => 'HTTP-соруу ишлеген заманында проблема чыкъгъанды: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL-ге джетилелимеди',
'upload-curl-error6-text' => 'Белгиленнген URL-ге джетелмейди.
URL-ни тюз , сайтны ачыкъ болгъанына ишексиз болугъуз.',
'upload-curl-error28' => 'Джюклеу заманы чыкъды',
'upload-curl-error28-text' => 'Бу сайтны джууаб бериую узун барады.
Сайтны ачыкъ болгъанын контроль этигиз, къызха заман сакълаб, джангыдан сынагъыз.
Сайтны бошуракъ болгъан заманында сынасагъыз игирек болургъа болур.',

'license' => 'Лицензияланыу:',
'license-header' => 'Лицензияланыу',
'nolicense' => 'Чырт бирида сайланмагъанды',
'license-nopreview' => '(Ал къарау ишлемейди)',
'upload_source_url' => '(тюз, хар кимда джетеллик URL)',
'upload_source_file' => '(компьютеригиздеги файл)',

# Special:ListFiles
'listfiles-summary' => 'Бу къуллукъ бет, бютеу джюкленнген файлланы кёргюзеди.
Къошулуучугъа кёре айырыуда, ол къошулуучуну джангыз кёб болмай джюклеген файллары кёргюзюледиле.',
'listfiles_search_for' => 'Медиа ат бла изле:',
'imgfile' => 'файл',
'listfiles' => 'Файлланы тизмеси',
'listfiles_thumb' => 'Миниатюра',
'listfiles_date' => 'Заман',
'listfiles_name' => 'Файлны аты',
'listfiles_user' => 'Къошулуучу',
'listfiles_size' => 'Ёлчем',
'listfiles_description' => 'Ачыкълау',
'listfiles_count' => 'Версияла',

# File description page
'file-anchor-link' => 'Файл',
'filehist' => 'Файлны тарихи',
'filehist-help' => 'Датагъа/заманнга басыгъыз, ол сагъатда файл къаллай болгъанын кёрюр ючюн.',
'filehist-deleteall' => 'барысын да кетер',
'filehist-deleteone' => 'кетер',
'filehist-revert' => 'ызына ал',
'filehist-current' => 'бусагъатдагъы',
'filehist-datetime' => 'Дата/заман',
'filehist-thumb' => 'Миниатюра',
'filehist-thumbtext' => '$1 кюнден версияны миниатюрасы',
'filehist-nothumb' => 'Минатура джокоъду',
'filehist-user' => 'Къошулуучу',
'filehist-dimensions' => 'Ёлчеми',
'filehist-filesize' => 'Файлны ёлчеми',
'filehist-comment' => 'Эсгериу',
'filehist-missing' => 'Файл джокъду',
'imagelinks' => 'Файлны хайырланыуу',
'linkstoimage' => 'Бу файлгъа {{PLURAL:$1|бет|$1 бет}} джибередиле:',
'linkstoimage-more' => '$1 дегенден артыкъ {{PLURAL:$1|бет}} бу файлгъа джибериу береди.
Бу тизмеде бу файлгъа {{PLURAL:$1|къуру $1 джибериу}} кёргюзюледи.
[[Special:WhatLinksHere/$2|Толу тизме]] да барды.',
'nolinkstoimage' => 'Бу файлгъа джиберген бет джокъду.',
'morelinkstoimage' => 'Бу файлгъа [[Special:WhatLinksHere/$1|къалгъан джибериулеге]] къара.',
'linkstoimage-redirect' => '$1 (файл редирект) $2',
'duplicatesoffile' => '{{PLURAL:$1|файл|$1 файл}}, бу файлны дубликатыды ([[Special:FileDuplicateSearch/$2|анданда кёб ангылатыу]]):',
'sharedupload' => 'Бу файл $1денди эм башха проектледе хайырландыргъа боллукъду.',
'sharedupload-desc-there' => 'Бу файл $1 базадан башха проектледе хайырландырыргъа боллукъду.
Андан кёб билги ючюн [$2 файлны ангылатыу бетге] къарагъыз.',
'sharedupload-desc-here' => 'Бу файл $1денди эмда башха проектледе хайырландыргъа боллукъду.
[$2 Файлны ангылатыу бетинден] билгиле тюбюрекде берилгендиле.',
'filepage-nofile' => 'Быллай атлы файл джокъду.',
'filepage-nofile-link' => 'Быллай атлы файл джокъду, алай а сиз [$1 джюклерге боллукъсуз].',
'uploadnewversion-linktext' => 'Бу файлны джангы версиясын джюклеу',
'shared-repo-from' => '$1-дан',
'shared-repo' => 'Ортакъ сакълау джер',

# File reversion
'filerevert' => '$1 файлны эски халына къайтыу',
'filerevert-legend' => 'Файлны эски халына къайтар',
'filerevert-intro' => "'''[[Media:$1|$1]]''' медиясыны [$4 $3, $2 замандагъы версиясы]ны ызына къайтарыгъыз.",
'filerevert-comment' => 'Чурум:',
'filerevert-defaultcomment' => '$2, $1 замандагъы халына къайтарыгъыз',
'filerevert-submit' => 'Эски халына къайтар',
'filerevert-success' => "'''[[Media:$1|$1]]''' файл  [$4 $3, $2 замандагъы халына] къайтарылды.",
'filerevert-badversion' => 'Бу файлны берилген заман билгисине ие локал версиясы джокъду.',

# File deletion
'filedelete' => '$1 — кетериу',
'filedelete-legend' => 'Файлны кетер',
'filedelete-intro' => "'''[[Media:$1|$1]]''' файлны бютеу тарихи бла бирге кетере турасыз",
'filedelete-intro-old' => "'''[[Media:$1|$1]]''' файлны [$4 $3, $2] замандагъы версиясын кетере турасыз.",
'filedelete-comment' => 'Чурум:',
'filedelete-submit' => 'Кетер',
'filedelete-success' => "'''$1''' кетерилгенди.",
'filedelete-success-old' => "'''[[Media:$1|$1]]''' файлны $3, $2 заманда этилген версиясы кетерилди.",
'filedelete-nofile' => "'''$1''' джокъду.",
'filedelete-nofile-old' => "'''$1''' ючюн белгиленнген атрибутлары бла архив версиясы джокъду.",
'filedelete-otherreason' => 'Башха/къошакъ чурум:',
'filedelete-reason-otherlist' => 'Башха чурум',
'filedelete-reason-dropdown' => '*Кетериуню эм аслам тюбеген чурумлары
** автор хакъланы бузуу
** дубликат файл',
'filedelete-edit-reasonlist' => 'Кетериуню чурумларын тюрлендир',
'filedelete-maintenance' => 'Техника ишлени кёзюуюнде файлланы кетериу эм ызына къайтарыу функцияла ишлеймедиле.',
'filedelete-maintenance-title' => 'Файл кетерилмеди',

# MIME search
'mimesearch' => 'MIME бла излеу',
'mimesearch-summary' => 'Бу бет, MIME типли файлланы сайларгъа мадар береди. Кириуню форматы: ичиндегини_типи/тюб_тип, сёз ючюн, <code>image/jpeg</code>.',
'mimetype' => 'MIME-типи:',
'download' => 'джюкле',

# Unwatched pages
'unwatchedpages' => 'Киши кёзде тутмагъан бетле',

# List redirects
'listredirects' => 'Джибериулени тизмеси',

# Unused templates
'unusedtemplates' => 'Хайырландырылмагъан шаблонла',
'unusedtemplatestext' => 'Бу бет {{ns:template}} алан атында тургъан эмда башха бетлеге къошулгмаъан бетлени тизмеси барды. Кетериуню аллы бла, шаблоннга башха джибериулени джокоълагъыз.',
'unusedtemplateswlh' => 'башха джибериуле',

# Random page
'randompage' => 'Эсде болмагъан бет',
'randompage-nopages' => '{{PLURAL:$2|Ат аланында|Ат аланында}} чырт бир бет джокъду: $1.',

# Random redirect
'randomredirect' => 'Сакъланмагъан джибериу',
'randomredirect-nopages' => '«$1» ат аланда чырт бир джибериу джокъду.',

# Statistics
'statistics' => 'Статистика',
'statistics-header-pages' => 'Бетлени статистикалары',
'statistics-header-edits' => 'Тюрлендириулени статистикасы',
'statistics-header-views' => 'Къарауланы статистикалары',
'statistics-header-users' => 'Къошулуучуланы статистикалары',
'statistics-header-hooks' => 'Башха статистика',
'statistics-articles' => 'Статьяла',
'statistics-pages' => 'Бетле',
'statistics-pages-desc' => 'Википедиягъы бютеу бетле, сюзюу бетле, джибериуле эмда башхала.',
'statistics-files' => 'Джюкленнген файлла',
'statistics-edits' => '{{SITENAME}} къуралгъанындан бери этилген тюрлендириуле.',
'statistics-edits-average' => 'Хар бетдеги тюрлендириулени орта саны',
'statistics-views-total' => 'Къараула бютеулей',
'statistics-views-total-desc' => 'Къуралмагъан бетле бла къуллукъ бетлеге къараула саналмайдыла.',
'statistics-views-peredit' => 'Тюрлендириуге къарауну саны',
'statistics-users' => 'Регистрация этилген [[Special:ListUsers|къошулуучула]]',
'statistics-users-active' => 'Актив къошулуучула',
'statistics-users-active-desc' => 'Ахыр {{PLURAL:$1|1 кюнде|$1 кюнде}} ишлеме этген къошулуучула',
'statistics-mostpopular' => 'Эм кёб къаралгъан бетле',

'disambiguations' => 'Ангылам айыргъан бетлеге джибериулери болгъан бетле',
'disambiguationspage' => 'Template:кёб магъаналылыкъ',
'disambiguations-text' => "Келтирилген бетледе '''кёб магъаналы бетлеге''' эм азы бла бир джибериу барды.
Аны орнуна ала белгили бир статьягъа джибериу этерге керек болурла.<br />
[[MediaWiki:Disambiguationspage]] бетде аты салыннган шаблон бар эсе, ол бет кёб магъаналы бетге саналады.",

'pageswithprop-submit' => 'Таб',

'doubleredirects' => 'Джибериу болгъан джибериуле',
'doubleredirectstext' => 'Бу бетде башхы джибериулеге этилген джибериулени тизмеси барды.
Хар тизгин биринчи неда экинчи джибериуню эмда асламысында бетни аты джазылгъан, биринчи джибериу кёргюзген, экинчи джибериуню нюзюр бети джазылады.
<del>Юсю сызылгъан</del> джазыула тюзетилген этгендиле.',
'double-redirect-fixed-move' => '[[$1]] бет атын тюрлендиргенди, энди ол [[$2]] бетге джибериу этеди',
'double-redirect-fixer' => 'Джибериулени тюзетиучю',

'brokenredirects' => 'Халатлы джибериуле',
'brokenredirectstext' => 'Бу джибериуле болмагъан бетлеге байлам бередиле:',
'brokenredirects-edit' => 'тюрлендир',
'brokenredirects-delete' => 'кетер',

'withoutinterwiki' => 'Башха тиллеге байламы болмагъан бетле',
'withoutinterwiki-summary' => 'Бу бетлени интернет-джибериулериулери джокъду:',
'withoutinterwiki-legend' => 'Префикс',
'withoutinterwiki-submit' => 'Кёргюз',

'fewestrevisions' => 'Эм аз версиясы болгъан бетле',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|байт}}',
'ncategories' => '$1 {{PLURAL:$1|категория|категорияла}}',
'nlinks' => '$1 {{PLURAL:$1|джибериу|джибериу}}',
'nmembers' => '$1 {{PLURAL:$1|объект}}',
'nrevisions' => '$1 {{PLURAL:$1|версия|версия}}',
'nviews' => '$1 {{PLURAL:$1|къарау|къарау}}',
'nimagelinks' => '$1 {{PLURAL:$1|бетде|бетде}} хайырланады',
'ntransclusions' => '$1 {{PLURAL:$1|бетде|бетде}} хайырланады',
'specialpage-empty' => 'Сорма эсеб келтирмеди.',
'lonelypages' => 'Ёксюз бетле',
'lonelypagestext' => 'Тюбюндеги бетлеге {{SITENAME}} сайтдагъы башха бетледен джибериу берилмегенди неда ала башха бетлеге къошулмагъандыла.',
'uncategorizedpages' => 'Категориясыз бетле',
'uncategorizedcategories' => 'Категория салынмагъан категорияла',
'uncategorizedimages' => 'Категория салынмагъан файлла',
'uncategorizedtemplates' => 'Категория салынмагъан шаблонла',
'unusedcategories' => 'Хайырланылынмагъан категорияла',
'unusedimages' => 'Хайырланмагъан файлла',
'popularpages' => 'Популяр бетле',
'wantedcategories' => 'Керекли категорияла',
'wantedpages' => 'Керекли бетле',
'wantedpages-badtitle' => 'Сорманы эсеблеринде халатлы башлыкъ: $1',
'wantedfiles' => 'Керекли файлла',
'wantedtemplates' => 'Керекли шаблонла',
'mostlinked' => 'Кесине кёб джибериу болгъан бетле',
'mostlinkedcategories' => 'Эм кёб статьясы болгъан категорияла',
'mostlinkedtemplates' => 'Эм кёб хайырланнган шаблонла',
'mostcategories' => 'Эм кёб категориягъа кирген бетле',
'mostimages' => 'Эм кёб джибериу берилген файлла',
'mostrevisions' => 'Эм кёб тюрлендирилген бетле',
'prefixindex' => 'Бетлени атлары башланнганына кёре кёргюзюу',
'shortpages' => 'Къысха бетле',
'longpages' => 'Узун бетле',
'deadendpages' => 'Тупик бетле',
'deadendpagestext' => 'Бу бетле,{{SITENAME}} сайтда башха бетлеге джибериу бермейдиле.',
'protectedpages' => 'Къоруугъа алыннган бетле',
'protectedpages-indef' => 'Къуру болджалсыз къоруу',
'protectedpages-cascade' => 'Джангыз секиртме къоруу',
'protectedpagestext' => 'Эндиги бетле атын ауушдуруу бла тюрлендириуден джакъланыбдыла.',
'protectedpagesempty' => 'Бусагъатда бу параметрле бла джакъланнган бет джекъду.',
'protectedtitles' => 'Джакъланнган башлыкъла',
'protectedtitlestext' => 'Бу атланы хайырланыргъа эркинлик джокъду',
'protectedtitlesempty' => 'Бусагъатда, бу параметрле бла джакъланнган башлыкъ джокъду.',
'listusers' => 'Къошулуучуланы тизмеси',
'listusers-editsonly' => 'Къуру тюрлендириу этген къошлуучуланы кёргюз',
'listusers-creationsort' => 'Къуралгъан заманына кёре сафла',
'usereditcount' => '$1 {{PLURAL:$1|тюрлендириу|тюрлендириу}}',
'usercreated' => '$1 $2 заманда {{GENDER:$3|регистрацияны ётгенди}}',
'newpages' => 'Джангы бетле',
'newpages-username' => 'Къошулуучуну аты:',
'ancientpages' => 'Ахыр тюрлендириуге кёре эм эски болгъан статьяла',
'move' => 'Атын тюрлендириу',
'movethispage' => 'Бу бетни атын тюрлендир',
'unusedimagestext' => 'Файлла бардыла, алай а бетге джазылмагъандыла.
Унутмагъыз, башха веб сайтланы бу файлгъа ачыкъдан URL бла джибериу берирге боллукъларын, эмда аны ючюн бу тизмеге киргенине къарамай актив халда хайырланыргъа боллукъду.',
'unusedcategoriestext' => 'Бу категорияла болгъанлыкъгъа, чырт бир статья неда категория джанындан хайырланмыайдыла.',
'notargettitle' => 'Нюзюр белгиленмегенди',
'notargettext' => 'Бу функцияны ишлетир ючюн нюзюр бетни неда къошулуучуну белгилемегенсиз.',
'nopagetitle' => 'Быллай нюзюр бет джокъду',
'nopagetext' => 'Белгиленнген нюзюр бет джокъду.',
'pager-newer-n' => '{{PLURAL:$1|1 джангыракъ|$1 джангыракъ}}',
'pager-older-n' => '{{PLURAL:$1|1 эскирек|$1 эскирек}}',
'suppress' => 'Джашырыу',

# Book sources
'booksources' => 'Китабланы чыкъгъан джерлери',
'booksources-search-legend' => 'Китабны юсюнден информация излеу',
'booksources-isbn' => 'ISBN:',
'booksources-go' => 'Таб',
'booksources-text' => 'Бу бетде джангы эмда эски китаб сатхан башха сайтлагъа джибериулени тизмеси барды, эм излеген китабларыгъызны юсюнден кёбюрек билги билирге боллукъсуз.',
'booksources-invalid-isbn' => 'Берилген ISBN джараусуз кибик кёрюнеди; оригинал къайнакъдан кёчюрюлген заманда халатланы контроль этигиз.',

# Special:Log
'specialloguserlabel' => 'Толтуруучу:',
'speciallogtitlelabel' => 'Ышан (башлыкъ неда къошулуучу):',
'log' => 'Журналла',
'all-logs-page' => 'Бютеу ачыкъ журналла',
'alllogstext' => '{{SITENAME}} ючюн бютеу бар болгъан журналланы бирлешген тизмеси.
Журнал типини, къошулуучу атны (уллу-гитче харифге кёре) неда тийилген бетни (ол да уллу-гитче харифге кёре) элерге боллукъсуз.',
'logempty' => 'Журналлагъа келишген билги джокъду.',
'log-title-wildcard' => 'Бу символладан башланнган башлыкъланы изле',

# Special:AllPages
'allpages' => 'Бютеу бетле',
'alphaindexline' => '$1 бетден $2 бетге дери',
'nextpage' => 'Эндиги бет ($1)',
'prevpage' => 'Алдагъы бет ($1)',
'allpagesfrom' => 'Мунга башланнган бетлени чыгъар:',
'allpagesto' => 'Мында чыгъарыуну тохтат:',
'allarticles' => 'Бютеу бетле',
'allinnamespace' => '«$1» атла аламдагъы бютеу  бетле',
'allnotinnamespace' => 'Бютеу бетле ($1 аламда болмагъанла)',
'allpagesprev' => 'Аллындагъы',
'allpagesnext' => 'Эндиги',
'allpagessubmit' => 'Тындыр',
'allpagesprefix' => 'Былайда джазгъан харифледен башланнган бетлени тизме эт:',
'allpagesbadtitle' => 'Кирилген бет аты тиллени арасы байлм неда викилени арасында байлам болгъаны себебли джараусузду. Башлыкълада хайырланыуу джасакъ болгъан бир неда андан аслам символ тутаргъа болур.',
'allpages-bad-ns' => '{{SITENAME}} сайтда «$1» ат алам джокъду.',
'allpages-hide-redirects' => 'Башха бетлеге джиберген бетлени (редиректлени) джашыр',

# SpecialCachedPage
'cachedspecial-refresh-now' => 'Ахыр версиягъа къарау.',

# Special:Categories
'categories' => 'Категорияла',
'categoriespagetext' => 'Ызындан келген {{PLURAL:$1|категория|категорияла}} бет неда медия-файл тутадыла.
[[Special:UnusedCategories|Хайырланмагъан категорияла]] былайда кёргюзюлмегендиле.
Дагъыда [[Special:WantedCategories|изленнген категорияла]] гъакъарагъыз.',
'categoriesfrom' => 'Бу бла башланнган категорияланы кёргюз:',
'special-categories-sort-count' => 'санына кёре сафла',
'special-categories-sort-abc' => 'алфавит халда тиз',

# Special:DeletedContributions
'deletedcontributions' => 'Кетерилген къошулуучуну къошхан юлюшю',
'deletedcontributions-title' => 'Кетерилген къошулучуну къошхан юлюшю',
'sp-deletedcontributions-contribs' => 'къошхан юлюш',

# Special:LinkSearch
'linksearch' => 'Тыш джибериулени излеу',
'linksearch-pat' => 'Излеуге шаблон:',
'linksearch-ns' => 'Ат алам:',
'linksearch-ok' => 'Таб',
'linksearch-text' => '"*.wikipedia.org" кибик символлла хайырландырыргъа боллукъдула.
Эм азы бла огъары дараджаны домени керекди, юлгюге: "*.org".<br />
Дагъан болгъан протоколла: <code>$1</code> (протокол белгиленмеген эсе, тынгылау бла http:// боллукъду)',
'linksearch-line' => '$1-ге  $2-ден джибериу берилгенди',
'linksearch-error' => 'Джокерле къуру адреслени аллында хайырланыргъа боллукъдула.',

# Special:ListUsers
'listusersfrom' => 'Бу бла башланнган къошулуучуланы кёргюз:',
'listusers-submit' => 'Кёргюз',
'listusers-noresult' => 'Къошулуучула табылмадыла.',
'listusers-blocked' => '(блокга салыныбды)',

# Special:ActiveUsers
'activeusers' => 'Актив къошулуучуланы тизмеси',
'activeusers-intro' => 'Бу, ахыр $1 {{PLURAL:$1|кюнде|кюнде}} къаллайда болсун ишлетме кёргюзген къошлуучуланы тизмесиди.',
'activeusers-count' => 'Ахыр {{PLURAL:$3|кюнде|$3 кюнде}} $1 {{PLURAL:$1|тюрлендириу|тюрлендириу}}',
'activeusers-from' => 'Бу бла башланнган къошлуучуланы кёргюз:',
'activeusers-hidebots' => 'Ботланы джашыр',
'activeusers-hidesysops' => 'Администраторланы джашыр',
'activeusers-noresult' => 'Къошлуучу табылмады.',

# Special:ListGroupRights
'listgrouprights' => 'Къошулуучуланы къауумуну хакълары',
'listgrouprights-summary' => 'Тюбюндеги бу викиде танылгъан къошулуучу къауумланы эмда аланы хакъларыны тизмеси.
Энчи хакъла бла байламлы [[{{MediaWiki:Listgrouprights-helppage}}|асламыракъ билги]] болургъа болур.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Берилген хакъла</span>
* <span class="listgrouprights-revoked">Сыйырылгъан хакъла</span>',
'listgrouprights-group' => 'Къауум',
'listgrouprights-rights' => 'Хакъла',
'listgrouprights-helppage' => 'Help:Къауумланы хакълары',
'listgrouprights-members' => '(къауумну тизмеси)',
'listgrouprights-right-display' => '<span class="listgrouprights-granted">$1 <code>($2)</code></span>',
'listgrouprights-right-revoked' => '<span class="listgrouprights-revoked">$1 <code>($2)</code></span>',
'listgrouprights-addgroup' => '{{PLURAL:$2|Къауум|Къауум}} къошаргъа боллукъду: $1',
'listgrouprights-removegroup' => 'бу {{PLURAL:$2|къауумдан|къауумладан}} къыстаргъа боллукъду: $1',
'listgrouprights-addgroup-all' => 'Бютеу къауумлагъа къошаргъа боллукъду',
'listgrouprights-removegroup-all' => 'бютеу къауумладан къыстаргъа боллукъду',
'listgrouprights-addgroup-self' => 'кесини тергеу джазыууна {{PLURAL:$2|къауум|къауумла}} къошаллыкъды: $1',
'listgrouprights-removegroup-self' => 'кесини тергеу джазыуундан {{PLURAL:$2|къауум|къауумланы}} къораталлыкъды: $1',
'listgrouprights-addgroup-self-all' => 'Бютеу къауумланы кесини тергеу джазыууна къошаллыкъды',
'listgrouprights-removegroup-self-all' => 'Кесини тергеу джазыуундан бютеу къауумланы къораталлыкъды',

# Email user
'mailnologin' => 'Джиберирге адрес джокъду',
'mailnologintext' => 'Башха къошулуучулагъа эл. почта джиберелир ючюн [[Special:UserLogin|системагъа кирирге]] керексиз эм [[Special:Preferences|джарашдырыуланы]] бетинде джараулу эл. почта адрес болургъа керекди.',
'emailuser' => 'Къошулуучугъа письмо',
'emailuser-title-target' => '{{GENDER:$1|Къошулуучугъа}} электрон джазма джазыу',
'emailuser-title-notarget' => 'Электрон джазма джазыу',
'emailpage' => 'Къошулуучугъа письмо джибер',
'emailpagetext' => 'Бу къошулуучуну почтасына письмо джиберир ючюн бу форманы толтурургъа боллукъсуз.
Ызына адрес болуб, сиз [[Special:Preferences|джарашдырыуларыгъызда]] джазгъан адрес белгиленникди, ол себебден сизни письмогъузну аллыкъ сизге тюз джууаб берирге мадарлы боллукъду.',
'usermailererror' => 'Халат ючюн элетктрон письмо ызына къайтды:',
'defemailsubject' => '{{SITENAME}} — $1 къошулуучудан билдириу',
'usermaildisabled' => 'Къошулуучуну электрон почтасы джукъланыбды',
'usermaildisabledtext' => 'Сиз бу викини башха къошулуучуларына электрон письмола джиберелмейсиз',
'noemailtitle' => 'Электрон почтаны адреси джокъду',
'noemailtext' => 'Бу къошулуучу керти электрон адресин бермегенди.',
'nowikiemailtitle' => 'Электрон письмо джиберирге эркинлик джокъду',
'nowikiemailtext' => 'Бу къошулуучу, башха къошулуучуладан электрон писмо алыргъа излемегенин билдиргенди.',
'emailtarget' => 'Аллыкъ къошулуучуну атын джазыгъыз',
'emailusername' => 'Къошулуучуну аты:',
'emailusernamesubmit' => 'Джибер',
'email-legend' => 'Башха {{SITENAME}} къошулуучугъа электрон письмо джибер',
'emailfrom' => 'Кимден:',
'emailto' => 'Кимге:',
'emailsubject' => 'Тема:',
'emailmessage' => 'Билдириу:',
'emailsend' => 'Джибер',
'emailccme' => 'Письмону копиясын меннге джибер',
'emailccsubject' => '$1-ге джиберилген письмону копиясы: $2',
'emailsent' => 'Письмо джиберилди',
'emailsenttext' => 'Сизни электрон билдириуюгюз джиберилгенди.',
'emailuserfooter' => 'Бу письмо $1 джанындан $2 къошулуучугъа, {{SITENAME}} сайтдагъы "Къошулуучугъу письмо джибер" функциясы бла джиберилгенди.',

# User Messenger
'usermessage-summary' => 'Система билдириу джазыгъыз',
'usermessage-editor' => 'Система билдириучю',

# Watchlist
'watchlist' => 'Кёзюмде тургъан тизмем',
'mywatchlist' => 'Кёздеги тизме',
'watchlistfor2' => '$1 ючюн $2',
'nowatchlist' => 'Кёзюгюзде тургъан тизмегиз бошду.',
'watchlistanontext' => 'Кёзюгюзде тургъан тизмегизни статьяларын кёрюр неда тюрлендирир ючюн бери ётюгюз: $1.',
'watchnologin' => 'Системагъа кирирге керекди.',
'watchnologintext' => 'Кёзюгюзде тургъан тизмегизни тюрлендирир ючюн [[Special:UserLogin|системагъа кирирге керексиз]].',
'addwatch' => 'Кёзде тургъан тизмеге къош',
'addedwatchtext' => '«[[:$1]]» бет [[Special:Watchlist|кёзюгюзде тургъан тизмегизге]] къошулду.
Бу бетни эмда муну бла байламлы сюзюу бетни тюрлениулери ол тизмеде белгиленникдиле, [[Special:RecentChanges|джангы тюрлениулени тизмесини]] бетинде уа къалын шрифт бла чертилинникдиле, кёрюрге тынчыракъ болурча.',
'removewatch' => 'Кёзде тургъан тизмеден кетер',
'removedwatchtext' => '«[[:$1]]» бет сизни [[Special:Watchlist|кёзюгюзде тургъан тизмегизден]] кетерилди.',
'watch' => 'Кёзде тут',
'watchthispage' => 'Бу бетни кёзде тут',
'unwatch' => 'Кёзде тутма',
'unwatchthispage' => 'Кёзде тутууну тохтат',
'notanarticle' => 'Статья тюлдю',
'notvisiblerev' => 'Версия кетерилгенди',
'watchlist-details' => 'Кёзюгюзде тургъан тизмегизде, сюзюу бетлери саналмай {{PLURAL:$1|$1 бет|$1 бет}} барды.',
'wlheader-enotif' => 'Эл. почта бла хапар бериу джандырылыбды.',
'wlheader-showupdated' => "Ахыр кириуюгюзден сора бетни тюрлениулери '''къалын''' джазыу бла кёргюзюлгенди.",
'watchmethod-recent' => 'кёзде тургъан бетледе этилген ахыр тюрлениуле кёрюу',
'watchmethod-list' => 'кёзде тургъан бетледе этилген ахыр тюрлениуле кёрюу',
'watchlistcontains' => 'Кёзюгюзде тургъан тизмегизде $1 {{PLURAL:$1|бет|бет}} барды.',
'iteminvalidname' => "'$1' элемент бла проблемала, джараусуз ат...",
'wlnote' => "Тюбюндеди кёргюзюлгенди: ахыр '''$2''' сагъатха этилген ахыр '''$1''' тюрлениу, $3 $4 заманнга дери.",
'wlshowlast' => 'Арт $1 сагъат $2 кюннге $3 кёргюз',
'watchlist-options' => 'Кёзде тургъан тизмени джарашдырыулары',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Кёзде тургъан тизмеге къошуу...',
'unwatching' => 'Кёзде тургъан тизмеден кетериу...',

'enotif_mailer' => '{{SITENAME}} Билдириу Почта',
'enotif_reset' => 'Бютеу бетлени къаралгъанча белгиле',
'enotif_impersonal_salutation' => '{{SITENAME}} къошулуучу',
'enotif_lastvisited' => 'Ахыр кириуюгюзден бу кереге дери болгъан бютеу тюрлениулени кёрюр ючюн $1-ге къара.',
'enotif_lastdiff' => 'Бу тюрлениуню кёрюр ючюн, $1 бетге къарагъыз.',
'enotif_anon_editor' => 'аноним къошулуучу $1',
'enotif_body' => 'Багъалы $WATCHINGUSERNAME,

{{SITENAME}} сайтдагъы $PAGETITLE башлыкълы бет $PAGEEDITDATE заманда $PAGEEDITOR джанындан $CHANGEDORCREATED тюзетилгенди неда тюрледирилгенди. Бетни ахыр халына $PAGETITLE_URL адресден кирирге боллукъсуз.

$NEWPAGE

Тюрлендириуню этген къошлуучуну ангылатыуу: $PAGESUMMARY $PAGEMINOREDIT

Бетни тюрлендирген къошулуучуну билгилери:
эл. почта: $PAGEEDITOR_EMAIL
вики: $PAGEEDITOR_WIKI

Бу бетге киргинчигизге дери бу бет бла байламлы башха тюрлендириулени юсюнден хапар джибериллик тюлдю. Кёзде тургъан тизмегиздеги бютеу бетлени билдириу джибериу опцияларын джукълаталлыкъсыз.

{{SITENAME}} сайтны билдириу системасы.

--

Джарашдырыуланы тюрлендирир ючюн:
{{fullurl:{{#special:Watchlist}}/edit}}

Кёзде тургъан тизмеден кетерир ючюн:
$UNWATCHURL

Болушлукъ эм теджеуле ючюн:
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'къуралды',
'changed' => 'тюрленди',

# Delete
'deletepage' => 'Бетни кетер',
'confirm' => 'Къабыл эт',
'excontent' => 'ичиндеги: $1',
'excontentauthor' => 'ичиндеги: «$1» (юлюш къошхан джангыз къошулуучу [[Special:Contributions/$2|$2]] эди)',
'exbeforeblank' => "Кетериуню алындагъы ичи: '$1'",
'exblank' => 'бет бош эди',
'delete-confirm' => '«$1» — кетериу',
'delete-legend' => 'Кетер',
'historywarning' => "'''Эсгериу:''' кетериле тургъан бетни $1 {{PLURAL:$1|версиялы|версиялы}} тарихи барды:",
'confirmdeletetext' => 'Сиз бетни (неда суратны) бютеу тюрлениу тарихи бла толу кетерирге соргъансыз.
Алай этерге керти излегенигизни эм  [[{{MediaWiki:Policy-url}}кетериу политика]] бёлюмде ачыкъланнган джорукъла бла этгенигизни, бегитигиз.',
'actioncomplete' => 'Этим толтурулду',
'actionfailed' => 'Этим джетишимсиз болду',
'deletedtext' => '«$1» бет кетерилди.
Ахыр кетерилгенлени тизмесин кёрюр ючюн, $2на къарагъыз.',
'dellogpage' => 'Кетерилгенлени журналы',
'dellogpagetext' => 'Тюбюндеги тизме ахыр кетериулени журналыды.',
'deletionlog' => 'кетериулени журналы',
'reverted' => 'Алгъынгы версиясына къайтарылгъанды',
'deletecomment' => 'Чурум:',
'deleteotherreason' => 'башха чурум / дагъыда:',
'deletereasonotherlist' => 'Башха чурум',
'deletereason-dropdown' => '* Кетериуню баш чурумлары
** Авторну тилеги
** Автор хакъланы бузуу
** Вандализм',
'delete-edit-reasonlist' => 'Чурумланы тизмесин тюрлендир',
'delete-toobig' => 'Бу бетни, $1 {{PLURAL:$1|версияла|версияла}} бла бек узун тарихи барды.
Быллай бетлени кетерилиую, {{SITENAME}} сайтны бузмаз ючюн чекленгенди.',
'delete-warning-toobig' => 'Бу бетни уллу тюрлендириу тарихи барды, $1 {{PLURAL:$1|версиядан|версиядан}} артыкъ.
Буну кетериу {{SITENAME}} ишлеулени асхатыргъа боллукъду;
эсгере андан ары ишлегиз.',

# Rollback
'rollback' => 'Тюрлендириулени ызына ал',
'rollback_short' => 'Ызына ал',
'rollbacklink' => 'ызына къайтарыу',
'rollbackfailed' => 'Ызына алыу джетишимсизди',
'cantrollback' => 'Бетге ахыр юлюш къошхан къошулуучу, бетге юлюшюн къошхан джангыз адам болгъаны себебли, тюрлендириуле ызына алыналмайдыла.',
'alreadyrolled' => '[[User:$2|$2]] ([[User talk:$2|сюзюу]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) джанындан [[:$1]] бетде этилген ахыр тюрлендириу ызына алыналмайды;
башха бири бетде тюрлендириу этди неда бетни ызына алды.

Ахыр тюрлендириуюню этген: [[User:$3|$3]] ([[User talk:$3|сюзюу]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Тюрлениу былай ангылатылгъанды: ''«$1»''.",
'revertpage' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|сюзюу]]) къошулуучуну тюрлендириулери кетерилиб, [[User:$1|$1]] къошулуучуну версиясы къайтарылды.',
'revertpage-nouser' => 'Тюрлендириуле (къошулуучуну аты кетерилгенди) [[User:$1|$1]] къошулуучуну версиясына къайтарылдыла',
'rollback-success' => '$1 этген тюрлендириуле ызына алыныб;
$2 тюрлендирген алгъаракъ версиясына къайтылды.',

# Edit tokens
'sessionfailure-title' => 'Сеансны халаты',
'sessionfailure' => 'Ишни бу сеансы бла проблемала болгъаннга ушайды;
бу этим "сеансны гудулаууна" къаршчылыкъ этилир ючюн тохтатылгъанды.
Тилейбиз, "Ызына" деген тиекни басыгъыз эмда сиз кирген бетни джангыдан джюклегиз.',

# Protect
'protectlogpage' => 'Джакъланыуну журналы',
'protectlogtext' => 'Къоруугъа алыу/чыгъарыу бла байламлы тюрлениулени кёресиз.
Андан аслам билги ючюн [[Special:ProtectedPages|Коруугъа алыннган бетле]] атлы бетге къараргъа боллукъсуз.',
'protectedarticle' => '«[[$1]]» джакъланыбды',
'modifiedarticleprotection' => '"[[$1]]" бетни джакъланыу дараджасы тюрленилгенди',
'unprotectedarticle' => '«[[$1]]» бетден джакълыкъ алыннганды',
'movedarticleprotection' => 'Къоруулауну джарашдырыулары "[[$2]]" бетден "[[$1]]" бетге кёчюрюлгенди',
'protect-title' => '"$1" ючюн къоруулау дараджаны сайлагъыз',
'protect-title-notallowed' => '«$1» джакълау дараджагъа къара',
'prot_1movedto2' => '[[$1]] бетни джангы аты: [[$2]]',
'protect-legend' => 'Къоруулауну къабыл эт',
'protectcomment' => 'Чурум:',
'protectexpiry' => 'Бошалады:',
'protect_expiry_invalid' => 'Джакъланыуну бошалгъан заманы терсди.',
'protect_expiry_old' => 'Джакъланыу бошалгъанны заманы озгъанда.',
'protect-unchain-permissions' => 'Къоруулауну къошакъ параметрлерини ачыгъыз',
'protect-text' => "Былайда сиз '''$1''' бетни джакълау дараджасына къараб тюрлендирирге боллукъсуз.",
'protect-locked-blocked' => "Тергеу джазыуугъуз джасакъ болса, бетни къоруулауну дараджасын тюрлендиреллик тюлсюз.
'''$1''' бетдеги бусагъатдагъы параметрле:",
'protect-locked-dblock' => "Актив билги базаны киритленнгени себебли, коъруулау параметрлени тюрлендиреллик тюлсюз.
'''$1''' бет ючюн бусагъатдагъы параметрле:",
'protect-locked-access' => "Сизге хакъ джетмейди бетни джакълау дараджасын тюрлендирирге. '''$1''' бетни бусагъатдагъы джакълау джарашдырыулары:",
'protect-cascadeon' => 'Бу бет {{PLURAL:$1|тюбюнде белгиленнген бетге|тюбюнде белгиленнген бетлеге}} къошулгъаны ючюн джакъланыбды. Ол {{PLURAL:$1|бетде|бетледе}} каскадлы джакълау салыныб турады. Сиз бу бетни джакълау дараджасын тюрлендирирге боллукъсуз, алай а ол каскад джакълауну тюрледирлик тюлдю.',
'protect-default' => 'Джакълаусуз',
'protect-fallback' => '«$1» эркинлик керекди',
'protect-level-autoconfirmed' => 'Джангы эм регистрация этмеген къошулуучуладан джакъла',
'protect-level-sysop' => 'Къуру администраторла',
'protect-summary-cascade' => 'каскадлы',
'protect-expiring' => 'бошалады $1 (UTC)',
'protect-expiring-local' => '$1 бошалады',
'protect-expiry-indefinite' => 'болджалсыз',
'protect-cascade' => 'Бу бетге кирген бетлени джакъла (каскадлы джакълау)',
'protect-cantedit' => 'Сиз бу бетни джакълау дараджасын тюрлендиреллик тюйюлсюз, бу бетни тюрлендирирге хакъыгъыз болмагъаны ючюн.',
'protect-othertime' => 'Башха заман:',
'protect-othertime-op' => 'башха заман',
'protect-existing-expiry' => 'Бошалыуну бусагъатдагъы заманы: $3, $2',
'protect-otherreason' => 'Башха/къошакъ чурум:',
'protect-otherreason-op' => 'Башха чурум',
'protect-dropdown' => '*Асламысы бла джюрюген къоруулау чурумла
** Тохтаусуз вандализм
** Тохтаусуз спам
** Тюрлендириулени урушу
** Мийик трафикли бет',
'protect-edit-reasonlist' => 'Чурумланы тизмесин тюрлендир',
'protect-expiry-options' => '1 сагъат:1 hour,1 кюн:1 day,1 ыйыкъ:1 week,2 ыйыкъ:2 weeks,1 ау:1 month,3 ау:3 months,6 ау:6 months,1 джыл:1 year,болжалсыз:infinite',
'restriction-type' => 'Хакълары:',
'restriction-level' => 'Ийилген дараджасы:',
'minimum-size' => 'Минимум ёлчеми',
'maximum-size' => 'Максимум ёлчем:',
'pagesize' => '(байт)',

# Restrictions (nouns)
'restriction-edit' => 'Тюрлендириу',
'restriction-move' => 'Атын тюрлендир',
'restriction-create' => 'Къура',
'restriction-upload' => 'Джюкле',

# Restriction levels
'restriction-level-sysop' => 'толу къоруу',
'restriction-level-autoconfirmed' => 'джарым къоруу',
'restriction-level-all' => 'бютеу джараджала',

# Undelete
'undelete' => 'кетерилген бетлени кёргюз',
'undeletepage' => 'Кетерилген бетлени къара эмда ызына къайтар.',
'undeletepagetitle' => "'''Тюбюнде [[:$1|$1]] бетни кетерилген версиялары кёрюннгенди'''.",
'viewdeletedpage' => 'Кетерилген бетлеге къара',
'undeletepagetext' => 'Тюбюндеги {{PLURAL:$1|бет|$1 бет}} кетерилгенди, алай а алкъыр архивдеди эм ызына къайтарыр мадар барды.
Архив кёзюулю ариуланыргъа болады.',
'undelete-fieldset-title' => 'Версияны ызына джюкле',
'undeleteextrahelp' => "Бетле бла бирге тарихини ызына къайтарыр ючюн бютеу белгилени бош къоюгъузда '''Ызына къайтар''' тиекден басыгъыз. Бетни тарихини башха-башха къайтарыр ючюн къайтарыргъа излеген тюрлендириулени белгилеб '''Ызына къайтар''' тиекден басыгъыз. Сайланнган белгилени эм комментарийлени кетерир ючюн '''Ариула''' тиекден басыгъыз.",
'undeleterevisions' => '$1 {{PLURAL:$1|версия|версия}} архив этилди',
'undeletehistory' => 'Сиз бетни ызына къайтарсагъыз, аны тюрлендириу тарихи да ызына къайтады.
Кетерилгенден сора ол ат бла джангы бет къуралса, ызына къайтхан версияла джангы версиланы аллында тюрлендириуню тарихинде чыгъарыкъдыла.',
'undeleterevdel' => 'Ызына къайтарыу, ахыр версияны неда файлны бузаргъа болса, тохтатыллыкъды.
Быллай болумда, эм джангы кетерилген версияны сайлагъыз неда джашырыууну кетеригиз.',
'undeletehistorynoadmin' => 'Бу статья кетерилгенди. Кетериу чуруму бла кетериуню аллында статьяны джарашдыргъан къошулуучуланы юсюнден ангылатыу тюбюрек берилгенди.  Бу кетерилген статьяны текстин джангыз администраторла къараяллыкъдыла.',
'undelete-revision' => '$3 этген $1 бетни кетерилген версиясы ($4 $5):',
'undeleterevision-missing' => 'Джараусуз неда тас версия.
Версия архивден кетерилген неда джибериу терс болургъа болур.',
'undelete-nodiff' => 'Аллындагъы версиясы табылмады.',
'undeletebtn' => 'Ызына къайтар',
'undeletelink' => 'къара/ызына сал',
'undeleteviewlink' => 'кёргюз',
'undeletereset' => 'Ариула',
'undeleteinvert' => 'Сайлауну ызына бур',
'undeletecomment' => 'Чурум:',
'undeletedrevisions' => '$1 {{PLURAL:$1|тюрлендириу|тюрлендириу}} ызына къайтарылды',
'undeletedrevisions-files' => '{{PLURAL:$1|1 версия|$1 версия}} бла {{PLURAL:$2|1 файл|$2 файл}} ызына къайтарылды',
'undeletedfiles' => '{{PLURAL:$1|1 файл|$1 файл}} ызына къайтарылды',
'cannotundelete' => 'Бетни неда медианы сизден алгъа башха къошулуучу ызына къайтаргъаны себебли сизини ызына къайтарыу ишлемигиз джараусузду.',
'undeletedpage' => "'''$1 бет ызына къайтарылды '''

Ахыр кетериу бла ызына къайтарыуну кёрюр ючюн [[Special:Log/delete|кетериуню журнал]]ына къарагъыз.",
'undelete-header' => 'Кёб болмай кетерилген бетлени кёрюр ючюн [[Special:Log/delete|кетериу журнал]]гъа къарагъыз.',
'undelete-search-box' => 'Кетерилген бетлени изле',
'undelete-search-prefix' => 'Буну бла башланнган бетлине кёргюз:',
'undelete-search-submit' => 'Изле',
'undelete-no-results' => 'Кетериуню архивинде келишген бет табылмагъанды.',
'undelete-filename-mismatch' => '$1 заман билгиси болгъан файлны ызына къайтарыр мадар джокъду: файлны аты келишмейди',
'undelete-bad-store-key' => '$1 заман билгиси болгъан файлны ызына къайтарыр мадар джокъду: кетируню аллында файл тас болгъанды.',
'undelete-cleanup-error' => 'Хайырланмагъан "$1" архив файлны кетериуде халат.',
'undelete-missing-filearchive' => 'Файлны архив ID-си билги базада болмагъаны себебли, "$1" ызына къатарылалмайды.',
'undelete-error-short' => 'Бу файлны кетериуюню ызына алыныуда халат чыкъды: $1',
'undelete-error-long' => 'Бу файлны кетерилиуюню ызына къайтарыуда халатла чыкъдыла:

$1',
'undelete-show-file-confirm' => '"<nowiki>$1</nowiki>" файлны $2 $3 замандагъы кетерилген версиясын кёрюрге излегенигизге ишексизмисиз?',
'undelete-show-file-submit' => 'Хоу',

# Namespace form on various pages
'namespace' => 'Атла алам:',
'invert' => 'Сайланнганны айландыр',
'namespace_association' => 'Байламлы ат алам',
'blanknamespace' => '(Баш)',

# Contributions
'contributions' => 'Къошулуучуну къошханы',
'contributions-title' => '$1 къошулуучуну къошагъы',
'mycontris' => 'Къошум',
'contribsub2' => '$1 ($2) къошакъ',
'nocontribs' => 'Бу критерийлеге келишген тюрлениуле табылмадыла',
'uctop' => '(ахыргъы)',
'month' => 'Айдан башлаб (эм алгъаракъ):',
'year' => 'Джылдан башлаб (эм алгъаракъ):',

'sp-contributions-newbies' => 'Джангы тергеу джазыу (аккаунт) бла этилге къошакъны кёргюз',
'sp-contributions-newbies-sub' => 'Джангы тергеу джазыуладан (аккаунтладан)',
'sp-contributions-newbies-title' => 'Джангы тергеу джазыуладан этилген къошакъ',
'sp-contributions-blocklog' => 'Блок этиуню журналы',
'sp-contributions-deleted' => 'къошулуучуну кетерилген тюрлендириулери',
'sp-contributions-uploads' => 'джюкленнгенле',
'sp-contributions-logs' => 'журналла',
'sp-contributions-talk' => 'сюзюу',
'sp-contributions-userrights' => 'къошулуучуну хакъларына оноу этиу',
'sp-contributions-blocked-notice' => 'Бу къошулуучу бусагъатда блокланыб турады. Тюбюнде блокланыуланы журналындан ахыр джазыу бериледи:',
'sp-contributions-blocked-notice-anon' => 'Бу IP-адрес бусагъатда блокга салыныбды.
Тюбюнде блокланыуланы журналындан ахыр джазыу бериледи:',
'sp-contributions-search' => 'Къошакъны излеу',
'sp-contributions-username' => 'Къошулуучуну IP-адреси неда аты:',
'sp-contributions-toponly' => 'Къуру ахыр версияланы кёргюз',
'sp-contributions-submit' => 'Таб',

# What links here
'whatlinkshere' => 'Былайгъа джибериуле',
'whatlinkshere-title' => '«$1» бетге джиберген бетле',
'whatlinkshere-page' => 'Бет:',
'linkshere' => "'''[[:$1]]''' битге джиберген бетле:",
'nolinkshere' => "'''[[:$1]]'' бетге башха бетле джибермейдиле.",
'nolinkshere-ns' => "Сайланнган атла аламда '''[[:$1]]''' бетге джиберген бет джокъду.",
'isredirect' => 'джибериу бет',
'istemplate' => 'къошуу',
'isimage' => 'файлгъа джибериу',
'whatlinkshere-prev' => '{{PLURAL:$1|алдагъы|алдагъы $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|эндиги|эндиги $1}}',
'whatlinkshere-links' => '← джибериуле',
'whatlinkshere-hideredirs' => 'джибериуле $1',
'whatlinkshere-hidetrans' => 'Къошулуулары $1',
'whatlinkshere-hidelinks' => '$1 джибериуле',
'whatlinkshere-hideimages' => 'Файл джибериулени $1',
'whatlinkshere-filters' => 'Фильтрле',

# Block/unblock
'block' => 'Къошулуучуну блокла',
'unblock' => 'Къошулуучуну блок этилиуюн алыу',
'blockip' => 'Бу къошулуучуну блок эт',
'blockip-title' => 'Къошулуучуну блокга салыу',
'blockip-legend' => 'Къошулуучуну блокга салыу',
'blockiptext' => 'Тюбюндеги форманы хайырланыб белгили бир IP-ден неда регистрация этилген къошулуучуну тюрлениу этиуюню тыяллыкъсыз. Бу, джангыз вандализмни тыяр ючюн эм [[{{MediaWiki:Policy-url}}|джорукълагъа]] келишиулю этилирге керекди. Тюбюрек тыйыу бла байламлы ангылатыу джазыгъыз. (юлгю: -Бу- бетледе вандализм этилгенди).',
'ipadressorusername' => 'IP-адрес неда къошулуучу ат:',
'ipbexpiry' => 'Бошаллыкъды (ётсе):',
'ipbreason' => 'Чурум:',
'ipbreasonotherlist' => 'Башха чурум:',
'ipbreason-dropdown' => '* Тыйылыуну асламысында тюбеген чурумлары
** Джалгъан билги къошуу
** Бетлени ичиндегин кетериу
** Тыш спам-сайтлагъа джибериу бериу
** Бетлеге магъанасыз/ангыламсыз джазмала къошуу
** Къошулуучуланы къоркъутургъа излеу
** Талай тергеу джазыу къураб аманлыкъгъа хайырланыу
** Джарамагъан къошулуучу ат',
'ipbcreateaccount' => 'Джангы тергеу джазыу къурауну тый',
'ipbemailban' => 'Къошулуучуну эл. почта  бла письмо джибериуюне тыйгъыч бол',
'ipbenableautoblock' => 'Бу къошулуучуну джанындан хайырланнган ахыр IP адресни эм тюрлениу этерге кюрешген IP-лени автомат халда тый',
'ipbsubmit' => 'Бу адресни/къошулуучуну блокга сал',
'ipbother' => 'Башха заман:',
'ipboptions' => '2 сагъат:2 hours,1 кюн:1 day,3 кюн:3 days,1 ыйыкъ:1 week,2 ыйыкъ:2 weeks,1 ай:1 month,3 ай:3 months,6 ай:6 months,1 джыл:1 year,болджалсыз:infinite',
'ipbotheroption' => 'башха',
'ipbotherreason' => 'Башха/къошакъ чурум:',
'ipbhidename' => 'Къошулуучуну атын тюрлендириуле бла спиоскладан джашыр',
'ipbwatchuser' => 'Бу къошулуучуну, къошулуучу эмда сюзюу бетлерин кёзде тургъан тизмеге къош',
'ipb-change-block' => 'Бу джарашдырыула бла къошулуучуну джангыдан тый',
'ipb-confirm' => 'Блок салыуну бегит',
'badipaddress' => 'Терс IP-адрес',
'blockipsuccesssub' => 'Тыйыу джетишимли болду',
'blockipsuccesstext' => '[[Special:Contributions/$1|«$1»]] блокланды.<br />
Блокланыуланы кёрюр ючюн [[Special:BlockList|блокланнган IP-адреслени тизмесине]] къарагъыз.',
'ipb-edit-dropdown' => 'Чурумланы тизмесин тюрлендир',
'ipb-unblock-addr' => '$1 блокдан ал',
'ipb-unblock' => 'Къошулуучуну неда IP-адресни тыйылыуун тохтат',
'ipb-blocklist' => 'Бусагъатдагъы болгъан тыйгъычланы кёргюз',
'ipb-blocklist-contribs' => '$1 къошулуучуну къошханы',
'unblockip' => 'Къошулуучуну тыйгъыч этиуню тохтат',
'unblockiptext' => 'Алгъаракъ тыйылгъан IP-адресге неда къошулуучюге джазар эркинликни къайтарыргъа излей эсенг, тюбюндеги форманы хайырландыр.',
'ipusubmit' => 'Бу тыйгъычны кетер',
'unblocked' => '[[User:$1|$1]]- тыйылыу тохтатылгъанды',
'unblocked-id' => '$1 тыйылыу къоратылгъанды',
'ipblocklist' => 'Блок этилиннген къошулуучула',
'ipblocklist-legend' => 'Тыйылгъан къошулуучуну аты',
'blocklist-timestamp' => 'Дата/заман',
'blocklist-target' => 'Ышан',
'blocklist-expiry' => 'Бошалыу датасы',
'blocklist-by' => 'Блоклагъан администратор',
'blocklist-params' => 'Блоклауну параметрлери',
'blocklist-reason' => 'Чурум',
'ipblocklist-submit' => 'Таб',
'ipblocklist-localblock' => 'Локал блокга салыу',
'ipblocklist-otherblocks' => 'Башха {{PLURAL:$1|блокга салыу|блокга салыула}}',
'infiniteblock' => 'Болджалсыз блокга салыу',
'expiringblock' => '$1 $2 бошаллыкъды',
'anononlyblock' => 'къуру анонимле',
'noautoblockblock' => 'автомат блокга салыу джукъланыбды',
'createaccountblock' => 'тергеу джазыула къураргъа болмайды',
'emailblock' => 'e-mail иерге болмайды',
'blocklist-nousertalk' => 'кесини сюзюу бетин тюрлендирелмейди',
'ipblocklist-empty' => 'Блокга салыуланы тизмеси бошду.',
'ipblocklist-no-results' => 'Берилген IP-адрес неда къошулуучу ат блокга салынмагъанды.',
'blocklink' => 'блок эт',
'unblocklink' => 'блокну ал',
'change-blocklink' => 'блок этиуню тюрлендир',
'contribslink' => 'къошакъ',
'emaillink' => 'e-mail джибер',
'autoblocker' => 'Сизни IP-адресигиз "[[User:$1|$1]]" хайырланнган адрес болгъаны себебли,автомат халда тыйылдыгъыз. $1 атлы къошулуучуну тыйылыу чуруму: "\'\'\'$2\'\'\'"',
'blocklogpage' => 'Блок этиуню журналы',
'blocklog-showlog' => 'Бу къошулуучу мындан алгъа тыйылгъанды.
Тыйылыуну журналы тюбюрек кёргюзюлгенди:',
'blocklog-showsuppresslog' => 'Бу къошулуучу мындан алгъа тыйылгъанды эмда джашырылгъанды.
Джашырыу журналны кёрюр ючюн тюбюрек къарагъыз:',
'blocklogentry' => '[[$1]] къошулуучугъа $2 болджалгъа тыйгъыч салды $3',
'reblock-logentry' => '[[$1]] ючюн бошалыу заманын $2 $3 этиб тыйыу джарашдырыуларын тюрлендирди',
'blocklogtext' => 'Къошулуучуланы тыйылыу бла тыйылыудан чыгъарыуну журналы.
Автомат халда тыйылгъан IP-адресле былайда кёргюзюлмейдиле.
Банла бла блокланы кёрюр ючюн [[Special:BlockList|блок тизмесине]] къарагъыз.',
'unblocklogentry' => '$1 къошулуучуну тыйгъычын кетерди',
'block-log-flags-anononly' => 'джангыз аноним къошулуучула',
'block-log-flags-nocreate' => 'Тергеу джазыуланы (аккаунтланы) регистрациялары тыйылыбды',
'block-log-flags-noautoblock' => 'автоблок джукъланыбды',
'block-log-flags-noemail' => 'e-mail джибериу амал блокга салыннганды',
'block-log-flags-nousertalk' => 'кесини сюзюу бетин тюрлендирелмейди',
'block-log-flags-angry-autoblock' => 'кенгерилген автоблок джандырылгъанды',
'block-log-flags-hiddenname' => 'къошулуучуну аты джашырыбды',
'range_block_disabled' => 'Администратор джанындан диапазонланы джукълатыу джасакъ этилгенди.',
'ipb_expiry_invalid' => 'Бошалыу заманы терс белгиленнгенди.',
'ipb_expiry_temp' => 'Джашыртын къошулуучуну атыны тыйылыуу болджалсыз болургъа керекди.',
'ipb_hide_invalid' => 'Бу тергеу джазыуну джашырыр мадар джокъду; асыры кёб тюрлендириу болургъа болур.',
'ipb_already_blocked' => '«$1» блокга салыныбды',
'ipb-needreblock' => '$1 алайсызда тыйылыбды. Джарашдырыуланы тюрлендирирге излеймисиз?',
'ipb-otherblocks-header' => 'Башха {{PLURAL:$1|блок|блокла}}',
'ipb_cant_unblock' => 'Халат: Блок ID $1 табылмагъанды.
Блок къоратылгъан болур.',
'ipb_blocked_as_range' => 'Халат: $1 IP-адрес ачыкъдан тыйылмагъаны себебли, блокдан чыгъараллыкъ тюлсюз.
Алай  а, бу  $2 диапазонну кесеги кибик тыйылгъанды, диапазонну блокдан чыгъарыргъа боллукъсуз.',
'ip_range_invalid' => 'Джараусуз IP диапазон.',
'ip_range_toolarge' => '/$1 кёб диапазонланы блокга салыргъа джарамайды.',
'blockme' => 'Мени блокга сал',
'proxyblocker' => 'Проксилени тыйыу',
'proxyblocker-disabled' => 'Бу функция джукълатылыбды.',
'proxyblockreason' => 'IP-адресигиз ачыкъ прокси болгъаны ючюн тыйылдыгъыз.
Тилейбиз, кесигизни интернет-провайдеригиз бла, неда дагъан болгъан къуллукъла бла байланыб, къоркъуусузлукъну бу проблемасын билдиригиз.',
'proxyblocksuccess' => 'Тындырылды.',
'sorbsreason' => 'IP-адресигиз, {{SITENAME}} сайтда  хайырланнган DNSBL-де ачыкъ прокси кибик саналады.',
'sorbs_create_account_reason' => 'IP-адресигиз, translatewiki.net сайтда хайырланнган DNSBL-де ачыкъ прокси кибик саналады. Тергеу джазыу къураяллыкъ тюлсюз.',
'cant-block-while-blocked' => 'Сиз кесигиз блокда заманда, башха къошулуучуланы блок этеллик тюлсюз.',
'cant-see-hidden-user' => 'Тыяргъа излеген къошулуучу алайсызда тыйылыбды эмда джашырылыбды. Къошулуучуну джашырыргъа эркинлигигиз болмагъаны себебли, сиз бу блокну не къараяллыкъ, неда тюрлендиреллик тюлсюз.',
'ipbblocked' => 'Кесигиз блокда болгъаныгъыз себебли, сиз башхаланы блокга салыргъа неда блокларын алыргъа мадарыгъыз джокъду',
'ipbnounblockself' => 'Сиз кеси кесигизни блокдан алыр мадарыгъыз джокъду',

# Developer tools
'lockdb' => 'Билги база киритлиди',
'unlockdb' => 'Билги базаны киритин ач',
'lockdbtext' => 'Билги базаны кирит этиу, бютеу къошулуучуланы бетлерин, джарашадырыуларын эмда кёзде тургъан тизмелерин тюрлендириуню эмда билги базагъа эркинлик излеген башха ишлемлени киритлерикди. Этгенигизге ишексиз болгъаныгъызны энтда бир кере билдиригиз. Эмда билги базадан ишлемни бошагъанлай киритни алыгъыз.',
'unlockdbtext' => 'Билги базаны киритден чыгъарыу, бютеу къошулуучулагъа бетлени, джашардырыуларыны эмда кёз тургъан тизмелерин тюрлендирирге амал берликди. Ишлемге ишексиз болгъаныгъызны билдиригиз.',
'lockconfirm' => 'Хоу, билги базаны тюрлендирирге излейме.',
'unlockconfirm' => 'Хоу, билги базаны киритин ачаргъа излейме.',
'lockbtn' => 'Билги база киритлиди',
'unlockbtn' => 'Билги базаны киритин ач',
'locknoconfirm' => 'Къабыл этер ючюн белги салыгъыз.',
'lockdbsuccesssub' => 'Билги база блок этилгенди',
'unlockdbsuccesssub' => 'Билги базаны кирити ачылды.',
'lockdbsuccesstext' => 'Билги база киритленди.<br />
Билги базаны кереклисине къарагъандан сора  [[Special:UnlockDB|киритин ачаргъа]] унутмагъыз.',
'unlockdbsuccesstext' => 'Билги базаны кирити ачылды.',
'lockfilenotwritable' => 'Билги базаны киритлеу файлы джазылырча тюлдю.
Бу билги базаны киритлер неда ачар ючюн веб-серверни бу файлгъа джазаргъа эркинлиги болургъа керекди.',
'databasenotlocked' => 'Билги база киритли тюлдю.',

# Move page
'move-page' => '$1 атын тюрлендиреди',
'move-page-legend' => 'Бетни атын тюрлендириу',
'movepagetext' => "Тюбюндеги форма бла хайырланыб, сиз бетни атын тюрлендирликсиз, аны бла бирге аны тюрлениулерини журналын джангы оруннга кёчюрлюксюз.
Эски аты джангы атына джибериу боллукъду.
Эски атына баргъан джибериулени автоматик халда джангыртыргъа боллукъсуз.
Алай этмей эсегиз [[Special:DoubleRedirects|экили]] бла [[Special:BrokenRedirects|юзюлген джибериуле]] бармыдыла деб къарагъыз.
Джибериулени мындан арыда керекли джерни кёргюзюулерине сиз джууаблысыз.
Бет джангыдан джибериу болгъанны, неда тюрлендириулени тарихи болмай бош болгъанны тышында, джангы аты бла бет бар эсе, бетни атын тюрлдендиреллик '''тюлсюз''' .
Аны магъанасы, сиз бетни атын , мындан алгъа болгъан атына къайтарыргъа боллукъсуз, халат бла атын тюрлендирген эсегиз, болгъан бет билмей кетерилиб къаллыкъ тюлдю.

'''ЭСГЕРТИУ!'''
Атын тюрлендириу, \"айырма бетлени\" уллу ёлчемде , эмда сакъланмагъан тюрлениулеге келтирирге боллукъду.
Тилейбиз, мындан ары бардырлыгъыгъызны аллы бла, ахырында чыгъарыкъ эсеблени ангылагъаныгъызгъа ишексиз болугъуз.",
'movepagetext-noredirectfixer' => "Сиз, тюбюндеги форманы хайырландырыб, бетни атын тюрлендирликсиз, аны бла бирге аны тюрлениулерини журналын джангы оруннга кёчюрлюксюз.
Эски аты джангы атына джибериу боллукъду.
[[Special:DoubleRedirects|Экили]] эм [[Special:BrokenRedirects|юзюлген джибериуле]] бар эселе къарагъыз.
Джибериулени мындан арыда керекли джерни кёргюзюулерине сиз джууаблысыз.

Бет джангыдан джибериу болгъанны, неда тюрлендириулени тарихи болмай бош болгъанны тышында, джангы аты бла бет бар эсе, бетни атын тюрлендиреллик '''тюлсюз''' .
Аны магъанасы: сиз бетни атын, мындан алгъа болгъан атына къайтарыргъа боллукъсуз, халат бла атын тюрлендирген эсегиз, болгъан бет билмей кетерилиб къаллыкъ тюлдю.

'''ЭСГЕРТИУ!'''
Атын тюрлендириу, \"популяр бетлени\" уллу ёлчемде эмда сакъланмагъан тюрлениулеге келтирирге боллукъду.
Мындан ары бардырлыгъыгъызны аллы бла, ахырында чыгъарыкъ эсеблени ангылагъаныгъызгъа ишексиз болугъуз.",
'movepagetalktext' => "Къошулгъан сюзюу бет да автомат халда кёчюрюлюннюкдю, '''быллай ситуация болмаса''':

*Бош болмагъан сюзюу бет бу аты бла барды;
*Тюбюндеги тизгинде белги салмагъансыз.

Аллай ситуация болса, сиз бетлени къол бла кёчюрюрге неда къошаргъа керек боллукъсуз.",
'movearticle' => 'Бетни атын тюрлендир:',
'moveuserpage-warning' => "'''Эс бёлюгюз.''' Къошлуучуну бетини атын тюрлендирирге башлагъансыз. Къуру бетни аты тюрленникди, къошулуучуну аты тюрленник '''тюйюлдю'''.",
'movenologin' => 'Системада тюлсюз.',
'movenologintext' => 'Бетни атын тюрлендирир ючюн регистрациялы эмда [[Special:UserLogin|системада]] болургъа керексиз.',
'movenotallowed' => 'Бетни атын тюрлендирирге эркинлигигиз джокъду.',
'movenotallowedfile' => 'Файлланы атларын тюрлендирирге эркинлигигиз джокъду.',
'cant-move-user-page' => 'Къошулуучуну бетини атын (бет тюбледен башха) тюрлендирирге эркинлигигиз джокъду.',
'cant-move-to-user-page' => 'Бетни, башха къошулуучуну бетине ташыргъа эркинлигигиз джокъду (къошулуучу бет тюб тышында).',
'newtitle' => 'Джангы ат:',
'move-watch' => 'Кёзде тургъан тизмеге къош',
'movepagebtn' => 'Бетни атын тюрлендир',
'pagemovedsub' => 'Бетни аты тюрленди',
'movepage-moved' => "'''«$1» бет «$2» бетге кёчдю'''",
'movepage-moved-redirect' => 'Джиберилиу къуралды.',
'movepage-moved-noredirect' => 'Джибериу къуралыу басдырылды.',
'articleexists' => 'Быллай аты бла бет барды неда сиз джазгъан ат джарамайды.
Башха ат сайлагъыз.',
'cantmove-titleprotected' => 'Бу бетни атын тюрлендиреллик тюлсюз, джангы ат джараусуз атланы тизмесиндеди.',
'talkexists' => "'''Бетни аты тюрленнгенди, алай а сюзюу бетни кёчюрюрге джарамайды, аллай аты бла бет болгъаны ючюн. Къол бла къошугъуз аланы бири-бирлерине.'''",
'movedto' => 'аты тюрленнгенди:',
'movetalk' => 'Байламлы сюзюу бетни атын тюрлендир',
'move-subpages' => 'Бет тюблени атларын ($1 бетге дери) тюрлендир',
'move-talk-subpages' => 'Сюзюу бетни бет тюблерин атларын тюрлендир ($1 бетге дери)',
'movepage-page-exists' => '$1 статья алайсызда барды эмда автомат халда джангыдан джазылалмаз.',
'movepage-page-moved' => '$1 бет $2 бетге атын ауушдурду.',
'movepage-page-unmoved' => '$1 бет $2 бетге атын ауушдуралмаз.',
'movepage-max-pages' => 'Эм кёб $1 {{PLURAL:$1|бет|бет}} атын тюрлендирди эм андан асламы автомат халда атын тюрлендирелмез.',
'movelogpage' => 'Атла тюрлениуню журналы',
'movelogpagetext' => 'Тюбюнде болгъан тизме аты тюрлендирилген бетлени кёргюзеди.',
'movesubpage' => '{{PLURAL:$1|Subpage|Бет тюбле}}',
'movesubpagetext' => 'Бу бетни тюбюнде кёргюзюлген $1 {{PLURAL:$1|бет тюбю|бет тюбю}} барды.',
'movenosubpage' => 'Бу бетни тюб бети джокъду.',
'movereason' => 'Чурум:',
'revertmove' => 'ызына къайтыу',
'delete_and_move' => 'Кетер эмда атын тюрлендир',
'delete_and_move_text' => '== Кетериу керекди ==
"[[:$1]]" атлы бет алайсызда джокъду. О бетни кетериб, атны тюрлендириуню андан ары бардырыргъа излеймисиз?',
'delete_and_move_confirm' => 'Хоу, бетни кетер',
'delete_and_move_reason' => '«[[$1]]» бетни атын тюрлендирир ючюн кетерилди',
'selfmove' => 'Болурун изледигиз ат бла бар болгъан ат бирдиле. Тюрлениу этилеллик тюлдю.',
'immobile-source-namespace' => '"$1" ат аламынды бетле атларын тюрлендирелмейдиле',
'immobile-target-namespace' => 'Бетле "$1" ат аламына кёчюрюлмейдиле',
'immobile-target-namespace-iw' => 'Викиле арасы джибериу, бетни атын тюрлендирир ючюн хайырланамаз.',
'immobile-source-page' => 'Бу бетни атын тюрлендирирге боллукъ тюлдю',
'immobile-target-page' => 'Бетге бу атны берирге болмайды.',
'imagenocrossnamespace' => 'Файл, файлла ючюн болмагъан ат аламына кёчюерлмез.',
'nonfile-cannot-move-to-file' => 'Файл болмагъанлагъа файл ат берирге болмайды',
'imagetypemismatch' => 'Джангы файл кенгериу типине келишмейди',
'imageinvalidfilename' => 'Файлны нюзюр аты джараусузду',
'fix-double-redirects' => 'Алгъыннгы атына джибериулени автомат халда тюзетигиз',
'move-leave-redirect' => 'Джибериу къой',
'protectedpagemovewarning' => "'''Эсгетртиу:''' Бу бет киритленнгенди, джангыз администраторла атын тюрлендирирге боллукъдула.
Тюбюнде, билги ючюн журналдан ахыр джазыу берилгенди:",
'semiprotectedpagemovewarning' => "'''Эсгериу:''' Бу бет киритленибди, джангыз регистрация болгъан къошулуучула атын тюрлендирелликдиле.
Тюбюнде, билги ючюн журналдан ахыр джазыу берилгенди:",
'move-over-sharedrepo' => '== Файл барды ==
[[:$1]] сакълау джерде барды. Файлны бу башлыкъгъа атын аушдуруу  орта сакълаудагъы файлны юсюне келликди.',
'file-exists-sharedrepo' => 'Сайланнган файл ат орта сакълауда алайсызда барды.
Башха ат сайлагъыз.',

# Export
'export' => 'Статьяланы экспорт эт',
'exporttext' => 'Белгили бетни неда бет къауумну  текстлерин эмда тюрлендириу журналын XML-гъа экспорт этерге боллукъсуз. Бу МедиаВики хайырланнган башха бир  викиге [[Special:Import|импорт]] этерге боллукъду.

Бетлени экспорт этер ючюн атын тюбюндеги тюрлендириу сафда  джазыгъыз, бир ат бир сафха болсун, сора статьяланы тюрлендириуюню бютеу тарихинми огъесе статьяланы ахыр версияларынмы экспорт этерге излегенигизни оноуун этигиз.

Сиз дагъыда джангыз ахыр версияланы эскпорт этерча айры адресни хайырландырыргъа боллукъсуз. Сёз ючюн [[{{MediaWiki:Mainpage}}]] бет ючюн [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] адрес боллукъду.',
'exportcuronly' => 'Озгъан версияланы алмай, джангыз ахыр версияны ал',
'exportnohistory' => "----
'''Эсгертиу:''' Бетни тюрлендириуню толу тарихини экспорту, перформанс проблемалары ючюн джукълатылыбды.",
'export-submit' => 'Эспорт эт',
'export-addcattext' => 'Категорияладан бет къош:',
'export-addcat' => 'Къош',
'export-addnstext' => 'Ат аламдан бетле къош:',
'export-addns' => 'Къош',
'export-download' => 'Файл кибик сакъла',
'export-templates' => 'Шаблонланы къош',
'export-pagelinks' => 'Байламлы бетлени ичине къошаллыкъ теренлик:',

# Namespace 8 related
'allmessages' => 'Системаны билдириулери',
'allmessagesname' => 'Ат',
'allmessagesdefault' => 'Оригинал текст',
'allmessagescurrent' => 'Хайырлана тургъан текст',
'allmessagestext' => 'Бу тизме MediaWiki ат аламында бар болгъан система билдириулени тизмесиди.
MediaWiki локализациясына юлюш къошаргъа излей эсегиз, [//www.mediawiki.org/wiki/Localisation MediaWiki локализация] бла [//translatewiki.net translatewiki.net] сайтлагъа киригиз.',
'allmessagesnotsupportedDB' => "'''\$wgUseDatabaseMessages''' джабыкъ болгъаны ючюн '''{{ns:special}}:Allmessages''' хайырланыугъа ачыкъ тюлдю.",
'allmessages-filter-legend' => 'Фильтр',
'allmessages-filter' => 'Тюрлендириуюне кёре фильтрлендир:',
'allmessages-filter-unmodified' => 'Тюрлендирилмеген',
'allmessages-filter-all' => 'Барысыда',
'allmessages-filter-modified' => 'Тюрлендирилгендиле',
'allmessages-prefix' => 'Префикс бла фильтр:',
'allmessages-language' => 'Тил:',
'allmessages-filter-submit' => 'Бар',

# Thumbnails
'thumbnail-more' => 'Уллу эт',
'filemissing' => 'Файл табылмады',
'thumbnail_error' => 'Миниатураны этиуде халат: $1',
'djvu_page_error' => 'DjVu бетге джетилелмез',
'djvu_no_xml' => 'DjVu файл ючюн XML алыналмайды',
'thumbnail_invalid_params' => 'Джараусуз миниатура параметрле',
'thumbnail_dest_directory' => 'Нюзюр директория къураялыналмайды',
'thumbnail_image-type' => 'Сурат тип дагъан болмайды',
'thumbnail_gd-library' => 'GD библиотеканы толу болмагъан конфигурациясы: тас болгъан функция $1',
'thumbnail_image-missing' => 'Файл тас кибик кёрюнеди: $1',

# Special:Import
'import' => 'Бетлени импорт эт',
'importinterwiki' => 'Викиле арасы импорт',
'import-interwiki-text' => 'Импорт этер ючюн викини эм импорт этилген бетни атын сайлагъыз.
Тюрлениулени тарихи бла джазыучуланы атлары сакъланныкъды.
Бютеу викиле арасы импорт операцияла [[Special:Log/import|импортну журналына]] кёчюрюллюкдю.',
'import-interwiki-source' => 'Къайнакъ вики/бет:',
'import-interwiki-history' => 'Бу бетни бютеу тюрлениу тарихин копия эт',
'import-interwiki-templates' => 'Бютеу шаблонланы ичине сал',
'import-interwiki-submit' => 'Импорт',
'import-interwiki-namespace' => 'Нюзюр ат алам:',
'import-upload-filename' => 'Файлны аты:',
'import-comment' => 'Эсгериу:',
'importtext' => 'Бетни къайнакъ викиден [[Special:Export|адырны хайырландырыб]] эскпорт этигиз. Файлны дискде сакълагъыз эм былайгъа джюклегиз.',
'importstart' => 'Файлла импорт этиле турадыла...',
'import-revision-count' => '$1 {{PLURAL:$1|версия|версия}}',
'importnopages' => 'Импорт этиллик бет джокъду',
'imported-log-entries' => 'Журналны {{PLURAL:$1|джазыуу|джазыуу}} импорт этилинди.',
'importfailed' => '$1 импорту джетишимсиз бошалды',
'importunknownsource' => 'Билинмеген импорт къайнакъ типи',
'importcantopen' => 'Импорт этилген файл ачылалмады',
'importbadinterwiki' => 'Терс интер-вики джибериу',
'importnotext' => 'Бош неда текст джокъду',
'importsuccess' => 'Импорт этилиб бошады!',
'importhistoryconflict' => 'Бар болгъан версияланы арасында уруш (бу бет алгъаракъ импорт этилген болур)',
'importnosources' => 'Викиле арасы къайнакъ сайланмагъанды эм  тюрлендириулени тарихини тюз джюклеую джукъланыбды.',
'importnofile' => 'Импорт ючюн файл джюкленмегенди.',
'importuploaderrorsize' => 'Импорт этилген  файлны джюклеую джетишимсиз болду.
Файл, эркинлик берилген джюклеу ёлчеминден уллуду.',
'importuploaderrorpartial' => 'Импорт этилген файлны джюклеую джетишимсиз болду.
Файлны къуру бир кесеги джюкленди.',
'importuploaderrortemp' => 'Импорт этилген файлны джюклеую джетишимсиз болду.
Кёзюулю файл тасды.',
'import-parse-failure' => 'XML-ну ичине импорт этиу джетишимсиз',
'import-noarticle' => 'Импорт этиллик бет джокъду!',
'import-nonewrevisions' => 'Бютеу версияла алгъаракъ импорт этилгендиле.',
'xml-error-string' => '$1 тизгинде $2, позицияда $3 (байт $4): $5',
'import-upload' => 'XML-билгилени джюкле',
'import-token-mismatch' => 'Сеансы билгилери тас болду. Тилейбиз, джангыдан сынагъыз.',
'import-invalid-interwiki' => 'Белгиленнген викиден импорт этелирча тюлдю.',

# Import log
'importlogpage' => 'Импортну журналы',
'importlogpagetext' => 'Башха викиледен бетлени тюрлендириу тарихин администраторланы импорт этиую.',
'import-logentry-upload' => '[[$1]] файл джюклениую бла импорт этилди',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|версия|версия}}',
'import-logentry-interwiki' => '$1 трансвикиленди',
'import-logentry-interwiki-detail' => '$2 бетден  $1 {{PLURAL:$1|весрия|версия}}',

# JavaScriptTest
'javascripttest' => 'JavaScript тинтилиую',
'javascripttest-title' => '$1 тинтиле турады',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Къошулуучу бетигиз',
'tooltip-pt-anonuserpage' => 'Сизни IP-адресигиз ючюн къошулуучу бет',
'tooltip-pt-mytalk' => 'Сизни сюзюу бетигиз',
'tooltip-pt-anontalk' => 'Бу IP-адресден этилген тюрлендириулени сюзюу бет',
'tooltip-pt-preferences' => 'Сизни джарашдырыуларыгъыз',
'tooltip-pt-watchlist' => 'Сиз кёзюгюзде тутхан бетлени тизмеси',
'tooltip-pt-mycontris' => 'Сизни тюрлендириулеригизни тизмеси',
'tooltip-pt-login' => 'Былайда системада регистрация этерге боллукъду, алай а ол ажымсыз керекли тюйюлдю',
'tooltip-pt-anonlogin' => 'Былайда сисетмагъа регистрация этерге боллукъду, алай а бу зорунлу тюлдю.',
'tooltip-pt-logout' => 'Чыгъыу',
'tooltip-ca-talk' => 'Бетни ичиндегин сюзюу',
'tooltip-ca-edit' => 'Бу бетни тюрлендирирге болады. Сакълагъынчы ал къарауну хайырландырыгъыз.',
'tooltip-ca-addsection' => 'Джангы бёлюм къура',
'tooltip-ca-viewsource' => 'Бу бет тюрлендириуден джакъланыбды. Алай а сиз къараб, текстин копия этерге боллукъсуз',
'tooltip-ca-history' => 'Бетни алгъын версиялары',
'tooltip-ca-protect' => 'Бу бетни джакъла',
'tooltip-ca-unprotect' => 'Бу бетни джакълауун тюрлендир',
'tooltip-ca-delete' => 'Бу бетни кетер',
'tooltip-ca-undelete' => 'Бетни кетериуню аллындагъа халына къайтар',
'tooltip-ca-move' => 'Бу бетни атын тюрлендириу',
'tooltip-ca-watch' => 'Бу бетни кёзюгюзде тургъан тизмегизге къошугъуз',
'tooltip-ca-unwatch' => 'Кёзюгюзде тургъан тизмеден кетер бу бетни',
'tooltip-search' => 'Бу сёзню изле',
'tooltip-search-go' => 'Тамам быллай аты болгъан бетге кёч',
'tooltip-search-fulltext' => 'Бу текст болгъан бетлени таб',
'tooltip-p-logo' => 'Баш бет',
'tooltip-n-mainpage' => 'Баш бетге кёчюу',
'tooltip-n-mainpage-description' => 'Баш бетге кёчюу',
'tooltip-n-portal' => 'Проектни юсюнден, сизни не этерге боллугъугъузню юсюнден, хар не къайда болгъаныны юсюнден',
'tooltip-n-currentevents' => 'Бусагъатда болгъан ишлени тизмеси',
'tooltip-n-recentchanges' => 'Ахыр тюрлениулени тизмеси',
'tooltip-n-randompage' => 'Эсде болмагъан бир бетге къара',
'tooltip-n-help' => '«{{SITENAME}}» проектге джардам этиу',
'tooltip-t-whatlinkshere' => 'Бу бетге джибериу берген бютеу бетлени тизмеси',
'tooltip-t-recentchangeslinked' => 'Бу бет джибериуле берген бетледе ахыр тюрлениуле',
'tooltip-feed-rss' => 'Бу битге RSS-трансляция',
'tooltip-feed-atom' => 'Бу бетге Atom-трансляция',
'tooltip-t-contributions' => 'Къошулуучуну тюрлендирген бетлерине къара',
'tooltip-t-emailuser' => 'Бу къошулуучугъа письмо джибер',
'tooltip-t-upload' => 'Файлланы джюклеу',
'tooltip-t-specialpages' => 'Бютеу къуллукъчу бетлени тизмеси',
'tooltip-t-print' => 'Бу бетни басмагъа версиясы',
'tooltip-t-permalink' => 'Бетни бу версиясына дайым джибериу',
'tooltip-ca-nstab-main' => 'Статьяны ичиндеги',
'tooltip-ca-nstab-user' => 'Къошулуучуну бетине къарау',
'tooltip-ca-nstab-media' => 'Медиа-файл',
'tooltip-ca-nstab-special' => 'Бу къуллукъчу бетди, тюрлендирилмейди',
'tooltip-ca-nstab-project' => 'Проектни бетине къара',
'tooltip-ca-nstab-image' => 'Файлны бетине къара',
'tooltip-ca-nstab-mediawiki' => 'Система билдириуге къара',
'tooltip-ca-nstab-template' => 'Шаблоннга къара',
'tooltip-ca-nstab-help' => 'Болушлукъ бетге къара',
'tooltip-ca-nstab-category' => 'Категорияны бетине къара',
'tooltip-minoredit' => 'Асыры гитчеди деб ызына алыу бу тюрлендириуню',
'tooltip-save' => 'Тюрлендириулеринги сакъла',
'tooltip-preview' => 'Ал къарауну бетге хайырландырыгъыз, тюрлендириулеригизни сакъларны аллы бла!',
'tooltip-diff' => 'Тюрлендириулеригизни кёрюгюз',
'tooltip-compareselectedversions' => 'Бу бетни сайланнган эки версиясыны араларында башхалыкъларын кёр',
'tooltip-watch' => 'Бу бетни кёзюгюзде тургъан тизмеге къош',
'tooltip-watchlistedit-normal-submit' => 'Белгиленнген атланы кетер',
'tooltip-watchlistedit-raw-submit' => 'Кёзде тургъан тизмени джангырт',
'tooltip-recreate' => 'Кетерилгенина къарамай бетни ызына къайтар',
'tooltip-upload' => 'Джюклеуню башла',
'tooltip-rollback' => 'Бир басхан бла ахыр къошулуучуну тюрлендиргенин кетер',
'tooltip-undo' => 'Этилиннген тюрлендириуню ызына ал эмда ал къарауну кёргюз, ызына нек алыннгын чертирча',
'tooltip-preferences-save' => 'Джарашдырыуланы сакълат',
'tooltip-summary' => 'Къысха ачыкълау джазыгъыз',

# Metadata
'notacceptable' => 'Бу вики-сервер сизни браузеригиз излеген форматда билгиле берелмейди.',

# Attribution
'anonymous' => 'сайтны аноним {{PLURAL:$1|къошулуучулары|къошулуучулары}}',
'siteuser' => '{{SITENAME}} къошулуучу $1',
'anonuser' => '{{SITENAME}} аноним къошулуучу $1',
'lastmodifiedatby' => 'Бет эм ахыр $3 джанындан $2, $1 заманда тюрлендирилгенди.',
'othercontribs' => '$1 джанындан этилген ишге тамалланады.',
'others' => 'башхала',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|къошулуучу|къошулуучула}} $1',
'anonusers' => '{{SITENAME}} аноним {{PLURAL:$2|къошулуучу|къошулуучула}} $1',
'creditspage' => 'Бетни кредитлери',
'nocredits' => 'Бу къошулуучу ючюн кредит билги джокъду.',

# Spam protection
'spamprotectiontitle' => 'Спамгъа къаршчы фильтр',
'spamprotectiontext' => 'Къошаргъа излеген бет спам фильтр бла блок этилгенди. Къара тизмедеги тыш джибериуле чурум болургъа боллукъдула.',
'spamprotectionmatch' => 'Спам фильтр ишлетген текст: $1',
'spambot_username' => 'Спамны ариулау',
'spam_reverting' => '$1 бла джибериую болмагъан ахыр версиягъа къайтылады',
'spam_blanking' => 'Бютеу версияла $1 бетге джибериу тутадыла, ариуланадыла',

# Info page
'pageinfo-title' => '«$1» бетни юсюнден информация',
'pageinfo-header-basic' => 'Баш билгиле',
'pageinfo-header-edits' => 'Тюрлениу тарих',
'pageinfo-header-restrictions' => 'Бетни джакълыгъы',
'pageinfo-header-properties' => 'Бетни шартлары',
'pageinfo-display-title' => 'Кёрюннген башлыкъ',
'pageinfo-default-sort' => 'Тынгылау бла сортлауну ачхычы',
'pageinfo-length' => 'Бетни узунлугъу (байтла бла)',
'pageinfo-article-id' => 'Бетни идентификатору',
'pageinfo-language' => 'Бетни ичиндегисини тили',
'pageinfo-robot-policy' => 'Излеу къуллукъла бла индексация',
'pageinfo-robot-index' => 'Индексация этиледи',
'pageinfo-robot-noindex' => 'Индексация этилмейди',
'pageinfo-views' => 'Къарауланы саны',
'pageinfo-watchers' => 'Бетни кёзде тутханланы саны',
'pageinfo-redirects-name' => 'Бу бетге редиректле',
'pageinfo-firstuser' => 'Бетле къураучу',
'pageinfo-lastuser' => 'Ахыр редактор',
'pageinfo-edits' => 'Бютеу тюрлендириулени саны',
'pageinfo-authors' => 'Тюрлю-тюрлю авторланы саны',
'pageinfo-toolboxlink' => 'Бетни юсюнден',
'pageinfo-redirectsto' => 'Башха бетге редиректди —',
'pageinfo-redirectsto-info' => 'билги',
'pageinfo-contentpage-yes' => 'Хоу',
'pageinfo-protect-cascading-yes' => 'Хоу',

# Skin names
'skinname-cologneblue' => 'Кёльн такъылыкъ',
'skinname-monobook' => 'Моно-китаб',
'skinname-modern' => 'Бусагъатдагъы',
'skinname-vector' => 'Вектор',

# Patrolling
'markaspatrolleddiff' => 'Контроль этилгенин белгиле',
'markaspatrolledtext' => 'Сыналгъан статья кибик белгиле',
'markedaspatrolled' => 'Сыналгъан кибик белгиленнгенди',
'markedaspatrolledtext' => 'Сайланнган [[:$1]]  версия сыналгъан кибик белгиленнгенди.',
'rcpatroldisabled' => 'Ахыр тюрлениулени осмакъалауу джасакъды',
'rcpatroldisabledtext' => 'Ахыр тюрлениулени осмамкъалау амалы бусагъатда джукълатылыбды.',
'markedaspatrollederror' => 'Сыналмаганды',
'markedaspatrollederrortext' => 'Сыналгъан кибик белгилер ючюн версия белгилерге керексиз.',
'markedaspatrollederror-noautopatrol' => 'Кесигизни тюрлендириулеригизни, сыналгъан кибик белгилерге эркинлигигиз джокъду.',
'markedaspatrollednotify' => '«$1» бетдеги бу тюрлениу тинтиб къаралгъанча белгиленди.',

# Patrol log
'patrol-log-page' => 'Патруль этиуню журналы',
'patrol-log-header' => 'Бу осмакъланнган версияланы журналыды.',
'log-show-hide-patrol' => 'Осмакълауну журналы $1',

# Image deletion
'deletedrevision' => '$1 эски версия кетерилгенди.',
'filedeleteerror-short' => 'Файл кетериуню халаты: $1',
'filedeleteerror-long' => 'Файлны кетериуде халатлагъа тюбелди:

$1',
'filedelete-missing' => 'Болмагъаны себебли, "$1" файл кетерилелмейди.',
'filedelete-old-unregistered' => 'Белгиленнген файлны "$1" вериясы билги базада джокъду.',
'filedelete-current-unregistered' => 'Белгиленнген файл "$1" билги базада джокъду.',
'filedelete-archive-read-only' => '"$1" архив директория веб-сервер джанындан джазылырча тюлдю.',

# Browsing diffs
'previousdiff' => '← Алдагъы тюрлендириу',
'nextdiff' => 'Эндиги тюрлендириу →',

# Media information
'mediawarning' => "'''Эсгертиу''': Бу файл типи аман иннетли кодла тутаргъа боллукъду.
Буну ишлетсегиз системагъызгъа заран келтирирге боллукъсуз.",
'imagemaxsize' => "Суратны ёлчемини чеги:<br />''(файлны ангылытыу бетле ючюн)''",
'thumbsize' => 'Гитче ёлчем:',
'widthheight' => '$1 × $2',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|бет|бет}}',
'file-info' => 'файлны ёлчеми: $1, MIME типи: $2',
'file-info-size' => '$1 × $2 пиксель, файлны ёлчеми: $3, MIME типи: $4',
'file-nohires' => 'Мындан ары ачыкъланнган версиясы джокъду',
'svg-long-desc' => 'SVG файл, шартлы $1 × $2 пиксель, файлны ёлчеми: $3',
'show-big-image' => 'Толу ачыкълау',
'show-big-image-preview' => 'Ал къарауда уллулугъу: $1.',
'show-big-image-size' => '$1 × $2 пиксель',
'file-info-gif-looped' => 'тогъайланнганды',
'file-info-gif-frames' => '$1 {{PLURAL:$1|фрейм|фрейм}}',
'file-info-png-looped' => 'тогъайланнганды',
'file-info-png-repeat' => '$1 {{PLURAL:$1|кере|кере}} ойнатылды',
'file-info-png-frames' => '$1 {{PLURAL:$1|фрейм|фрейм}}',

# Special:NewFiles
'newimages' => 'Джангы файлланы галереясы',
'imagelisttext' => "Тюбюрекде $2 кёре тизилген '''$1''' {{PLURAL:$1|файл|файл}} кёрюнеди.",
'newimages-summary' => 'Бу къуллукъ бет, кёб болмай джюкленнген файлланы кёргюзеди.',
'newimages-legend' => 'Фильтр',
'newimages-label' => 'Файлны аты (неда кесеги):',
'showhidebots' => '($1 бот)',
'noimages' => 'Кёрюр зат джокъду',
'ilsubmit' => 'Таб',
'bydate' => 'Хронологиягъа кёре',
'sp-newimages-showfrom' => '$1, $2 замандан башлаб джангы файлланы кёргюз',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 секунд|$1 секунд}}',
'minutes' => '{{PLURAL:$1|$1 минут|$1 минут}}',
'hours' => '{{PLURAL:$1|$1 сагъат|$1 сагъат}}',
'days' => '{{PLURAL:$1|$1 кюн|$1 кюн}}',
'weeks' => '{{PLURAL:$1|ыйыкъ}}',
'months' => '{{PLURAL:$1|ай}}',
'years' => '{{PLURAL:$1|джыл}}',
'ago' => '$1 алгъа',
'just-now' => 'тюз бусагъатда',

# Human-readable timestamps
'hours-ago' => '$1 {{PLURAL:$1|сагъат}} мындан алгъа',
'minutes-ago' => '$1 {{PLURAL:$1|минут}} мындан алгъа',
'seconds-ago' => '$1 {{PLURAL:$1|секунд}} мындан алгъа',
'monday-at' => '$1 баш кюн',
'tuesday-at' => '$1 гюрге кюн',
'wednesday-at' => '$1 барас кюн',
'thursday-at' => '$1 орта кюн',
'friday-at' => '$1 барым кюн',
'saturday-at' => '$1 шабат кюн',
'sunday-at' => '$1 ыйых кюн',
'yesterday-at' => '$1 тюнене',

# Bad image list
'bad_image_list' => 'Формат былай болургъа керекди:

Къуру тизмени кесеклери (* символдан башланнганла) саналлыкъдыла.
Тизгинни биринчи джибериую салыргъа болмагъан (аман) суратха джибериу болургъа керекди.
Андан ары баргъан джибериуле ол тизгинде, сурат къошулургъа болгъан статьялагъа джибериулеге саналлыкъдыла.',

# Metadata
'metadata' => 'Метаданныйле',
'metadata-help' => 'Файл, кёбюсюне цифралы камерала бла, неда сканерле бла къошулгъан, къошакъ билгилени тутаргъа болады. Файл къуралгъанындан сора тюрлендирилген эсе, бир-бир параметрлери бусагъатдагъы суратына келишмезге болур.',
'metadata-expand' => 'Дагъыда билгиле кёргюз',
'metadata-collapse' => 'Къошакъ билгилени джашыр',
'metadata-fields' => 'Бу тизмеде келтирилген сурат метабилгилеи тизгинлери, суратны бетинде кёргюзюллюкдюле, къалгъанла тынгылау бла джашырылыныб боллукъдула.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Кенглик',
'exif-imagelength' => 'Мийиклик',
'exif-bitspersample' => 'Бояуну теренлиги',
'exif-compression' => 'Къыстырыу мадар',
'exif-photometricinterpretation' => 'Пиксель модели',
'exif-orientation' => 'Кадрны ориентациясы',
'exif-samplesperpixel' => 'Компонентлени саны',
'exif-planarconfiguration' => 'Билгилени къуралыу принципи',
'exif-ycbcrsubsampling' => 'Y бла C компонетлени ёлчемлерини илишкиси',
'exif-ycbcrpositioning' => 'Y бла C джерлешдириую',
'exif-xresolution' => 'Горизонтал резолюциясы',
'exif-yresolution' => 'Вертикал резолюциясы',
'exif-stripoffsets' => 'Билги блокну туруму',
'exif-rowsperstrip' => '1 блокда болгъан тизгинни саны',
'exif-stripbytecounts' => 'Къысдырылгъан блокну ёлчеми',
'exif-jpeginterchangeformat' => 'preview блокну тамалыны туруму',
'exif-jpeginterchangeformatlength' => 'preview блокну билгилерини ёлчеми',
'exif-whitepoint' => 'Акъ нохтаны боялулугъу',
'exif-primarychromaticities' => 'Баш бояуланы бояулулугъу',
'exif-ycbcrcoefficients' => 'Бояу модельни трансформация матрикс коофициенти',
'exif-referenceblackwhite' => 'Акъ бла къара нохталаны турумлары',
'exif-datetime' => 'Файлны тюрлендириуню датасы бла заманы',
'exif-imagedescription' => 'Суратны аты',
'exif-make' => 'Камераны маркасы',
'exif-model' => 'Камераны модели',
'exif-software' => 'Программа баджарыу',
'exif-artist' => 'Автор',
'exif-copyright' => 'Автор хакъланы иеси',
'exif-exifversion' => 'Exif версиясы',
'exif-flashpixversion' => 'Джакъланнган FlashPix версиясы',
'exif-colorspace' => 'Бояу алам',
'exif-componentsconfiguration' => 'Хар компонентни ангыламы',
'exif-compressedbitsperpixel' => 'Суратны къысдырыу амалы',
'exif-pixelydimension' => 'Суратны кенглиги',
'exif-pixelxdimension' => 'Суратны мийиклиги',
'exif-usercomment' => 'Къошакъ комментарий',
'exif-relatedsoundfile' => 'Тауушлу комментарийни файлы',
'exif-datetimeoriginal' => 'Оригинал джаратыу заман',
'exif-datetimedigitized' => 'Цифралашдрыуну заманы',
'exif-subsectime' => 'Файлны тюрлендириу заманны дакъикъалары',
'exif-subsectimeoriginal' => 'Оригинал заманны дакъикъалары',
'exif-subsectimedigitized' => 'Цифралашдырыу заманны дакъикъалары',
'exif-exposuretime' => 'Экспозиция заман',
'exif-exposuretime-format' => '$1 с ($2)',
'exif-fnumber' => 'Диафрагманы номери',
'exif-exposureprogram' => 'Экспозицияны программасы',
'exif-spectralsensitivity' => 'Спектрал сезимлилик',
'exif-isospeedratings' => 'ISO терклик дараджасы',
'exif-shutterspeedvalue' => 'APEX декланшорну терклиги',
'exif-aperturevalue' => 'APEX-де диафрагма',
'exif-brightnessvalue' => 'APEX-де джарыкълыкъ',
'exif-exposurebiasvalue' => 'Экспозицияны коменсациясы',
'exif-maxaperturevalue' => 'Максимум диафрагма саны',
'exif-subjectdistance' => 'Объектге дери узакълыкъ',
'exif-meteringmode' => 'Ёлчем типи',
'exif-lightsource' => 'Джарыкъны къайнагъы',
'exif-flash' => 'Флеш',
'exif-focallength' => 'Фокус узакълыкъ',
'exif-focallength-format' => '$1 мм',
'exif-subjectarea' => 'Субъект алам',
'exif-flashenergy' => 'Флешни энергиясы',
'exif-focalplanexresolution' => 'Фокал аламда Х резолюциясы',
'exif-focalplaneyresolution' => 'Фокал аламда Y резолюциясы',
'exif-focalplaneresolutionunit' => 'Фокал аламда резолюцияны ёлчем бирими',
'exif-subjectlocation' => 'Субъектни туруму',
'exif-exposureindex' => 'Экспозицияны индекси',
'exif-sensingmethod' => 'Сенсор амалы',
'exif-filesource' => 'Файлны къайнагъы',
'exif-scenetype' => 'Сахнаны типи',
'exif-customrendered' => 'Айырма сурат ишлем',
'exif-exposuremode' => 'Экспозицияны сайлауну режими',
'exif-whitebalance' => 'Акъны балансы',
'exif-digitalzoomratio' => 'Цифра джууукълашдырыуну ёлчеми',
'exif-focallengthin35mmfilm' => '35 мм-лик плёнкада фокал узунлукъ',
'exif-scenecapturetype' => 'Алыуда сахнаны типи',
'exif-gaincontrol' => 'Сахна контролу',
'exif-contrast' => 'Контраст',
'exif-saturation' => 'Бояуну толулугъу',
'exif-sharpness' => 'Кескинлик',
'exif-devicesettingdescription' => 'Камераны джарашдырыуларыны ангылатыу',
'exif-subjectdistancerange' => 'Алыуну объектине дери узунлукъ',
'exif-imageuniqueid' => 'Суратны энчи номери (ID)',
'exif-gpsversionid' => 'GPS версиясы',
'exif-gpslatituderef' => 'Шимал неда Къыбыла кенглик',
'exif-gpslatitude' => 'Кенглик',
'exif-gpslongituderef' => 'Кюнчыгъыш неда кюнбатыш узунлукъ',
'exif-gpslongitude' => 'Узунлукъ',
'exif-gpsaltituderef' => 'Мийикликни индекси',
'exif-gpsaltitude' => 'Мийиклик',
'exif-gpstimestamp' => 'GPS заман (атом сагъат)',
'exif-gpssatellites' => 'Хайырланнган спутниклени ангылатыу',
'exif-gpsstatus' => 'Ресиверни статусу',
'exif-gpsmeasuremode' => 'Ёлчелеуню амалы',
'exif-gpsdop' => 'Ёлчемни тюзлюгю',
'exif-gpsspeedref' => 'Теркликни ёлчем бирими',
'exif-gpsspeed' => 'GPS алыучуну терклиги',
'exif-gpstrackref' => 'GPS алыучуну азимутуну типи',
'exif-gpstrack' => 'GPS алыучуну азимуту',
'exif-gpsimgdirectionref' => 'Суратны азимутуну типи',
'exif-gpsimgdirection' => 'Суратны азимуту',
'exif-gpsmapdatum' => 'Координатланы геодезия системасын хайырландырыу',
'exif-gpsdestlatituderef' => 'Объектни узунлугъуну индекси',
'exif-gpsdestlatitude' => 'Объектни узунлугъу',
'exif-gpsdestlongituderef' => 'Объектни кенглигини индекси',
'exif-gpsdestlongitude' => 'Объектни кенглиги',
'exif-gpsdestbearingref' => 'Объектни пеленгини типи',
'exif-gpsdestbearing' => 'Объектни пеленги',
'exif-gpsdestdistanceref' => 'Аралыкъны ёлчелеуню бирими',
'exif-gpsdestdistance' => 'Аралыкъ',
'exif-gpsprocessingmethod' => 'GPS ёлчелеу амалны аты',
'exif-gpsareainformation' => 'GPS тёгерекни аты',
'exif-gpsdatestamp' => 'GPS заман',
'exif-gpsdifferential' => 'GPS дифференциялы тюзетиу',
'exif-jpegfilecomment' => 'JPEG-файлны белгиси',
'exif-keywords' => 'Ачхыч сёзле',
'exif-worldregioncreated' => 'Бу сурат этилген дуния регион',
'exif-countrycreated' => 'Бу сурат этилген кърал',
'exif-countrydest' => 'Суратланнган кърал',
'exif-provinceorstatedest' => 'Суратланнган провинция, территория неда штат',
'exif-citydest' => 'Суратланнган шахар',
'exif-objectname' => 'Къысха аты',
'exif-specialinstructions' => 'Энчи ангылатыула',
'exif-headline' => 'Башлыкъ',
'exif-credit' => 'Суратны берген',
'exif-source' => 'Къайнакъ',
'exif-editstatus' => 'Суратны редакцион статусу',
'exif-urgency' => 'Бу сагъатха магъаналылыгъы',
'exif-fixtureidentifier' => 'Колонканы аты',
'exif-locationdest' => 'Суратланнган джер',
'exif-objectcycle' => 'Бу сурат ючюн сутканы кёзюую',
'exif-contact' => 'Контактлы информация',
'exif-writer' => 'Текстни автору',
'exif-languagecode' => 'Тил',
'exif-iimversion' => 'IIM версиясы',
'exif-iimcategory' => 'Категория',
'exif-iimsupplementalcategory' => 'Къошакъ категорияла',
'exif-datetimeexpires' => 'Бу датадан сора хайырланмагъыз:',
'exif-datetimereleased' => 'Чыкъгъан датасы:',
'exif-identifier' => 'Идентификатор',
'exif-lens' => 'Хайырланнган объектив',
'exif-serialnumber' => 'Камераны сериялы номери',
'exif-cameraownername' => 'Камераны иеси',
'exif-label' => 'Белги',
'exif-datetimemetadata' => 'Метабилгилени ахыр тюрлениулерини датасы',
'exif-nickname' => 'Суратны, формализмли болмагъан аты',
'exif-rating' => 'Багъа (5-ден)',
'exif-rightscertificate' => 'Хакъланы джюрютюу сертификат',
'exif-copyrighted' => 'Автор хакъланы статусу:',
'exif-copyrightowner' => 'Автор хакъланы иеси',
'exif-usageterms' => 'Хайырланыуну шартлары',
'exif-pngfilecomment' => 'PNG-файлны белгиси',
'exif-disclaimer' => 'Джууаблылыкъны унамау',
'exif-contentwarning' => 'Ичиндегисини юсюнден эсгертиу',
'exif-giffilecomment' => 'GIF-файлны белгиси',
'exif-intellectualgenre' => 'Объектни типи',
'exif-subjectnewscode' => 'Теманы коду',
'exif-scenecode' => 'IPTC сахнаны коду',
'exif-event' => 'Суратланнган болуу',
'exif-organisationinimage' => 'Суратланнган организация',
'exif-personinimage' => 'Суратланнган адам',

# Exif attributes
'exif-compression-1' => 'Къысдырылмагъан',
'exif-compression-3' => 'CCITT Group 3, факс кодлау',
'exif-compression-4' => 'CCITT Group 4, факс кодлау',

'exif-copyrighted-true' => 'Автор хакъла бла джакъланыбды',
'exif-copyrighted-false' => 'Джамагъат мюлк',

'exif-unknowndate' => 'Билинмеген заман',

'exif-orientation-1' => 'Нормал',
'exif-orientation-2' => 'Горизонтал бла кёргюзюлгенди',
'exif-orientation-3' => '180° бурулгъанды',
'exif-orientation-4' => 'Вертикал бла кёргюзюлгенди',
'exif-orientation-5' => '90° бурулгъан (солгъа) эмда вертикал бла кёргюзюлгенди',
'exif-orientation-6' => 'Сагъат стрелкагъа къаршчы 90° бурулгъанды',
'exif-orientation-7' => '90° бурулгъанды (сагъат стрелкагъа) эмда вертикал бла кёргюзюлгенди',
'exif-orientation-8' => 'Сагъат стрелкагъа кёре 90° бурулгъанды',

'exif-planarconfiguration-1' => '«chunky» формат',
'exif-planarconfiguration-2' => '«planar» формат',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1' => 'sRGB',
'exif-colorspace-65535' => 'Суратны бояу джарашдырыуу этилмегенди',

'exif-componentsconfiguration-0' => 'Джокъду',

'exif-exposureprogram-0' => 'Танылмады',
'exif-exposureprogram-1' => 'Къол режим',
'exif-exposureprogram-2' => 'Нормал программа',
'exif-exposureprogram-3' => 'Дифрагманы аллы',
'exif-exposureprogram-4' => 'Декланшёр аллы',
'exif-exposureprogram-5' => 'Суратлау программа (кескинликни керекли теренлигини тамалында)',
'exif-exposureprogram-6' => 'Спорт режим',
'exif-exposureprogram-7' => 'Портрет режим (фокуссуз фонда, джууукъ аралыкъдан сурат алыр ючюн)',
'exif-exposureprogram-8' => 'Пейзаж режим (фокусда фону бла пейзаж суратла ючюн)',

'exif-subjectdistance-value' => '$1 метр',

'exif-meteringmode-0' => 'Билинмейди',
'exif-meteringmode-1' => 'Орта',
'exif-meteringmode-2' => 'Ара аурлукълу',
'exif-meteringmode-3' => 'Нохталы',
'exif-meteringmode-4' => 'Кёб нохталы',
'exif-meteringmode-5' => 'Матрицалы',
'exif-meteringmode-6' => 'Джартылы',
'exif-meteringmode-255' => 'Башха',

'exif-lightsource-0' => 'Билинмеген',
'exif-lightsource-1' => 'Кюн джарыкъ',
'exif-lightsource-2' => 'Кюндюз джарыкъны лампасы',
'exif-lightsource-3' => 'Къызыуну лампасы',
'exif-lightsource-4' => 'Флэш',
'exif-lightsource-9' => 'Ачыкъ хауа',
'exif-lightsource-10' => 'Булутлу',
'exif-lightsource-11' => 'Ауана',
'exif-lightsource-12' => 'Кюн джарыкъны лампасы (D 5700 – 7100K)',
'exif-lightsource-13' => 'Кюндюз джарыкъны лампасы (N 4600 – 5400K)',
'exif-lightsource-14' => 'Кюндюз джарыкъны лампасы (W 3900 – 4500K)',
'exif-lightsource-15' => 'Кюндюз джарыкъны лампасы (W 3900 – 4500K)',
'exif-lightsource-17' => 'А типли стандарт джарыкъ',
'exif-lightsource-18' => 'B типли стандарт джарыкъ',
'exif-lightsource-19' => 'С типли стандарт джарыкъ',
'exif-lightsource-20' => 'D55',
'exif-lightsource-21' => 'D65',
'exif-lightsource-24' => 'ISO стандартлы студиялыкъ лампа',
'exif-lightsource-255' => 'Джарыкъны башха къайнакълары',

# Flash modes
'exif-flash-fired-0' => 'Флэши ишлемеди',
'exif-flash-fired-1' => 'Флэши ишледи',
'exif-flash-return-0' => 'алгъаракъ флэш джаныу режими джокъду',
'exif-flash-return-2' => 'алгъаракъ джаннган флэшни къайтхан импульсу джокъду',
'exif-flash-return-3' => 'алгъаракъ ишлеген флэшни къайтыу имиульсу ишледи',
'exif-flash-mode-1' => 'зорунлу флаш джанды',
'exif-flash-mode-2' => 'зорунлу флэш джабыкъды',
'exif-flash-mode-3' => 'автомат режим',
'exif-flash-function-1' => 'Флэш джокъду',
'exif-flash-redeye-1' => 'къызыл кёзле эффектни кетериу режим',

'exif-focalplaneresolutionunit-2' => 'дюйм',

'exif-sensingmethod-1' => 'Танымсыз',
'exif-sensingmethod-2' => 'Бир кристаллы матрицалы бояулу сенсор',
'exif-sensingmethod-3' => 'Эки матрицасы бла бояулу сенсор',
'exif-sensingmethod-4' => 'Юч матрицасы бла бояулу сенсор',
'exif-sensingmethod-5' => 'Боуну кёзюулю ёлчеу функциясы бла матрицалы сенсор',
'exif-sensingmethod-7' => 'Юс бетли сызлы сенсор',
'exif-sensingmethod-8' => 'Бетни кёюзюулю тюрлениую бла сызлы сенсор',

'exif-filesource-3' => 'Цифра фотоаппарат',

'exif-scenetype-1' => 'Сурат эрлай алыннганды',

'exif-customrendered-0' => 'Нормал ишлеу',
'exif-customrendered-1' => 'Стандарт тышында ишлеу',

'exif-exposuremode-0' => 'Автомат экспозиция',
'exif-exposuremode-1' => 'Экспозицияны къол бла джарашдырыу',
'exif-exposuremode-2' => 'Автобрекет',

'exif-whitebalance-0' => 'Автомат халда акъны балансы',
'exif-whitebalance-1' => 'Акъны балансын къол бла джарашдырыу',

'exif-scenecapturetype-0' => 'Стандарт',
'exif-scenecapturetype-1' => 'Ландшафт',
'exif-scenecapturetype-2' => 'Портрет',
'exif-scenecapturetype-3' => 'Кече картха алыу',

'exif-gaincontrol-0' => 'Джокъду',
'exif-gaincontrol-1' => 'Аз уллайыу',
'exif-gaincontrol-2' => 'Уллу уллайыу',
'exif-gaincontrol-3' => 'Аз гитчелеу',
'exif-gaincontrol-4' => 'Кючлю гитчелеу',

'exif-contrast-0' => 'Нормал',
'exif-contrast-1' => 'Джумушакъ',
'exif-contrast-2' => 'Кючлю',

'exif-saturation-0' => 'Нормал',
'exif-saturation-1' => 'Аз тойгъанлыкъ',
'exif-saturation-2' => 'Бек тойгъанлыкъ',

'exif-sharpness-0' => 'Нормал',
'exif-sharpness-1' => 'Джумушакъ',
'exif-sharpness-2' => 'Кючлю',

'exif-subjectdistancerange-0' => 'Билинмейди',
'exif-subjectdistancerange-1' => 'Макро (джууукъдан картха алыу)',
'exif-subjectdistancerange-2' => 'Джабыкъ кёрюнюу',
'exif-subjectdistancerange-3' => 'Узакъ кёрюнюу',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Шимал кенглик',
'exif-gpslatitude-s' => 'Къыбыла кенглик',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Кюнчыгъыш узунлукъ',
'exif-gpslongitude-w' => 'Кюнбатыш узунлукъ',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|метрге|метрге}} тенгизден мийик',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|метрге|метрге}} тенгизден алаша',

'exif-gpsstatus-a' => 'Ёлчелеу бошалмагъанды',
'exif-gpsstatus-v' => 'Ёлчелеу бошалгъанды',

'exif-gpsmeasuremode-2' => '2-ли координатланы ёлчелеу',
'exif-gpsmeasuremode-3' => '3-лю коорданатланы ёлчелеу',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'км/с',
'exif-gpsspeed-m' => 'Миль/сагъат',
'exif-gpsspeed-n' => 'Тенгиз миля',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Километрле',
'exif-gpsdestdistance-m' => 'Миляла',
'exif-gpsdestdistance-n' => 'Тенгиз миляла',

'exif-gpsdop-excellent' => 'Айырма иги ($1)',
'exif-gpsdop-good' => 'Иги ($1)',
'exif-gpsdop-moderate' => 'Орта ($1)',
'exif-gpsdop-fair' => 'Ортадан аман ($1)',
'exif-gpsdop-poor' => 'Аман ($1)',

'exif-objectcycle-a' => 'Къуру эртдембла',
'exif-objectcycle-p' => 'Къуру ингирде',
'exif-objectcycle-b' => 'Эртдембла эм ингирде',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Керти',
'exif-gpsdirection-m' => 'Мукъладис',

'exif-ycbcrpositioning-1' => 'Centered',
'exif-ycbcrpositioning-2' => 'CO-sited',

'exif-dc-contributor' => 'Автор нёгерле',
'exif-dc-coverage' => 'Медианы кенгликле чеклери бла заман чеклери',
'exif-dc-date' => 'Дата(ла)',
'exif-dc-publisher' => 'Басмагъа чыгъаргъан',
'exif-dc-relation' => 'Байламлы медиа',
'exif-dc-rights' => 'Хакъла',
'exif-dc-source' => 'Къайнакъ медиа',
'exif-dc-type' => 'Медианы типи',

'exif-rating-rejected' => 'Къабыл этилмеди',

'exif-isospeedratings-overflow' => '65535-ден уллуду',

'exif-iimcategory-ace' => 'Санат, культура эм кёз ачыу',
'exif-iimcategory-clj' => 'Аманлыкъчылыкъ эм закон',
'exif-iimcategory-dis' => 'Катастрофала эм аварияла',
'exif-iimcategory-fin' => 'Экономика эм бизнес',
'exif-iimcategory-edu' => 'Окъуу',
'exif-iimcategory-evn' => 'Тёгерекдеги табийгъат',
'exif-iimcategory-hth' => 'Саулукъ',
'exif-iimcategory-hum' => 'Интересли хапарла',
'exif-iimcategory-lab' => 'Урунуу',
'exif-iimcategory-lif' => 'Джашау хал эм бош заман',
'exif-iimcategory-pol' => 'Политика',
'exif-iimcategory-rel' => 'Дин бла ийнам',
'exif-iimcategory-sci' => 'Илму эм техника',
'exif-iimcategory-soi' => 'Социал соруула',
'exif-iimcategory-spo' => 'Спорт',
'exif-iimcategory-war' => 'Къазауатла, конфликтле эмда къозгъалыула',
'exif-iimcategory-wea' => 'Хауаны халы',

'exif-urgency-normal' => 'Тюз ($1)',
'exif-urgency-low' => 'Алаша ($1)',
'exif-urgency-high' => 'Мийик ($1)',
'exif-urgency-other' => 'Къошулуучу салгъан приоритет ($1)',

# External editor support
'edit-externally' => 'Бу файлны тыш программа бла тюрлендиригиз',
'edit-externally-help' => '(толу информациягъа мында къарагъыз: [//www.mediawiki.org/wiki/Manual:External_editors setup instructions])',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'бютеу',
'namespacesall' => 'бютеу',
'monthsall' => 'бютеу',
'limitall' => 'бютеую',

# Email address confirmation
'confirmemail' => 'Электорн адресни мюкюл эт',
'confirmemail_noemail' => '[[Special:Preferences|джарашдырыулада]] тамамланнган, джараулу электрон адресигиз джокоъду.',
'confirmemail_text' => 'Викини электрон почтасыны адреси бла хайырланыб башлауну аллы бла, аны мюкюл этериге керекди.
Адресигизге мюкюл этиу письмо ийилир ючюн, тюбюндеги тиекден басыгъыз.
Письмода адресигизни мюкюл этер ючюн джибериу боллукъду, аннга бассагъыз сиз энчи бир бетге чыгъарыкъсыз, андан башлаб сизни адресигиз мюкюл болгъаннга саналады.',
'confirmemail_pending' => 'Мюкюл этиуню коду бла письмо сизге алайсызда джиберилгенди;
Тергеу джазыуугъуз джангы къурагъан эсегиз, джангы бир код ишлеуню башланыууну аллы бла бир кесек сакъларыгъызны тилейбиз.',
'confirmemail_send' => 'Мюкюл кодну джибер',
'confirmemail_sent' => 'Мюкюл этиу письмо джиберилди.',
'confirmemail_oncreate' => 'Мюкюл этиу код электрон адресигизге джиберилди.
Кирир ючюн бу код керек тюлдю, алай а бу викиде хайырландырыб башлар ючюн бу кодну белгилерге керексиз.',
'confirmemail_sendfailed' => '{{SITENAME}} Мюкюл письмо джиберилелмеди. Джараусуз харифле болургъа болур, адресни осмакълагъыз.

Серверни джууабы: $1',
'confirmemail_invalid' => 'Джараусуз мюкюл код. Мюкюл кодну ахыр хайырланыу болджалы чыгъаргъа болур.',
'confirmemail_needlogin' => 'Электорн адресигизни мюкюл этер ючюн, алгъы бурун $1 этерге керексиз.',
'confirmemail_success' => 'Электрон почтагъызны адреси мюкюл этилди. Олтуруу [[Special:UserLogin|ачыб]] Викини татыуун чыгъарыгъыз.',
'confirmemail_loggedin' => 'Электорн почтагъызны адреси мюкюл этилди.',
'confirmemail_error' => 'Мюкюл этилиуде билинмеген халат болду.',
'confirmemail_subject' => '{{SITENAME}} электрон почта адресни мюкюл этилиую',
'confirmemail_body' => 'Ким эседа, биз сагъышдан, $1 IP адресден,
{{SITENAME}} сайтда бу электрон адрес бла $2 тергеу джазыу къурады.

Бу тергеу джазыу кертида сизники болгъанын къабыл эмда {{SITENAME}} сайтдагъы
электрон почта бла хайырланыуну актив халгъа келтирир ючюн, тюбюндеги джибериуню ачыгъыз.

$3

Тергеу джазыуну сиз *къурамагъан*  эсегиз, электорн почта адресни мюкюл этиуюню
тыяр ючюн тюбюндеги джибериуню басыгъыз:

$5

Бу мюкюл код $4 заманнга дери джарарыкъды.',
'confirmemail_body_changed' => 'Ким эседа, биз сагъышдан, $1 IP адресден,
{{SITENAME}} сайтда, $2 аккаунтны  электрон адресин тюрлендиргенди.    

Бу аккаунт кертида сизники болгъанын къабыл эмда {{SITENAME}} сайтдагъы электрон почта бла хайырланыуну актив халгъа келтирир ючюн, тюбюндеги джибериуню ачыгъыз.

$3

Аккаунтны сиз *къурамагъан*  эсегиз, электорн почта адресни мюкюл этиуюню  тыяр ючюн тюбюндеги джибериуню басыгъыз:

$5

Бу мюкюл код $4 заманнга дери джарарыкъды.',
'confirmemail_invalidated' => 'Электрон почтаны адресини мюкюл этилиую тыйылды',
'invalidateemail' => 'Электрон почтаны адресин мюкюл этиуюн тый',

# Scary transclusion
'scarytranscludedisabled' => '[«Interwiki transcluding» джукъланыбды]',
'scarytranscludefailed' => '[$1 ючюн шаблон алымы тындырылмады]',
'scarytranscludetoolong' => '[URL асыры узунду]',

# Delete conflict
'deletedwhileediting' => "'''Эсериу''': Бу бет сиз тюрлендириб башлагъандан сора кетерилгенди!",
'confirmrecreate' => "Бу бетни [[User:$1|$1]] ([[User talk:$1|сюзюу]]) къошулуучу, сиз бетде тюрлендириуле этген заманда кетергенди, чуруму:
: ''$2''",
'confirmrecreate-noreason' => 'Сиз тюрлендириуле этген заманда [[User:$1|$1]] ([[User talk:$1|сюзюу]]) къошулуучу бу бетни кетергенди. Бетни кертиси бла ызына салыргъа излегенигизни бегитигиз.',
'recreate' => 'Джанландыр',

'unit-pixel' => 'пикс.',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Бу бетни кеши кетерилсинми?',
'confirm-purge-bottom' => 'Бетни кеши кетерилгенден сора, андан сора келген версиясы кёргюзюллюкдю.',

# action=watch/unwatch
'confirm-watch-button' => 'ОК',
'confirm-unwatch-button' => 'ОК',

# Separators for various lists, etc.
'semicolon-separator' => ';&#32;',
'percent' => '$1%',
'parentheses' => '($1)',

# Multipage image navigation
'imgmultipageprev' => '← аллындыгъы бет',
'imgmultipagenext' => 'эндиги бет →',
'imgmultigo' => 'Кёч!',
'imgmultigoto' => '$1 бетге кёч',

# Table pager
'ascending_abbrev' => 'гитчеден уллугъа',
'descending_abbrev' => 'азалгъан',
'table_pager_next' => 'Эндиги бет',
'table_pager_prev' => 'Аллындагъы бет',
'table_pager_first' => 'Биринчи бет',
'table_pager_last' => 'Ахыр бет',
'table_pager_limit' => 'Хар бетде $1 бет кёргюз',
'table_pager_limit_label' => 'Бир бетде джазылыу:',
'table_pager_limit_submit' => 'Тындыр',
'table_pager_empty' => 'Табылмагъанды',

# Auto-summaries
'autosumm-blank' => 'Бет бошалтылды',
'autosumm-replace' => "Бетни ичи '$1' бла ауушдурулду",
'autoredircomment' => '[[$1]] бетге джиберилди',
'autosumm-new' => "Бет къуралды: '$1'",

# Size units
'size-bytes' => '$1 байт',
'size-kilobytes' => '$1 КБ',
'size-megabytes' => '$1 МБ',
'size-gigabytes' => '$1 МБ',

# Live preview
'livepreview-loading' => 'Джюклениу...',
'livepreview-ready' => 'Джюклениу... Хазырды!',
'livepreview-failed' => 'Джанлы ал къарау джетишимсиз! Нормал ал къарауну сынагъыз.',
'livepreview-error' => 'Байланыу этиленмеди: $1 "$2".
Нормал ал къарауну хайырланыгъыз.',

# Friendlier slave lag warnings
'lag-warn-normal' => '$1 {{PLURAL:$1|секундан|секундан}} джангы тюрлендириуле бу тизмеде кёрюнмезге боллукъдула.',
'lag-warn-high' => 'Билги базаны сервериндеги бек кечигиу себебли, $1 {{PLURAL:$1|секундан|секундан}} джангы тюрлендириуле бу тизмеде кёрюнмей къалыргъа болур.',

# Watchlist editor
'watchlistedit-numitems' => 'Кёзде тургъан тизмеде {{PLURAL:$1|1 джазылгъан|$1 джазылгъан}} барды, сюзюу бетлени тышында.',
'watchlistedit-noitems' => 'Кёзюгюзде тургъан тизмегизде бир джазылгъан да джокъду.',
'watchlistedit-normal-title' => 'Чынчыкълау спизокню тюрлендир',
'watchlistedit-normal-legend' => 'Кёзюгюзде тургъан тизмегизден джазылгъанланы кетериу',
'watchlistedit-normal-explain' => 'Кёзде тургъан тизмедеги бетле тюбюрекде кёргюзюлгендиле.
Джазылгъанланы кетерир ючюн, къатындагъы тёртгюлчюкде белгилеб, «{{int:Watchlistedit-normal-submit}}» тиекден басыгъыз.
Сиз дагъыда [[Special:EditWatchlist/raw|тизмени текст кибик тюрлендирирге]] боллукъсуз.',
'watchlistedit-normal-submit' => 'Башлыкъланы кетер',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 джазылгъан|$1 джазылгъан}}, кёзюгюзде тургъан тизмегизден кетерилди:',
'watchlistedit-raw-title' => 'Кёзде тургъан «чий» тизмени тюрлендир',
'watchlistedit-raw-legend' => 'Кёзде тургъан «чий» тизмени тюрлендир',
'watchlistedit-raw-explain' => 'Кёзюгюзде тургъан тизмегиздеги бетле тюбюнде кёрюнедиле. Хар тизгинде бир башлыкъ болады, бетлени къошуб неда кетериб тизмени тюрлендирирге боллукъсуз.
Бошалса, «{{int:Watchlistedit-raw-submit}}» деген тиекден басыгъыз.
[[Special:EditWatchlist|Стандарт тюрлендириу]] бла да хайырланаллыкъсыз.',
'watchlistedit-raw-titles' => 'Башлыкъла:',
'watchlistedit-raw-submit' => 'Кёзде тургъан тизмени сакъла',
'watchlistedit-raw-done' => 'Кёзюгюзде тургъан тизмегиз сакъланнганды.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 башлыкъ|$1 башлыкъ}} къошулду:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 башлыкъ|$1 башлыкъ}} кетерилди:',

# Watchlist editing tools
'watchlisttools-view' => 'Тизмеден бетледе тюрлениуле',
'watchlisttools-edit' => 'Тизмеге къарау эм тюрлендириу',
'watchlisttools-raw' => 'Текстча тюрлендириу',

# Iranian month names
'iranian-calendar-m1' => 'Фарвардин',
'iranian-calendar-m2' => 'Ордибехешт',
'iranian-calendar-m3' => 'Хордад',
'iranian-calendar-m4' => 'Хордад',
'iranian-calendar-m5' => 'Мордад',
'iranian-calendar-m6' => 'Шахривар',
'iranian-calendar-m7' => 'Мехр',
'iranian-calendar-m8' => 'Абан',
'iranian-calendar-m9' => 'Азар',
'iranian-calendar-m10' => 'Дей',
'iranian-calendar-m11' => 'Бахман',
'iranian-calendar-m12' => 'Эсфанд',

# Hijri month names
'hijri-calendar-m1' => 'Мухаррам',
'hijri-calendar-m2' => 'Сафар',
'hijri-calendar-m3' => 'Раби-аль-аууаль',
'hijri-calendar-m4' => 'Раби-аль-тани',
'hijri-calendar-m5' => 'Джумада аль-аууаль',
'hijri-calendar-m7' => 'Раджаб',
'hijri-calendar-m8' => 'Шаабан',
'hijri-calendar-m9' => 'Рамадан',
'hijri-calendar-m10' => 'Шаууаль',
'hijri-calendar-m11' => 'Ду аль-Къидан',
'hijri-calendar-m12' => 'Ду аль-Хиджджан',

# Hebrew month names
'hebrew-calendar-m1' => 'Тишрей',
'hebrew-calendar-m2' => 'Хешван',
'hebrew-calendar-m3' => 'Кислев',
'hebrew-calendar-m4' => 'Тевет',
'hebrew-calendar-m5' => 'Шват',
'hebrew-calendar-m6' => 'Адар',
'hebrew-calendar-m6a' => 'Адар I',
'hebrew-calendar-m6b' => 'Адар II',
'hebrew-calendar-m7' => 'Нисан',
'hebrew-calendar-m8' => 'Ияр',
'hebrew-calendar-m9' => 'Сиван',
'hebrew-calendar-m10' => 'Таммуз',
'hebrew-calendar-m11' => 'Ав',
'hebrew-calendar-m12' => 'Элул',
'hebrew-calendar-m1-gen' => 'Тишрея',
'hebrew-calendar-m2-gen' => 'Хешвана',
'hebrew-calendar-m3-gen' => 'Кислева',
'hebrew-calendar-m4-gen' => 'Тевет',
'hebrew-calendar-m5-gen' => 'Шеват',
'hebrew-calendar-m6-gen' => 'Адар',
'hebrew-calendar-m6a-gen' => 'Адар I',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|сюзюу]])',

# Core parser functions
'unknown_extension_tag' => 'Къошакъны билинмеген "$1" теги',
'duplicate-defaultsort' => '\'\'\'Эсгериу:\'\'\' Бар саналгъан "$2" сыныфлама ачхыч, аллындагъы "$1" сыныфлама ачхычны джараусуз этеди.',

# Special:Version
'version' => 'Версия',
'version-extensions' => 'Салыннган кенгертиуле',
'version-specialpages' => 'Къуллукъчу бетле',
'version-parserhooks' => 'Синтаксис анализаторну тутуучула',
'version-variables' => 'Тюрленнгенле',
'version-antispam' => 'Антиспам',
'version-skins' => 'Джасауну темалары',
'version-other' => 'Башха',
'version-mediahandlers' => 'Медияны джарашдырыучула',
'version-hooks' => 'Тутуучула',
'version-parser-extensiontags' => 'Синтиаксис анализаторну кенгертиулерин теглери',
'version-parser-function-hooks' => 'Синтаксис анализаторну функцияларын тутуучула',
'version-hook-name' => 'Тутуучуну аты',
'version-hook-subscribedby' => 'Абонент болгъан',
'version-version' => '(Версия $1)',
'version-license' => 'Лицензия',
'version-poweredby-credits' => "Бу вики '''[//www.mediawiki.org/ MediaWiki]''' программа бла ишлейди, copyright © 2001-$1 $2.",
'version-poweredby-others' => 'башхала',
'version-license-info' => 'MediaWiki эркин программа джазыуду, сиз аны GNU General Public License лицензияны (эркин программа джазыуланы фонду чыгъаргъан; экинчи версиясы неда андан кеч къайсысы да) шартларына кёре джаяргъа эмда/неда тюрлендирирге боллукъсуз.

MediaWiki хайырлы боллукъду деген умут бла джайылады, алай а БИР ТЮРЛЮ БИР ГАРАНТИЯСЫЗДЫ, КОММЕРЦИЯЛЫКЪ неда ЭНЧИ БИР НЮЗЮРГЕ ДЖАРАРЫКЪ гаратияласыз огъунады. Толуракъ билгиле кёрюр ючюн GNU General Public License лицензиягъа къарагъыз.

Бу программа бла бирге  [{{SERVER}}{{SCRIPTPATH}}/COPYING GNU General Public License лицензияны копиясы] болургъа керекди, джокъ эсе Free Software Foundation, Inc. комапиягъа джазыгъыз (адреси: 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA) неда [//www.gnu.org/licenses/old-licenses/gpl-2.0.html лицензияны онлайн окъугъуз].',
'version-software' => 'Салыннган программа баджарыу',
'version-software-product' => 'Продукт',
'version-software-version' => 'Версия',
'version-entrypoints' => 'Кириу нохталаны адреслери',
'version-entrypoints-header-entrypoint' => 'Кириу нохта',
'version-entrypoints-header-url' => 'URL',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Дубликат файлланы изле',
'fileduplicatesearch-summary' => 'Хэш-кодлары бла дубликат файланны изле.',
'fileduplicatesearch-legend' => 'Дубликатланы изле',
'fileduplicatesearch-filename' => 'Файлны аты:',
'fileduplicatesearch-submit' => 'Таб',
'fileduplicatesearch-info' => '$1 × $2 пиксель<br />Файлны ёлчеми: $3<br />MIME-тип: $4',
'fileduplicatesearch-result-1' => '«$1» файлны келишген дубликаты джокъду',
'fileduplicatesearch-result-n' => '«$1» файлны {{PLURAL:$2|1 келишген дубликатыi|$2 келишген дубликаты}} барды.',
'fileduplicatesearch-noresults' => '«$1» деген файл табылмады.',

# Special:SpecialPages
'specialpages' => 'Къуллукъчу бетле',
'specialpages-note' => '----
* Тюз къуллукъчу бетле.
* <span class="mw-specialpagerestricted">Кирирге эркинлик чекленнген къуллукъчу бетле.</span>
* <span class="mw-specialpagecached">Кэш этилген къуллукъчу бетле (эски болургъа боллукъдула).</span>',
'specialpages-group-maintenance' => 'Техника баджарыуну отчетлары',
'specialpages-group-other' => 'Башха къуллукъчу бетле',
'specialpages-group-login' => 'Кир / регистрация эт',
'specialpages-group-changes' => 'Ахыр тюрлендириуле бла журналла',
'specialpages-group-media' => 'Медиа-материалланы юсюнден отчетла бла джюклеуле',
'specialpages-group-users' => 'Къошулуучула эм хакълары',
'specialpages-group-highuse' => 'Бек хайырландырылгъан бетле',
'specialpages-group-pages' => 'Бетлени тизмелери',
'specialpages-group-pagetools' => 'Бет адырла',
'specialpages-group-wiki' => 'Билгиле эм адырла',
'specialpages-group-redirects' => 'Джиберген къуллукъчу бетле',
'specialpages-group-spam' => 'Спамгъа къаршчы адырла',

# Special:BlankPage
'blankpage' => 'Бош бет',
'intentionallyblankpage' => 'Бу бет, иш этиб, бош къоюлгъанды.',

# External image whitelist
'external_image_whitelist' => '#Бу тизгинни болгъаныча къой<pre>
#Хаманда айтылгъан айтыуланы кесеклерин (къуру // арасында къалгъан кесегин) тюбюнде джазыгъыз
#Была тыш суратланы URL-лери бла келиширикди
#Келишгенле сурат болуб кёрюннюкдюле, болмаса къуру суратха джибериу кёрюннюкдюле
# # бла башланнган тизгинле сюзюуге саналлыкъдыла
#Бу уллу-гитче харифге сезимлиди

#Бютеу хаманда айтылгъан айтыуланы кесеклерин бу тизгинни башына къошугъуз. Бу тизгинни тургъаныча къоюгъуз</pre>',

# Special:Tags
'tags' => 'Джараулу тюрлендириу белгиле',
'tag-filter' => '[[Special:Tags|Тег]] фильтр:',
'tag-filter-submit' => 'Фильтрлендир',
'tags-title' => 'Тегле',
'tags-intro' => 'Бу бет, джазылыуну тюрлениуюню кёргюзюрге боллукъ теглени эм аланы ангыламларыны тизмесиди.',
'tags-tag' => 'Тегни аты',
'tags-display-header' => 'Тюрлендириулени тизмелеринде кёрюнюу',
'tags-description-header' => 'Магъананы толу ангылтыуу',
'tags-hitcount-header' => 'Белгиленнген тюрлендириуле',
'tags-edit' => 'тюрлендир',
'tags-hitcount' => '$1 {{PLURAL:$1|тюрлениу|тюрлениу}}',

# Special:ComparePages
'comparepages' => 'Бетлени тенглешдир',
'compare-selector' => 'Бет версияланы тенглешдир',
'compare-page1' => 'Биринчи бет',
'compare-page2' => 'Экинчи бет',
'compare-rev1' => 'Биринчи версия',
'compare-rev2' => 'Экинчи версия',
'compare-submit' => 'Тенглешдир',

# Database error messages
'dberr-header' => 'Бу викини проблемасы барды',
'dberr-problems' => 'Кечериксиз! Бу сайтда техника джаны бла проблемала чыкъгъандыла.',
'dberr-again' => 'Талай минутну сакълаб, джангыдан кириб кёрюгюз.',
'dberr-info' => '(билги базаны сервери бла байлам къурулалмайды: $1)',
'dberr-usegoogle' => 'Google сайтны болушлугъу бла излеб кёрюрге боллукъсуз.',
'dberr-outofdate' => 'Аны индекси эски болургъа боллугъун унутмагъыз.',
'dberr-cachederror' => 'Тюбюндеги бет, изленнген бетни кэш этилген версиясыды, эмда ахыр тюрлендириулени кёргюзмезге болур.',

# HTML forms
'htmlform-invalid-input' => 'Сиз къошхан билгилени къаууму проблемагъа чурум болдула',
'htmlform-select-badoption' => 'Сиз белгилеген багъа джараулу тюлдю',
'htmlform-int-invalid' => 'Сиз белгилеген багъа сан тюлдю',
'htmlform-float-invalid' => 'Сиз белгилеген багъа сан тюлдю.',
'htmlform-int-toolow' => 'Сиз белгилеген багъа минимумну -$1 тюбюндеди',
'htmlform-int-toohigh' => 'Сиз белгилеген багъа максимумдан - $1 башындады',
'htmlform-required' => 'Бу дараджа бек кереклиди',
'htmlform-submit' => 'Джибер',
'htmlform-reset' => 'Тюрлендириулени ызына сал',
'htmlform-selectorother-other' => 'Башха',
'htmlform-no' => 'Огъай',
'htmlform-yes' => 'Хоу',
'htmlform-chosen-placeholder' => 'Вариантны сайлагъыз',

# SQLite database support
'sqlite-has-fts' => '$1 толу текст излеуню хайырландыргъан',
'sqlite-no-fts' => '$1 толу текст излеуню хайырландыра билмеген',

# New logging system
'logentry-delete-delete' => '$3 бетни $1 {{GENDER:$2|кетерди}}',
'logentry-delete-restore' => '$3 бетни $1 {{GENDER:$2|ызына салды}}',
'revdelete-content-hid' => 'ичиндегиси джашырылыбды',
'revdelete-summary-hid' => 'тюрлендириуню ачыкълауу джашырылыбды',
'revdelete-uname-hid' => 'къошулуучуну аты джашырылыбды',
'revdelete-content-unhid' => 'ичиндегиси кёргюзюлдю',
'revdelete-summary-unhid' => 'тюрлендириуню суратлауу ачылыбды',
'revdelete-uname-unhid' => 'къошулуучуну аты ачылды',
'revdelete-restricted' => 'администраторла ючюн этилген чеклениуле',
'revdelete-unrestricted' => 'администратолра ючюн этилген чеклениуле къоратылгъандыла',
'logentry-move-move' => '$1, $3 бетни атын $4 деб тюрлендирди',
'logentry-move-move-noredirect' => '$1, $3 бетни атын $4 деб {{GENDER:$2|тюрлендирди}} (редирект къоймагъанлай)',
'logentry-move-move_redir' => '$1, $3 бетни атын $4 деб {{GENDER:$2|тюрлендирди}} (редиректни башы бла)',
'logentry-move-move_redir-noredirect' => '$1, $3 бетни атын $4 деб {{GENDER:$2|тюрлендирди}} (редиректни башы бла эм редирект къурамай)',
'logentry-patrol-patrol' => '$1, $3 бетни $4 версияын партруль этиб чыкъды',
'logentry-patrol-patrol-auto' => '$1, $3 бетни $4 версиясын автомат халда тинтиб чыкъды',
'logentry-newusers-newusers' => '$1 тергеу джазыу (аккаунт) {{GENDER:$2|къуралды}}',
'logentry-newusers-create' => '$1 тергеу джазыу (аккаунт) къуралды',
'logentry-newusers-create2' => '$1, $3 тергеу джазыуну къурады',
'logentry-newusers-autocreate' => '$1 тергеу джазыу автомат халда къуралды',
'logentry-rights-rights' => '$1 къошулуучу, $3 къошулуучуну членлигин $4 къауумдан $5 къауумгъа {{GENDER:$2|кёчюрдю}}',
'logentry-rights-rights-legacy' => '$1 къошулуучу, $3 къушулуучуну къауумлада членлигин тюрлендирди',
'logentry-rights-autopromote' => '$1 къошулуучу, $4 къауумдан автомат халда $5 къауумгъа {{GENDER:$2|кёчюрюлдю}}',
'rightsnone' => '(джокъ)',

# Feedback
'feedback-subject' => 'Тема:',
'feedback-message' => 'Билдириу:',
'feedback-cancel' => 'Ызына алыу',
'feedback-submit' => 'Оюмунгу джибер',
'feedback-error2' => 'Халат. Тюзетиу ётмеди',
'feedback-close' => 'Тындырылды',

# Search suggestions
'searchsuggest-search' => 'Излеу',
'searchsuggest-containing' => 'ичиндегиси…',

# API errors
'api-error-badtoken' => 'Ич халат: терс токен.',
'api-error-duplicate-popup-title' => ' {{PLURAL:$1|Файлны|Файлны}} дубликаты',
'api-error-empty-file' => 'Сиз ийген файлны ичи бошду.',
'api-error-emptypage' => 'Ичи бош болгъан джангы бетле къураргъа болмайды.',
'api-error-file-too-large' => 'Сиз ийген файл асыры уллуду.',
'api-error-filename-tooshort' => 'Файлны аты асыры къысхады.',
'api-error-filetype-banned' => 'Быллай типли файлла джасакъланыбдыла.',
'api-error-filetype-banned-type' => '$1 — {{PLURAL:$4|джасакъланнган файл типди|джасакъланнган файл типледиле}}. {{PLURAL:$3|Эркинлик берилген файл тип —|Эркинлик берилген файл типле:}} $2.',
'api-error-filetype-missing' => 'Файлны кенгериую джокъду.',
'api-error-hookaborted' => 'Сиз теджеген тюрлендириуню кенгертиуню сюзюучю джасакълагъанды.',
'api-error-illegal-filename' => 'Джарамагъан файл ат.',
'api-error-invalid-file-key' => 'Ич халат: болджаллы асыраучу джерде файл  табылмады.',
'api-error-mustbeposted' => 'Ич халат: соруу, HTTP POST инструкцияны излейди.',
'api-error-ok-but-empty' => 'Ич халат: сервер джууаб бермейди.',
'api-error-timeout' => 'Сакълагъан заманны ичинде сервер джуууб бермейди.',
'api-error-unclassified' => 'Белгили болмагъан халат чыкъды',
'api-error-unknown-code' => 'Билинмеген халат: «$1».',
'api-error-unknown-error' => 'Ич халат: файлны джюклерге излеген сагъатда не эсе да терс болду.',
'api-error-unknown-warning' => 'Билинмеген билдириу: $1',
'api-error-unknownerror' => 'Билинмеген халат: «$1».',
'api-error-uploaddisabled' => 'Бу викиде файлла джюклеу амал джукъланыбды',
'api-error-verification-error' => 'Бу заран джетген файл болургъа боллукъду неда терс кенгертиую болургъа боллукъду.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|секунд}}',
'duration-minutes' => '$1 {{PLURAL:$1|минут}}',
'duration-hours' => '$1 {{PLURAL:$1|сагъат}}',
'duration-days' => '$1 {{PLURAL:$1|кюн}}',
'duration-weeks' => '$1 {{PLURAL:$1|ыйыкъ}}',
'duration-years' => '$1 {{PLURAL:$1|джыл}}',
'duration-decades' => '$1 {{PLURAL:$1|декада}}',
'duration-centuries' => '$1 {{PLURAL:$1|ёмюр}}',
'duration-millennia' => '$1 {{PLURAL:$1|мингджыллыкъ}}',

);
