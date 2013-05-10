<?php if (is_home() || is_page('about-us') || is_page('solutions')) { ?>
<div class="footer" <?php if (is_home() || is_page('about-us') || is_page('solutions')) echo 'style="display:block;"'; ?>>
	<?php wp_nav_menu( array('menu' => 'footer', 'menu_class' => 'nav pull-right')); ?>
</div>
<?php } ?>
<script type="text/javascript">
	$(function () {
		$('.footer li a').append('<span class="plus-link">+</span>');
		
		<?php if (is_page('about-us') || is_page('solutions')) { ?>
			$('.footer li a').each(function () {
				if ($(this).html().indexOf('Learn') != -1) {
					$(this).parent().css('display', 'none');
				}
			});
		<?php } ?>
		
		if (window.PIE) {
	        $('.section-nav li a, .pop, .circle, .plus-link, .section3-circle, .solution-circle, .person, .contact-circle').each(function() {
	            PIE.attach(this);
	        });
	    }
	});
</script>
<?php wp_footer(); ?>
</body>
</html>