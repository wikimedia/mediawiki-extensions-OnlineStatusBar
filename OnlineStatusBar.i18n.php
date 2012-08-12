<?php
/**
 * Internationalisation file for Online status bar extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/**
 * English
 * @author Petr Bena
 * @author John Du Hart
 */
$messages['en'] = array(
	// Description
	'onlinestatusbar-desc' => 'Status bar which shows whether a user is online, based on preferences, on their user page',
	// Status bar text line (User is now Offline) etc.
	'onlinestatusbar-line' => '$1 is now $2 $3',
	// Message in config asking user if they want to enable it
	'onlinestatusbar-used' => 'Display your online status on your user pages',
	// Message in config for amount of time after which user is away
	'onlinestatusbar-away-time' => 'How many minutes until you are marked as away:',
	// Message in config asking what status they want to use
	'onlinestatusbar-status' => 'What is the default status you wish to use:',
	// Message in config about away time
	'onlinestatusbar-away' => 'Treat as away automatically after defined interval',
	// Message in config asking if user wants to purge the user page
	'onlinestatusbar-purge' => 'Purge user page everytime when you login or logout',
	// Section for config
	'prefs-onlinestatus' => 'Online status',
	// Message in config
	'onlinestatusbar-hide' => 'Hide the status bar on user pages in order to use just the magic word (For advanced users)',
	'onlinestatusbar-status-online' => 'online',
	'onlinestatusbar-status-busy' => 'busy',
	'onlinestatusbar-status-away' => 'away',
	'onlinestatusbar-status-offline' => 'offline',
	'onlinestatusbar-status-unknown' => 'status is unknown',
	'onlinestatusbar-status-hidden' => 'hidden',
);

/** Message documentation (Message documentation)
 * @author John Du Hart
 * @author Petr Bena
 */
$messages['qqq'] = array(
	'onlinestatusbar-desc' => '{{desc}}',
	'onlinestatusbar-line' => 'Status bar text line (User is now Offline), parameters:
* $1 is user
* $2 is a picture of status (small icon in color of status)
* $3 a status, it will appear in title bar of their user space pages',
	'onlinestatusbar-used' => 'Message in config asking user if they want to enable it, checkbox',
	'onlinestatusbar-away-time' => 'Question in preferences asking user how many minutes to wait until he would be flagged as away',
	'onlinestatusbar-status' => 'Message in config asking what status they want to use, option box',
	'onlinestatusbar-away' => 'Time in minutes how long to wait until user is flagged as away',
	'onlinestatusbar-purge' => 'Option to purge user page everytime they login so that magic word is updated',
	'prefs-onlinestatus' => 'Section for config, located in preferences - misc',
	'onlinestatusbar-hide' => 'Ask user if they want to hide status bar this is useful when they are using custom template but need to check if they are online',
	'onlinestatusbar-status-online' => 'Status for users who mark themselves as active',
	'onlinestatusbar-status-busy' => 'Status for users who mark themselves as busy',
	'onlinestatusbar-status-away' => 'Status for users who mark themselves as away',
	'onlinestatusbar-status-offline' => 'Status for users who are offline',
	'onlinestatusbar-status-hidden' => 'Status for users who mark themselves as hidden (used on preferences only)',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'onlinestatusbar-status-online' => 'aanlyn',
	'onlinestatusbar-status-busy' => 'besig',
	'onlinestatusbar-status-away' => 'weg',
	'onlinestatusbar-status-offline' => 'aflyn',
	'onlinestatusbar-status-unknown' => 'status is onbekend',
	'onlinestatusbar-status-hidden' => 'versteek',
);

/** Belarusian (Taraškievica orthography) (‪беларуская (тарашкевіца)‬)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'onlinestatusbar-desc' => 'Панэль стану, якая адлюстроўвае наяўнасьць карыстальніка на сайце, у залежнасьці ад наладаў',
	'onlinestatusbar-line' => '$1 цяпер $2 $3',
	'onlinestatusbar-used' => 'Адлюстроўваць ваш анлайн-статус на вашай старонцы ўдзельніка',
	'onlinestatusbar-away-time' => 'Колькі хвілінаў чакаць да пераходу ў стан «адыйшоў»:',
	'onlinestatusbar-status' => 'Перадвызначаны стан, які мусіць выкарыстоўвацца:',
	'onlinestatusbar-away' => 'Аўтаматычна пераводзіць у стан «адыйшоў» пасьля вызначанага інтэрвалу',
	'onlinestatusbar-purge' => 'Ачышчаць кэш старонкі ўдзельніка па кожным уваходзе або выхадзе',
	'prefs-onlinestatus' => 'Анлайн-статус',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'onlinestatusbar-line' => '$1 zo bremañ $2 $3',
	'prefs-onlinestatus' => 'Statud enlinenn',
	'onlinestatusbar-status-online' => 'Kevreet',
	'onlinestatusbar-status-busy' => 'Soulgarget',
	'onlinestatusbar-status-away' => 'Er-maez',
	'onlinestatusbar-status-offline' => 'Ezvezant',
	'onlinestatusbar-status-unknown' => 'Statud dianav',
	'onlinestatusbar-status-hidden' => 'Kuzhet',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'onlinestatusbar-desc' => 'Ermöglicht, abhängig von der Benutzereinstellung, die Anzeige des Onlinestatus eines Benutzers auf dessen Benutzerseite',
	'onlinestatusbar-line' => '$1 ist gerade $3 $2',
	'onlinestatusbar-used' => 'Deinen Online-Status auf deiner Benutzerseite anzeigen',
	'onlinestatusbar-away-time' => 'Minuten, die vergehen sollen, um als „abwesend“ eingestuft zu werden:',
	'onlinestatusbar-status' => 'Welchen Status möchtest du standardmäßig nutzen:',
	'onlinestatusbar-away' => 'Nach einem festgelegten Zeitraum automatisch als „abwesend“ einstufen',
	'onlinestatusbar-purge' => 'Den Cache der Benutzerseite jedes Mal leeren, wenn du dich an- oder abmeldest',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-hide' => "Die Statusleiste auf Benutzerseiten ausblenden, um stattdessen lediglich das ''magische Wort'' zu nutzen? (Für fortgeschrittene Benutzer)",
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Beschäftigt',
	'onlinestatusbar-status-away' => 'Abwesend',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-unknown' => 'Status ist unbekannt',
	'onlinestatusbar-status-hidden' => 'Versteckt',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'onlinestatusbar-used' => 'Ihren Online-Status auf Ihrer Benutzerseite anzeigen',
	'onlinestatusbar-status' => 'Welchen Status möchten Sie standardmäßig nutzen:',
	'onlinestatusbar-purge' => 'Den Cache der Benutzerseite jedes Mal leeren, wenn Sie sich an- oder abmelden',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'onlinestatusbar-status-offline' => 'Çerxteber',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'onlinestatusbar-desc' => 'Statusowa kšoma, kótaraž pokazujo na zakłaźe nastajenjow na wužywarskem boku, lěc wužywaŕ jo online',
	'onlinestatusbar-line' => '$1 jo něnto $3 $2',
	'onlinestatusbar-used' => 'Twój onlinestatus na twójich wužywarskich bokach pokazaś',
	'onlinestatusbar-away-time' => 'Licba minutow, nježli až maš se ako "njepśibytny" markěrowaś:',
	'onlinestatusbar-status' => 'Standardny status, kótaryž coš wužywaś:',
	'onlinestatusbar-away' => 'Pó póstajonem interwalu awtomatiski za "njeśibytny" měś',
	'onlinestatusbar-purge' => 'Cache wužywarskego boka kuždy raz wuprozniś, gaž se pśizjawjaš abo wótzjawjaš',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-hide' => 'Statusowu kšomu na wužywarskich bokach schowaś, aby se jano magiske słowo wužywało (za pókšacanych wužywarjow)',
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Zabrany',
	'onlinestatusbar-status-away' => 'Njepśibytny',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-unknown' => 'status jo njeznaty',
	'onlinestatusbar-status-hidden' => 'Schowany',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'onlinestatusbar-desc' => 'Barra de estado que muestra en la página de usuario si un usuario está conectado',
	'onlinestatusbar-line' => '$1 está ahora $2 $3',
	'onlinestatusbar-used' => 'Mostrar si está conectado en sus páginas de usuario',
	'onlinestatusbar-away-time' => 'Cuántos minutos deben pasar antes de considerarle "ausente":',
	'onlinestatusbar-status' => 'Cuál es el estado por defecto que desea usar:',
	'onlinestatusbar-away' => 'Considerarle automáticamente como ausente después de un intervalo definido',
	'onlinestatusbar-purge' => 'Vaciar la página de usuario cada vez que ingrese o salga del sistema',
	'prefs-onlinestatus' => 'Estado conectado',
	'onlinestatusbar-hide' => 'Ocultar la barra de estado en las páginas de usuario para usar únicamente la palabra mágica (para usuarios avanzados)',
	'onlinestatusbar-status-online' => 'Conectado',
	'onlinestatusbar-status-busy' => 'Ocupado',
	'onlinestatusbar-status-away' => 'No disponible',
	'onlinestatusbar-status-offline' => 'Desconectado',
	'onlinestatusbar-status-unknown' => 'el estado es desconocido',
	'onlinestatusbar-status-hidden' => 'Oculto',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'onlinestatusbar-status-online' => 'برخط',
	'onlinestatusbar-status-busy' => 'گرفتار',
	'onlinestatusbar-status-away' => 'خارج از دسترس',
	'onlinestatusbar-status-offline' => 'برون‌خط',
	'onlinestatusbar-status-unknown' => 'وضعیت ناشناخته است',
	'onlinestatusbar-status-hidden' => 'پنهان',
);

/** French (français)
 * @author Crochet.david
 * @author DavidL
 * @author Gomoko
 * @author Verdy p
 * @author Zebulon84
 */
$messages['fr'] = array(
	'onlinestatusbar-desc' => "Barre d'état montrant si un utilisateur est en ligne, basé sur les préférences, sur leur page utilisateur",
	'onlinestatusbar-line' => '$1 est maintenant $2 $3',
	'onlinestatusbar-used' => 'Afficher votre statut en ligne sur vos pages utilisateur',
	'onlinestatusbar-away-time' => 'Combien minutes avant de changer le status en "absent" :',
	'onlinestatusbar-status' => 'Quel est le statut par défaut que vous souhaitez utiliser :',
	'onlinestatusbar-away' => 'Status "absent" automatique',
	'onlinestatusbar-purge' => 'Vider la page utilisateur chaque vous que vous vous connectez ou vous déconnectez',
	'prefs-onlinestatus' => 'État en ligne',
	'onlinestatusbar-hide' => "Masquer la barre d'état sur les pages d'utilisateur afin d'utiliser le mot magique seulement (pour les utilisateurs avancés)",
	'onlinestatusbar-status-online' => 'Présent',
	'onlinestatusbar-status-busy' => 'Occupé',
	'onlinestatusbar-status-away' => 'Parti',
	'onlinestatusbar-status-offline' => 'Absent',
	'onlinestatusbar-status-unknown' => "l'état est inconnu",
	'onlinestatusbar-status-hidden' => 'Masqué',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'onlinestatusbar-line' => '$1 est ora $2 $3',
	'prefs-onlinestatus' => 'Ètat en legne',
	'onlinestatusbar-status-online' => 'Present',
	'onlinestatusbar-status-busy' => 'Ocupo',
	'onlinestatusbar-status-away' => 'Viâ',
	'onlinestatusbar-status-offline' => 'Absent',
	'onlinestatusbar-status-hidden' => 'Cachiê',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'onlinestatusbar-desc' => 'Barra de estado que mostra na páxina de usuario se un usuario está conectado',
	'onlinestatusbar-line' => '$1 está $2 $3 nestes intres',
	'onlinestatusbar-used' => 'Mostrar se está conectado nas súas páxinas de usuario',
	'onlinestatusbar-away-time' => 'Os minutos que deben pasar ata considerar que marchou:',
	'onlinestatusbar-status' => 'O estado por defecto que quere usar:',
	'onlinestatusbar-away' => 'Considerar automaticamente que marchou despois do intervalo definido',
	'onlinestatusbar-purge' => 'Purgar a páxina de usuario cada vez que se identifique ou saia do sistema',
	'prefs-onlinestatus' => 'Conectado',
	'onlinestatusbar-hide' => 'Agochar a barra de estado nas páxinas de usuario para usar unicamente a palabra máxica (para usuarios avanzados)',
	'onlinestatusbar-status-online' => 'Conectado',
	'onlinestatusbar-status-busy' => 'Ocupado',
	'onlinestatusbar-status-away' => 'Non dispoñible',
	'onlinestatusbar-status-offline' => 'Desconectado',
	'onlinestatusbar-status-unknown' => 'descoñécese o estado',
	'onlinestatusbar-status-hidden' => 'Agochado',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'onlinestatusbar-desc' => 'שורת מצב שמציגה בדף המשתמש אם המשתמש מקוון, בהתאם להעדפות',
	'onlinestatusbar-line' => '$1 $2 $3 עכשיו',
	'onlinestatusbar-used' => 'להציג לאחרים את מצב ההתחברות שלך',
	'onlinestatusbar-away-time' => 'אחרי כמה לסמך אותך בתור "לא נמצא":',
	'onlinestatusbar-status' => 'מהו המצב שתרצו להיות פה לפי בררת המחדל:',
	'onlinestatusbar-away' => 'להתייחס באופן אוטומטי כאלה "לא נמצא" אחרי פרק זמן מוגדר',
	'onlinestatusbar-purge' => 'לנקות את המטמון של דף המשתמש בכל פעם שאתם נכנסים או יוצאים',
	'prefs-onlinestatus' => 'מצב ההימצאות באתר',
	'onlinestatusbar-hide' => 'להסתיר את שורת המצב כדי להשתמש רק במילת הקסם (למשתמשים מתקדמים)',
	'onlinestatusbar-status-online' => 'באתר',
	'onlinestatusbar-status-busy' => 'עסוק',
	'onlinestatusbar-status-away' => 'לא ליד מחשב',
	'onlinestatusbar-status-offline' => 'לא באתר',
	'onlinestatusbar-status-unknown' => 'המצב אינו ידוע',
	'onlinestatusbar-status-hidden' => 'מוסתר',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'onlinestatusbar-desc' => 'Statusowa lajsta, kotraž na zakładźe nastajenjow pokazuje, hač wužiwar je na swojej wužiwarskej stronje online',
	'onlinestatusbar-line' => '$1 je nětko $3 $2',
	'onlinestatusbar-used' => 'Waš onlinestatus na wašich wužiwarskich stronach pokazać',
	'onlinestatusbar-away-time' => 'Ličba mjeńšin, prjedy hač maće so jako "njepřitomny" markěrować:',
	'onlinestatusbar-status' => 'Što je standardny status, kotryž chceće wužiwać:',
	'onlinestatusbar-away' => 'Po postajenym interwalu awtomatisce za "njepřitomny" měć',
	'onlinestatusbar-purge' => 'Pufrowak wužiwarskeje strony kóždy raz wuprózdnić, hdyž so přizjewješ abo wotzjewješ',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-hide' => 'Statusowu lajstu na wužiwarskich stronach schować, zo by so jenož magiske słowo wužiwało (za pokročenych wužiwarjow)',
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Ma dźěło',
	'onlinestatusbar-status-away' => 'Preč',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-unknown' => 'status je njeznaty',
	'onlinestatusbar-status-hidden' => 'Schowany',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'onlinestatusbar-desc' => 'Barra de stato que monstra si un usator es in linea, dependente de su preferentias, in su pagina de usator',
	'onlinestatusbar-line' => '$1 es ora $2 $3',
	'onlinestatusbar-used' => 'Monstrar si tu es in linea in tu pagina de usator',
	'onlinestatusbar-away-time' => 'Quante minutas ante que tu es marcate como absente:',
	'onlinestatusbar-status' => 'Qual es le stato predefinite que tu vole usar:',
	'onlinestatusbar-away' => 'Tractar automaticamente como absente post un intervallo definite',
	'onlinestatusbar-purge' => 'Purgar le pagina de usator cata vice que tu aperi o claude session',
	'prefs-onlinestatus' => 'Stato in linea',
	'onlinestatusbar-hide' => 'Celar le barra de stato in paginas de usator pro usar solmente le parola magic (Pro usatores avantiate)',
	'onlinestatusbar-status-online' => 'In linea',
	'onlinestatusbar-status-busy' => 'Occupate',
	'onlinestatusbar-status-away' => 'Absente',
	'onlinestatusbar-status-offline' => 'Foras de linea',
	'onlinestatusbar-status-unknown' => 'stato es incognite',
	'onlinestatusbar-status-hidden' => 'Celate',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'onlinestatusbar-desc' => 'Barra di stato che mostra se un utente è online, in base delle preferenze, sulla loro pagina utente',
	'onlinestatusbar-line' => '$1 è ora $2 $3',
	'onlinestatusbar-used' => 'Mostra il tuo stato online nella tua pagina utente',
	'onlinestatusbar-away-time' => 'Quanti minuti prima di essere considerato lontano:',
	'onlinestatusbar-status' => "Qual'è lo stato predefinito che vuoi usare:",
	'onlinestatusbar-away' => "Considera automaticamente come lontano dopo l'intervallo di tempo definito",
	'onlinestatusbar-purge' => 'Aggiorna la pagina utente ogni volta che accedi o esci',
	'prefs-onlinestatus' => 'Stato online',
	'onlinestatusbar-hide' => 'Nascondi la barra di stato sulle pagine degli utenti, per poter utilizzare solo la magic word (per utenti esperti)',
	'onlinestatusbar-status-online' => 'connesso',
	'onlinestatusbar-status-busy' => 'occupato',
	'onlinestatusbar-status-away' => 'lontano',
	'onlinestatusbar-status-offline' => 'non connesso',
	'onlinestatusbar-status-unknown' => 'stato sconosciuto',
	'onlinestatusbar-status-hidden' => 'nascosto',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'onlinestatusbar-desc' => '個人設定と利用者ページに基づいて、利用者がオンラインかどうか表示するステータスバー',
	'onlinestatusbar-line' => '$1 は現在 $2 $3です',
	'onlinestatusbar-used' => 'あなたのオンライン状態を利用者ページに表示',
	'onlinestatusbar-away-time' => '退席中と見なすまでの時間（分）：',
	'onlinestatusbar-status' => '既定として使用する状態：',
	'onlinestatusbar-away' => '定義された時間の経過後に自動的に退席中と見なす',
	'onlinestatusbar-purge' => 'ログイン/ログアウトのたびに利用者ページのキャッシュを破棄',
	'prefs-onlinestatus' => 'オンライン状態',
	'onlinestatusbar-hide' => 'マジックワードを使用するために、利用者ページのステータスバーを隠す（上級者向け）',
	'onlinestatusbar-status-online' => 'オンライン',
	'onlinestatusbar-status-busy' => '多忙',
	'onlinestatusbar-status-away' => '退席中',
	'onlinestatusbar-status-offline' => 'オフライン',
	'onlinestatusbar-status-hidden' => '非表示',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'onlinestatusbar-line' => '$1 ახლა არის $2 $3',
	'prefs-onlinestatus' => 'ონლაინ სტატუსი',
	'onlinestatusbar-status-online' => 'ქსელში',
	'onlinestatusbar-status-busy' => 'დაკავებული',
	'onlinestatusbar-status-away' => 'გასული',
	'onlinestatusbar-status-offline' => 'არ არის ქსელში',
	'onlinestatusbar-status-unknown' => 'სტატუსი უცნობია',
	'onlinestatusbar-status-hidden' => 'დამალული',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'onlinestatusbar-desc' => 'Määt ene Zohschtandsaanzeijer op Metmaacher-Sigge müjjelesch, woh aanjezeisch weed, ov dä onllain es, afhängesch vun däm Metmaacher singe Enschtällonge.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'onlinestatusbar-line' => '$1 ass elo $2 $3',
	'onlinestatusbar-used' => 'Ären online-Status op Ärer Benotzer-Säit weisen',
	'onlinestatusbar-away-time' => "Minutte bis Dir als 'net do' markéiert gitt:",
	'onlinestatusbar-status' => 'Wéi ass de Standard-Status deen Dir benotze wëllt:',
	'onlinestatusbar-away' => 'Automatesch als net-do weisen no enger definéierter Zäit',
	'onlinestatusbar-purge' => "De'Benotzersäit all kéier wann Dir Iech eran oder erausloggt eidel maachen",
	'prefs-onlinestatus' => 'Online-Status',
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Beschäftegt',
	'onlinestatusbar-status-away' => 'Net do',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-unknown' => 'Status ass onbekannt',
	'onlinestatusbar-status-hidden' => 'Verstoppt',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'onlinestatusbar-desc' => 'Статусник што прикажува дали корисникот е на линија, зависно од нагодувањата на корисничката страница',
	'onlinestatusbar-line' => '$1 сега е $2 $3',
	'onlinestatusbar-used' => 'Прикажувај на моите кориснички страници кога сум на линија',
	'onlinestatusbar-away-time' => 'По колку минути да се прикаже „отсутен“:',
	'onlinestatusbar-status' => 'Вашиот статус по основно:',
	'onlinestatusbar-away' => 'Сметај ме за отсутен по извесно зададено време',
	'onlinestatusbar-purge' => 'Пречисти го кешот на корисничката страница секојпат кога ќе се најавам или одјавам',
	'prefs-onlinestatus' => 'Вклученост',
	'onlinestatusbar-hide' => 'Скриј го статусникот за да го користам само волшебниот збор (за напредни корисници)',
	'onlinestatusbar-status-online' => 'Вклучен',
	'onlinestatusbar-status-busy' => 'Зафатен',
	'onlinestatusbar-status-away' => 'Отсутен',
	'onlinestatusbar-status-offline' => 'Исклучен',
	'onlinestatusbar-status-unknown' => 'статусот е непознат',
	'onlinestatusbar-status-hidden' => 'Скриен',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'onlinestatusbar-desc' => 'Palang status yang menunjukkan sama pengguna berada dalam talian atau tidak, berasaskan keutamaan pada laman penggunanya',
	'onlinestatusbar-line' => '$1 kini $2 $3',
	'onlinestatusbar-used' => 'Paparkan status online anda pada laman-laman pengguna anda',
	'onlinestatusbar-away-time' => 'Berapa minit sehingga anda dianggap tiada:',
	'onlinestatusbar-status' => 'Yang manakah status asali yang ingin anda gunakan:',
	'onlinestatusbar-away' => 'Anggap sebagai tiada sebagai automatik selepas tempoh yang ditetapkan',
	'onlinestatusbar-purge' => 'Singkirkan isi laman pengguna setiap kali ketika log masuk/keluar',
	'prefs-onlinestatus' => 'Status dalam talian',
	'onlinestatusbar-hide' => 'Sorokkan palang status di laman pengguna untuk menggunakan kata sakti sahaja (Untuk pengguna yang lebih berpengalaman)',
	'onlinestatusbar-status-online' => 'Dalam talian',
	'onlinestatusbar-status-busy' => 'Sibuk',
	'onlinestatusbar-status-away' => 'Tiada',
	'onlinestatusbar-status-offline' => 'Luar talian',
	'onlinestatusbar-status-unknown' => 'status tidak diketahui',
	'onlinestatusbar-status-hidden' => 'Tersorok',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'onlinestatusbar-desc' => 'Statusbalk die weergeeft of een gebruiker online is, op basis van voorkeuren, op zijn/haar gebruikerspagina',
	'onlinestatusbar-line' => '$1 is nu $2 $3',
	'onlinestatusbar-used' => "Uw onlinestatus weergeven op uw gebruikerspagina's",
	'onlinestatusbar-away-time' => 'Aantal minuten totdat u als weg gemarkeerd wordt:',
	'onlinestatusbar-status' => 'Welke standaard status wilt u gebruiken:',
	'onlinestatusbar-away' => 'Automatisch als weg markeren na een bepaalde interval',
	'onlinestatusbar-purge' => 'Uw gebruikerspagina bij aanmelden en afmelden uit de cache verwijderen',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-hide' => "De statusbalk op gebruikerpagina's verbergen en alleen het magische woord gebruiken (voor geavanceerde gebruikers)",
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Druk',
	'onlinestatusbar-status-away' => 'Weg',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-unknown' => 'status is onbekend',
	'onlinestatusbar-status-hidden' => 'Verborgen',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'onlinestatusbar-desc' => 'Pasek stanu, który wskazuje, czy użytkownik jest w trybie online, w oparciu o preferencje ze strony użytkownika',
	'onlinestatusbar-line' => '$1 jest teraz $2 $3',
	'onlinestatusbar-used' => 'Wyświetlić twój status online na twoich stronach użytkownika',
	'onlinestatusbar-away-time' => 'Ile minut do oznaczenia jako "nieobecny":',
	'onlinestatusbar-status' => 'Jaki jest stan domyślny, którego chcesz użyć:',
	'onlinestatusbar-away' => 'Traktuj jako "nieobecny" automatycznie po określonym interwale',
	'onlinestatusbar-purge' => 'Wyczyść stronę użytkownika za każdym razem, gdy użytkownik loguje się lub wylogowuje',
	'prefs-onlinestatus' => 'Stan online',
	'onlinestatusbar-hide' => 'Ukryj pasek stanu na stronach użytkownika po wykorzystaniu magicznego słowa (dla użytkowników zaawansowanych)',
	'onlinestatusbar-status-online' => 'Dostępny',
	'onlinestatusbar-status-busy' => 'Zajęty',
	'onlinestatusbar-status-away' => 'Nieobecny',
	'onlinestatusbar-status-offline' => 'Niedostępny',
	'onlinestatusbar-status-unknown' => 'stan nieznany',
	'onlinestatusbar-status-hidden' => 'Ukryty',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'prefs-onlinestatus' => 'پرليکه دريځ',
	'onlinestatusbar-status-online' => 'پر ليکه',
	'onlinestatusbar-status-busy' => 'بوخت',
	'onlinestatusbar-status-away' => 'ليرې',
	'onlinestatusbar-status-offline' => 'پرې ليکه',
	'onlinestatusbar-status-unknown' => 'دريځ ناڅرګنده دی',
	'onlinestatusbar-status-hidden' => 'پټ',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'onlinestatusbar-status-online' => 'conectat',
	'onlinestatusbar-status-busy' => 'ocupat',
	'onlinestatusbar-status-away' => 'plecat',
	'onlinestatusbar-status-offline' => 'deconectat',
	'onlinestatusbar-status-unknown' => 'starea este necunoscută',
	'onlinestatusbar-status-hidden' => 'ascuns',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'prefs-onlinestatus' => 'මාර්ගගත තත්වය',
	'onlinestatusbar-status-online' => 'මාර්ගගතයි',
	'onlinestatusbar-status-busy' => 'කාර්යබහුලයි',
	'onlinestatusbar-status-offline' => 'මාර්ගඅපගතයි',
	'onlinestatusbar-status-unknown' => 'තත්වය නොදනියි',
	'onlinestatusbar-status-hidden' => 'සඟවනලද',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'onlinestatusbar-used' => 'உங்கள் இணைப்பிலுள்ள நிலையை உங்கள் பயனர் பக்கத்தில் தெரிவிக்கவும்',
	'onlinestatusbar-status' => 'நீங்கள் பயன்படுத்த விரும்பும் இயல்புநிலை நிலை என்ன:',
	'onlinestatusbar-status-online' => 'இணைப்பில்',
	'onlinestatusbar-status-offline' => 'இணைப்பிலில்லை',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author Vvk.pentapati
 */
$messages['te'] = array(
	'onlinestatusbar-line' => '$1 ippudu $2 $3',
	'onlinestatusbar-used' => 'మీరు ఆన్‌లైనులో ఉన్నట్టు ఇతరులుకు చూపించాలా?',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'onlinestatusbar-desc' => 'Bareta ng katayuan na nagpapakita kung ang isang tagagamit ay naka-Internet, na nakabatay sa mga kanaisan, na nasa ibabaw ng kanilang pahina ng tagagamit',
	'onlinestatusbar-line' => 'Ang $1 ay kasalukuyang $2 $3 na',
	'onlinestatusbar-used' => 'Ipakita ang iyong katayuang nasa Internet na nasa mga pahina mo ng tagagamit',
	'onlinestatusbar-away-time' => 'Ilang mga minuto hanggang sa markahan ka bilang wala rito at malayo:',
	'onlinestatusbar-status' => 'Ano ang nais mong gamitin na likas na nakatakdang katayuan:',
	'onlinestatusbar-away' => 'Kusang ituring bilang wala rito at malayo pagkaraan ng tinukoy na agwat',
	'onlinestatusbar-purge' => 'Purgahin ang pahina ng tagagamit tuwing lalagda ka o aalis mula sa pagkakalagda',
	'prefs-onlinestatus' => 'Katayuan sa Internet',
	'onlinestatusbar-hide' => 'Itago ang bareta ng katayuan na nasa mga pahina ng tagagamit upang gamitin lamang ang salitang masalamangka (Para sa mas masusulong na mga tagagamit)',
	'onlinestatusbar-status-online' => 'nakaugnay sa Internet',
	'onlinestatusbar-status-busy' => 'abala',
	'onlinestatusbar-status-away' => 'wala at malayo',
	'onlinestatusbar-status-offline' => 'hindi nakaugnay sa Internet',
	'onlinestatusbar-status-unknown' => 'hindi alam ang katayuan',
	'onlinestatusbar-status-hidden' => 'nakatago',
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'onlinestatusbar-status-offline' => 'Çevrimdışı',
);

/** Traditional Chinese (‪中文（繁體）‬)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'onlinestatusbar-status-hidden' => '隱藏',
);

