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
l