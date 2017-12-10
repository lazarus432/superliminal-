(function($) {
	
  $(window).scroll(function() {
      var wScroll = $(window).scrollTop();
      $('.masthead').css('background-position', 
    'center ' + (wScroll *0.75) + 'px')
  })

  $('a.scrollTo').on('click', function() {
    var scrollTo = $(this).attr('data-scrollTo');
    $('body, html').animate({
      "scrollTop": $('#' + scrollTo).offset().top
    }, 1000 );
    return false;
  })

  new TypeIt('.type',{
    speed: 100,
    deleteSpeed: 75,
    breakLines: false,
    autoStart: false
  })
  .type('Bonjour le monde!')
  .pause(500)
  .delete()
  .type('Hola Mundo!')
  .pause(500)
  .delete()
  .type('Hello, World!')
  .pause(750)
  .delete()
  .type('My name is Nicolas.')
  .pause(750)
  .delete()
  .type("I'm a professional.")
  .pause(750)
  .delete(13)
  .type('developer.')

})( jQuery );

(function($) {

  $("#card").flip({
    axis: 'y',
    trigger: 'click',
  });

  $("#card1").flip({
    axis: 'y',
    trigger: 'click',
  });

  $("#card2").flip({
    axis: 'y',
    trigger: 'click',
  });

  $("#card3").flip({
    axis: 'y',
    trigger: 'click',
  });

})( jQuery );
