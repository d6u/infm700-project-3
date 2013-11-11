<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|'); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">
  <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
  <script src="<?= get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyA9TKtktEN4RfwW36zle63skJAlvjmqb5U&sensor=true"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>
<body>

<!--Facebook plugin code-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=756034541088705";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="ly-outer-wrap">
  <div class="ly-inner-wrap"><!-- END in footer.php -->

    <header class="se-navbar">
      <!-- Brand -->
      <div class="se-navbar-brand">
        <a href="/" class="se-navbar-brand-logo"><img src="<?= get_template_directory_uri(); ?>/images/patterson-logo.gif" alt=""></a>
        <a href="#" id="js-show-menu" class="se-navbar-brand-show-menu" id="js-navbar-toggle-menu">
          <img src="<?= get_template_directory_uri(); ?>/images/show-menu-button-icon.png" alt="">
        </a>
        <div class="se-navbar-brand-title">
          <a href="/" class="">Friends of Patterson Park</a>
        </div>
        <ul class="se-navbar-brand-social-links">
          <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/facebook-icon.png" alt=""></a></li>
          <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/rss-icon.png" alt=""></a></li>
          <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/email-icon.png" alt=""></a></li>
        </ul>
      </div>
    </header>

    <nav class="se-navbar-menus">
      <!-- Menus -->
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container'      => false,
        'menu_class'     => 'se-navbar-menu-top',
        'depth'          => 2,
        'walker'         => new Header_Menu_Walker
      )); ?>

      <?php wp_nav_menu(array(
        'theme_location' => 'header-action-buttons',
        'container'      => false,
        'menu_class'     => 'se-navbar-menu-lower',
        'depth'          => 1
      )); ?>
    </nav>

    <!-- TODO: functions for menu behavior on mobile device move to seperate file when finish-->
    <script>
      $(function() {
        // show/hide menu
        $('#js-show-menu').on('click', function(event) {
          $('.ly-inner-wrap').toggleClass('pushed');
        });

        // show sub menu
        $('.se-navbar-menus').on('click', '.se-navbar-menu-top > li > a', function() {
          if ($(this).next('ul.sub-menu').length) {
            $(this).next('ul.sub-menu').toggleClass('selected');
            $('.ly-inner-wrap').toggleClass('pushed-two-level');
            return false;
          }
        })

        // hide sub menu
        $('.se-navbar-menus').on('click', '.sub-menu-back-btn > a', function() {
          $(this).parents('.sub-menu.selected').removeClass('selected');
          $('.ly-inner-wrap').removeClass('pushed-two-level');
          return false;
        });
      });
    </script>
