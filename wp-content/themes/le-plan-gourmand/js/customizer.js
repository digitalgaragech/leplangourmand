/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

// ( function( $ ) {
// 	// Site title and description.
// 	wp.customize( 'blogname', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-title a' ).text( to );
// 		} );
// 	} );
// 	wp.customize( 'blogdescription', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-description' ).text( to );
// 		} );
// 	} );

// 	// Header text color.
// 	wp.customize( 'header_textcolor', function( value ) {
// 		value.bind( function( to ) {
// 			if ( 'blank' === to ) {
// 				$( '.site-title, .site-description' ).css( {
// 					clip: 'rect(1px, 1px, 1px, 1px)',
// 					position: 'absolute',
// 				} );
// 			} else {
// 				$( '.site-title, .site-description' ).css( {
// 					clip: 'auto',
// 					position: 'relative',
// 				} );
// 				$( '.site-title a, .site-description' ).css( {
// 					color: to,
// 				} );
// 			}
// 		} );
// 	} );
// }( jQuery ) );

function owl(){
	jQuery(".owl-carousel").owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots:false,
		autoplay:true,
		autoplayTimeout:10000,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			}
		}
	});
}
jQuery(document).ready(function(){
	jQuery(".wp-block-gallery").addClass('owl-theme').addClass('owl-carousel');
	jQuery(".wp-block-image").addClass('item');
	setTimeout(owl, 100);
});