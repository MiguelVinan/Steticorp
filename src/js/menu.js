$(function(){

  var $btnMenu = $('.menu').find('button');
  var $navBar = $('.menu').find('nav');

  $btnMenu.click(function(e){
    e.preventDefault();
    $navBar.toggleClass('is-active');
  })

});
