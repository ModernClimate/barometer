<div class="footer">
	<?php wp_nav_menu( array('menu' => 'footer', 'menu_class' => 'nav pull-right')); ?>
</div>
<script type="text/javascript">
	$(function () {
		$('.footer li a').append('<span class="plus-link">+</span>');
	});
</script>
<?php wp_footer(); ?>
</body>
</html>