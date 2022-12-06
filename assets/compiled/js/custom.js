"use strict";

(function ($) {
  $(".hamburger").click(function () {
    $("body").toggleClass("nav-visible");
  });
  $(".block-slider").slick({
    arrows: true,
    dots: true
  });
  var options = {
    reset: true,
    origin: "bottom",
    distance: "50%"
  };
  ScrollReveal().reveal("h2", options);
  ScrollReveal().reveal(".member", {
    origin: "right",
    distance: "100%",
    interval: 200,
    reset: true
  });
  ScrollReveal().reveal(".grid .immobilie", {
    interval: 50,
    reset: false
  });
  ScrollReveal().reveal(".grid .unternehmen", {
    interval: 50,
    reset: false
  });
  ScrollReveal().reveal(".smin-person img", {
    origin: "left",
    distance: "100%",
    reset: true
  });
  ScrollReveal().reveal(".smin-person h1", {
    origin: "top",
    delay: 300,
    distance: "100%",
    reset: true
  });
  ScrollReveal().reveal(".smin-person .content", {
    origin: "right",
    delay: 300,
    distance: "100%",
    reset: true
  });
  ScrollReveal().reveal(".smin-portfolio .profile", {
    origin: "top",
    distance: "100%",
    reset: true
  });
  ScrollReveal().reveal(".smin-portfolio .toolbar", {
    origin: "left",
    distance: "100%",
    reset: true
  });
  ScrollReveal().reveal(".smin-portfolio .text", {
    origin: "right",
    distance: "100%",
    reset: true
  });
  document.addEventListener("mousemove", function (e) {
    var body = document.querySelector("body");
    var one = jQuery(".orange-bg .one");
    var two = jQuery(".orange-bg .two");
    var width = document.body.clientWidth;
    var left = e.offsetX;
    var top = e.offsetY;
    one.css("transform", "scaleX(" + left / width + ")");
    two.css("transform", "scaleX(" + (width - left) / width + ")");
  });
})(jQuery);