<div class="footer">
	<?php wp_nav_menu( array('menu' => 'footer', 'menu_class' => 'nav pull-right')); ?>
</div>
<script type="text/javascript">
	$(function () {
		$('.footer li a').append('<span class="plus-link">+</span>');
		if (window.PIE) {
	        $('.section-nav li a, .circle, .plus-link, .section3-circle, .solution-circle').each(function() {
	            PIE.attach(this);
	        });
	    }
	});
</script>
<?php wp_footer(); ?>
</body>
</html>