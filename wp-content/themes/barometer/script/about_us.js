
$(function() {
  var vheight = $(window).height();
  var width = $(window).width();
  // Center the intro text if the viewport is over 500px
  if (vheight > $('#map').height() ) {
    $('#map').css('height', vheight +  'px');
  }

  if ($(location).attr('hash') == '#show-careers'){
    //scroll_to('#careers');
    setTimeout(function(){
      //show_career_description('career1');
      $('.careers_container').slideUp();
      $('a.scroll_to_careers').click();
    }, 300);
  } 

});



function setup_scrolling() {
}
