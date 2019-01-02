<?php

add_action( 'after_setup_theme', 'herz_studio_setup' );
function herz_studio_setup(){
load_theme_textdomain( 'herz-studio', get_template_directory() . '/languages' );
}