<?php get_header(); ?>

<div class="contact-page">
	<div class="top level-3">
		<h2>Make contact.</h2>
		<h5>Discover the difference of Unified IT.</h5>
	</div>

	<a class="contact-circle" href="mailto:&#115;&#097;&#108;&#101;&#115;&#064;&#098;&#097;&#114;&#111;&#109;&#101;&#116;&#101;&#114;&#073;&#084;&#046;&#099;&#111;&#109;?subject=Demo Request">
		<span>REQUEST<br />A DEMO</span>
		<div class="plus-link">+</div>
	</a>

	<div class="bottom level-3">
		<div class="container">
			<div class="row-fluid">
				<div class="span3">
					<h4>Contact</h4>
					<ul>
						<li>1515 Central Avenue NE, Suite 120</li>
						<li>Minneapolis, MN 55413</li>
						<li><a href="http://goo.gl/maps/nkRXN" class="orange" target="_blank">Get Directions</a></li>
						<li class="line"></li>
						<li>866.999.6639</li>
						<li>
							<a class="orange" href="mailto:&#115;&#097;&#108;&#101;&#115;&#064;&#098;&#097;&#114;&#111;&#109;&#101;&#116;&#101;&#114;&#073;&#084;&#046;&#099;&#111;&#109;">sales at barometerIT.com</a>
						</li>
					</ul>
				</div>
				<div class="span1"></div>
				<div class="span3 phone-right">
					<h4>Connect</h4>
					<ul>
						<li>
							<a href="https://www.facebook.com/barometerit" target="_blank" class="orange" style="font-size: 34px;"><i class="icon-facebook-sign"></i></a>
							<a href="https://twitter.com/barometer" target="_blank" class="orange" style="font-size: 34px;"><i class="icon-twitter-sign"></i></a>
							<a href="http://www.linkedin.com/company/935099" target="_blank" class="orange" style="font-size: 34px;"><i class="icon-linkedin-sign"></i></a>
						</li>
						<li class="line"></li>
						<li><a href="<?php echo site_url(); ?>/about-us?c=1">Careers</a></li>
					</ul>
				</div>
				<div class="span1"></div>
				<div class="span3 web-content">
					<h4>Website</h4>
					<ul>
						<li>
							<a href="<?php echo site_url(); ?>">Your IT Universe</a>
						</li>
						<li>
							<a href="<?php echo site_url(); ?>/#section2">See your world like never before</a>
						</li>
						<li>
							<a href="<?php echo site_url(); ?>/#section3">Your IT Universe</a>
						</li>
						<li>
							<a href="<?php echo site_url(); ?>/solutions">Change starts here</a>
						</li>
						<li>
							<a href="<?php echo site_url(); ?>/about-us">People driven IT<sup style="font-size: 8px;">TM</sup></a>
						</li>
					</ul>
				</div>
				<div class="span1"></div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function () {
	$('.contact-page').css('height', $(window).height() - 50);
    $(window).on('resize', function () {
      $('.contact-page').css('height', $(window).height() - 50);
    });
    <?php if (wp_is_mobile()) { ?>
    $('.contact-page .bottom').click(function () {
    	if ($(this).hasClass('open')) {
    		$(this).animate({
				'height':'30px'
			}).removeClass('open');
    	} else {
    		$(this).animate({
				'height':'180px'
			}).addClass('open');
    	}
    });
    <?php } ?>
});
</script>

<?php get_footer(); ?>