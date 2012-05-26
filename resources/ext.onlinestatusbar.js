/**
 * OnlineStatusBar front-end.
 *
 * @file
 * @author Brion Vibber
 * @author Petr Bena
 * @author Trevor Parscal
 */
( function ( mw, $ ) {

	$( document ).ready( function () {
		var $statusbarFields = $( '.onlinestatusbar-field' ),
			imagePath = mw.config.get( 'wgExtensionAssetsPath' ) +
				'/OnlineStatusBar/resources/images',
			statusImages = {
				'offline': 'statusred.png',
				'online': 'statusgreen.png',
				'away': 'statusorange.png',
				'busy': 'statusorange.png',
				'unknown': 'statusgrey.png'
			},
			apiPath = mw.util.wikiScript( 'api' ),
			// WARNING: This way of determining a username is limited to user pages and user talk pages
			username = mw.config.get( 'wgTitle' );

		/**
		 * Fetch the status of the user that owns this page or talk page and
		 * update the status bar.
		 * @return jqXHR
		 */
		function updateOnlineStatusBar() {
			return $.ajax({
				url: apiPath,
				data: {
					format: 'json',
					action: 'query',
					prop: 'onlinestatus',
					onlinestatususer: username
				}
			}).done( function ( data ) {
				var image, text,
					status = data.onlinestatus.result;

				// Future proof: If new statuses are introduced,
				// gracefully degrade by showing nothing in a cached js state.
				// (otherwise it would try to insert a 404 error to ./images/undefined)
				if ( statusImages[status] === undefined ) {
					return;
				}

				image = mw.html.element( 'img', { src: imagePath + '/' + statusImages[status] } );
				text = mw.msg( 'onlinestatusbar-status-' + status );

				// Update the statusbar
				$statusbarFields.html( mw.msg(
					'onlinestatusbar-line',
					mw.html.escape( username ), image, mw.html.escape( text )
				) );
			}).always( function () {
				// Whether ajax succeeded or failed, once done, schedule the
				// update (for if the user leaves the page open)
				setTimeout( updateOnlineStatusBar, 2 * 60 * 1000 );
			});
		}

		// Only intialize the status bar if we are on the right page.
		// This is controlled on the server side.
		// Initialize if there is one or more of these body placeholders.
		if ( $statusbarFields.length > 0 ) {
			// Update now
			updateOnlineStatusBar();
		}
	});

}( mediaWiki, jQuery ) );
