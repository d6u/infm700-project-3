<?php

// Load CSS into Templates
//
function theme_styles() {
  wp_enqueue_style('default', get_template_directory_uri().'/style.css');
  wp_enqueue_style('main',    get_template_directory_uri().'/css/main.css');
  wp_enqueue_style('dodge',   get_template_directory_uri().'/css/dodge_mod_bootstrap.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');


// Load JavaScript into Templates
//
function theme_js() {
  // register
  wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr-2.6.2.min.js');
  wp_register_script('google_map', '//maps.googleapis.com/maps/api/js?key=AIzaSyA9TKtktEN4RfwW36zle63skJAlvjmqb5U&sensor=true', array(), '', true);
  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
  wp_register_script('main', get_template_directory_uri().'/js/main.js', array('jquery', 'bootstrap', 'google_map'), '', true);
  wp_register_script('page-event', get_template_directory_uri().'/js/page-event.js', array('jquery', 'google_map'), '', true);

  // insert
  wp_enqueue_script('modernizr');
  wp_enqueue_script('main');
  if (is_page_template('page-event.php')) {
    wp_enqueue_script('page-event');
  }
}
add_action('wp_enqueue_scripts', 'theme_js');


// Enable Menus
//
add_action('init', 'register_my_menu');
function register_my_menu() {
  register_nav_menus(
    array(
      'header-menu'           => __('Header Menu'),
      'header-action-buttons' => __('Header Action Buttons')
    )
  );
}

// Add back button for header-menu
//
class Header_Menu_Walker extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu\">\n";
    $output .= "$indent\t<li class=\"sub-menu-back-btn menu-item\"><a href=\"#\">".__('Back', 'patterson')."</a></li>\n";
  }
}


// Enable feature image for both posts and pages
//
add_theme_support('post-thumbnails');


// For internationalization
// Source: http://wordpress.org/support/topic/plugin-polylang-how-to-internationalize-a-theme
function setup() {
	load_theme_textdomain('patterson');
}
add_action( 'after_setup_theme', 'setup' );


// Widgetize Footer
//
function create_widget($name, $id, $description) {
  register_sidebar(array(
    'name'          => __($name, 'patterson'),
    'id'            => $id,
    'description'   => $description,
    'before_widget' => '<div class="se-footer-widget-wrap">',
    'after_widget'  => '</div>',
    'before_title'  => '<header class="se-footer-section-header">',
    'after_title'   => '</header>'
  ));
}

create_widget('Footer Left'  , 'footer_left'  , 'Display content in first column of footer.');
create_widget('Footer Middle', 'footer_middle', 'Display content in middle column of footer.');
create_widget('Footer Right' , 'footer_right' , 'Display content in last column of footer.');


// Theme Option Page in Admin Side
//
// function wppatternson_park_menu() {
//   add_options_page('Patterson Park Settings', 'Social Network', 'manage_options', 'wppatternson-park', 'wppatternson_park_page');
// }
// add_action('admin_menu', 'wppatternson_park_menu');

// function wppatternson_park_page() {
//   if (!current_user_can('manage_options')) {
//     wp_die('You do not have sufficient permissions to access this page.');
//   }
//   echo '<p>Welcome to our plugin page!</p>';
// }
