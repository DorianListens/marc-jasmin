jQuery(function( $ ){
			// Scroll initially if there's a hash (#something) in the url 
			$.localScroll.hash({
				 // Could be a selector or a jQuery object too.
				duration:1500
			});
			$.localScroll({
				duration:1000	
			});
			$(document).ready(function(){
				$('html').css('overflow', 'hidden');
				var windowHeight = $(window).height();
				$('.info-chunk').css('height', windowHeight)
			});

		});