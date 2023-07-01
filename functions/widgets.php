<?php

/**
 * Widgets
 */

function rlmg_register_widgets() {
	register_sidebar(
    array(
  		'name'          => 'Footer contact',
  		'id'            => 'footer_contact',
  		'before_widget' => '',
  		'after_widget'  => '',
  		'before_title'  => '',
  		'after_title'   => ''
  	)
  );
	register_sidebar(
    array(
  		'name'          => 'Footer colophon',
  		'id'            => 'footer_colophon',
  		'before_widget' => '',
  		'after_widget'  => '',
  		'before_title'  => '',
  		'after_title'   => ''
  	)
  );
	register_sidebar(
    array(
  		'name'          => 'Footer social links',
  		'id'            => 'footer_social',
  		'before_widget' => '',
  		'after_widget'  => '',
  		'before_title'  => '',
  		'after_title'   => ''
  	)
  );
}
add_action( 'widgets_init', 'rlmg_register_widgets' );
