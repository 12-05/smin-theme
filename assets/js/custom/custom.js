"use strict";

(function ($) {
	$(".hamburger").click(function () {
		$("body").toggleClass("nav-visible");
	});
	$(".block-slider").slick({
		arrows: true,
		dots: true,
	});
	var options = {
		reset: true,
		origin: "bottom",
		distance: "50%",
	};
	ScrollReveal().reveal("h2", options);
	ScrollReveal().reveal(".member", {
		origin: "right",
		distance: "100%",
		interval: 200,
		reset: true,
	});
	ScrollReveal().reveal(".grid .immobilie", {
		interval: 50,
		reset: false,
	});
	ScrollReveal().reveal(".grid .unternehmen", {
		interval: 50,
		reset: false,
	});

	ScrollReveal().reveal(".smin-person img", {
		origin: "left",
		distance: "100%",
		reset: true,
	});
	ScrollReveal().reveal(".smin-person h1", {
		origin: "top",
		delay: 300,
		distance: "100%",
		reset: true,
	});
	ScrollReveal().reveal(".smin-person .content", {
		origin: "right",
		delay: 300,
		distance: "100%",
		reset: true,
	});

	ScrollReveal().reveal(".smin-portfolio .profile", {
		origin: "top",
		distance: "100%",
		reset: true,
	});
	ScrollReveal().reveal(".smin-portfolio .toolbar", {
		origin: "left",
		distance: "100%",
		reset: true,
	});
	ScrollReveal().reveal(".smin-portfolio .text", {
		origin: "right",
		distance: "100%",
		reset: true,
	});
	document.addEventListener("mousemove", function (e) {
		let body = document.querySelector("body");
		let one = jQuery(".orange-bg .one");
		let two = jQuery(".orange-bg .two");
		var width = document.body.clientWidth;

		let left = e.offsetX;
		let top = e.offsetY;

		two.css("width", width * 0.7 - left / 100 + "px");
		one.css("width", width * 0.7 - (width - left) / 100 + "px");
	});
})(jQuery);
