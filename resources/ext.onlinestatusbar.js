/**
 * OnlineStatusBar front-end.
 *
 * @file
 * @author Brion Vibber
 * @author Petr Bena
 * @author Trevor Parscal
 */

jQuery( function() {

var $statusbar = $( '#status-top' ),
	$iconbar = $( '.onlinestatusbaricon' ),
	imagePath = mw.config.get( 'wgExtensionAssetsPath' ) +
		'/OnlineStatusBar/resources/images/status',
	statusImages = {
		'offline': imagePath + 'red.png',
		'online': imagePath + 'green.png',
		'away': imagePath + 'orange.png',
		'busy': imagePath + 'orange.png'
	},
	apiUrl = mw.config.get( 'wgScriptPath' ) + '/api' + mw.config.get( 'wgScriptExtension' ),
	// WARNING: This way of determining a username is limited to user pages and user talk pages
	username = mw.config.get( 'wgTitle' );

/**
 * Fetch the status of the user that owns this page or talk page and update the status bar.
 *
 * @function
 */
function updateOnlineStatusBar() {
	$.ajax( {
		'url': apiUrl,
		'data': {
			'action': 'query',
			'prop': 'onlinestatus',
			'onlinestatususer': username,
			'format': 'json'
		},
		'success': function( data ) {
			// Update the statusbar
			var status = data.onlinestatus.result,
				image = mw.html.element( 'img', { 'src': statusImages[status] } ),
				text = mw.msg( 'onlinestatusbar-status-' + status );
			$statusbar.html( mw.msg( 'onlinestatusbar-line', username, image, text ) );
		}
	} );
}

// Only intialize the status bar if we are on the right page - this is controlled on the server side
// so the presence of an element with #status-top is sufficient proof we are on the right page
if ( $statusbar.length > 0 ) {
	// Update the status every couple minutes if we leave the page open
	setInterval( updateOnlineStatusBar, 120 * 1000 );
	// Update immediately as well
	updateOnlineStatusBar();
}

} );
