<?php

return array(
    'plural' => function($n) { return (($n%10==1 && $n%100!=11) ? 0 : (($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20)) ? 1 : 2)); },
    'attachment' => 'приложена датотека',
    'When there is nothing to read, redirect me to this page' => 'Када нема ничег за читање, проследи ме на страницу',
    'There is nothing new to read, enjoy your favorites articles!' => 'Нема ничег новог за читање, уживајте у омиљеним чланцима !',
    // 'There is nothing new to read, enjoy your previous readings!' => '',
    'Immediately' => 'Одмах',
    'The feed id is required' => 'Потребан је идентификациони код feed-a',
    'The title is required' => 'Потребан је наслов',
    // 'The site url is required' => '',
    // 'The feed url is required' => '',
    'or' => 'или',
    'edit' => 'уреди',
    'cancel' => 'поништи',
    'Feed URL' => 'УРЛ feed-a',
    'Website URL' => 'УРЛ сајта',
    'Title' => 'Наслов',
    'Edit subscription' => 'Уреди претплату',
    'Unable to edit your subscription.' => 'Неуспешно уређивање претплате.',
    'Your subscription has been updated.' => 'Ваша претплата је ажурирана.',
    'Older items first' => 'Прво најстарије',
    'Most recent first' => 'Прво најновије',
    'Default sorting order for items' => 'Подразумевани ред проређивања',
    'This subscription is empty, %sgo back to unread items%s' => 'Ова претплата је празна, %sвратите се на непрочитане чланке%s',
    'sort by date %s(%s)%s' => 'прореди по датуму %s(%s)%s',
    'most recent first' => 'прво новије',
    'older first' => 'прво старије',
    'Show only this subscription' => 'Покажи само ову претплату',
    'Go to unread' => 'Види непрочитане',
    'Go to bookmarks' => 'Види омиљене',
    'Go to history' => 'Види историју',
    'Go to subscriptions' => 'Види претплате',
    'Go to preferences' => 'Види опције',
    'Bookmarklet' => 'Букмарклет',
    'Subscribe with Miniflux' => 'Претплати се Минифлуксом',
    'Drag and drop this link to your bookmarks' => 'Превуците ову везу омиљене сајтове вашег интернет прегледача',
    'Download full content' => 'Скини пун садржај',
    'Downloading full content is slower because Miniflux grab the content from the original website. You should use that for subscriptions that display only a summary. This feature doesn\'t work with all websites.' => 'Скидање пуног садржаја је спорије зато што Минифлукс мора да преузме садржај са самог сајта. Ову опцију бисте требали користити за сајтове који приказују само сижеа. Опција не ради на свим сајтовима',
    'API endpoint:' => 'УРЛ АПИ-ja : ',
    'API username:' => 'Корисничко име за АПИ: ',
    'API token:' => 'Кључ за АПИ : ',
    'Generate new tokens' => 'Генериши нове кључеве',
    'Bookmark RSS Feed' => 'RSS feed омиљених чланака',
    'updated just now' => 'ажурирано управо сада',
    'checked at' => 'проверено',
    'never updated after creation' => 'никад ажурирано после стварања',
    'Subscription disabled' => 'Претплата искључена',
    'content downloaded' => 'садржај скинут',
    'in progress...' => 'у току...',
    'unable to fetch content' => 'неуспешно скидање чланка',
    'Download content' => 'Скини садржај',
    'download content' => 'скини садржај',
    'Help' => 'Помоћ',
    'Theme' => 'Тема',
    'Items per page' => 'Број ставки по страници',
    'Previous page' => 'Претходна страна',
    'Next page' => 'Следећа страна',
    'Do not fetch the content of articles' => 'Не скидај садржаје чланака',
    'Remove automatically read items' => 'Аутоматски уклони прочитане ставке',
    'Never' => 'Никад',
    'After %d day' => array('После %d дан', 'После %d дана', 'После %d дана'),
    'unread' => 'непрочитани',
    'Unread' => 'Непрочитани',
    'bookmark' => 'додај у омиљене',
    'remove bookmark' => 'обриши из омиљених',
    'bookmarks' => 'омиљени',
    'Bookmarks' => 'Омиљени',
    'Bookmark item' => 'Додај ставку у омиљене',
    'No bookmark' => 'Нема омиљених',
    'history' => 'историја',
    'subscriptions' => 'претплате',
    'Subscriptions' => 'Претплате',
    'preferences' => 'опције',
    'Preferences' => 'Опције',
    'logout' => 'испиши се',
    'Username' => 'Корисничко име',
    'Password' => 'Лозинка',
    'Confirmation' => 'Потврда лозинке',
    'Language' => 'Језик',
    'Save' => 'Сачувај',
    'Database size:' => 'Величина базе података :',
    'Optimize the database' => 'Оптимизирај базу података',
    '(VACUUM command)' => '(команда SQL VACUUM)',
    'Download the entire database' => 'Преузми целу базу података',
    '(Gzip compressed Sqlite file)' => '(Датотека Sqlite компресована у Gzip формату)',
    'Keyboard shortcuts' => 'Пречице на тастатури',
    'Previous item' => 'Претходна ставка',
    'Next item' => 'Следећа ставка',
    'Mark as read or unread' => 'Означи прочитаним или непрочитаним',
    'Open original link' => 'Отвори оригинални линк',
    'Open item' => 'Отвори ставку',
    'About' => 'О програму',
    'Miniflux version:' => 'Верзија Минифлукса :',
    'Nothing to read' => 'Нема ничег за читање',
    'mark all as read' => 'обележи све прочитаним',
    'original link' => 'оригинални линк',
    'mark as read' => 'обележи прочитаним',
    'No history' => 'Нема историје',
    'mark as unread' => 'обележи непрочитаним',
    'History' => 'Историја',
    'flush all items' => 'обриши све ставке',
    'Item not found' => 'Ставка није нађена',
    'Next' => 'Следећа',
    'Previous' => 'Претходна',
    'Sign in' => 'Упиши се',
    'feeds' => 'претплате',
    'add' => 'додај',
    'import' => 'увези',
    'export' => 'извези',
    'OPML Import' => 'Увези OPML',
    'OPML file' => 'OPML датотека',
    'Import' => 'Увези',
    'refresh all' => 'освежи све',
    'No subscription' => 'Нема претплате',
    'remove' => 'уклони',
    'Remove' => 'Уклони',
    'refresh' => 'освежи',
    'New subscription' => 'Нова претплата',
    'Website or Feed URL' => 'УРЛ сајта или feed-a',
    'Add' => 'Додај',
    'http://website/' => 'http://веб-сајт/',
    'Official website:' => 'Званични сајт:',
    'Bad username or password' => 'Погрешно корисничко име или лозинка',
    'Unable to update your preferences.' => 'Неуспешно ажурирање опција.',
    'Your preferences are updated.' => 'Опције су ажуриране.',
    'Unable to import your OPML file.' => 'Неуспешно увожење OPML датотеке',
    'Your feeds have been imported.' => 'Ваше претплате су увежене.',
    'Unable to find a subscription.' => 'Неуспешно налажење претплате.',
    'Subscription added successfully.' => 'Претплата је успешно додата.',
    'Your subscriptions are updated' => 'Ваше претплате су ажуриране',
    'Unable to remove this subscription.' => 'Не могу уклонити претплату.',
    'This subscription has been removed successfully.' => 'Претплата је успешно уклоњена.',
    'The user name is required' => 'Корисничко име је обавезно',
    'The maximum length is 50 characters' => 'Максимална дужина је 50 симбола',
    'The password is required' => 'Лозинка је обавезна',
    'The minimum length is 6 characters' => 'Минимална дужина је 6 симбола',
    'The confirmation is required' => 'Потврда је обавезна',
    'Passwords don\'t match' => 'Лозинке нису исте',
    'Do you really want to remove these items from your history?' => 'Да ли стварно желите да уклоните ове ставке из ваше историје ?',
    'Do you really want to remove this subscription: "%s"?' => 'Да ли стварно желите да уклоните ову претплату : « %s » ?',
    'Nothing to read, do you want to %supdate your subscriptions%s?' => 'Нема ничег за читање, желите ли да %sажурирате ваше претплате%s?',
    'Show help' => 'Покажи помоћ',
    'Close help' => 'Затвори помоћ',
    '%d second ago' => array('Пре %d секунду', 'Пре %d секунде', 'Пре %d секунди'),
    '%d minute ago' => array('Пре %d минут', 'Пре %d минута', 'Пре %d минута'),
    '%d hour ago' => array('Пре %d сат', 'Пре %d сата', 'Пре %d сати'),
    '%d day ago' => array('Пре %d дан', 'Пре %d дана', 'Пре %d дана'),
    '%d week ago' => array('Пре %d седмицу', 'Пре %d седмице', 'Пре %d седмица'),
    '%d month ago' => array('Пре %d месец', 'Пре %d месеца', 'Пре %d месеци'),
    'Timezone' => 'Временска зона',
    'Update all subscriptions' => 'Ажурирај све претплате',
    'Remember Me' => 'Запамти ме',
    'Display items on lists' => 'Прикажи чланке као списак',
    'Summaries' => 'Сижеа',
    'Full contents' => 'Пуних садржаја',
    'Force RTL mode (Right-to-left language)' => 'Форсирај читање с десног на лево',
    'Activated' => 'Укључена',
    'Remove this feed' => 'Уклони ову претплату',
    'Miniflux' => 'Минифлукс',
    'mini%sflux%s' => 'мини%sфлукс%s',
    'Advanced' => 'Напредне опције',
    'Documentation' => 'Документација',
    'Installation instructions' => 'Упутство за инсталацију',
    'Upgrade to a new version' => 'Ажурирај на нову верзију',
    'Cronjob' => 'Ажурирај претплате аутоматски користећи cron',
    'Advanced configuration' => 'Напредна подешавања',
    'Full article download' => 'Скидање пуног садржаја чланака',
    'Themes' => 'Теме',
    'Json-RPC API' => 'АПИ Json-RPC',
    'Fever API' => 'Fever',
    'Translations' => 'Преводи',
    'Run Miniflux with Docker' => 'Користи Минифлукс кроз Docker',
    'FAQ' => 'ЧПП (Често постављана питања)',
    'help' => 'помоћ',
    'api' => 'апи',
    'about' => 'о програму',
    'database' => 'база података',
    'Miniflux API' => 'АПИ Минифлукса',
    'menu' => 'мени',
    'Default' => 'Основна',
    'Value required' => 'Захтева се унос вредности',
    'Must be an integer' => 'Мора бити цели број',
    'Remove automatically unread items' => 'Аутоматски уклони непрочитане ставке',
    'Toggle RTL mode' => 'Укључи/искључи мод с-десна-на-лево',
    'external services' => 'спољни сервиси',
    'Send bookmarks to Pinboard' => 'Пошаљи омиљене ставке на Pinboard',
    'Pinboard API token' => 'Жетон за приступ Pinboard-у',
    'Pinboard tags' => 'Ознаке Pinboard-а',
    'Instapaper username' => 'Корисничко име на Instapaper-у',
    'Instapaper password' => 'Лозинка на Instapaper-у',
    'Instapaper' => 'Instapaper',
    'Pinboard' => 'Pinboard',
    'Send bookmarks to Instapaper' => 'Пошаљи омиљене ставке на Instapaper',
    'Authentication' => 'Пријављивање',
    'Reading' => 'Читање',
    'Application' => 'Апликација',
    'Enable image proxy' => 'Активирај прокси за слике',
    'Avoid mixed content warnings with HTTPS' => 'Избегавај упозорења о помешаном садржају када се користи HTTPS',
    'Download favicons' => 'Скидај иконице веб сајтова',
    'general' => 'опште',
    'Refresh interval in minutes for unread counter' => 'Број минута после којих се освежава бројач непрочитаних ставки',
    'Original link marks article as read' => 'Клик на оригиналну везу обележава чланак прочитаним',
    'Cloak the image referrer' => 'Прикривај рефератора слика',
    // 'This subscription already exists.' => '',
    // 'Connection timeout.' => '',
    // 'Feed is malformed.' => '',
    // 'Invalid SSL certificate.' => '',
    // 'Maximum number of HTTP redirection exceeded.' => '',
    // 'The content size exceeds to maximum allowed size.' => '',
    // 'Unable to detect the feed format.' => '',
    // 'add a new group' => '',
    // 'Groups' => '',
    // 'Back to the group' => '',
    // 'view' => '',
    // 'Item title links to' => '',
    // 'Original' => '',
    // 'Last Login' => '',
    // 'Search' => '',
    // 'There are no results for your search' => '',
    // 'Send bookmarks to Wallabag' => '',
    // 'Wallabag username' => '',
    // 'Wallabag password' => '',
    // 'An error occurred during the last check: "%s".' => '',
    // 'User Profile' => '',
    // 'Users' => '',
    // 'New User' => '',
    // 'New user created successfully.' => '',
    // 'Unable to create this user.' => '',
    // 'Edit User' => '',
    // 'User modified successfully.' => '',
    // 'Unable to edit this user.' => '',
    // 'Remove User' => '',
    // 'Not allowed to fetch feed.' => '',
    // 'Unable to save this subscription in the database.' => '',
    // 'Titles' => '',
    // 'profile' => '',
    // 'users' => '',
    // 'Cronjob URL' => '',
    // 'Do you really want to remove this user: "%s"?' => '',
    // 'Administrator' => '',
    // '%e %B %Y %k:%M' => '',
    // 'Wallabag' => '',
    // 'Wallabag URL' => '',
    // 'Wallabag Client ID' => '',
    // 'Wallabag Client Secret' => '',
    // 'Action' => '',
    // 'Yes' => '',
    // 'No' => '',
    // 'Edit' => '',
    // 'The user id required' => '',
    // 'The username must be unique' => '',
    // 'Current Password' => '',
    // 'New Password' => '',
    // 'Wrong password' => '',
    // 'Duplicated feed' => '',
    // 'This group has been removed successfully.' => '',
    // 'Unable to remove this group.' => '',
    // 'Edit group' => '',
    // 'Group updated successfully.' => '',
    // 'Unable to edit this group.' => '',
    // 'groups' => '',
    // 'There is no group.' => '',
    // 'Do you really want to remove this group: "%s"?' => '',
    // 'This field is required' => '',
    // 'This value must be an integer' => '',
    // 'This text is too long (max. %d)' => '',
    // 'Mark all unread items as read' => '',
    // 'Do not redirect me' => '',
);
