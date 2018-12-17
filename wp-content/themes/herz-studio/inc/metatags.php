<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 17.12.18
 * Time: 14:55
 */

add_action('wp_head', 'meta_description');
add_action('wp_head', 'favicon');

function meta_description() {
  echo '<meta type="description" content="'.get_bloginfo('description').'" />';
}

function favicon() {
  echo '<link rel="icon" href="'. HERZ_IMG .'/favicon.png" type="image/png" />';
}