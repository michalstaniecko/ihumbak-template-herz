<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 22.10.18
 * Time: 15:29
 */

add_theme_support( 'title-tag' );

define('HERZ_IMG',get_stylesheet_directory_uri().'/img');

add_action('wp_enqueue_scripts', 'herz_enqueue_scripts');

function herz_enqueue_scripts() {
  wp_deregister_script('jquery');

  $main_css_ver = filemtime(get_template_directory().'/css/main.css');
  $main_js_ver = filemtime(get_template_directory().'/js/main.js');

  wp_enqueue_script('vendors', get_stylesheet_directory_uri().'/js/vendors.js', null, null);
  wp_enqueue_script('youtube-api', 'https://www.youtube.com/iframe_api', false, null, true);
  wp_enqueue_script('main', get_stylesheet_directory_uri().'/js/main.js', false, $main_js_ver, true);
  wp_enqueue_style('main', get_stylesheet_directory_uri().'/css/main.css',false, $main_css_ver);

}

//include get_template_directory().'/metabox-repeater/metabox-repeater.php';

include get_template_directory().'/inc/metaboxes-home.php';
include get_template_directory().'/inc/metaboxes-projects.php';
include get_template_directory().'/inc/post-type-projects.php';
include get_template_directory().'/inc/analytics.php';
include get_template_directory().'/inc/metatags.php';
include get_template_directory().'/inc/after-setup-theme.php';
//include get_template_directory().'/inc/mime-types.php';