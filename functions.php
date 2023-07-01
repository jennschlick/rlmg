<?php

/**
 * Load function partials from /functions/*.php
 * Source: https://gist.github.com/davejamesmiller/f9497c6607fb8dc192de
 */

// Load functions, shortcodes, and widgets.
$_dirs = array(
  TEMPLATEPATH . '/functions/*.php',
);

// Load admin functions.
if (is_admin())
  $_dirs[] = TEMPLATEPATH . '/admin/*.php';
  foreach ($_dirs as $_dir) {
    foreach (glob($_dir) as $_file) {
      require_once $_file;
    }
}
