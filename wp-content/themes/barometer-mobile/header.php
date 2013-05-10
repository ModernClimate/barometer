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
<!--[if IE 9]>
<style>
  .brand {
    width: 120px;
  }
  .section, .blue-overlay, .contact- {
    min-height: 750px !important;
  }
</style>
<![endif]-->
<!--[if IE 8]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/PIE.js"></script>
<style>
  .brand {
    width: 120px;
  }
  .section, .blue-overlay, .contact- {
    min-height: 750px !important;
  }
  .footer a {
    margin-top: -9px;
  }
  .footer a .plus-link {
    float: none;
    display: inline-block;
    position: relative;
    margin-left: 10px;
    top: 8px;
    left: auto;
  } 
  .facebook-link {
    background: url('css/imgs/facebook-logo.png') no-repeat;
    height: 26px;
    width: 26px;
  }
  .twitter-link {
    background: url('css/imgs/twitter-logo.png') no-repeat;
    height: 26px;
    width: 26px;
  }
  .linkedin-link {
    background: url('css/imgs/linked-in-logo.png') no-repeat;
    height: 26px;
    width: 26px;
  }
  .small-stars {
    min-height: 1000px;
  }
  .contact-page h2 {
    line-height: 55px;
  }
  .contact-page .top {
    padding: 20px 0;
  }
  .contact-page .bottom {
    height: 80px;
    bottom: auto;
    top: 570px;
  }
  .contact-page .contact-circle {
    top: 200px;
  }
  .contact-page {
    min-height: 700px;
  }
</style>
<![endif]-->
</head>

<body <?php body_class(); if (is_page('about-us')) echo 'style="background: #295e9f;"';?>>

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