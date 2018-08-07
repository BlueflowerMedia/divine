var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

// Check if device is mobile
function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

// hamburger & drop-down div
$(document).ready(function() {
	$(".hamburger").click(function() {
		$(this).toggleClass("is-active");
		$(".mobile-navbar").toggleClass("drop");
	});
});

// animate text
// Wrap every letter in a span (front-page)
$('.ml10 .letters').each(function() {
	$(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({
	loop: false
}).add({
	targets: '.ml10 .letter',
	rotateY: [-90, 0],
	duration: 1300,
	easing: 'linear',
	delay: function(el, i) {
		return 70 * i;
	}
})

// photo slider
function runCarouselphoto() {
	$(".photo-wrapper-slider").owlCarousel({
		loop: true,
		margin: 100,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav: false,
		responsiveClass: true,
    items: 1,
	})
}

// (page services) Smoothly scroll to services after click
$('a[href^="#"]').on('click', function(event) {
	var target = $(this.getAttribute('href'));
	if (target.length) {
		event.preventDefault();
		$('html, body').stop().animate({
			scrollTop: target.offset().top
		}, 1000);
	}
});

// (page services) fixed div after scrolling to
function divScroll()
{
	var ourServices = $("#section-services");
	var divHeight = ourServices.offset().top;
	$(document).scroll(function() {
		var scrolled = $(window).scrollTop();
		console.log(divHeight, scrolled);
		if (divHeight < scrolled) {
			ourServices.addClass("fixed");
			$("#section-professional").css({
				'margin-top': '240px'
			});
		} else if (divHeight > scrolled) {
			ourServices.removeClass("fixed");
			$("#section-professional").css({
				'margin-top': '0'
			});
		}
	})
}
if (pageName == "Divine") {
  runCarouselphoto();
}
if (pageName == "services"){
  if (!isMobileDevice()) {
  	divScroll();
  }
}
