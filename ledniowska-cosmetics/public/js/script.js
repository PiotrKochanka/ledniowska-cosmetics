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
		  $('.void-img, .void-2-img, .stopka-kontener, .void-3-img').each(function(index, element) {
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
		  // Button top
		  if ($(this).scrollTop() > 250) {
            	$('.button-top').fadeIn();
			} else {
				$('.button-top').fadeOut();
			}

		});
		$('.button-top').on('click', function(e){
			e.preventDefault();
			$('html,body').animate({scrollTop:0}, '300');
		});

		var delay = 0;
		jQuery(".start-foto").each(function() {
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
		  $('.rotator-pause').on('click', function() {
			$('.galeria-main')
				.slick('slickPause')
		});
		$('.rotator-play').on('click', function() {
			$('.galeria-main')
				.slick('slickPlay')
		});

		$('.rotator-pause').on('click', function() {
			$('.rotator-pause').css('display', 'none')
			$('.rotator-play').css('display', 'block');
		});
		$('.rotator-play').on('click', function() {
			$('.rotator-play').css('display', 'none');
			$('.rotator-pause').css('display', 'block');
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
		  $('.rotator-pause').on('click', function() {
			$('.galeria')
				.slick('slickPause')
		});
		$('.rotator-play').on('click', function() {
			$('.galeria')
				.slick('slickPlay')
		});

		$('.rotator-pause').on('click', function() {
			$('.rotator-pause').css('display', 'none')
			$('.rotator-play').css('display', 'block');
		});
		$('.rotator-play').on('click', function() {
			$('.rotator-play').css('display', 'none');
			$('.rotator-pause').css('display', 'block');
		});

		// menu zostające
		menugoratop = jQuery("#menu-gora").offset().top+jQuery("#menu-gora").innerHeight()+100;
		$(window).scroll(function () {
			scroll = jQuery(window).scrollTop();
			if (scroll > menugoratop) {
				$('.menu-gora-1-poziom').addClass("sticky");
			} else {
				$('.menu-gora-1-poziom').removeClass("sticky");
			}
		});
		  

		/* odnośniki smooth*/
		onas = jQuery(".h2-text").offset().top+jQuery(".h2-text").innerHeight()-150;
		$('.menu-gora-1-poziom > li > a[href="#o-nas-odn"]').click(function(e){
			e.preventDefault();
			$('html,body').animate({scrollTop:onas}, '300');
		});

		uslugi = jQuery(".h3-uslugi").offset().top+jQuery(".h3-uslugi").innerHeight()-150;
		$('.menu-gora-1-poziom > li > a[href="#uslugi-odn"]').click(function(e){
			e.preventDefault();
			$('html,body').animate({scrollTop:uslugi}, '300');
		});

		galeria = jQuery(".h3-galeria").offset().top+jQuery(".h3-galeria").innerHeight()-150;
		$('.menu-gora-1-poziom > li > a[href="#galeria-odn"]').click(function(e){
			e.preventDefault();
			$('html,body').animate({scrollTop:galeria}, '300');
		});
});

	/* cennik */
	$(".btn-cennik").click(function(){
		$(this).parent().children("ul").slideToggle();
   });
	
	
	
	
	