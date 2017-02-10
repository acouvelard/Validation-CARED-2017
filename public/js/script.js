$(document).ready(function() {

  //apparition en fondu du contenu de la page home
  $('#presentation p').hide();
  $('#presentation h3').hide();
  $('#presentation').ready(function() {
    $('#presentation').children('h3').delay( 100 ).fadeIn( 1000 );
    $('#presentation').children('p').delay( 500 ).fadeIn( 1000 );
  });

  //agrandir les images des instruments
  $('.instrument').mouseover(function() {
    $(this).children('img').css('transform', 'scale(1.5)', 'z-index', '100')
  });
  $('.instrument').mouseleave(function() {
    $(this).children('img').css('transform', 'scale(1)')
  });

});
