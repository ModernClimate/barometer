
var study_id = 0;
var scrolling = false;

function setup_scrolling(){

  $(window).scroll(function() {
     scroll = $(window).scrollTop();
     expected_id = parseInt((scroll - 150) / 550);     
     
     $('.debug .num').html(scroll + "<br/>" + expected_id);

     if (expected_id != study_id && expected_id > 0 && expected_id < 10) {
       study_id = expected_id;
       $('#case_study_link' + study_id).click();
     }
  });

  $('.full_size p, .bubble_list .bubble').on("click", function() {

    var list_item = $(this).parents().filter('.bubble_list li');
    var animation_speed = 900;

    // css element retains trigger even after class is removed, but
    //  we only want to animate one resize
    $('.case_studies_container').removeClass('expanded');
    if ($(list_item).hasClass('full_size')) {

      $('.sec4-header').slideUp(animation_speed);
      $('.case_studies_text').fadeIn();
      $('.full_size, .medium_size').removeClass('full_size').removeClass('medium_size').addClass('small_size');
      $(list_item).removeClass('small_size').addClass('medium_size');

      $('.second_cases').animate({
          'margin-top': '-86px',
          'margin-left': '500px'
        }, animation_speed, function () {
      });

    } else {

      $('.medium_size').addClass('small_size').removeClass('medium_size');
      $(list_item).addClass('medium_size').removeClass('small_size');
    }

    shift_case_study(list_item.attr('data_study'));

    return false;
  });


  $('.bubble').hover(
    function(){
      if ($(this).parent().hasClass('small_size')) {
        $(this).parent().addClass('peek_size');
      }
    }, 
    function(){
      $(this).parent().removeClass('peek_size');
    }); 


  $('.case_studies_text .clink').on("click", function() {
    var animation_speed = 900;
    $('.sec4-header').slideDown(animation_speed);
    $('.case_studies_text').fadeOut();
    // $('.full_size, .medium_size').removeClass('full_size').removeClass('medium_size').addClass('small_size');
    // $(list_item).removeClass('small_size').addClass('medium_size');


    $('.small_size, .medium_size').removeClass('small_size').removeClass('medium_size').addClass('full_size');

    $('.second_cases').animate({
        'margin-top': '-10px',
        'margin-left': '82px'
      }, animation_speed, function () {
        $('.case_studies_container').addClass('closed');
        scroll_to('.case_studies_container');
    });

    $('.case_studies_container').addClass('expanded');

    $('.third_cases').animate({
        'margin-top': '10px',
        'margin-left': '25'
      }, animation_speed, function () {

    });
    return false;
  });

}


function shift_case_study(content_name) {
  $('.case_study').stop().slideUp(200).stop();
  // do slideUp a 2nd time just in case something else happened in between

  setTimeout(function() {
    $('.case_study').stop().slideUp(5);
    $('.' + content_name).slideDown(500, function() { $(this).css('overflow', 'visible'); });
  }, 202);

}

