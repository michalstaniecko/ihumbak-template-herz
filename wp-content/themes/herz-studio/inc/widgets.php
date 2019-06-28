<?php
add_action('widgets_init', 'herz_widgets_init');

function herz_widgets_init() {

  register_sidebar(array(
    'name' => 'Language Switch',
    'id' => 'herz_language',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' =>''
  ));
}