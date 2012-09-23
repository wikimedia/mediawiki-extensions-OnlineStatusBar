/**
 * OnlineStatusBar front-end.
 *
 * @file
 * @author Brion Vibber
 * @author Petr Bena
 * @author Trevor Parscal
 * @author Timo Tijhof
 * @author Bartosz Dziewoński
 */
( function ( mw, $ ) {
	// Due to the way we determine the target user (wgTitle)
	// this code must never run outside the User/User talk namespace.
	if ( $.inArray( mw.config.get( 'wgCanonicalNamespace' ), ['User', 'User_talk'] ) === -1 ) {
		return;
	}

	$( document ).ready( function () {
		var
			$statusbarFields = $( '<span>' ).addClass( 'onlinestatusbar-pagetop onlinestatusbar-field metadata' ),
			imagePath = mw.config.get( 'wgExtensionAssetsPath' ) +
				'/OnlineStatusBar/resources/images',
			knownStatuses = [
				'online',
				'busy',
				'away',
				// 'hidden' is omitted, never exposed in the API (displayed as "offline")
				'offline',
				'unknown'
			],
			apiPath = mw.util.wikiScript( 'api' ),
			// WARNING: This way of determining a username is limited to user pages and user talk pages
			username = mw.config.get( 'wgTitle' ).split( '/' )[0];

		// Add status bar wrapper
		$( 'h1' ).first().prepend( $statusbarFields );

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
				var status = data && data.onlinestatus && data.onlinestatus.result;

				// Make sure the is a status (data.onlinestatus can be undefined in case
				// of a server problem).
				// Also future proof: If new statuses are introduced in the API,
				// gracefully degrade by showing nothing when serving cached js/css.
				if ( !status || $.inArray( status, knownStatuses ) === -1 ) {
					return;
				}

				$statusbarFields
					.empty()
					.text( mw.msg( 'onlinestatusbar-title-' + status ) )
					.removeClass( 'onlinestatusbar-status-' + $statusbarFields.data( 'onlinestatusbar.status' ) )
					.addClass( 'onlinestatusbar-status-' + status )
					.data( 'onlinestatusbar.status', status )
					.attr( 'title', mw.msg( 'onlinestatusbar-tooltip-' + status ) );

			}).always( function () {
				// Whether ajax succeeded or failed, once done, schedule an update
				// (for when the user leaves the page open) 2 minutes from now.
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
