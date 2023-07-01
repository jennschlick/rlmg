<?php

/**
 * Shortcodes
 */

// Large text shortcode
// Usage:
// [large type=color]Content[/large]

function rlmg_large_text($atts, $content) {
 extract(shortcode_atts(array(
     'type' => ""
 ), $atts));

 if ($type) {
     return '<div class="text-lead">' . do_shortcode($content) . '</div>';
 } else {
     return '<div class="text-large">' . do_shortcode($content) . '</div>';
 }
}

add_shortcode('large', 'rlmg_large_text');

// Blockquote shortcode
// Usage:
// [quote]Content[cite]Content[/cite][/quote]

function rlmg_shortcode_blockquote($attr, $content) {
  return '<blockquote>' . do_shortcode($content) . '</blockquote>';
}

add_shortcode('quote', 'rlmg_shortcode_blockquote');

function rlmg_shortcode_cite($attr, $content) {
  return '<cite>' . do_shortcode($content) . '</cite>';
}

add_shortcode('cite', 'rlmg_shortcode_cite');

// Carousel shortcode
// Usage:
// [carousel][item]Content[/item][/carousel]

function rlmg_shortcode_carousel($attr, $content) {
  return '<div class="owl-carousel owl-theme">' . do_shortcode($content) . '</div>';
}

add_shortcode('carousel', 'rlmg_shortcode_carousel');

function rlmg_shortcode_carousel_item($attr, $content) {
  return '<div class="item">' . $content . '</div>';
}

add_shortcode('item', 'rlmg_shortcode_carousel_item');

// Grid shortcode
// Usage:
// [row][column type=col-lg-9 offset=offset-lg-3]Content[/column][/row]

function rlmg_shortcode_row($attr, $content) {
  return '<div class="row">' . do_shortcode($content) . '</div>';
}

add_shortcode('row', 'rlmg_shortcode_row');

function rlmg_shortcode_column($atts, $content) {
  extract(shortcode_atts(array(
      'offset' => "",
      'width' => ""
  ), $atts));
  return '<div class="' . $offset . ' ' . $width . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('column', 'rlmg_shortcode_column');

// Fix empty <p> tags in shortcodes
function rlmg_shortcode_paragraph_fix( $content ) {
  // define your shortcodes to filter, '' filters all shortcodes
  $shortcodes = array( '' );
  foreach ( $shortcodes as $shortcode ) {
    $array = array (
      '<p>[' . $shortcode => '[' .$shortcode,
      '<p>[/' . $shortcode => '[/' .$shortcode,
      $shortcode . ']</p>' => $shortcode . ']',
      $shortcode . ']<br />' => $shortcode . ']'
    );
    $content = strtr( $content, $array );
  }
  return $content;
}

add_filter( 'the_content', 'rlmg_shortcode_paragraph_fix' );
