<?php

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
    $output .= "$indent\t<li class=\"sub-menu-back-btn menu-item\"><a href=\"#\">Back</a></li>\n";
  }
}
