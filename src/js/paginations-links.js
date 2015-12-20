$(function(){
  var $pag_number = $('.pagination-links').find('.page-numbers');
  var $next = $('.pagination-links').find('.next');
  var $prev = $('.pagination-links').find('.prev');

  $prev.html('<i class="icon-chevron-left"></i><span>Articulos nuevos</span>');
  $next.html('<span>Articulos Anteriores</span><i class="icon-chevron-right"></i>');

});