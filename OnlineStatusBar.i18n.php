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
	'onlinestatusbar-desc' => '{{doc-singularthey}}
{{desc|name=Online Status Bar|url=http://www.mediawiki.org/wiki/Extension:OnlineStatusBar}}',
	'prefs-onlinestatus' => 'Section for config, located in preferences - misc',
	'onlinestatusbar-used' => 'Message in config asking user if they want to enable it, checkbox',
	'onlinestatusbar-hide' => 'Ask user if they want to hide status bar this is useful when they are using custom template but need to check if they are online',
	'onlinestatusbar-away' => 'Time in minutes how long to wait until user is flagged as away',
	'onlinestatusbar-purge' => 'Option to purge user page everytime they login so that magic word is updated',
	'onlinestatusbar-status' => 'Message in config asking what status they want to use, option box',
	'onlinestatusbar-away-time' => 'Question in preferences asking user how many minutes to wait until he would be flagged as away',
	'onlinestatusbar-title-online' => 'Status for users who mark themselves as active. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-title-busy' => 'Status for users who mark themselves as busy. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-title-away' => 'Status for users who mark themselves as away. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-title-hidden' => 'Status for users who mark themselves as hidden. Parameters:
* $1 is the name of the user for GENDER.
{{Identical|Hidden}}',
	'onlinestatusbar-title-offline' => 'Status for users who are offline. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-title-unknown' => 'Displayed for users with an unknown status. Parameters:
* $1 is the name of the user for GENDER.
{{Identical|Unknown}}',
	'onlinestatusbar-tooltip-online' => 'Tooltip for {{msg-mw|onlinestatusbar-title-online}}. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-tooltip-busy' => 'Tooltip for {{msg-mw|onlinestatusbar-title-busy}}. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-tooltip-away' => 'Tooltip for {{msg-mw|onlinestatusbar-title-away}}. Parameters:
* $1 is the name of the user for GENDER.',
	'onlinestatusbar-tooltip-offline' => 'Tooltip for {{msg-mw|onlinestatusbar-title-offline}}. Parameters:
* $1 is the name of the user for GENDER.',
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
 * @author Fohanno
 * @author Fulup
 */
$messages['br'] = array(
	'prefs-onlinestatus' => 'Statud enlinenn',
	'onlinestatusbar-title-online' => 'Kevreet', # Fuzzy
	'onlinestatusbar-title-busy' => 'Soulgarget', # Fuzzy
	'onlinestatusbar-title-away' => 'Er-maez', # Fuzzy
	'onlinestatusbar-title-hidden' => 'Kuzhet', # Fuzzy
	'onlinestatusbar-title-offline' => 'Ezvezant', # Fuzzy
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Dianav}}',
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
	'onlinestatusbar-desc' => 'Statusowa lejstwa, kótaraž pokazujo na wužywarskem boku, lěc wužywaŕ jo online',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Twój onlinestatus na twójich wužywarskich bokach pokazaś',
	'onlinestatusbar-hide' => 'Statusowu kšomu na wužywarskich bokach schowaś, aby se jano magiske słowo wužywało (za pókšacanych wužywarjow)',
	'onlinestatusbar-away' => 'Pó póstajonem interwalu awtomatiski za "njeśibytny" měś',
	'onlinestatusbar-purge' => 'Cache wužywarskego boka kuždy raz wuprozniś, gaž se pśizjawjaš abo wótzjawjaš',
	'onlinestatusbar-status' => 'Standardny status, kótaryž coš wužywaś?',
	'onlinestatusbar-away-time' => 'Licba minutow, nježli až maš se ako "njepśibytny" markěrowaś:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Zabrany|Zabrana}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Njepśibytny|Njepśibytna}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Schowany|Schowana}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Njeznaty|Njeznata}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Toś ten wužywaŕ|Toś ta wužywarka}} jo něnto online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Toś ten wužywaŕ|Toś ta wužywarka}} źěła a njejo snaź {{GENDER:$1|pśibytny|pśibytna}}',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Toś ten wužywaŕ|Toś ta wužywarka}} njejo {{GENDER:$1|aktiwny|aktiwna}} a njejo snaź {{GENDER:$1|pśibytny|pśibytna}}',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Toś ten wužywaŕ|Toś ta wužywarka}} jo offline',
	'onlinestatusbar-tooltip-unknown' => 'Status {{GENDER:$1|toś togo wužywarja|toś teje wužywarki}} jo njeznaty',
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
 * @author Pikne
 */
$messages['et'] = array(
	'onlinestatusbar-title-online' => '{{GENDER:$1|Võrgus}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Hõivatud}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Eemal}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Peidus}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Ühenduseta}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Teadmata}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|See kasutaja}} on nüüd võrgus',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|See kasutaja}} on hõivatud ja ei pruugi olla saadaval',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|See kasutaja}} on jõude ja ei pruugi olla saadaval',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|See kasutaja}} ei ole sisse loginud',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Mjbmr
 * @author Omidh
 */
$messages['fa'] = array(
	'prefs-onlinestatus' => 'وضعیت آنلاین',
	'onlinestatusbar-used' => 'نمایش وضعیت آنلاین شما در صفحات کاربریتان',
	'onlinestatusbar-purge' => 'پاکسازی هر دفعهٔ صفحهٔ کاربری هنگامی که شما وارد یا خارج می‌شوید',
	'onlinestatusbar-status' => 'مایل به استفاده از چه وضعیت پیش‌فرضی هستید؟',
	'onlinestatusbar-title-online' => '{{GENDER:$1|برخط}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|گرفتار}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|خارج از دسترس}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|پنهان}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|برون‌خط}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|ناشناخته}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|این کاربر}} اکنون برخط است',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|این کاربر}} مشغول است و ممکن است در دسترس نباشد',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|این کاربر}} بیکار است (فعالیتی انجام نداده است) و ممکن است در دسترس نباشد',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|این کاربر}} برون‌خط است',
	'onlinestatusbar-tooltip-unknown' => 'وضعیت {{GENDER:$1|این کاربر}} نامعلوم است',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Crt
 * @author Nedergard
 * @author VezonThunder
 */
$messages['fi'] = array(
	'onlinestatusbar-desc' => 'Tilarivi, joka näyttää, onko käyttäjä kirjautuneena tämän keskustelusivulla',
	'prefs-onlinestatus' => 'Sisäänkirjautumisen tila',
	'onlinestatusbar-used' => 'Näytä sisäänkirjautumisesi tila käyttäjäsivullasi',
	'onlinestatusbar-hide' => 'Piilota tilarivi käyttäjäsivuilla käyttääksesi vain taikasanaa (edistyneille käyttäjille)',
	'onlinestatusbar-status' => 'Mitä haluat käyttää oletustilana?',
	'onlinestatusbar-away-time' => 'Montako minuuttia ennen kuin sinut merkitään poissaolevaksi?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Kirjautuneena}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Varattu}}',
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
	'onlinestatusbar-used' => 'Fâre vêre voutron statut en legne sur voutres pâges utilisator',
	'onlinestatusbar-away' => 'Trètar ôtomaticament coment « viâ » aprés un entèrvalo dèfeni',
	'onlinestatusbar-purge' => 'Purgiér la pâge utilisator tôs los côps que vos vos branchiéd ou ben dèbranchiéd',
	'onlinestatusbar-status' => 'Quint est lo statut per dèfôt que vos souhètâd empleyér ?',
	'onlinestatusbar-away-time' => 'Gouéro menutes devant que vos éte marcâ coment « viâ » ?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|En legne}}',
	'onlinestatusbar-title-busy' => 'Ocup{{GENDER:$1|o|a}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Viâ}}',
	'onlinestatusbar-title-hidden' => 'Cachiê{{GENDER:$1||ye}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|En defôr de legne}}',
	'onlinestatusbar-title-unknown' => 'Encognu{{GENDER:$1||a}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Cet’utilisator|Cet’utilisatrice}} est ora en legne',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Cet’utilisator est ocupo|Cet’utilisatrice est ocupa}} et pués pôt pas étre disponibl{{GENDER:$1|o|a}}',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Cet’utilisator|Cet’utilisatrice}} fât ren du tot et pués pôt pas étre disponibl{{GENDER:$1|o|a}}',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Cet’utilisator|Cet’utilisatrice}} est en defôr de legne',
	'onlinestatusbar-tooltip-unknown' => 'Lo statut de {{GENDER:$1|cet’utilisator|cet’utilisatrice}} est encognu',
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
	'onlinestatusbar-desc' => 'Statusowa lajsta, kotraž pokazuje, hač wužiwar je na swojej wužiwarskej stronje online',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Waš onlinestatus na wašich wužiwarskich stronach pokazać',
	'onlinestatusbar-hide' => 'Statusowu lajstu na wužiwarskich stronach schować, zo by so jenož magiske słowo wužiwało (za pokročenych wužiwarjow)',
	'onlinestatusbar-away' => 'Po postajenym interwalu awtomatisce za "njepřitomny" měć',
	'onlinestatusbar-purge' => 'Pufrowak wužiwarskeje strony kóždy raz wuprózdnić, hdyž so přizjewješ abo wotzjewješ',
	'onlinestatusbar-status' => 'Što je standardny status, kotryž chceće wužiwać?',
	'onlinestatusbar-away-time' => 'Ličba mjeńšin, prjedy hač maće so jako "njepřitomny" markěrować:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Ma}} dźěło',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Njepřitomny|Njepřitomna}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Schowany|Schowana}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Njeznaty|Njeznata}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Tutón wužiwar|Tuta wužiwarka}} je nětko online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Tutón wužiwar|Tuta wužiwarka}} dźěła a njeje snano {{GENDER:$1|přitomny|přitomna}}',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Tutón wužiwar|Tuta wužiwarka}} njeje {{GENDER:$1|aktiwny|aktiwna}} a njeje snano {{GENDER:$1|přitomny|přitomna}}',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Tutón wužiwar|Tuta wužiwarka}} je offline',
	'onlinestatusbar-tooltip-unknown' => 'Status {{GENDER:$1|tutoho wužiwarja|tuteje wužiwarki}}  je njeznaty',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'onlinestatusbar-title-online' => '{{GENDER:$1|Online}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Elfoglalt}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Távol}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Rejtett}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Offline}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Ismeretlen}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Ez a felhasználó}} most online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Ez a felhasználó}} elfoglalt, és ezért lehet, hogy nem elérhető',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Ez a felhasználó}} tétlen és lehet, hogy nem érhető el',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Ez a felhasználó}} offline',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|Ezen felhasználó}} státusza ismeretlen',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'onlinestatusbar-desc' => 'Barra de stato que monstra si un usator es in linea in su pagina de usator',
	'prefs-onlinestatus' => 'Stato in linea',
	'onlinestatusbar-used' => 'Monstrar si tu es in linea in tu pagina de usator',
	'onlinestatusbar-hide' => 'Celar le barra de stato in paginas de usator pro usar solmente le parola magic (Pro usatores avantiate)',
	'onlinestatusbar-away' => 'Tractar automaticamente como absente post un intervallo definite',
	'onlinestatusbar-purge' => 'Purgar le pagina de usator cata vice que tu aperi o claude session',
	'onlinestatusbar-status' => 'Qual es le stato predefinite que tu vole usar?',
	'onlinestatusbar-away-time' => 'Quante minutas ante que tu es marcate como absente:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|In linea}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Occupate}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Absente}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Celate}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Foras de linea}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Incognite}}',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 */
$messages['it'] = array(
	'onlinestatusbar-desc' => 'Barra di stato che mostra se un utente è online sulla sua pagina utente',
	'prefs-onlinestatus' => 'Stato online',
	'onlinestatusbar-used' => 'Mostra il tuo stato online nella tua pagina utente',
	'onlinestatusbar-hide' => 'Nascondi la barra di stato sulle pagine degli utenti, per poter utilizzare solo la magic word (per utenti esperti)',
	'onlinestatusbar-away' => "Considera automaticamente come lontano dopo l'intervallo di tempo definito",
	'onlinestatusbar-purge' => 'Aggiorna la pagina utente ogni volta che accedi o esci',
	'onlinestatusbar-status' => 'Qual è lo stato predefinito che vuoi usare?',
	'onlinestatusbar-away-time' => 'Quanti minuti prima di essere considerato lontano:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Connesso|Connessa|Connesso/a}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Occupato|Occupata|Occupato/a}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Lontano|Lontana|Lontano/a}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Nascosto|Nascosta|Nascosto/a}}',
	'onlinestatusbar-title-offline' => 'Non {{GENDER:$1|connesso|connessa|connesso/a}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Sconosciuto|Sconosciuta|Sconosciuto/a}}',
	'onlinestatusbar-tooltip-online' => 'Questo utente è attualmente {{GENDER:$1|connesso|connessa|connesso/a}}',
	'onlinestatusbar-tooltip-busy' => 'Questo utente è attualmente {{GENDER:$1|occupato|occupata|occupato/a}} e potrebbe non essere disponibile',
	'onlinestatusbar-tooltip-away' => 'Questo utente è attualmente {{GENDER:$1|lontano|lontana|lontano/a}} e potrebbe non essere disponibile',
	'onlinestatusbar-tooltip-offline' => 'Questo utente è attualmente non {{GENDER:$1|connesso|connessa|connesso/a}}',
	'onlinestatusbar-tooltip-unknown' => 'Lo stato di questo utente è {{GENDER:$1|sconosciuto}}',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'onlinestatusbar-desc' => '利用者ページにその利用者がオンラインかどうかを表示するステータス バー',
	'prefs-onlinestatus' => 'オンライン状態',
	'onlinestatusbar-used' => 'あなたのオンライン状態を利用者ページに表示',
	'onlinestatusbar-hide' => 'マジックワードを使用するために、利用者ページのステータスバーを隠す (上級者向け)',
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
	'onlinestatusbar-title-online' => '{{GENDER:$1|ქსელში}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|დაკავებული}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|გასული}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|დამალული}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|არ არის ქსელში}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|უცნობია}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|ეს მომხარებელი}} ახლა ქსელშია',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|ეს მომხარებელი}} დაკავებულია ან შესაძლოა მიუწვდომელია',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|ეს მომხარებელი}} არ არის ქსელში',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|ამ მოხმარებლის}} სტატუსი უცნობია',
);

/** Korean (한국어)
 * @author Priviet
 */
$messages['ko'] = array(
	'onlinestatusbar-desc' => '사용자 문서에서 사용자가 온라인인지 보여주는 상태 막대',
	'prefs-onlinestatus' => '온라인 상태',
	'onlinestatusbar-used' => '사용자 문서에서 당신의 온라인 상태를 보이기',
	'onlinestatusbar-hide' => '매직 워드를 사용하여 사용자 문서에서 상태 막대를 숨기기(고급 사용자용)',
	'onlinestatusbar-away' => '지정된 시간이 지나면 자리비움으로 간주',
	'onlinestatusbar-purge' => '로그인하거나 로그인할 때마다 사용자 문서를 새로 고침',
	'onlinestatusbar-status' => '상태의 기본값을 무엇으로 설정하시겠습니까?',
	'onlinestatusbar-away-time' => '자리비움으로 표시할 때까지의 시간을 몇 분으로 하시겠습니까?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|온라인}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|바쁨}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|자리 비움}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|숨겨짐}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|오프라인}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|알 수 없음}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|이 사용자}}는 현재 온라인입니다',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|이 사용자}}는 현재 바쁘며 응답하지 않을 수 있습니다',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|이 사용자}}는 현재 자리를 비운 상태이며 응답하지 않을 수 있습니다',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|이 사용자}}는 현재 오프라인입니다',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|이 사용자}}의 상태를 알 수 없습니다',
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
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Dëse Benotzer}} ass elo online',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Dëse Benotzer}} ass beschäftegt a méiglecherweis net disponibel',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Dëse Benotzer}} ass net aktiv a méiglecherweis net disponibel',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Dëse Benotzer}} ass offline',
	'onlinestatusbar-tooltip-unknown' => 'De Status vun {{GENDER:$1|dësem Benotzer}} ass onbekannt',
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
	'onlinestatusbar-desc' => 'Palang status yang menunjukkan sama pengguna berada dalam talian atau tidak pada laman penggunanya',
	'prefs-onlinestatus' => 'Status dalam talian',
	'onlinestatusbar-used' => 'Paparkan status online anda pada laman-laman pengguna anda',
	'onlinestatusbar-hide' => 'Sorokkan palang status di laman pengguna untuk menggunakan kata sakti sahaja (Untuk pengguna yang lebih berpengalaman)',
	'onlinestatusbar-away' => 'Anggap sebagai tiada sebagai automatik selepas tempoh yang ditetapkan',
	'onlinestatusbar-purge' => 'Singkirkan isi laman pengguna setiap kali ketika log masuk/keluar',
	'onlinestatusbar-status' => 'Yang manakah status asali yang ingin anda gunakan?',
	'onlinestatusbar-away-time' => 'Berapa minit sehingga anda dianggap tiada:',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Dalam Talian}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Sibuk}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Jauh dari Komputer}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Tersembunyi}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Luar Talian}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Tidak Pasti}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Pengguna}} ini berada di dalam talian',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Pengguna}} ini sibuk dan mungkin tidak boleh dihubungi',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Pengguna}} ini berjauhan dari komputer dan mungkin tidak boleh dihubungi',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Pengguna}} ini berada di luar talian',
	'onlinestatusbar-tooltip-unknown' => 'Status {{GENDER:$1|pengguna}} ini tidak dipastikan',
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
 * @author Odie2
 */
$messages['pl'] = array(
	'onlinestatusbar-desc' => 'Pasek statusu, który pokazuje na stronie użytkownika, czy ten jest dostępny',
	'prefs-onlinestatus' => 'Status dostępności',
	'onlinestatusbar-used' => 'Wyświetlaj mój status na moich stronach użytkownika',
	'onlinestatusbar-hide' => 'Ukryj pasek statusu na stronach użytkownika, aby wykorzystać tylko magiczne słowo (dla użytkowników zaawansowanych)',
	'onlinestatusbar-away' => 'Traktuj jako "nieobecny" automatycznie po określonym czasie',
	'onlinestatusbar-purge' => 'Odśwież stronę użytkownika za każdym razem, gdy loguję się lub wylogowuję',
	'onlinestatusbar-status' => 'Jaki jest domyślny status, którego chcesz użyć?',
	'onlinestatusbar-away-time' => 'Ile minut do oznaczenia jako "nieobecny"?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Dostępny}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Zajęty}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Przerwa}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Ukryty}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Niedostępny}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Nieznany}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Ten użytkownik}} jest teraz dostępny',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Ten użytkownik}} jest zajęty i może być niedostępny',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Ten użytkownik}} jest bezczynny i może być niedostępny',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Ten użytkownik}} jest niedostępny',
	'onlinestatusbar-tooltip-unknown' => 'Status {{GENDER:$1|tego użytkownika}} jest nieznany',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'onlinestatusbar-desc' => "La bara dë stat che a mostra quand n'utent a l'é an linia dzora soa pàgina utent",
	'prefs-onlinestatus' => 'Stat an linia',
	'onlinestatusbar-used' => 'Smon-e sò statù an linia dzora soe pàgina utent',
	'onlinestatusbar-hide' => "Stërmé la bara dë stat an sle pàgine d'utent për dovré mach la paròla màgica (Për j'utent avansà)",
	'onlinestatusbar-away' => "Trata com automaticament assent apress n'antërval definì",
	'onlinestatusbar-purge' => 'Dësvujdé la pàgina utent tute le vire che chiel a intra o a seurt dal sistema',
	'onlinestatusbar-status' => "Col ch'a l'é lë stat predefinì ch'it veule dovré?",
	'onlinestatusbar-away-time' => "Vàire minute prima ch'it sie marcà com lontan?",
	'onlinestatusbar-title-online' => '{{GENDER:$1|An linia}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Ocupà}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Lontan}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Stërmà}}',
	'onlinestatusbar-title-offline' => "{{GENDER:$1|Fòra 'd linia}}",
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Pa conossù}}',
	'onlinestatusbar-tooltip-online' => "{{GENDER:$1|St'utent}} a l'é adess an linia",
	'onlinestatusbar-tooltip-busy' => "{{GENDER:$1|St'utent}} a l'é ocupà e a peul esse nen disponìbil",
	'onlinestatusbar-tooltip-away' => "{{GENDER:$1|St'utent}} a l'é lontan e a peul esse pa disponìbil",
	'onlinestatusbar-tooltip-offline' => "{{GENDER:$1|St'utent}} a l'é nen colegà",
	'onlinestatusbar-tooltip-unknown' => "Lë stat dë {{GENDER:$1|st'utent}} a l'é sconossù",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'prefs-onlinestatus' => 'پرليکه دريځ',
	'onlinestatusbar-title-online' => '{{GENDER:$1|پر ليکه}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|بوخت}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|ليري}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|پټ}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|پرې ليکه}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|ناجوت}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|دا کارن}} اوس پر ليکه دی',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|دا کارن}} پرې ليکه دی',
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

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'onlinestatusbar-desc' => "Barre de state ca face vedè ce 'n'utende ste in linèe sus a le pàggene sue",
	'prefs-onlinestatus' => 'State in linèe',
	'onlinestatusbar-used' => "Face vedè 'u state in linèe tune sus 'a pàgene utende toje",
	'onlinestatusbar-hide' => "Scunne 'a barre de state sus a le pàggene utende ce ause 'a parola maggeche (Pe le utinde avanzate)",
	'onlinestatusbar-away' => "Tratte automaticamende cumme apprisse a l'indervalle definite",
	'onlinestatusbar-purge' => "Sdevache 'a pàgene utende ognevvote quanne tu tràse o isse",
	'onlinestatusbar-status' => "Qual è 'u state de base ca vue ccù ause?",
	'onlinestatusbar-away-time' => 'Quanda minute vuè pe essere signate cumme assende?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|In linèe}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Occupate}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Assende}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Scunnute}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Fore linèe}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Scanusciute}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Stu utende}} mò ste in linèe',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Stu utende}} ste occupate o pò essere indisponibbile',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Stu utende}} ste inattive o pò essere indisponibbile',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Stu utende}} mò ste fore linèe',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|Stu utende}} jè scanusciute',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'onlinestatusbar-desc' => 'Строка состояния, которая показывает на странице участника, находится ли он в сети',
	'prefs-onlinestatus' => 'Статус в сети',
	'onlinestatusbar-used' => 'Показывать ваш статус в сети на странице участника',
	'onlinestatusbar-hide' => 'Скрыть строку состояния на странице участника, используя только «волшебное слово» (для продвинутых пользователей)',
	'onlinestatusbar-away' => 'Автоматически устанавливать статус «отошёл» через определённый интервал',
	'onlinestatusbar-purge' => 'Очищать кэш страницы участника каждый раз, когда вы входите или завершаете сеанс',
	'onlinestatusbar-status' => 'Какой статус вы хотите использовать по умолчанию?',
	'onlinestatusbar-away-time' => 'Через сколько минут показывать, что вы отошли?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|В сети}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Занят}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Отошёл}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Невидимый}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Не в сети}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Неизвестно}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Этот участник}} сейчас в сети',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Этот участник}} занят и может быть недоступен',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Этот участник}} неактивен и может быть недоступен',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Этот участник}} не в сети',
	'onlinestatusbar-tooltip-unknown' => 'Статус {{GENDER:$1|этого участника}} неизвестен',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'prefs-onlinestatus' => 'මාර්ගගත තත්වය',
	'onlinestatusbar-title-online' => 'මාර්ගගතයි', # Fuzzy
	'onlinestatusbar-title-busy' => 'කාර්යබහුලයි', # Fuzzy
	'onlinestatusbar-title-away' => '{{GENDER:$1|බැහැර}}',
	'onlinestatusbar-title-hidden' => 'සඟවනලද', # Fuzzy
	'onlinestatusbar-title-offline' => 'මාර්ගඅපගතයි', # Fuzzy
	'onlinestatusbar-title-unknown' => 'තත්වය නොදනියි', # Fuzzy
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|මෙම පරිශීලකයා}} දැන් මාර්ගගතයි',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'onlinestatusbar-desc' => 'Statusfält som visar om en användare är ansluten på sin användarsida',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-used' => 'Visa din anslutningsstatus på dina användarsidor',
	'onlinestatusbar-hide' => 'Dölj statusfältet på användarsidor för att bara använda det magiska ordet (För avancerade användare)',
	'onlinestatusbar-away' => 'Behandla som borta automatiskt efter definierat intervall',
	'onlinestatusbar-purge' => 'Rensa användarsidan varje gång du loggar in eller ut',
	'onlinestatusbar-status' => 'Vilken standardstatus önskar du använda?',
	'onlinestatusbar-away-time' => 'Hur många minuter innan du markeras som borta?',
	'onlinestatusbar-title-online' => '{{GENDER:$1|Ansluten}}',
	'onlinestatusbar-title-busy' => '{{GENDER:$1|Upptagen}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|Borta}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|Dold}}',
	'onlinestatusbar-title-offline' => '{{GENDER:$1|Inte ansluten}}',
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|Okänd}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|Denna användare}} är nu inte ansluten',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|Denna användare}} är upptagen och kan vara oanträffbar',
	'onlinestatusbar-tooltip-away' => '{{GENDER:$1|Denna användare}} är inaktiv och kan vara oanträffbar',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|Denna användare}} är inte ansluten',
	'onlinestatusbar-tooltip-unknown' => 'Statusen för {{GENDER:$1|denna användare}} är okänd',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'onlinestatusbar-used' => 'உங்கள் இணைப்பிலுள்ள நிலையை உங்கள் பயனர் பக்கத்தில் தெரிவிக்கவும்',
	'onlinestatusbar-status' => 'நீங்கள் பயன்படுத்த விரும்பும் இயல்புநிலை நிலை என்ன?',
	'onlinestatusbar-title-online' => 'இணைப்பில்', # Fuzzy
	'onlinestatusbar-title-busy' => '{{GENDER:$1|வேலையாகவுள்ளார்}}',
	'onlinestatusbar-title-away' => '{{GENDER:$1|வெளியே சென்றுள்ளார்}}',
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|மறைக்கப்பட்டது}}',
	'onlinestatusbar-title-offline' => 'இணைப்பிலில்லை', # Fuzzy
	'onlinestatusbar-title-unknown' => '{{GENDER:$1|அறியப்படாதது}}',
	'onlinestatusbar-tooltip-online' => '{{GENDER:$1|இந்தப் பயனர்}} இப்போது இணைப்பிலுள்ளார்',
	'onlinestatusbar-tooltip-busy' => '{{GENDER:$1|இந்தப் பயனர்}} வேலையாகவுள்ளார், மேலும் இப்போது கிடைக்காமலிருக்கலாம்',
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|இந்தப் பயனர்}} இப்போது இணைப்பிலில்லை',
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
 * @author Xiaomingyan
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
	'onlinestatusbar-tooltip-offline' => '{{GENDER:$1|该用户}}离线',
	'onlinestatusbar-tooltip-unknown' => '{{GENDER:$1|此用户}}的状态未知',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Ch.Andrew
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'onlinestatusbar-title-hidden' => '{{GENDER:$1|隱藏}}',
);
