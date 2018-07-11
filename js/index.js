var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

// hamburger & drop-down div
$(document).ready(function() {
	$(".hamburger").click(function() {
		$(this).toggleClass("is-active");
		$(".mobile-navbar").toggleClass("drop");
	});
});

// animate text
// Wrap every letter in a span
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