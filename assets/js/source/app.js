/**
 * App.js
 *
 * @since 1.0.0
 */
(function ( $ ) {
	var bodyEl   = document.body,
	    content  = document.querySelector( '.content-wrap' ),
	    openbtn  = document.getElementById( 'open-button' ),
	    closebtn = document.getElementById( 'close-button' ),
	    isOpen   = false;

	function init() {
		initEvents();
		initTextSlider();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if ( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function ( ev ) {
			var target = ev.target;
			if ( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if ( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
			classie.remove( openbtn, 'is-active' );
		}
		else {
			classie.add( openbtn, 'is-active' );
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	function initTextSlider() {
		$('.text-slider').slick();
	}

	$( document ).ready( function () {
		init();
	} );

})( jQuery );
