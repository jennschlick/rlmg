<?php

/**
 * Styles and scripts
 */

function rlmg_styles_scripts() {
  // Enqueue global styles
  wp_enqueue_style('rlmg-styles', get_template_directory_uri() . '/css/style.css', null, null, 'all');

  // Enqueue global scripts
  wp_enqueue_script('rlmg-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', '', '1.0', false);
  wp_enqueue_script('rlmg-isotopeLibrary', get_template_directory_uri() . '/js/isotope.pkgd.min.js', '', '1.0', true);
  wp_enqueue_script('rlmg-imagesLoaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', '', '1.0', true);
  wp_enqueue_script('rlmg-isotope', get_template_directory_uri() . '/js/isotope.js', '', '1.0', true);
  wp_enqueue_script('rlmg-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', '', '1.0', true);
  wp_enqueue_script('rlmg-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', '', '1.0', true);
  wp_enqueue_script('rlmg-pushy', get_template_directory_uri() . '/js/pushy.min.js', '', '1.0', true);
  wp_enqueue_script('rlmg-expand', get_template_directory_uri() . '/js/expand.js', '', '1.0', true);
  wp_enqueue_script('rlmg-fluidvids', get_template_directory_uri() . '/js/fluidvids.js', '', '1.0', true);
  wp_enqueue_script('rlmg-scripts', get_template_directory_uri() . '/js/scripts.js', '', '1.0', true);
}
add_action('wp_enqueue_scripts', 'rlmg_styles_scripts');
