<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 22.10.18
 * Time: 15:29
 */

add_action('wp_enqueue_scripts', 'herz_enqueue_scripts');

function herz_enqueue_scripts() {
  wp_deregister_script('jquery');

  wp_enqueue_script('vendors', get_stylesheet_directory_uri().'/js/vendors.js', null, null);
  wp_enqueue_script('main', get_stylesheet_directory_uri().'/js/main.js', false, null, true);
  wp_enqueue_style('main', get_stylesheet_directory_uri().'/css/main.css',false, null);
}