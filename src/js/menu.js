$(function(){

  var $btnMenu = $('.menu').find('button');
  var $navBar = $('.menu').find('nav');

  $btnMenu.click(function(e){
    e.preventDefault();
    $navBar.toggleClass('is-active');
  });

  if(!Modernizr.svg){
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }

});
