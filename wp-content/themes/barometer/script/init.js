

$(function() {

  var vheight = $(window).height();
  // Center the intro text if the viewport is over 500px
  if (vheight > 500) {
    $('.intro-block').attr('data-0', 'top:' + (vheight / 2 - 106) + 'px; opacity:1;')
  }

  // Initiate skrollr
  skrollr.init({
    forceHeight: false
  });

  $('.side-nav a').mouseover(function() {
    $(this).siblings('.pop').show();
  }).mouseout(function(){
    $(this).siblings('.pop').fadeOut();
  });

  setup_scrolling();

  $(".click_trigger").on("click", function() {
    var link_to_trigger = $(this).attr('data_click');
    $(link_to_trigger).click();
  });

  $(".people_list .person").hover(
    function () {
      $(this).find('.tint, .person_info').fadeIn();
    },
    function () {
//      $(this).find('.tint, .person_info').fadeOut();
    }
  );

  $('.career_item').on("click", function() {
    show_career_description($(this).attr('data_career'));
  });

  show_career_description('career1');

  $('.careers_container').slideUp();
  $('.scroll_to_careers').on('click', function() {
    $('.careers_container').slideDown( 100, function() {
      scroll_to($('.careers_container'), -35);
    });
    return false;
  });

  $('.scroll_to').on('click', function() {
    scroll_to($(this).attr('data_scroll'), $(this).attr('data_offset') );
    return false;
  });
});


function scroll_to(target_selector, offset) {
  if (offset == undefined) {
    var offset = 1;
  }
  $('html, body').animate({
      // +1 px so that the sidenav dot lights up correctly
      scrollTop: ($(target_selector).offset().top +offset)+ 'px'
  }, 0);
  return this; // for chaining...

}

function scroll_to_offset(target_selector, offset) {
  $('html, body').animate({
    scrollTop: $(target_selector).offset().top + offset
  }, 800);
  return false;
}

function show_career_description(career_name) {
  $('.career_item .dashes').fadeOut();
  $('.' + career_name).find('.dashes').fadeIn();
  $('.career_descriptions').fadeIn();
  $('.career_item').removeClass('selected');
  $('.' + career_name + '.career_item').addClass('selected');

  $('.career_descriptions .career').slideUp();

  $('.' + career_name).slideDown();
}



function blue_dot(dot) {
  $('.side-nav li a').animate({
    backgroundColor: 'white'
  });
  $(dot).animate({
    backgroundColor: "#16afff"
  });
}





