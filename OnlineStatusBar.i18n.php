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
	# Special:Version
	'onlinestatusbar-desc' => 'Status bar which shows whether a user is online on their user page',

	# User preferences
	'prefs-onlinestatus' => 'Online status',
	'onlinestatusbar-used' => 'Display your online status on your user pages',
	'onlinestatusbar-hide' => 'Hide the status bar on user pages in order to use just the magic word (For advanced users)',
	'onlinestatusbar-away' => 'Treat as away automatically after defined interval',
	'onlinestatusbar-purge' => 'Purge user page everytime when you login or logout',
	'onlinestatusbar-status' => 'What is the default status you wish to use?',
	'onlinestatusbar-away-time' => 'How many minutes until you are marked as away?',

	# Status titles
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Busy}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Away}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Hidden}}', # Only used on Special:Preferences, API gives "Offline"
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Unknown}}',

	# Status descriptions
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|This user}} is now online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|This user}} is busy and may be unavailable',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|This user}} is idle and may be unavailable',
	#'onlinestatusbar-tooltip-hidden' to tooltip for hidden, in front-end this is part of "Offline"
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|This user}} is offline',
	'onlinestatusbar-tooltip-unknown' => 'Status of {{GENDER:$1|this user}} is unknown',
);

/** Message documentation (Message documentation)
 * @author John Du Hart
 * @author Petr Bena
 * @author Raymond
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'onlinestatusbar-desc' => '{{desc}}', # Fuzzy
	'prefs-onlinestatus' => 'Section for config, located in preferences - misc',
	'onlinestatusbar-used' => 'Message in config asking user if they want to enable it, checkbox',
	'onlinestatusbar-hide' => 'Ask user if they want to hide status bar this is useful when they are using custom template but need to check if they are online',
	'onlinestatusbar-away' => 'Time in minutes how long to wait until user is flagged as away',
	'onlinestatusbar-purge' => 'Option to purge user page everytime they login so that magic word is updated',
	'onlinestatusbar-status' => 'Message in config asking what status they want to use, option box',
	'onlinestatusbar-away-time' => 'Question in preferences asking user how many minutes to wait until he would be flagged as away',
	'onlinestatusbar-title-online' => 'Status for users who mark themselves as active. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-title-busy' => 'Status for users who mark themselves as busy. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-title-away' => 'Status for users who mark themselves as away. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Status for users who mark themselves as hidden. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-title-offline' => 'Status for users who are offline. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-title-unknown' => 'Displayed for users with an unknown status. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-tooltip-online' => 'Tooltip for {{msg-mw|onlinestatusbar-title-online}}. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Tooltip for {{msg-mw|onlinestatusbar-title-busy}}. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Tooltip for {{msg-mw|onlinestatusbar-title-away}}. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Tooltip for {{msg-mw|onlinestatusbar-title-offline}}. Parameters:
* $1 is the name of the user for GENDER.', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Tooltip for {{msg-mw|onlinestatusbar-title-unknown}}. Parameters:
* $1 is the name of the user for GENDER.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'onlinestatusbar-title-online' => 'aanlyn',
	'onlinestatusbar-title-busy' => 'besig',
	'onlinestatusbar-title-away' => 'weg',
	'onlinestatusbar-title-hidden' => 'versteek',
	'onlinestatusbar-title-offline' => 'aflyn',
	'onlinestatusbar-title-unknown' => 'status is onbekend', # Fuzzy
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'onlinestatusbar-desc' => 'Панэль стану, якая адлюстроўвае наяўнасьць карыстальніка на сайце, у залежнасьці ад наладаў',
	'prefs-onlinestatus' => 'Анлайн-статус',
	'onlinestatusbar-used' => 'Адлюстроўваць ваш анлайн-статус на вашай старонцы ўдзельніка',
	'onlinestatusbar-hide' => 'Хаваць панэль стану на старонках удзельнікаў для выкарыстаньня магічнага слова (для дасьведчаных удзельнікаў)',
	'onlinestatusbar-away' => 'Аўтаматычна пераводзіць у стан «адыйшоў» пасьля вызначанага інтэрвалу',
	'onlinestatusbar-purge' => 'Ачышчаць кэш старонкі ўдзельніка па кожным уваходзе або выхадзе',
	'onlinestatusbar-status' => 'Перадвызначаны стан, які мусіць выкарыстоўвацца?',
	'onlinestatusbar-away-time' => 'Колькі хвілінаў чакаць да пераходу ў стан «адыйшоў»:',
	'onlinestatusbar-title-online' => 'на сайце',
	'onlinestatusbar-title-busy' => 'заняты',
	'onlinestatusbar-title-away' => 'адыйшоў',
	'onlinestatusbar-title-hidden' => 'схаваны',
	'onlinestatusbar-title-offline' => 'недаступны',
	'onlinestatusbar-title-unknown' => 'стан невядомы', # Fuzzy
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'prefs-onlinestatus' => 'Statud enlinenn',
	'onlinestatusbar-title-online' => 'Kevreet',
	'onlinestatusbar-title-busy' => 'Soulgarget',
	'onlinestatusbar-title-away' => 'Er-maez',
	'onlinestatusbar-title-hidden' => 'Kuzhet',
	'onlinestatusbar-title-offline' => 'Ezvezant',
	'onlinestatusbar-title-unknown' => 'Statud dianav', # Fuzzy
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'onlinestatusbar-desc' => 'Ermöglicht die Anzeige des Onlinestatus eines Benutzers auf dessen Benutzerseite',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Deinen Online-Status auf deiner Benutzerseite anzeigen',
	'onlinestatusbar-hide' => "Die Statusleiste auf Benutzerseiten ausblenden, um stattdessen lediglich das ''magische Wort'' zu nutzen? (Für fortgeschrittene Benutzer)",
	'onlinestatusbar-away' => 'Nach einem festgelegten Zeitraum automatisch als „abwesend“ einstufen',
	'onlinestatusbar-purge' => 'Den Cache der Benutzerseite jedes Mal leeren, wenn du dich an- oder abmeldest',
	'onlinestatusbar-status' => 'Welchen Status möchtest du standardmäßig nutzen?',
	'onlinestatusbar-away-time' => 'Minuten, die vergehen sollen, um als „abwesend“ eingestuft zu werden:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Beschäftigt}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Abwesend}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Versteckt}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Unbekannt}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Dieser Benutzer|Diese Benutzerin}} ist jetzt online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Dieser Benutzer|Diese Benutzerin}} ist beschäftigt und möglicherweise nicht anwesend',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Dieser Benutzer|Diese Benutzerin}} ist inaktiv und möglichweise nicht anwesend',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Dieser Benutzer|Diese Benutzerin}} ist offline',
	'onlinestatusbar-tooltip-unknown' => 'Der Status {{GENDER:$1|dieses Benutzers|dieser Benutzerin}} ist unbekannt',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'onlinestatusbar-used' => 'Ihren Online-Status auf Ihrer Benutzerseite anzeigen',
	'onlinestatusbar-purge' => 'Den Cache der Benutzerseite jedes Mal leeren, wenn Sie sich an- oder abmelden',
	'onlinestatusbar-status' => 'Welchen Status möchten Sie standardmäßig nutzen?',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'onlinestatusbar-title-offline' => 'Çerxteber',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'onlinestatusbar-desc' => 'Statusowa kšoma, kótaraž pokazujo na zakłaźe nastajenjow na wužywarskem boku, lěc wužywaŕ jo online',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Twój onlinestatus na twójich wužywarskich bokach pokazaś',
	'onlinestatusbar-hide' => 'Statusowu kšomu na wužywarskich bokach schowaś, aby se jano magiske słowo wužywało (za pókšacanych wužywarjow)',
	'onlinestatusbar-away' => 'Pó póstajonem interwalu awtomatiski za "njeśibytny" měś',
	'onlinestatusbar-purge' => 'Cache wužywarskego boka kuždy raz wuprozniś, gaž se pśizjawjaš abo wótzjawjaš',
	'onlinestatusbar-status' => 'Standardny status, kótaryž coš wužywaś?',
	'onlinestatusbar-away-time' => 'Licba minutow, nježli až maš se ako "njepśibytny" markěrowaś:',
	'onlinestatusbar-title-online' => 'Online',
	'onlinestatusbar-title-busy' => 'Zabrany',
	'onlinestatusbar-title-away' => 'Njepśibytny',
	'onlinestatusbar-title-hidden' => 'Schowany',
	'onlinestatusbar-title-offline' => 'Offline',
	'onlinestatusbar-title-unknown' => 'Njeznaty',
	'onlinestatusbar-tooltip-online' => 'Toś ten wužywaŕ jo něnto online',
	'onlinestatusbar-tooltip-busy' => 'Toś ten wužywaŕ źěła a snaź njejo pśibytny',
	'onlinestatusbar-tooltip-away' => 'Toś ten wužywaŕ njejo aktiwny a snaź njejo pśibytny',
	'onlinestatusbar-tooltip-offline' => 'Toś ten wužywaŕ jo offline',
	'onlinestatusbar-tooltip-unknown' => 'Status toś togo wužywarja jo njeznaty',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'onlinestatusbar-desc' => 'Barra de estado que muestra en la página de usuario si un usuario está conectado',
	'prefs-onlinestatus' => 'Estado conectado',
	'onlinestatusbar-used' => 'Mostrar si está conectado en sus páginas de usuario',
	'onlinestatusbar-hide' => 'Ocultar la barra de estado en las páginas de usuario para usar únicamente la palabra mágica (para usuarios avanzados)',
	'onlinestatusbar-away' => 'Considerarle automáticamente como ausente después de un intervalo definido',
	'onlinestatusbar-purge' => 'Vaciar la página de usuario cada vez que ingrese o salga del sistema',
	'onlinestatusbar-status' => 'Cuál es el estado por defecto que desea usar?',
	'onlinestatusbar-away-time' => 'Cuántos minutos deben pasar antes de considerarle "ausente":',
	'onlinestatusbar-title-online' => 'Conectado',
	'onlinestatusbar-title-busy' => 'Ocupado',
	'onlinestatusbar-title-away' => 'No disponible',
	'onlinestatusbar-title-hidden' => 'Oculto',
	'onlinestatusbar-title-offline' => 'Desconectado',
	'onlinestatusbar-title-unknown' => 'Desconocido',
	'onlinestatusbar-tooltip-online' => 'Este usuario está en línea',
	'onlinestatusbar-tooltip-busy' => 'Este usuario está ocupado y puede no estar disponible',
	'onlinestatusbar-tooltip-away' => 'Este usuario está inactivo y puede no estar disponible',
	'onlinestatusbar-tooltip-offline' => 'Este usuario está desconectado',
	'onlinestatusbar-tooltip-unknown' => 'Se desconoce el estado de este usuario',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'onlinestatusbar-title-online' => 'arvuti juures',
	'onlinestatusbar-title-busy' => 'hõivatud',
	'onlinestatusbar-title-away' => 'eemal',
	'onlinestatusbar-title-hidden' => 'peidetud',
	'onlinestatusbar-title-offline' => 'ühenduseta',
	'onlinestatusbar-title-unknown' => 'olek on teadmata', # Fuzzy
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'onlinestatusbar-title-online' => 'برخط',
	'onlinestatusbar-title-busy' => 'گرفتار',
	'onlinestatusbar-title-away' => 'خارج از دسترس',
	'onlinestatusbar-title-hidden' => 'پنهان',
	'onlinestatusbar-title-offline' => 'برون‌خط',
	'onlinestatusbar-title-unknown' => 'وضعیت ناشناخته است', # Fuzzy
);

/** Finnish (suomi)
 * @author Beluga
 * @author Crt
 */
$messages['fi'] = array(
	'onlinestatusbar-title-online' => 'kirjautuneena',
	'onlinestatusbar-title-away' => 'poissa',
	'onlinestatusbar-title-hidden' => 'piilotettu',
	'onlinestatusbar-title-offline' => 'ei kirjautuneena',
	'onlinestatusbar-title-unknown' => 'Tuntematon',
);

/** French (français)
 * @author Crochet.david
 * @author DavidL
 * @author Gomoko
 * @author Tititou36
 * @author Verdy p
 * @author Zebulon84
 */
$messages['fr'] = array(
	'onlinestatusbar-desc' => "Barre d'état montrant si un utilisateur est en ligne, basé sur les préférences, sur leur page utilisateur",
	'prefs-onlinestatus' => 'État en ligne',
	'onlinestatusbar-used' => 'Afficher votre statut en ligne sur vos pages utilisateur',
	'onlinestatusbar-hide' => "Masquer la barre d'état sur les pages d'utilisateur afin d'utiliser le mot magique seulement (pour les utilisateurs avancés)",
	'onlinestatusbar-away' => 'Status "absent" automatique',
	'onlinestatusbar-purge' => 'Vider la page utilisateur chaque vous que vous vous connectez ou vous déconnectez',
	'onlinestatusbar-status' => 'Quel est le statut par défaut que vous souhaitez utiliser ?',
	'onlinestatusbar-away-time' => 'Combien minutes avant de changer le status en "absent" :',
	'onlinestatusbar-title-online' => 'Présent',
	'onlinestatusbar-title-busy' => 'Occupé',
	'onlinestatusbar-title-away' => 'Parti',
	'onlinestatusbar-title-hidden' => 'Masqué',
	'onlinestatusbar-title-offline' => 'Absent',
	'onlinestatusbar-title-unknown' => 'Inconnu',
	'onlinestatusbar-tooltip-online' => 'Cet utilisateur est maintenant connecté',
	'onlinestatusbar-tooltip-busy' => 'Cet utilisateur est occupé et peut ne pas être disponible',
	'onlinestatusbar-tooltip-away' => 'Cet utilisateur est inactif et peut ne pas être disponible',
	'onlinestatusbar-tooltip-offline' => 'Cet utilisateur est non connecté',
	'onlinestatusbar-tooltip-unknown' => 'Le statut de cet utilisateur est inconnu',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'prefs-onlinestatus' => 'Ètat en legne',
	'onlinestatusbar-title-online' => 'Present',
	'onlinestatusbar-title-busy' => 'Ocupo',
	'onlinestatusbar-title-away' => 'Viâ',
	'onlinestatusbar-title-hidden' => 'Cachiê',
	'onlinestatusbar-title-offline' => 'Absent',
	'onlinestatusbar-title-unknown' => 'l’ètat est encognu', # Fuzzy
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'onlinestatusbar-desc' => 'Barra de estado que mostra na páxina de usuario se un usuario está conectado',
	'prefs-onlinestatus' => 'Conectado',
	'onlinestatusbar-used' => 'Mostrar se está conectado nas súas páxinas de usuario',
	'onlinestatusbar-hide' => 'Agochar a barra de estado nas páxinas de usuario para usar unicamente a palabra máxica (para usuarios avanzados)',
	'onlinestatusbar-away' => 'Considerar automaticamente que marchou despois do intervalo definido',
	'onlinestatusbar-purge' => 'Purgar a páxina de usuario cada vez que se identifique ou saia do sistema',
	'onlinestatusbar-status' => 'Cal é o estado por defecto que quere usar?',
	'onlinestatusbar-away-time' => 'Cantos minutos deben pasar ata considerar que marchou?',
	'onlinestatusbar-title-online' => 'Conectado',
	'onlinestatusbar-title-busy' => 'Ocupado',
	'onlinestatusbar-title-away' => 'Ausente',
	'onlinestatusbar-title-hidden' => 'Agochado',
	'onlinestatusbar-title-offline' => 'Desconectado',
	'onlinestatusbar-title-unknown' => 'Descoñecido',
	'onlinestatusbar-tooltip-online' => 'O usuario está conectado',
	'onlinestatusbar-tooltip-busy' => 'O usuario está ocupado e pode non estar dispoñible',
	'onlinestatusbar-tooltip-away' => 'O usuario está inactivo e pode non estar dispoñible',
	'onlinestatusbar-tooltip-offline' => 'O usuario está desconectado',
	'onlinestatusbar-tooltip-unknown' => 'Descoñécese o estado do usuario',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'onlinestatusbar-desc' => 'שורת מצב שמציגה בדף המשתמש אם המשתמש מקוון, בהתאם להעדפות',
	'prefs-onlinestatus' => 'מצב ההימצאות באתר',
	'onlinestatusbar-used' => 'להציג לאחרים את מצב ההתחברות שלך',
	'onlinestatusbar-hide' => 'להסתיר את שורת המצב כדי להשתמש רק במילת הקסם (למשתמשים מתקדמים)',
	'onlinestatusbar-away' => 'להתייחס באופן אוטומטי כאלה "לא נמצא" אחרי פרק זמן מוגדר',
	'onlinestatusbar-purge' => 'לנקות את המטמון של דף המשתמש בכל פעם שאתם נכנסים או יוצאים',
	'onlinestatusbar-status' => 'מהו המצב שתרצו להיות פה לפי בררת המחדל?',
	'onlinestatusbar-away-time' => 'אחרי כמה לסמך אותך בתור "לא נמצא":',
	'onlinestatusbar-title-online' => 'באתר',
	'onlinestatusbar-title-busy' => 'עסוק',
	'onlinestatusbar-title-away' => 'לא ליד מחשב',
	'onlinestatusbar-title-hidden' => 'מוסתר',
	'onlinestatusbar-title-offline' => 'לא באתר',
	'onlinestatusbar-title-unknown' => 'המצב אינו ידוע', # Fuzzy
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'onlinestatusbar-desc' => 'Statusowa lajsta, kotraž na zakładźe nastajenjow pokazuje, hač wužiwar je na swojej wužiwarskej stronje online',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Waš onlinestatus na wašich wužiwarskich stronach pokazać',
	'onlinestatusbar-hide' => 'Statusowu lajstu na wužiwarskich stronach schować, zo by so jenož magiske słowo wužiwało (za pokročenych wužiwarjow)',
	'onlinestatusbar-away' => 'Po postajenym interwalu awtomatisce za "njepřitomny" měć',
	'onlinestatusbar-purge' => 'Pufrowak wužiwarskeje strony kóždy raz wuprózdnić, hdyž so přizjewješ abo wotzjewješ',
	'onlinestatusbar-status' => 'Što je standardny status, kotryž chceće wužiwać?',
	'onlinestatusbar-away-time' => 'Ličba mjeńšin, prjedy hač maće so jako "njepřitomny" markěrować:',
	'onlinestatusbar-title-online' => 'Online',
	'onlinestatusbar-title-busy' => 'Ma dźěło',
	'onlinestatusbar-title-away' => 'Preč',
	'onlinestatusbar-title-hidden' => 'Schowany',
	'onlinestatusbar-title-offline' => 'Offline',
	'onlinestatusbar-title-unknown' => 'Njeznaty',
	'onlinestatusbar-tooltip-online' => 'Tutón wužiwar je nětko online',
	'onlinestatusbar-tooltip-busy' => 'Tutón wužiwar dźěła a snano njeje přitomny',
	'onlinestatusbar-tooltip-away' => 'Tutón wužiwar njeje aktiwny a snano njeje přitomny',
	'onlinestatusbar-tooltip-offline' => 'Tutón wužiwar je offline',
	'onlinestatusbar-tooltip-unknown' => 'Status tutoho wužiwarja je njeznaty',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'onlinestatusbar-desc' => 'Barra de stato que monstra si un usator es in linea, dependente de su preferentias, in su pagina de usator',
	'prefs-onlinestatus' => 'Stato in linea',
	'onlinestatusbar-used' => 'Monstrar si tu es in linea in tu pagina de usator',
	'onlinestatusbar-hide' => 'Celar le barra de stato in paginas de usator pro usar solmente le parola magic (Pro usatores avantiate)',
	'onlinestatusbar-away' => 'Tractar automaticamente como absente post un intervallo definite',
	'onlinestatusbar-purge' => 'Purgar le pagina de usator cata vice que tu aperi o claude session',
	'onlinestatusbar-status' => 'Qual es le stato predefinite que tu vole usar?',
	'onlinestatusbar-away-time' => 'Quante minutas ante que tu es marcate como absente:',
	'onlinestatusbar-title-online' => 'In linea',
	'onlinestatusbar-title-busy' => 'Occupate',
	'onlinestatusbar-title-away' => 'Absente',
	'onlinestatusbar-title-hidden' => 'Celate',
	'onlinestatusbar-title-offline' => 'Foras de linea',
	'onlinestatusbar-title-unknown' => 'stato es incognite', # Fuzzy
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 */
$messages['it'] = array(
	'onlinestatusbar-desc' => 'Barra di stato che mostra se un utente è online, in base delle preferenze, sulla loro pagina utente',
	'prefs-onlinestatus' => 'Stato online',
	'onlinestatusbar-used' => 'Mostra il tuo stato online nella tua pagina utente',
	'onlinestatusbar-hide' => 'Nascondi la barra di stato sulle pagine degli utenti, per poter utilizzare solo la magic word (per utenti esperti)',
	'onlinestatusbar-away' => "Considera automaticamente come lontano dopo l'intervallo di tempo definito",
	'onlinestatusbar-purge' => 'Aggiorna la pagina utente ogni volta che accedi o esci',
	'onlinestatusbar-status' => 'Qual è lo stato predefinito che vuoi usare?',
	'onlinestatusbar-away-time' => 'Quanti minuti prima di essere considerato lontano:',
	'onlinestatusbar-title-online' => 'connesso',
	'onlinestatusbar-title-busy' => 'occupato',
	'onlinestatusbar-title-away' => 'lontano',
	'onlinestatusbar-title-hidden' => 'nascosto',
	'onlinestatusbar-title-offline' => 'non connesso',
	'onlinestatusbar-title-unknown' => 'sconosciuto',
	'onlinestatusbar-tooltip-online' => 'Questo utente è attualmente connesso',
	'onlinestatusbar-tooltip-busy' => 'Questo utente è attualmente occupato e potrebbe non essere disponibile',
	'onlinestatusbar-tooltip-away' => 'Questo utente è attualmente lontano e potrebbe non essere disponibile',
	'onlinestatusbar-tooltip-offline' => 'Questo utente è attualmente non connesso',
	'onlinestatusbar-tooltip-unknown' => 'Lo stato di questo utente è sconosciuto',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'onlinestatusbar-desc' => '利用者ページにその利用者がオンラインかどうかを表示するステータス バー',
	'prefs-onlinestatus' => 'オンライン状態',
	'onlinestatusbar-used' => 'あなたのオンライン状態を利用者ページに表示',
	'onlinestatusbar-hide' => 'マジックワードを使用するために、利用者ページのステータスバーを隠す（上級者向け）',
	'onlinestatusbar-away' => '定義された時間の経過後に自動的に退席中と見なす',
	'onlinestatusbar-purge' => 'ログイン/ログアウトのたびに利用者ページのキャッシュを破棄',
	'onlinestatusbar-status' => '既定として使用する状態は?',
	'onlinestatusbar-away-time' => '退席中と見なすまでの時間は? (分単位)',
	'onlinestatusbar-title-online' => 'オンライン', # Fuzzy
	'onlinestatusbar-title-busy' => '多忙', # Fuzzy
	'onlinestatusbar-title-away' => '退席中', # Fuzzy
	'onlinestatusbar-title-hidden' => '非表示', # Fuzzy
	'onlinestatusbar-title-offline' => 'オフライン', # Fuzzy
	'onlinestatusbar-title-unknown' => '不明', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'この利用者は現在オンラインです', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'この利用者は多忙のため、応答できない可能性があります', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'この利用者は退席中のため、応答できない可能性があります', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'この利用者はオフラインです', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'この利用者の状態は不明です', # Fuzzy
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'prefs-onlinestatus' => 'ონლაინ სტატუსი',
	'onlinestatusbar-used' => 'თქვენი მიმდინარე სტატუსის გამოსახვა, თქვენი მომხმარებლის გვერდზე',
	'onlinestatusbar-status' => 'რომელია სტანდარტული სტატუსი რომლის გამოყენებაც გსურთ?',
	'onlinestatusbar-title-online' => 'ქსელში',
	'onlinestatusbar-title-busy' => 'დაკავებული',
	'onlinestatusbar-title-away' => 'გასული',
	'onlinestatusbar-title-hidden' => 'დამალული',
	'onlinestatusbar-title-offline' => 'არ არის ქსელში',
	'onlinestatusbar-title-unknown' => 'სტატუსი უცნობია', # Fuzzy
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
	'prefs-onlinestatus' => 'Online-Status',
	'onlinestatusbar-used' => 'Ären online-Status op Ärer Benotzer-Säit weisen',
	'onlinestatusbar-away' => 'Automatesch als net-do weisen no enger definéierter Zäit',
	'onlinestatusbar-purge' => "De'Benotzersäit all kéier wann Dir Iech eran oder erausloggt eidel maachen",
	'onlinestatusbar-status' => 'Wéi ass de Standard-Status deen Dir benotze wëllt?',
	'onlinestatusbar-away-time' => "Minutte bis Dir als 'net do' markéiert gitt:",
	'onlinestatusbar-title-online' => 'Online',
	'onlinestatusbar-title-busy' => 'Beschäftegt',
	'onlinestatusbar-title-away' => 'Net do',
	'onlinestatusbar-title-hidden' => 'Verstoppt',
	'onlinestatusbar-title-offline' => 'Offline',
	'onlinestatusbar-title-unknown' => 'Onbekannt',
	'onlinestatusbar-tooltip-online' => 'Dëse Benotzer ass elo online',
	'onlinestatusbar-tooltip-busy' => 'Dëse Benotzer ass beschäftegt a méiglecherweis net disponibel',
	'onlinestatusbar-tooltip-away' => 'Dëse Benotzer ass net aktiv a méiglecherweis net disponibel',
	'onlinestatusbar-tooltip-offline' => 'Dëse Benotzer ass elo offline',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'onlinestatusbar-desc' => 'Статусник што прикажува дали корисникот е на линија, зависно од нагодувањата на корисничката страница',
	'prefs-onlinestatus' => 'Вклученост',
	'onlinestatusbar-used' => 'Прикажувај на моите кориснички страници кога сум на линија',
	'onlinestatusbar-hide' => 'Скриј го статусникот за да го користам само волшебниот збор (за напредни корисници)',
	'onlinestatusbar-away' => 'Сметај ме за отсутен по извесно зададено време',
	'onlinestatusbar-purge' => 'Пречисти го кешот на корисничката страница секојпат кога ќе се најавам или одјавам',
	'onlinestatusbar-status' => 'Вашиот статус по основно?',
	'onlinestatusbar-away-time' => 'По колку минути да се прикаже „отсутен“:',
	'onlinestatusbar-title-online' => 'Вклучен',
	'onlinestatusbar-title-busy' => 'Зафатен',
	'onlinestatusbar-title-away' => 'Отсутен',
	'onlinestatusbar-title-hidden' => 'Скриен',
	'onlinestatusbar-title-offline' => 'Исклучен',
	'onlinestatusbar-title-unknown' => 'Непознат',
	'onlinestatusbar-tooltip-online' => 'Корисникот сега е вклучен',
	'onlinestatusbar-tooltip-busy' => 'Корисникот е зафатен и може да е недостапен',
	'onlinestatusbar-tooltip-away' => 'Корисникот е неактивен и може да е недостапен',
	'onlinestatusbar-tooltip-offline' => 'Корисникот е исклучен',
	'onlinestatusbar-tooltip-unknown' => 'Статусот на корисникот е непознат',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'onlinestatusbar-desc' => 'Palang status yang menunjukkan sama pengguna berada dalam talian atau tidak, berasaskan keutamaan pada laman penggunanya',
	'prefs-onlinestatus' => 'Status dalam talian',
	'onlinestatusbar-used' => 'Paparkan status online anda pada laman-laman pengguna anda',
	'onlinestatusbar-hide' => 'Sorokkan palang status di laman pengguna untuk menggunakan kata sakti sahaja (Untuk pengguna yang lebih berpengalaman)',
	'onlinestatusbar-away' => 'Anggap sebagai tiada sebagai automatik selepas tempoh yang ditetapkan',
	'onlinestatusbar-purge' => 'Singkirkan isi laman pengguna setiap kali ketika log masuk/keluar',
	'onlinestatusbar-status' => 'Yang manakah status asali yang ingin anda gunakan?',
	'onlinestatusbar-away-time' => 'Berapa minit sehingga anda dianggap tiada:',
	'onlinestatusbar-title-online' => 'Dalam talian',
	'onlinestatusbar-title-busy' => 'Sibuk',
	'onlinestatusbar-title-away' => 'Tiada',
	'onlinestatusbar-title-hidden' => 'Tersorok',
	'onlinestatusbar-title-offline' => 'Luar talian',
	'onlinestatusbar-title-unknown' => 'Tidak diketahui',
	'onlinestatusbar-tooltip-online' => 'Pengguna ini kini di dalam talian',
	'onlinestatusbar-tooltip-busy' => 'Pengguna ini sibuk dan mungkin tidak boleh dihubungi',
	'onlinestatusbar-tooltip-away' => 'Pengguna ini melahu dan mungkin tidak boleh dihubungi',
	'onlinestatusbar-tooltip-offline' => 'Pengguna ini di luar talian',
	'onlinestatusbar-tooltip-unknown' => 'Status pengguna ini tidak diketahui',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 * @author Wiki13
 */
$messages['nl'] = array(
	'onlinestatusbar-desc' => 'Statusbalk die weergeeft of een gebruiker online is, op basis van voorkeuren, op zijn/haar gebruikerspagina',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => "Uw onlinestatus weergeven op uw gebruikerspagina's",
	'onlinestatusbar-hide' => "De statusbalk op gebruikerpagina's verbergen en alleen het magische woord gebruiken (voor geavanceerde gebruikers)",
	'onlinestatusbar-away' => 'Automatisch als weg markeren na een bepaalde interval',
	'onlinestatusbar-purge' => 'Uw gebruikerspagina bij aanmelden en afmelden uit de cache verwijderen',
	'onlinestatusbar-status' => 'Welke standaard status wilt u gebruiken?',
	'onlinestatusbar-away-time' => 'Aantal minuten totdat u als weg gemarkeerd wordt:',
	'onlinestatusbar-title-online' => 'Online',
	'onlinestatusbar-title-busy' => 'Druk',
	'onlinestatusbar-title-away' => 'Weg',
	'onlinestatusbar-title-hidden' => 'Verborgen',
	'onlinestatusbar-title-offline' => 'Offline',
	'onlinestatusbar-title-unknown' => 'Onbekend',
	'onlinestatusbar-tooltip-online' => 'Deze gebruiker is nu online',
	'onlinestatusbar-tooltip-busy' => 'Deze gebruiker is druk en mogelijk niet beschikbaar',
	'onlinestatusbar-tooltip-away' => 'Deze gebruiker is inactief en mogelijk niet beschikbaar',
	'onlinestatusbar-tooltip-offline' => 'Deze gebruiker is offline',
	'onlinestatusbar-tooltip-unknown' => 'Status van deze gebruiker is onbekend',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Matma Rex
 */
$messages['pl'] = array(
	'onlinestatusbar-desc' => 'Pasek statusu, który informuje na stronie użytkownika, czy ten jest dostępny, w oparciu o preferencje',
	'prefs-onlinestatus' => 'Status dostępności',
	'onlinestatusbar-used' => 'Wyświetlaj mój status na moich stronach użytkownika',
	'onlinestatusbar-hide' => 'Ukryj pasek statusu na stronach użytkownika, aby wykorzystać tylko magiczne słowo (dla użytkowników zaawansowanych)',
	'onlinestatusbar-away' => 'Traktuj jako "nieobecny" automatycznie po określonym czasie',
	'onlinestatusbar-purge' => 'Odśwież stronę użytkownika za każdym razem, gdy loguję się lub wylogowuję',
	'onlinestatusbar-status' => 'Jaki jest domyślny status, którego chcesz użyć?',
	'onlinestatusbar-away-time' => 'Ile minut do oznaczenia jako "nieobecny"?',
	'onlinestatusbar-title-online' => 'dostępny',
	'onlinestatusbar-title-busy' => 'zajęty',
	'onlinestatusbar-title-away' => 'nieobecny',
	'onlinestatusbar-title-hidden' => 'ukryty',
	'onlinestatusbar-title-offline' => 'niedostępny',
	'onlinestatusbar-title-unknown' => 'nieznany',
	'onlinestatusbar-tooltip-online' => 'Ten użytkownik jest teraz dostępny',
	'onlinestatusbar-tooltip-busy' => 'Ten użytkownik jest zajęty i może być niedostępny',
	'onlinestatusbar-tooltip-away' => 'Ten użytkownik jest bezczynny i może być niedostępny',
	'onlinestatusbar-tooltip-offline' => 'Ten użytkownik jest niedostępny',
	'onlinestatusbar-tooltip-unknown' => 'Status tego użytkownika jest nieznany',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'prefs-onlinestatus' => 'پرليکه دريځ',
	'onlinestatusbar-title-online' => 'پر ليکه',
	'onlinestatusbar-title-busy' => 'بوخت',
	'onlinestatusbar-title-away' => 'ليرې',
	'onlinestatusbar-title-hidden' => 'پټ',
	'onlinestatusbar-title-offline' => 'پرې ليکه',
	'onlinestatusbar-title-unknown' => 'دريځ ناڅرګنده دی', # Fuzzy
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'onlinestatusbar-desc' => 'Bară de stare care arată dacă un utilizator este conectat, în funcție de preferințe, pe pagina sa de utilizator',
	'prefs-onlinestatus' => 'Stare în on-line',
	'onlinestatusbar-used' => 'Afișează starea dumneavoastră din on-line pe paginile de utilizator',
	'onlinestatusbar-hide' => 'Ascunde bara de stare din paginile de utilizator pentru a utiliza doar cuvântul magic (pentru utilizatori avansați)',
	'onlinestatusbar-away' => 'Consideră automat ca „plecat” după un interval definit',
	'onlinestatusbar-purge' => 'Curățați pagina de utilizator ori de câte ori vă autentificați sau deconectați',
	'onlinestatusbar-status' => 'Care este starea implicită pe care doriți să o utilizați?',
	'onlinestatusbar-away-time' => 'Câte minute până când starea va fi schimbată în „plecat”?',
	'onlinestatusbar-title-online' => 'Conectat',
	'onlinestatusbar-title-busy' => 'Ocupat',
	'onlinestatusbar-title-away' => 'Plecat',
	'onlinestatusbar-title-hidden' => 'Ascuns',
	'onlinestatusbar-title-offline' => 'Deconectat',
	'onlinestatusbar-title-unknown' => 'Necunoscut',
	'onlinestatusbar-tooltip-online' => 'Acest utilizator este acum conectat',
	'onlinestatusbar-tooltip-busy' => 'Acest utilizator este ocupat și ar putea fi indisponibil',
	'onlinestatusbar-tooltip-away' => 'Acest utilizator este inactiv și ar putea fi indisponibil',
	'onlinestatusbar-tooltip-offline' => 'Acest utilizator este deconectat',
	'onlinestatusbar-tooltip-unknown' => 'Starea acestui utilizator este necunoscută',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'prefs-onlinestatus' => 'මාර්ගගත තත්වය',
	'onlinestatusbar-title-online' => 'මාර්ගගතයි',
	'onlinestatusbar-title-busy' => 'කාර්යබහුලයි',
	'onlinestatusbar-title-hidden' => 'සඟවනලද',
	'onlinestatusbar-title-offline' => 'මාර්ගඅපගතයි',
	'onlinestatusbar-title-unknown' => 'තත්වය නොදනියි', # Fuzzy
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-title-online' => 'ansluten',
	'onlinestatusbar-title-busy' => 'upptagen',
	'onlinestatusbar-title-away' => 'borta',
	'onlinestatusbar-title-hidden' => 'dold',
	'onlinestatusbar-title-offline' => 'inte ansluten',
	'onlinestatusbar-title-unknown' => 'status är okänd', # Fuzzy
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'onlinestatusbar-used' => 'உங்கள் இணைப்பிலுள்ள நிலையை உங்கள் பயனர் பக்கத்தில் தெரிவிக்கவும்',
	'onlinestatusbar-status' => 'நீங்கள் பயன்படுத்த விரும்பும் இயல்புநிலை நிலை என்ன?',
	'onlinestatusbar-title-online' => 'இணைப்பில்',
	'onlinestatusbar-title-offline' => 'இணைப்பிலில்லை',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author Vvk.pentapati
 */
$messages['te'] = array(
	'onlinestatusbar-used' => 'మీరు ఆన్‌లైనులో ఉన్నట్టు ఇతరులుకు చూపించాలా?', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'onlinestatusbar-desc' => 'Bareta ng katayuan na nagpapakita kung ang isang tagagamit ay naka-Internet, na nakabatay sa mga kanaisan, na nasa ibabaw ng kanilang pahina ng tagagamit',
	'prefs-onlinestatus' => 'Katayuan sa Internet',
	'onlinestatusbar-used' => 'Ipakita ang iyong katayuang nasa Internet na nasa mga pahina mo ng tagagamit',
	'onlinestatusbar-hide' => 'Itago ang bareta ng katayuan na nasa mga pahina ng tagagamit upang gamitin lamang ang salitang masalamangka (Para sa mas masusulong na mga tagagamit)',
	'onlinestatusbar-away' => 'Kusang ituring bilang wala rito at malayo pagkaraan ng tinukoy na agwat',
	'onlinestatusbar-purge' => 'Purgahin ang pahina ng tagagamit tuwing lalagda ka o aalis mula sa pagkakalagda',
	'onlinestatusbar-status' => 'Ano ang nais mong gamitin na likas na nakatakdang katayuan?',
	'onlinestatusbar-away-time' => 'Ilang mga minuto hanggang sa markahan ka bilang wala rito at malayo:',
	'onlinestatusbar-title-online' => 'nakaugnay sa Internet',
	'onlinestatusbar-title-busy' => 'abala',
	'onlinestatusbar-title-away' => 'wala at malayo',
	'onlinestatusbar-title-hidden' => 'nakatago',
	'onlinestatusbar-title-offline' => 'hindi nakaugnay sa Internet',
	'onlinestatusbar-title-unknown' => 'hindi alam ang katayuan', # Fuzzy
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'onlinestatusbar-title-offline' => 'Çevrimdışı',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'prefs-onlinestatus' => 'آن لائن کی حیثیت',
	'onlinestatusbar-title-online' => 'ڈاؤن لوڈ ، اتارنا',
	'onlinestatusbar-title-busy' => 'مصروف',
	'onlinestatusbar-title-away' => 'دور',
	'onlinestatusbar-title-hidden' => 'پوشیدہ',
	'onlinestatusbar-title-offline' => 'آف لائن',
	'onlinestatusbar-title-unknown' => 'کی کیفیت نامعلوم ہے', # Fuzzy
);

/** Simplified Chinese (中文（简体）‎)
 */
$messages['zh-hans'] = array(
	'onlinestatusbar-title-hidden' => '隐藏',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'onlinestatusbar-title-hidden' => '隱藏',
);
