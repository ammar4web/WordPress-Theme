<?php

if (!function_exists('wpc_load_assets')) {
  function wpc_load_assets()
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
    // wp_enqueue_script('jquery');
    wp_enqueue_script('wpc_tether-script', $base . 'assets/js/tether.min.js', [], false, true);
    wp_enqueue_script('wpc_bootstrap-script', $base . 'assets/js/bootstrap.min.js', [], false, true);
    wp_enqueue_script('wpc_custom-script', $base . 'assets/js/custom.js', [], false, true);
  }
  // add_action()
  // wp_enqueue_scripts
  add_action('wp_enqueue_scripts', 'wpc_load_assets');
} else {
  // notify the admin by sending emali for example
}

// لتبديل الجي كويري المستخدمة ب وورد برس
// غير آمنة من حدوث مشاكل
// if (!function_exists('wpc_redefine_assets')) {
//   function wpc_redefine_assets()
//   {
//     //  wp_deregister_script() // تقوم بإلغاء التعريف
//     wp_deregister_script('jquery');
//     //  wp_register_script() // تقوم بالتعريف
//     wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], '3.5.1');
//   }
//   add_action('wp_enqueue_scripts', 'wpc_redefine_assets');
// }

if (!function_exists('wpc_setup')) {

  //We write this function 
  function wpc_setup()
  {
    // add_theme_support wordPress function
    // post-thumbnails from WordPress
    add_theme_support('post-thumbnails');
  }
  // add_action wordPress function
  // after_setup_theme from WordPress
  add_action('after_setup_theme', 'wpc_setup');
}
