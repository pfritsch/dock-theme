$(document).ready(function () {
  // Sticky nav top
  function scrollFunction () {
    if (document.body.scrollTop > 72) {
      $('.site-header').addClass('is-sticky');
    } else {
      $('.site-header').removeClass('is-sticky');
    }
  }

  window.onscroll = scrollFunction;
});


$(document).ready(function () {
  var member = $('[data-member]');
  if(member) {
    member.hover(
      function() {
        var thisMember = $( this ).data('member');
        $('[data-member='+thisMember+']').addClass( "is-hover" );
      }, function() {
        var thisMember = $( this ).data('member');
        $('[data-member='+thisMember+']').removeClass( "is-hover" );
      }
    );
  }

});
