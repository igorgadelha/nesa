jQuery(document).ready(function($) {
	/* Author: Young K. Park (youngkeunpark@gmail.com / github: ozexpert) */
/* This explains good usage of JS closure */

var fontResizer = (function(){
    var defaultSize = 12; // in %, private variable
    var target;

    function setSize(){
        target.style.fontSize = defaultSize+'pt';
    }

    return {
        increase: function(){
            defaultSize++;
            setSize();
        },
        decrease: function(){
            defaultSize--;
            setSize();
        },
        value: function(){
            return defaultSize;
        },
        setTarget: function(elem){
            target = document.getElementById(elem);
        },
        getTarget: function(){
            return target;
        }
    };
})();

	// fitVids.
	$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	$( '.odin-tooltip' ).tooltip();

	fontResizer.setTarget('body');

	$( 'a.font-resizer.plus' ).click(function(){
		fontResizer.increase(); //to decrease font-size
	});

	$( 'a.font-resizer.minus' ).click(function(){
			fontResizer.decrease(); //to decrease font-size
	});
	$('#destaque').owlCarousel({
		items: 1,
		dots: true,
		loop:true,
		lazyLoad: true,
		autoplay: true,
		autoplayHoverPause: true

		// dotsData: true,
	  // dotsContainer: '.dotsCont'
	});

	$('.values').owlCarousel({
		items: 1,
		dots: true,
		lazyLoad: true,
		autoplay: true,
		autoplayHoverPause: true,
		nav:false

		// dotsData: true,
	  // dotsContainer: '.dotsCont'
	});


	$('.destaque').owlCarousel({
		items: 1,
		dots: true,
		loop:true,
		lazyLoad: true,
		autoplay: true,
		autoplayHoverPause: true
	});

	$('.acionistas').owlCarousel({
    loop:true,
    margin:10,
		lazyLoad: true,
		responsiveClass:true,
    responsive:{
        0:{
            items:1,
						nav:true,
						dots:true
        },
        600:{
            items:3,
						nav:true,
						dots:true
        },
        1000:{
            items:5,
						nav:true,
						dots:true,
						loop:false
        }
    }
});
	// ===== Scroll to Top ====
	$(window).scroll(function() {
	    if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
	        $('#return-to-top').fadeIn(200);    // Fade in the arrow
	    } else {
	        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
	    }
	});

	$('#return-to-top').click(function() {      // When arrow is clicked
	    $('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 500);
	});

	// $('.fotorama').fotorama({
	//   spinner: {
	//     lines: 13,
	//     color: 'rgba(0, 0, 0, .75)'
	//   }
	// });
});
