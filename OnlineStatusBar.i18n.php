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
	'onlinestatusbar-title-online' => 'aanlyn', # Fuzzy
	'onlinestatusbar-title-busy' => 'besig', # Fuzzy
	'onlinestatusbar-title-away' => 'weg', # Fuzzy
	'onlinestatusbar-title-hidden' => 'versteek', # Fuzzy
	'onlinestatusbar-title-offline' => 'aflyn', # Fuzzy
	'onlinestatusbar-title-unknown' => 'status is onbekend', # Fuzzy
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'onlinestatusbar-desc' => 'Панэль стану, якая адлюстроўвае наяўнасьць карыстальніка на сайце, у залежнасьці ад наладаў', # Fuzzy
	'prefs-onlinestatus' => 'Анлайн-статус',
	'onlinestatusbar-used' => 'Адлюстроўваць ваш анлайн-статус на вашай старонцы ўдзельніка',
	'onlinestatusbar-hide' => 'Хаваць панэль стану на старонках удзельнікаў для выкарыстаньня магічнага слова (для дасьведчаных удзельнікаў)',
	'onlinestatusbar-away' => 'Аўтаматычна пераводзіць у стан «адыйшоў» пасьля вызначанага інтэрвалу',
	'onlinestatusbar-purge' => 'Ачышчаць кэш старонкі ўдзельніка па кожным уваходзе або выхадзе',
	'onlinestatusbar-status' => 'Перадвызначаны стан, які мусіць выкарыстоўвацца?',
	'onlinestatusbar-away-time' => 'Колькі хвілінаў чакаць да пераходу ў стан «адыйшоў»:',
	'onlinestatusbar-title-online' => 'на сайце', # Fuzzy
	'onlinestatusbar-title-busy' => 'заняты', # Fuzzy
	'onlinestatusbar-title-away' => 'адыйшоў', # Fuzzy
	'onlinestatusbar-title-hidden' => 'схаваны', # Fuzzy
	'onlinestatusbar-title-offline' => 'недаступны', # Fuzzy
	'onlinestatusbar-title-unknown' => 'стан невядомы', # Fuzzy
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'prefs-onlinestatus' => 'Statud enlinenn',
	'onlinestatusbar-title-online' => 'Kevreet', # Fuzzy
	'onlinestatusbar-title-busy' => 'Soulgarget', # Fuzzy
	'onlinestatusbar-title-away' => 'Er-maez', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Kuzhet', # Fuzzy
	'onlinestatusbar-title-offline' => 'Ezvezant', # Fuzzy
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
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Dieser Benutzer|Diese Benutzerin}} ist gerade online',
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
 * @author Mirzali
 */
$messages['diq'] = array(
	'prefs-onlinestatus' => 'Weziyetê çerxmiyani',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Çerxmiyan}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Meşğul}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Duri}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Nımıte}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Çerxteber}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Nêzaniyaye}}',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'onlinestatusbar-desc' => 'Statusowa kšoma, kótaraž pokazujo na zakłaźe nastajenjow na wužywarskem boku, lěc wužywaŕ jo online', # Fuzzy
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Twój onlinestatus na twójich wužywarskich bokach pokazaś',
	'onlinestatusbar-hide' => 'Statusowu kšomu na wužywarskich bokach schowaś, aby se jano magiske słowo wužywało (za pókšacanych wužywarjow)',
	'onlinestatusbar-away' => 'Pó póstajonem interwalu awtomatiski za "njeśibytny" měś',
	'onlinestatusbar-purge' => 'Cache wužywarskego boka kuždy raz wuprozniś, gaž se pśizjawjaš abo wótzjawjaš',
	'onlinestatusbar-status' => 'Standardny status, kótaryž coš wužywaś?',
	'onlinestatusbar-away-time' => 'Licba minutow, nježli až maš se ako "njepśibytny" markěrowaś:',
	'onlinestatusbar-title-online' => 'Online', # Fuzzy
	'onlinestatusbar-title-busy' => 'Zabrany', # Fuzzy
	'onlinestatusbar-title-away' => 'Njepśibytny', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Schowany', # Fuzzy
	'onlinestatusbar-title-offline' => 'Offline', # Fuzzy
	'onlinestatusbar-title-unknown' => 'Njeznaty', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'Toś ten wužywaŕ jo něnto online', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Toś ten wužywaŕ źěła a snaź njejo pśibytny', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Toś ten wužywaŕ njejo aktiwny a snaź njejo pśibytny', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Toś ten wužywaŕ jo offline', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Status toś togo wužywarja jo njeznaty', # Fuzzy
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
	'onlinestatusbar-title-online' => '{{GENDER:$1|Conectado|Conectada}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Ocupado|Ocupada}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Ausente}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Oculto|Oculta}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Desconectado|Desconectada}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Desconocido|Desconocida}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Este usuario|Esta usuaria}} está en línea',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Este usuario|Esta usuaria}} está {{GENDER:$1|ocupado|ocupada}} y puede no estar disponible',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Este usuario está inactivo|Esta usuaria está inactiva}} y puede no estar disponible',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Este usuario está desconectado|Esta usuaria está desconectada}}',
	'onlinestatusbar-tooltip-unknown' => 'Se desconoce el estado de {{GENDER:$1|este usuario|esta usuaria}}',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'onlinestatusbar-title-online' => 'arvuti juures', # Fuzzy
	'onlinestatusbar-title-busy' => 'hõivatud', # Fuzzy
	'onlinestatusbar-title-away' => 'eemal', # Fuzzy
	'onlinestatusbar-title-hidden' => 'peidetud', # Fuzzy
	'onlinestatusbar-title-offline' => 'ühenduseta', # Fuzzy
	'onlinestatusbar-title-unknown' => 'olek on teadmata', # Fuzzy
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'onlinestatusbar-title-online' => 'برخط', # Fuzzy
	'onlinestatusbar-title-busy' => 'گرفتار', # Fuzzy
	'onlinestatusbar-title-away' => 'خارج از دسترس', # Fuzzy
	'onlinestatusbar-title-hidden' => 'پنهان', # Fuzzy
	'onlinestatusbar-title-offline' => 'برون‌خط', # Fuzzy
	'onlinestatusbar-title-unknown' => 'وضعیت ناشناخته است', # Fuzzy
);

/** Finnish (suomi)
 * @author Beluga
 * @author Crt
 * @author Nedergard
 */
$messages['fi'] = array(
	'onlinestatusbar-title-online' => '{{GENDER:$1|Kirjautuneena}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Poissa}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Piilotettu}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Ei kirjautuneena}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Tuntematon}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Tämä käyttäjä}} on nyt kirjautunut sisään',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Tämä käyttäjä}} ei ole kirjautunut sisään',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|Tämän käyttäjän}} tila on tuntematon',
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
	'onlinestatusbar-desc' => "Barre d'état montrant si un utilisateur est en ligne sur sa page utilisateur",
	'prefs-onlinestatus' => 'État en ligne',
	'onlinestatusbar-used' => 'Afficher votre statut en ligne sur vos pages utilisateur',
	'onlinestatusbar-hide' => "Masquer la barre d'état sur les pages d'utilisateur afin d'utiliser le mot magique seulement (pour les utilisateurs avancés)",
	'onlinestatusbar-away' => 'Status "absent" automatique',
	'onlinestatusbar-purge' => 'Vider la page utilisateur chaque vous que vous vous connectez ou vous déconnectez',
	'onlinestatusbar-status' => 'Quel est le statut par défaut que vous souhaitez utiliser ?',
	'onlinestatusbar-away-time' => 'Combien minutes avant de changer le status en "absent" :',
	'onlinestatusbar-title-online' => '{{GENDER:$1|En ligne}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Occupé|Occupée}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Parti|Partie}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Masqué|Masquée}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Absent|Absente}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Inconnu|Inconnue}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Cet utilisateur|Cette utilisatrice}} est maintenant en ligne',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Cet utilisateur est occupé|Cette utilisatrice est occupée}} et peut ne pas être disponible',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Cet utilisateur est inactif|Cette utilisatrice est inactive}} et peut ne pas être disponible',
	'onlinestatusbar-tooltip-offline' => "{{GENDER:$1|Cet utilisateur n'est pas connecté|Cette utilisatrice n'est pas connectée}}",
	'onlinestatusbar-tooltip-unknown' => 'Le statut de {{GENDER:$1|cet utilisateur|cette utilisatrice}} est inconnu',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'prefs-onlinestatus' => 'Ètat en legne',
	'onlinestatusbar-title-online' => 'Present', # Fuzzy
	'onlinestatusbar-title-busy' => 'Ocupo', # Fuzzy
	'onlinestatusbar-title-away' => 'Viâ', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Cachiê', # Fuzzy
	'onlinestatusbar-title-offline' => 'Absent', # Fuzzy
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
	'onlinestatusbar-title-online' => '{{GENDER:$1|Conectado|Conectada}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Ocupado|Ocupada}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Ausente}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Agochado|Agochada}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Desconectado|Desconectada}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Descoñecido}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|O usuario|A usuaria}} está {{GENDER:$1|conectado|conectada}}',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|O usuario|A usuaria}} está {{GENDER:$1|ocupado|ocupada}} e pode non estar dispoñible',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|O usuario|A usuaria}} está {{GENDER:$1|inactivo|inactiva}} e pode non estar dispoñible',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|O usuario|A usuaria}} está {{GENDER:$1|desconectado|desconectada}}',
	'onlinestatusbar-tooltip-unknown' => 'Descoñécese o estado {{GENDER:$1|do usuario|da usuaria}}',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author חיים
 */
$messages['he'] = array(
	'onlinestatusbar-desc' => 'שורת מצב שמציגה בדף המשתמש אם המשתמש מקוון',
	'prefs-onlinestatus' => 'מצב ההימצאות באתר',
	'onlinestatusbar-used' => 'להציג לאחרים את מצב ההתחברות שלך',
	'onlinestatusbar-hide' => 'להסתיר את שורת המצב כדי להשתמש רק במילת הקסם (למשתמשים מתקדמים)',
	'onlinestatusbar-away' => 'להתייחס באופן אוטומטי כאלה "לא נמצא" אחרי פרק זמן מוגדר',
	'onlinestatusbar-purge' => 'לנקות את המטמון של דף המשתמש בכל פעם שאתם נכנסים או יוצאים',
	'onlinestatusbar-status' => 'מהו המצב שתרצו להיות פה לפי בררת המחדל?',
	'onlinestatusbar-away-time' => 'אחרי כמה לסמך אותך בתור "לא נמצא":',
	'onlinestatusbar-title-online' => '{{GENDER:$1|מקוון}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|עסוק|עסוקה}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|לא זמין|לא זמינה}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|נסתר|נסתרת}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|לא מקוון}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|לא ידוע}}',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'onlinestatusbar-desc' => 'Statusowa lajsta, kotraž na zakładźe nastajenjow pokazuje, hač wužiwar je na swojej wužiwarskej stronje online', # Fuzzy
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Waš onlinestatus na wašich wužiwarskich stronach pokazać',
	'onlinestatusbar-hide' => 'Statusowu lajstu na wužiwarskich stronach schować, zo by so jenož magiske słowo wužiwało (za pokročenych wužiwarjow)',
	'onlinestatusbar-away' => 'Po postajenym interwalu awtomatisce za "njepřitomny" měć',
	'onlinestatusbar-purge' => 'Pufrowak wužiwarskeje strony kóždy raz wuprózdnić, hdyž so přizjewješ abo wotzjewješ',
	'onlinestatusbar-status' => 'Što je standardny status, kotryž chceće wužiwać?',
	'onlinestatusbar-away-time' => 'Ličba mjeńšin, prjedy hač maće so jako "njepřitomny" markěrować:',
	'onlinestatusbar-title-online' => 'Online', # Fuzzy
	'onlinestatusbar-title-busy' => 'Ma dźěło', # Fuzzy
	'onlinestatusbar-title-away' => 'Preč', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Schowany', # Fuzzy
	'onlinestatusbar-title-offline' => 'Offline', # Fuzzy
	'onlinestatusbar-title-unknown' => 'Njeznaty', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'Tutón wužiwar je nětko online', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Tutón wužiwar dźěła a snano njeje přitomny', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Tutón wužiwar njeje aktiwny a snano njeje přitomny', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Tutón wužiwar je offline', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Status tutoho wužiwarja je njeznaty', # Fuzzy
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'onlinestatusbar-desc' => 'Barra de stato que monstra si un usator es in linea, dependente de su preferentias, in su pagina de usator', # Fuzzy
	'prefs-onlinestatus' => 'Stato in linea',
	'onlinestatusbar-used' => 'Monstrar si tu es in linea in tu pagina de usator',
	'onlinestatusbar-hide' => 'Celar le barra de stato in paginas de usator pro usar solmente le parola magic (Pro usatores avantiate)',
	'onlinestatusbar-away' => 'Tractar automaticamente como absente post un intervallo definite',
	'onlinestatusbar-purge' => 'Purgar le pagina de usator cata vice que tu aperi o claude session',
	'onlinestatusbar-status' => 'Qual es le stato predefinite que tu vole usar?',
	'onlinestatusbar-away-time' => 'Quante minutas ante que tu es marcate como absente:',
	'onlinestatusbar-title-online' => 'In linea', # Fuzzy
	'onlinestatusbar-title-busy' => 'Occupate', # Fuzzy
	'onlinestatusbar-title-away' => 'Absente', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Celate', # Fuzzy
	'onlinestatusbar-title-offline' => 'Foras de linea', # Fuzzy
	'onlinestatusbar-title-unknown' => 'stato es incognite', # Fuzzy
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 */
$messages['it'] = array(
	'onlinestatusbar-desc' => 'Barra di stato che mostra se un utente è online, in base delle preferenze, sulla loro pagina utente', # Fuzzy
	'prefs-onlinestatus' => 'Stato online',
	'onlinestatusbar-used' => 'Mostra il tuo stato online nella tua pagina utente',
	'onlinestatusbar-hide' => 'Nascondi la barra di stato sulle pagine degli utenti, per poter utilizzare solo la magic word (per utenti esperti)',
	'onlinestatusbar-away' => "Considera automaticamente come lontano dopo l'intervallo di tempo definito",
	'onlinestatusbar-purge' => 'Aggiorna la pagina utente ogni volta che accedi o esci',
	'onlinestatusbar-status' => 'Qual è lo stato predefinito che vuoi usare?',
	'onlinestatusbar-away-time' => 'Quanti minuti prima di essere considerato lontano:',
	'onlinestatusbar-title-online' => 'connesso', # Fuzzy
	'onlinestatusbar-title-busy' => 'occupato', # Fuzzy
	'onlinestatusbar-title-away' => 'lontano', # Fuzzy
	'onlinestatusbar-title-hidden' => 'nascosto', # Fuzzy
	'onlinestatusbar-title-offline' => 'non connesso', # Fuzzy
	'onlinestatusbar-title-unknown' => 'sconosciuto', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'Questo utente è attualmente connesso', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Questo utente è attualmente occupato e potrebbe non essere disponibile', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Questo utente è attualmente lontano e potrebbe non essere disponibile', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Questo utente è attualmente non connesso', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Lo stato di questo utente è sconosciuto', # Fuzzy
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
	'onlinestatusbar-title-online' => '{{GENDER:$1|オンライン}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|多忙}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|退席中}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|非表示}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|オフライン}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|不明}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|この利用者}}は現在オンラインです',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|この利用者}}は多忙のため、応答できない可能性があります',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|この利用者}}は退席中のため、応答できない可能性があります',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|この利用者}}はオフラインです',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|この利用者}}の状態は不明です',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'prefs-onlinestatus' => 'ონლაინ სტატუსი',
	'onlinestatusbar-used' => 'თქვენი მიმდინარე სტატუსის გამოსახვა, თქვენი მომხმარებლის გვერდზე',
	'onlinestatusbar-status' => 'რომელია სტანდარტული სტატუსი რომლის გამოყენებაც გსურთ?',
	'onlinestatusbar-title-online' => 'ქსელში', # Fuzzy
	'onlinestatusbar-title-busy' => 'დაკავებული', # Fuzzy
	'onlinestatusbar-title-away' => 'გასული', # Fuzzy
	'onlinestatusbar-title-hidden' => 'დამალული', # Fuzzy
	'onlinestatusbar-title-offline' => 'არ არის ქსელში', # Fuzzy
	'onlinestatusbar-title-unknown' => 'სტატუსი უცნობია', # Fuzzy
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'onlinestatusbar-desc' => 'Määt ene Zohschtandsaanzeijer op Metmaacher-Sigge müjjelesch, woh aanjezeisch weed, ov dä onllain es, afhängesch vun däm Metmaacher singe Enschtällonge.', # Fuzzy
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
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Beschäftegt}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Net do}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Verstoppt}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Onbekannt}}',
	'onlinestatusbar-tooltip-online' => 'Dëse Benotzer ass elo online', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Dëse Benotzer ass beschäftegt a méiglecherweis net disponibel', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Dëse Benotzer ass net aktiv a méiglecherweis net disponibel', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Dëse Benotzer ass elo offline', # Fuzzy
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'onlinestatusbar-desc' => 'Статусник што прикажува дали корисникот е на линија (на неговата корисничка страница)',
	'prefs-onlinestatus' => 'Вклученост',
	'onlinestatusbar-used' => 'Прикажувај на моите кориснички страници кога сум на линија',
	'onlinestatusbar-hide' => 'Скриј го статусникот за да го користам само волшебниот збор (за напредни корисници)',
	'onlinestatusbar-away' => 'Сметај ме за отсутен по извесно зададено време',
	'onlinestatusbar-purge' => 'Пречисти го кешот на корисничката страница секојпат кога ќе се најавам или одјавам',
	'onlinestatusbar-status' => 'Вашиот статус по основно?',
	'onlinestatusbar-away-time' => 'По колку минути да се прикаже „отсутен“:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Вклучен|Вклучена}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Зафатен|Зафатена}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Отсутен|Отсутна}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Скриен|Скриена}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Исклучен|Исклучена}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Непознато}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Корисникот}} сега е вклучен',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Корисникот}} сега е зафатен и може да е недостапен',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Корисникот}} е неактивен и може да е недостапен',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Корисникот}} е исклучен',
	'onlinestatusbar-tooltip-unknown' => 'Статусот на {{GENDER:$1|корисникот}} е непознат',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'onlinestatusbar-desc' => 'Palang status yang menunjukkan sama pengguna berada dalam talian atau tidak, berasaskan keutamaan pada laman penggunanya', # Fuzzy
	'prefs-onlinestatus' => 'Status dalam talian',
	'onlinestatusbar-used' => 'Paparkan status online anda pada laman-laman pengguna anda',
	'onlinestatusbar-hide' => 'Sorokkan palang status di laman pengguna untuk menggunakan kata sakti sahaja (Untuk pengguna yang lebih berpengalaman)',
	'onlinestatusbar-away' => 'Anggap sebagai tiada sebagai automatik selepas tempoh yang ditetapkan',
	'onlinestatusbar-purge' => 'Singkirkan isi laman pengguna setiap kali ketika log masuk/keluar',
	'onlinestatusbar-status' => 'Yang manakah status asali yang ingin anda gunakan?',
	'onlinestatusbar-away-time' => 'Berapa minit sehingga anda dianggap tiada:',
	'onlinestatusbar-title-online' => 'Dalam talian', # Fuzzy
	'onlinestatusbar-title-busy' => 'Sibuk', # Fuzzy
	'onlinestatusbar-title-away' => 'Tiada', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Tersorok', # Fuzzy
	'onlinestatusbar-title-offline' => 'Luar talian', # Fuzzy
	'onlinestatusbar-title-unknown' => 'Tidak diketahui', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'Pengguna ini kini di dalam talian', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Pengguna ini sibuk dan mungkin tidak boleh dihubungi', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Pengguna ini melahu dan mungkin tidak boleh dihubungi', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Pengguna ini di luar talian', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Status pengguna ini tidak diketahui', # Fuzzy
);

/** Dutch (Nederlands)
 * @author Rcdeboer
 * @author SPQRobin
 * @author Siebrand
 * @author Wiki13
 */
$messages['nl'] = array(
	'onlinestatusbar-desc' => 'Statusbalk die weergeeft of een gebruiker online is op zijn/haar gebruikerspagina',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => "Uw onlinestatus weergeven op uw gebruikerspagina's",
	'onlinestatusbar-hide' => "De statusbalk op gebruikerpagina's verbergen en alleen het magische woord gebruiken (voor geavanceerde gebruikers)",
	'onlinestatusbar-away' => 'Automatisch als weg markeren na een bepaalde interval',
	'onlinestatusbar-purge' => 'Uw gebruikerspagina bij aanmelden en afmelden uit de cache verwijderen',
	'onlinestatusbar-status' => 'Welke standaard status wilt u gebruiken?',
	'onlinestatusbar-away-time' => 'Aantal minuten totdat u als weg gemarkeerd wordt:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Bezig}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Weg}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Verborgen}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Onbekend}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Deze gebruiker}} is nu online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Deze gebruiker}} is druk en mogelijk niet beschikbaar',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Deze gebruiker}} is inactief en mogelijk niet beschikbaar',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Deze gebruiker}} is offline',
	'onlinestatusbar-tooltip-unknown' => 'Status van {{GENDER:$1|deze gebruiker}} is onbekend',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Matma Rex
 */
$messages['pl'] = array(
	'onlinestatusbar-desc' => 'Pasek statusu, który informuje na stronie użytkownika, czy ten jest dostępny, w oparciu o preferencje', # Fuzzy
	'prefs-onlinestatus' => 'Status dostępności',
	'onlinestatusbar-used' => 'Wyświetlaj mój status na moich stronach użytkownika',
	'onlinestatusbar-hide' => 'Ukryj pasek statusu na stronach użytkownika, aby wykorzystać tylko magiczne słowo (dla użytkowników zaawansowanych)',
	'onlinestatusbar-away' => 'Traktuj jako "nieobecny" automatycznie po określonym czasie',
	'onlinestatusbar-purge' => 'Odśwież stronę użytkownika za każdym razem, gdy loguję się lub wylogowuję',
	'onlinestatusbar-status' => 'Jaki jest domyślny status, którego chcesz użyć?',
	'onlinestatusbar-away-time' => 'Ile minut do oznaczenia jako "nieobecny"?',
	'onlinestatusbar-title-online' => 'dostępny', # Fuzzy
	'onlinestatusbar-title-busy' => 'zajęty', # Fuzzy
	'onlinestatusbar-title-away' => 'nieobecny', # Fuzzy
	'onlinestatusbar-title-hidden' => 'ukryty', # Fuzzy
	'onlinestatusbar-title-offline' => 'niedostępny', # Fuzzy
	'onlinestatusbar-title-unknown' => 'nieznany', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'Ten użytkownik jest teraz dostępny', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Ten użytkownik jest zajęty i może być niedostępny', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Ten użytkownik jest bezczynny i może być niedostępny', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Ten użytkownik jest niedostępny', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Status tego użytkownika jest nieznany', # Fuzzy
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'prefs-onlinestatus' => 'پرليکه دريځ',
	'onlinestatusbar-title-online' => 'پر ليکه', # Fuzzy
	'onlinestatusbar-title-busy' => 'بوخت', # Fuzzy
	'onlinestatusbar-title-away' => 'ليرې', # Fuzzy
	'onlinestatusbar-title-hidden' => 'پټ', # Fuzzy
	'onlinestatusbar-title-offline' => 'پرې ليکه', # Fuzzy
	'onlinestatusbar-title-unknown' => 'دريځ ناڅرګنده دی', # Fuzzy
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'onlinestatusbar-desc' => 'Bară de stare care arată dacă un utilizator este conectat, în funcție de preferințe, pe pagina sa de utilizator', # Fuzzy
	'prefs-onlinestatus' => 'Stare în on-line',
	'onlinestatusbar-used' => 'Afișează starea dumneavoastră din on-line pe paginile de utilizator',
	'onlinestatusbar-hide' => 'Ascunde bara de stare din paginile de utilizator pentru a utiliza doar cuvântul magic (pentru utilizatori avansați)',
	'onlinestatusbar-away' => 'Consideră automat ca „plecat” după un interval definit',
	'onlinestatusbar-purge' => 'Curățați pagina de utilizator ori de câte ori vă autentificați sau deconectați',
	'onlinestatusbar-status' => 'Care este starea implicită pe care doriți să o utilizați?',
	'onlinestatusbar-away-time' => 'Câte minute până când starea va fi schimbată în „plecat”?',
	'onlinestatusbar-title-online' => 'Conectat', # Fuzzy
	'onlinestatusbar-title-busy' => 'Ocupat', # Fuzzy
	'onlinestatusbar-title-away' => 'Plecat', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Ascuns', # Fuzzy
	'onlinestatusbar-title-offline' => 'Deconectat', # Fuzzy
	'onlinestatusbar-title-unknown' => 'Necunoscut', # Fuzzy
	'onlinestatusbar-tooltip-online' => 'Acest utilizator este acum conectat', # Fuzzy
	'onlinestatusbar-tooltip-busy' => 'Acest utilizator este ocupat și ar putea fi indisponibil', # Fuzzy
	'onlinestatusbar-tooltip-away' => 'Acest utilizator este inactiv și ar putea fi indisponibil', # Fuzzy
	'onlinestatusbar-tooltip-offline' => 'Acest utilizator este deconectat', # Fuzzy
	'onlinestatusbar-tooltip-unknown' => 'Starea acestui utilizator este necunoscută', # Fuzzy
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'prefs-onlinestatus' => 'මාර්ගගත තත්වය',
	'onlinestatusbar-title-online' => 'මාර්ගගතයි', # Fuzzy
	'onlinestatusbar-title-busy' => 'කාර්යබහුලයි', # Fuzzy
	'onlinestatusbar-title-hidden' => 'සඟවනලද', # Fuzzy
	'onlinestatusbar-title-offline' => 'මාර්ගඅපගතයි', # Fuzzy
	'onlinestatusbar-title-unknown' => 'තත්වය නොදනියි', # Fuzzy
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-title-online' => 'ansluten', # Fuzzy
	'onlinestatusbar-title-busy' => 'upptagen', # Fuzzy
	'onlinestatusbar-title-away' => 'borta', # Fuzzy
	'onlinestatusbar-title-hidden' => 'dold', # Fuzzy
	'onlinestatusbar-title-offline' => 'inte ansluten', # Fuzzy
	'onlinestatusbar-title-unknown' => 'status är okänd', # Fuzzy
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'onlinestatusbar-used' => 'உங்கள் இணைப்பிலுள்ள நிலையை உங்கள் பயனர் பக்கத்தில் தெரிவிக்கவும்',
	'onlinestatusbar-status' => 'நீங்கள் பயன்படுத்த விரும்பும் இயல்புநிலை நிலை என்ன?',
	'onlinestatusbar-title-online' => 'இணைப்பில்', # Fuzzy
	'onlinestatusbar-title-offline' => 'இணைப்பிலில்லை', # Fuzzy
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
	'onlinestatusbar-desc' => 'Bareta ng katayuan na nagpapakita kung ang isang tagagamit ay naka-Internet, na nakabatay sa mga kanaisan, na nasa ibabaw ng kanilang pahina ng tagagamit', # Fuzzy
	'prefs-onlinestatus' => 'Katayuan sa Internet',
	'onlinestatusbar-used' => 'Ipakita ang iyong katayuang nasa Internet na nasa mga pahina mo ng tagagamit',
	'onlinestatusbar-hide' => 'Itago ang bareta ng katayuan na nasa mga pahina ng tagagamit upang gamitin lamang ang salitang masalamangka (Para sa mas masusulong na mga tagagamit)',
	'onlinestatusbar-away' => 'Kusang ituring bilang wala rito at malayo pagkaraan ng tinukoy na agwat',
	'onlinestatusbar-purge' => 'Purgahin ang pahina ng tagagamit tuwing lalagda ka o aalis mula sa pagkakalagda',
	'onlinestatusbar-status' => 'Ano ang nais mong gamitin na likas na nakatakdang katayuan?',
	'onlinestatusbar-away-time' => 'Ilang mga minuto hanggang sa markahan ka bilang wala rito at malayo:',
	'onlinestatusbar-title-online' => 'nakaugnay sa Internet', # Fuzzy
	'onlinestatusbar-title-busy' => 'abala', # Fuzzy
	'onlinestatusbar-title-away' => 'wala at malayo', # Fuzzy
	'onlinestatusbar-title-hidden' => 'nakatago', # Fuzzy
	'onlinestatusbar-title-offline' => 'hindi nakaugnay sa Internet', # Fuzzy
	'onlinestatusbar-title-unknown' => 'hindi alam ang katayuan', # Fuzzy
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'onlinestatusbar-title-offline' => 'Çevrimdışı', # Fuzzy
);

/** Ukrainian (українська)
 * @author Base
 */
$messages['uk'] = array(
	'onlinestatusbar-desc' => 'Панель стану, що показує на сторінці користувача чи він онлайн',
	'prefs-onlinestatus' => 'Онлайн-статус',
	'onlinestatusbar-used' => 'Показувати Ваш онлайн статус на Вашій сторінці користувача',
	'onlinestatusbar-hide' => 'Приховувати панель стану на сторінках користувачів, для використання магічного слова (Для досвідчених користувачів)',
	'onlinestatusbar-away' => 'Автоматично встановлювати статус «Немає на місці» після визначеного інтервалу',
	'onlinestatusbar-purge' => 'Очищати кеш сторінки кожного разу, коли Ви входите чи виходите',
	'onlinestatusbar-status' => 'Який статус Ви бажаєте використовувати за замовчуванням?',
	'onlinestatusbar-away-time' => 'Через скільки хвилин змінювати Ваш статус на «Немає на місці»?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Онлайн}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Зайнятий|Зайнята}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Немає на місці}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Невидимий|Невидима}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Офлайн}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Невідомий}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Цей користувач|Ця користувачка}} зараз онлайн',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Цей користувач|Ця користувачка}} зараз зайнятий і може бути {{GENDER:$1|недоступним|недоступною}}',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Цей користувач|Ця користувачка}} зараз {{GENDER:$1|неактивний|неактивна}} і може бути {{GENDER:$1|недоступним|недоступною}}',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Цей користувач|Ця користувачка}} зараз офлайн',
	'onlinestatusbar-tooltip-unknown' => 'Статус {{GENDER:$1|цього користувача|цієї користувачки}} невідомий',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'prefs-onlinestatus' => 'آن لائن کی حیثیت',
	'onlinestatusbar-title-online' => 'ڈاؤن لوڈ ، اتارنا', # Fuzzy
	'onlinestatusbar-title-busy' => 'مصروف', # Fuzzy
	'onlinestatusbar-title-away' => 'دور', # Fuzzy
	'onlinestatusbar-title-hidden' => 'پوشیدہ', # Fuzzy
	'onlinestatusbar-title-offline' => 'آف لائن', # Fuzzy
	'onlinestatusbar-title-unknown' => 'کی کیفیت نامعلوم ہے', # Fuzzy
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'onlinestatusbar-desc' => '在其用户页上的状态栏显示用户是否在线',
	'prefs-onlinestatus' => '在线状态',
	'onlinestatusbar-used' => '在您的用户页上显示您的在线状态',
	'onlinestatusbar-hide' => '在用户页使用这个魔术字就能隐藏状态栏（适用于高级用户）',
	'onlinestatusbar-away' => '定义多长时间无操作就视为已离开',
	'onlinestatusbar-purge' => '每次您登录或登出时都刷新（Purge）用户页缓存',
	'onlinestatusbar-status' => '您想使用哪个作为默认状态？',
	'onlinestatusbar-away-time' => '您想多少分钟后标记为已离开？',
	'onlinestatusbar-title-online' => '{{GENDER:$1|在线}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|忙碌}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|离开}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|隐身}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|离线}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|未知}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|此用户}}现在在线',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|此用户}}正忙，可能无法回应',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|此用户}}处于离开状态，可能无法回应',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|此用户}}处于离线状态',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|此用户}}的状态未知',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'onlinestatusbar-title-hidden' => '隱藏', # Fuzzy
);
