<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--
UNCOMMENT THIS OUT TO USE WITH BOOTSTRAP CSS IN STYLES.CSS
<meta name="viewport" content="width=device-width, initial-scale=1.0">
-->
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
        <ul class="nav pull-right">
          <li><a class="unified-it-page" href="/">Unified IT</a></li>
	      <li><a class="solutions-page" href="/solutions">Solutions</a></li>
	      <li><a class="about-us-page" href="/about-us">About Us</a></li>
	      <li><a class="contact-page" href="/contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>