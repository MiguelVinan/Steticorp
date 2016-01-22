$(function(){
  var $treatmentsContainer = $('.services-treatment');

  var divs = $treatmentsContainer.find('.single-treatment');
  for(var i = 0; i < divs.length; i+=3) {
    divs.slice(i, i+3).wrapAll("<div class='row'></div>");
  }

});
