$(document).ready(function() {
	
	/* Paralaxa */
		function isInViewport(node) {
			  var rect = node.getBoundingClientRect()
			  return (
				(rect.height > 0 || rect.width > 0) &&
				rect.bottom >= 0 &&
				rect.right >= 0 &&
				rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
				rect.left <= (window.innerWidth || document.documentElement.clientWidth)
			  )
			}
	
		$(window).scroll(function() {
		/* Paralaxa */
		 var scrolled = $(window).scrollTop()
		  $('.void-img, .void-2-img').each(function(index, element) {
			var initY = $(this).offset().top
			var height = $(this).height()
			var endY  = initY + $(this).height()
	
			// Check if the element is in the viewport.
			var visible = isInViewport(this)
			if(visible) {
			  var diff = scrolled - initY
			  var ratio = Math.round((diff / height) * 100)
			  $(this).css('background-position','center ' + parseInt(-(ratio * 2.2)) + 'px')
			}
		  });
		});

		var delay = 0;
		jQuery(".animacja-kontener").each(function() {
			jQuery(this).delay(delay).animate({"background-size": "100%", "top": "0", "left": "0"},10);
			delay += 220;
		});

		/*Slick slider - Galeria*/
		$('.galeria-main').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			speed: 900,
			autoplay: true,
			asNavFor: '.galeria'
		  });
		  $('.galeria').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.galeria-main',
			dots: true,
			speed: 900,
			adaptiveHeight: true,
			autoplay: true,
			vertical: true,
			focusOnSelect: true
		  });
});
	
	
	
	
	
	