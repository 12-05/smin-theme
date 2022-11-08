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
    interval: 200,
    reset: true
  });
  ScrollReveal().reveal(".grid .unternehmen", {
    interval: 200,
    reset: true
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
})(jQuery);