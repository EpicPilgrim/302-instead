<?php
  /*
Plugin Name: 302 Instead
Plugin URI:
Description: Send a 302 (temporary) redirect instead of 301 (permanent) for sites where shortlinks may change
Version: 1.0
Author: BrettR
Author URI:
  */

yourls_add_action('pre_redirect','temp_instead_function');
function temp_instead_function($args) {
  $url  = $args[0];
  $code = $args[1];
  if ($code == 302) {
    // Do nothing, redirect will now go through
  } else {
    // Redirect with 302 instead
    yourls_redirect($url,302);
  }
}
