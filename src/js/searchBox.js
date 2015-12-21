$(function(){

  var $inputSearch = $('#searchform').find('.inputText'),
      $iconSearch = $('#searchform').find('i');

  function toggle_animation_searchBox(){
    $inputSearch.toggleClass('is-readyToSearch');
    $iconSearch.toggleClass('is-iconReady');
  }

  $inputSearch.focusin(function(){
    toggle_animation_searchBox();
  })
  $inputSearch.focusout(function(){
    toggle_animation_searchBox();
  })

});