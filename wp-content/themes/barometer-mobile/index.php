<?php get_header(); ?>

  <ul class="section-nav">
    <li><a href="#section1"></a></li>
    <li class="line"></li>
    <li><a href="#section2"></a></li>
    <li class="line"></li>
    <li><a href="#section3"></a></li>
  </ul>

  <div class="row-fluid nova" id="section1">
      <div class="span12 level-3 center" style="margin-top: 100px;">
        <img src="<?php bloginfo('template_directory'); ?>/css/imgs/big_logo.png" />
        <h3>Your IT Universe. Unified.</h3>
        <img src="<?php bloginfo('template_directory'); ?>/css/imgs/const.png" style="margin:50px 0;" />
        <h2 style="color:#fff;">barometerIT™ is everything you need to know. Now.</h2>
        <div style="font-family:'ProximaNovaA-Bold';font-size:18px;margin:auto;color:#fff;0px 0px 20px #000000;">barometerIT unifies your isolated IT portfolios. Our platform helps companies<br>map where they are today and provides insights into new opportunities.</div>
      </div>
      <div class="small-stars"></div>
  </div>

  <div class="row-fluid section2" id="section2">
    <div class="span12 level-3 center" style="margin-top: 100px;">
      <h1>See your world like never before.</h1>
      <h4>A collective consciousness of your IT portfolios from every angle.</h4>
      <div class="circle">

        <!-- EXPERT GUIDANCE -->
        <div class="plus-link" data-img="step-img-1" style="margin:-23px 0 0 -18px;">
          +
          <div class="pop">
            <div class="arrow"></div>
            EXPERT GUIDANCE
          </div>
        </div>

        <!-- MEMBER ENGAGEMENT -->
        <div class="plus-link" data-img="step-img-2" style="margin:234px 0 0 -217px;">
          +
          <div class="pop">
            <div class="arrow"></div>
            MEMBER ENGAGEMENT
          </div>
        </div>


        <!-- IN REAL TIME -->
        <div class="plus-link" data-img="step-img-3" style="margin:320px 0 0 134px;">
          +
          <div class="pop" id="pop3">
            <div class="arrow"></div>
            IN REAL TIME
          </div>
        </div>

        <img src="<?php bloginfo('template_directory'); ?>/css/imgs/360-place.png" class="step-img" id="step-img-3" />
        <img src="<?php bloginfo('template_directory'); ?>/css/imgs/cr1.png" class="step-img" id="step-img-2" />
        <img src="<?php bloginfo('template_directory'); ?>/css/imgs/cr2.png" class="step-img" id="step-img-1" />

        <img src="<?php bloginfo('template_directory'); ?>/css/imgs/unified_360.png" style="margin-top:80px;" />
      </div>
    </div>
    <img class="section-background" src="<?php bloginfo('template_directory'); ?>/css/imgs/section2.jpg" />
  </div>

  <div class="row-fluid section3" id="section3">
    <div class="span12 level-3 center" style="margin-top: 100px;">

    </div>
    <img class="section-background" src="<?php bloginfo('template_directory'); ?>/css/imgs/section3_2.jpg" />
  </div>

  <script type="text/javascript">
  $(function () {

    // section scrollTO
    $('.section-nav a').on('touchEnd click', function (evt) {
      evt.preventDefault();
      $('.section-nav a').removeClass('active');
      $(this).addClass('active');
      $.scrollTo(
        $(this).attr('href'),
        {
          "duration":1500,
          "offset": -50
        }
      );
    });

    //plusLink click
    $('.plus-link').on('touchEnd click', function () {
      $('.pop, .step-img').fadeOut();
      $('.pop', this)
        .css({
          'marginTop':45,
          'marginLeft':((($('.pop', this).width()/2)*-1)-6)
        })
        .fadeIn();
      $('#'+$(this).attr('data-img')).fadeIn();
    });

  });
  </script>

<?php get_footer(); ?>