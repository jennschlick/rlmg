<?php

/**
 * Menus
 */

function rlmg_register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'rlmg_register_menus' );

function rlmg_add_menu_class($ulclass) {
  return preg_replace('/<a /', '<a class="menu-item"', $ulclass);
}
add_filter('wp_nav_menu','rlmg_add_menu_class');
