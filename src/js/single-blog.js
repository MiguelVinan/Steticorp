$(function(){
  var $singleArticle = $('.single-article');
  $singleArticle.find('p').addClass('texto');

  var $blogText = $singleArticle.find('.texto'),
      $blogList = $singleArticle.find('ol, ul');

  /* Adding class to paragraph in articles single view*/
  $blogText.addClass('col-xs-12 col-sm-11 col-md-9');
  $blogList.addClass('col-xs-12 col-sm-10 col-md-8');

  $(document).on('ready',function(){
    var coverHeight = $(".cover--single").height();
    var cvrheight = coverHeight / 1.8;
    var navBottom = $('.share-article');
    var artheight = $('.single-article').height() + coverHeight + 200;

    $(window).scroll(function() {
      var scrollBottom = $(this).scrollTop() + $(window).height();
      var scrollTop = $(this).scrollTop();

      (scrollTop > cvrheight && scrollBottom < artheight) ? navBottom.addClass('shared-on') : navBottom.removeClass("shared-on");

    });
});

})
