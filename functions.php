<?php

if (!function_exists('wpc_load_assets')) {
  function  wpc_load_assets()
  {
    // get_template_directory_uri()
    $base = get_template_directory_uri() . '/';

    // wp_enqueue_style
    // Notes: wpc_ id a prifex
    wp_enqueue_style('wpc_bootstrap', $base . 'assets/css/bootstrap.css', [], false);
    wp_enqueue_style('wpc_fontsawesome', $base . 'assets/css/font-awesome.min.css', ['wpc_bootstrap'], false);
    wp_enqueue_style('wpc_template-style', $base . 'assets/style.css', [], false);
    wp_enqueue_style('wpc_template-responsive', $base . 'assets/css/responsive.css', [], false);
    wp_enqueue_style('wpc_template-colors', $base . 'assets/css/colors.css', [], false);

    // wp_enqueue_script
    wp_enqueue_script('wpc_jq-script', $base . 'assets/js/jquery.min.js', [], false, true);
    wp_enqueue_script('wpc_tether-script', $base . 'assets/js/tether.min.js', [], false, true);
    wp_enqueue_script('wpc_bootstrap-script', $base . 'assets/js/bootstrap.min.js', [], false, true);
    wp_enqueue_script('wpc_custom-script', $base . 'assets/js/custom.js', [], false, true);
  }
} else {
  // notify the admin by sending emali for example
}

// --------------------------------------------------------------------------------------------------------
// add_action()
// wp_enqueue_scripts
add_action('wp_enqueue_scripts', ' wpc_load_assets');
