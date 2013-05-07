<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
<!--[if IE]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/PIE.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/css/imgs/logo.png" style="width:75px;"></a>
      <div class="nav-collapse collapse">
        <?php
        	wp_nav_menu(array(
        		'menu' => 'Main',
        		'menu_class' => 'nav pull-right'
        	));
        ?>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>