<?php
/** Moksha (мокшень)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Jarmanj Turtash
 * @author Kaganer
 * @author Khazar II
 * @author Kranch
 * @author Numulunj pilgae
 */

$fallbak = 'ru';

$namespaceNames = [
    NS_MEDIA            => 'Медиа',
    NS_SPECIAL          => 'Башка',
    NS_TALK             => 'Корхнема',
    NS_USER             => 'Тиись',
    NS_USER_TALK        => 'Тиись_корхнема',
    NS_PROJECT_TALK     => '$1_корхнема',
    NS_FILE             => 'Няйф',
    NS_FILE_TALK        => 'Няйф_корхнема',
    NS_MEDIAWIKI        => 'МедиаВики',
    NS_MEDIAWIKI_TALK   => 'МедиаВики_корхнема',
    NS_TEMPLATE         => 'Шаблон',
    NS_TEMPLATE_TALK    => 'Шаблон_корхнема',
    NS_HELP             => 'Лезкс',
    NS_HELP_TALK        => 'Лезкс_корхнема',
    NS_CATEGORY         => 'Категорие',
    NS_CATEGORY_TALK    => 'Категорие_корхнема',
];

$namespaceAliases = [
    'Служебная' => NS_SPECIAL,
    'Обсуждение' => NS_TALK,
    'Участник' => NS_USER,
    'Обсуждение_участника' => NS_USER_TALK,
    'Обсуждение_{{GRAMMAR:genitive|$1}}' => NS_PROJECT_TALK,
    'Изображение' => NS_FILE,
    'Обсуждение_изображения' => NS_FILE_TALK,
    'MediaWiki' => NS_MEDIAWIKI,
    'Обсуждение_MediaWiki' => NS_MEDIAWIKI_TALK,
    'Шаблон' => NS_TEMPLATE,
    'Обсуждение_шаблона' => NS_TEMPLATE_TALK,
    'Справка' => NS_HELP,
    'Обсуждение_справки' => NS_HELP_TALK,
    'Категория' => NS_CATEGORY,
    'Обсуждение_категории' => NS_CATEGORY_TALK,
];

$specialPageAliases = [
    'Allmessages'               => [ 'СембеПачфтематне' ],
    'Allpages'                  => [ 'СембеЛопат' ],
    'Ancientpages'              => [ 'КунардоньЛопат' ],
    'Blankpage'                 => [ 'ШаваЛопа' ],
    'Block'                     => [ 'СёлгомаIP' ],
    'Booksources'               => [ 'КинигаЛисьмот' ],
    'BrokenRedirects'           => [ 'СиньтьфШашфтфксне' ],
    'Categories'                => [ 'Категориет' ],
    'ChangePassword'            => [ 'ПолафттСувама', 'ПолафттСувама вал' ],
    'Confirmemail'              => [ 'КемокстакАдрес' ],
    'Contributions'             => [ 'Путксне' ],
    'CreateAccount'             => [ 'Сёрматфтомс' ],
    'Deadendpages'              => [ 'ПеньЛопат' ],
    'DeletedContributions'      => [ 'НардафПутксне' ],
    'DoubleRedirects'           => [ 'КафонзафШашфтфксне' ],
    'Emailuser'                 => [ 'АдресТиись' ],
    'Export'                    => [ 'Вимс' ],
    'Fewestrevisions'           => [ 'КържаВерзиет' ],
    'FileDuplicateSearch'       => [ 'ФайлКафонзафВешендема' ],
    'Filepath'                  => [ 'ФайлКиц' ],
    'Import'                    => [ 'Сувафтомс' ],
    'Invalidateemail'           => [ 'Аф кемокстамс адресть' ],
    'BlockList'                 => [ 'IPСёлгоматЛувома' ],
    'LinkSearch'                => [ 'СюлмафксВешендема' ],
    'Listadmins'                => [ 'ЛувомаСистемонь вятиксне' ],
    'Listbots'                  => [ 'ЛувомаРоботт програпне' ],
    'Listfiles'                 => [ 'НяйфКярькс' ],
    'Listgrouprights'           => [ 'ЛувомаПолгаВидексне' ],
    'Listredirects'             => [ 'ЛувомаШашфтфксне' ],
    'Listusers'                 => [ 'ЛувомТиихне' ],
    'Lockdb'                    => [ 'ПякстамсДатабазать' ],
    'Log'                       => [ 'Лувома', 'Лувомат' ],
    'Lonelypages'               => [ 'СькамоньЛопат', 'УрозЛопат' ],
    'Longpages'                 => [ 'КувакаЛопат' ],
    'MergeHistory'              => [ 'ШоворемсИсториять' ],
    'MIMEsearch'                => [ 'MIMEВешендема' ],
    'Mostcategories'            => [ 'СембодаКатегориет' ],
    'Mostimages'                => [ 'СембодаНяйфне' ],
    'Mostlinked'                => [ 'СембодаСюлмафт' ],
    'Mostlinkedcategories'      => [ 'СембодаСюлмафтКатегориет' ],
    'Mostlinkedtemplates'       => [ 'СембодаСюлмафтШаблотт' ],
    'Mostrevisions'             => [ 'СембодаВерзиет' ],
    'Movepage'                  => [ 'ШашфттЛопа' ],
    'Mycontributions'           => [ 'МоньПутксне' ],
    'Mypage'                    => [ 'МоньЛопазе' ],
    'Mytalk'                    => [ 'МоньКорхнемазе' ],
    'Newimages'                 => [ 'ОдНяйфне' ],
    'Newpages'                  => [ 'ОдЛопат' ],
    'Preferences'               => [ 'Латцематне' ],
    'Prefixindex'               => [ 'ВалынгольксИндекс' ],
    'Protectedpages'            => [ 'АралафЛопат' ],
    'Protectedtitles'           => [ 'АралафКонякст' ],
    'Randompage'                => [ 'Кодама повсь', 'Кодама повсь лопа' ],
    'Randomredirect'            => [ 'Кона повсьШашфтфкс' ],
    'Recentchanges'             => [ 'УлхкомбаньПолафнематне' ],
    'Recentchangeslinked'       => [ 'УлхкомбаньПолафнематСюлмафт' ],
    'Revisiondelete'            => [ 'ВерзиеНардамс' ],
    'Search'                    => [ 'Вешендема' ],
    'Shortpages'                => [ 'НюрьхкяняЛопат' ],
    'Specialpages'              => [ 'БашкаЛопат' ],
    'Statistics'                => [ 'Статистик' ],
    'Uncategorizedcategories'   => [ 'Апак категорияфттКатегориет' ],
    'Uncategorizedimages'       => [ 'Апак категорияфттНяйфт' ],
    'Uncategorizedpages'        => [ 'Апак категорияфттЛопат' ],
    'Uncategorizedtemplates'    => [ 'Апак категорияфттШаблотт' ],
    'Undelete'                  => [ 'Мърдафтомс' ],
    'Unlockdb'                  => [ 'ПанжемсДатабазать' ],
    'Unusedcategories'          => [ 'Апак нолдак тевсКатегориет' ],
    'Unusedimages'              => [ 'Апак нолдак тевсНяйфне' ],
    'Unusedtemplates'           => [ 'Апак нолдак тевсШаблотт' ],
    'Unwatchedpages'            => [ 'МельгеваномафтомаЛопат' ],
    'Upload'                    => [ 'Тонгома' ],
    'Userlogin'                 => [ 'ТииньСувама' ],
    'Userlogout'                => [ 'ТииньЛисема' ],
    'Userrights'                => [ 'ТииньВидексонза' ],
    'Version'                   => [ 'Верзие' ],
    'Wantedcategories'          => [ 'ВешевиКатегориет' ],
    'Wantedfiles'               => [ 'ВешевиФайлхт' ],
    'Wantedpages'               => [ 'ВешевиЛопат', 'СиньтьфСюлмафкст' ],
    'Wantedtemplates'           => [ 'ВешевиШаблотт' ],
    'Watchlist'                 => [ 'Мельгеванома' ],
    'Whatlinkshere'             => [ 'МезеньСюлмафкстТяса' ],
    'Withoutinterwiki'          => [ 'Интервикифтома' ],
];
