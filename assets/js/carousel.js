(function(){
  var carouselElement = document.getElementById('carousel-generic');

  var hm = new Hammer(carouselElement);
  hm.on('swipeleft', function(e){
    $(this).carousel('next');
    e.preventDefault();
  })
  hm.on('swiperight', function(e){
    $(this).carousel('prev');
    e.preventDefault();
  })

})();
