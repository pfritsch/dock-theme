$(document).ready(function () {
  // Sticky nav top
  function scrollFunction () {
    if (document.body.scrollTop > 96) {
      $('.site-header').addClass('is-sticky');
    } else {
      $('.site-header').removeClass('is-sticky');
    }
  }

  window.onscroll = scrollFunction;
});
