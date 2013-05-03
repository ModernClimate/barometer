<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7">  <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width">

  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/vendor/normalize.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/vendor/main.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/vendor/font-awesome.min.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/vendor/bootstrap.min.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/vendor/nova.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/layout.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>

  <!--[if IE]>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/ie.css") ?>
  <![endif]--> 

  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."script/vendor/modernizr-2.6.1.min.js") ?>

  <!-- <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> -->

  <?php wp_head(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."script/vendor/jquery.color-2.1.1.min.js") ?>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>script/vendor/jquery-1.9.1.min.js"><\/script>')</script>

</head>

<body <?php body_class(); ?>>

<div class="top-nav" role="banner">
  <div class="nav-inner">
    <a href="<?php echo get_option('home'); ?>/" class="cltxt">
      <?php bloginfo('name'); ?>
    </a>
    <ul>
      <li><a class="unified-it-page" href="/">Unified IT</a></li>
      <li><a class="solutions-page" href="/solutions">Solutions</a></li>
      <li><a class="about-us-page" href="/about-us">About Us</a></li>
      <li><a class="contact-page" href="/contact">Contact</a></li>
    </ul>
  </div>
</div>

