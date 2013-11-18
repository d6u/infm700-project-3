<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body>
<?php // Facebook plugin code ?>
<div id="fb-root"></div>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=756034541088705";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


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
          <li><a href="<?php echo get_option('wp_patterson_facebook_url'); ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/facebook-icon.png" alt=""></a></li>
          <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/social-media-icons/rss-icon.png" alt=""></a></li>
          <li class="se-navbar-brand-social-newsletter">
            <form action="">
              <input type="email" placeholder="<?php _e('Email', 'patterson'); ?>" class="form-control input-sm">
              <input type="submit" class="btn btn-success btn-sm" value="<?php _e('Subscribe', 'patterson'); ?>">
            </form>
          </li>
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
