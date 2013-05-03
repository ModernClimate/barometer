function setup_scrolling() {
  // Distance controlls
  var location3 = $('#section3').offset();
  var slide_1_active = false;
  var slide_2_active = false;
  var slide_3_active = false;
  var position = 0;

  $('.slides .plink').click(function(){
    var offset = parseInt($(this).attr('data-frame'));
    scroll_to_offset('#section3', offset);
    return false;
  });



  $('.threesixty a').click(function(){
    var offset = parseInt($(this).attr('data-frame'));
    scroll_to_offset('#section2', offset);
    return false;
  });

  //$('.universe-scroll').click(function(){
    //alert('foo');
    //scroll_to_offset('#section1', 10);
    //return false;
  //});


  $(window).scroll(function() {

    var scroll = $(window).scrollTop();
    if (scroll > 1355) {
      $('.st-1 .pop').slideDown();
    } else {
      $('.st-1 .pop').slideUp();
    }

    if (scroll > 2000) {
      $('.st-2 .pop').slideDown();
      $('.st-3 .pop').slideDown();
    } else {
      $('.st-2 .pop').slideUp();
      $('.st-3 .pop').slideUp();
    }

    if (scroll > 2410) {
      $('.st-4 .pop').slideDown();
      $('.st-5 .pop').slideDown();
    } else {
      $('.st-4 .pop').slideUp();
      $('.st-5 .pop').slideUp();
    }

    if (scroll > 2960) {
      $('.st-6 .pop').slideDown();
      $('.st-7 .pop').slideDown();
    } else {
      $('.st-6 .pop').slideUp();
      $('.st-7 .pop').slideUp();
    }

    if (scroll > 6200 && scroll < 8310) {
      $('.pl-1 .pop').slideDown();
    } else {
      $('.pl-1 .pop').slideUp();
    }

    if (scroll > 8310 && scroll < 9900) {
      $('.pl-3 .pop').slideDown();
    } else {
      $('.pl-3 .pop').slideUp();
    }

    if (scroll > 9900) {
      $('.pl-2 .pop').slideDown();
    } else {
      $('.pl-2 .pop').slideUp();
    }

    // Sidenav Actions

    // Universe
    if (position != 1 && scroll < $('#section2').offset().top) {
      position = 1;
      blue_dot('.sn-1 a');
    }
    // Your World
    if (position != 2 && scroll > $('#section2').offset().top && scroll < $('#section3').offset().top) {
      position = 2;
      blue_dot('.sn-2 a');
    }
    // Enjoy the View
    if (position != 3 && scroll > $('#section3').offset().top) {
      position = 3;
      blue_dot('.sn-3 a');
    }



    // Animations for Section 3
    if (scroll-location3.top > 0) {
      offset = scroll-location3.top;
      if (offset > 500 && slide_1_active == false) {
        slide_1_active = true;
        $('#section3 .sl-1').animate({
          backgroundColor: "#fff",
          borderColor: "#fff",
          color: '#000'
        }, 1000);

      } else if (offset < 500 && slide_1_active == true) {
        slide_1_active = false;
        $('#section3 .sl-1').animate({
          backgroundColor: "#20498d",
          borderColor: "#769fda",
          color: '#fff'
        }, 1000);
      }

      if (offset > 2500 && slide_2_active == false) {
        slide_2_active = true;

       $('#section3 .sl-1').animate({
          backgroundColor: "#20498d",
          borderColor: "#769fda",
          color: '#fff'
        }, 1000);
       $('#section3 .sl-2').animate({
          backgroundColor: "#fff",
          borderColor: "#fff",
          color: '#000'
        }, 1000);

      } else if (offset < 2500 && slide_2_active == true) {
          slide_2_active = false;

        $('#section3 .sl-1').animate({
          backgroundColor: "#fff",
          borderColor: "#fff",
          color: '#000'
        }, 1000);

        $('#section3 .sl-2').animate({
          backgroundColor: "#20498d",
          borderColor: "#769fda",
          color: '#fff'
        }, 1000);
      }

      if (offset > 4500 && slide_3_active == false) {
        slide_3_active = true;

        $('#section3 .sl-2').animate({
          backgroundColor: "#20498d",
          borderColor: "#769fda",
          color: '#fff'
        }, 1000);
        $('#section3 .sl-3').animate({
          backgroundColor: "#fff",
          borderColor: "#fff",
          color: '#000'
        }, 1000);
      } else if (offset < 4500 && slide_3_active == true) {
        slide_3_active = false;
        $('#section3 .sl-2').animate({
          backgroundColor: "#fff",
          borderColor: "#fff",
          color: '#000'
        }, 1000);
        $('#section3 .sl-3').animate({
          backgroundColor: "#20498d",
          borderColor: "#769fda",
          color: '#fff'
        }, 1000);
      }
    }
  });
}
