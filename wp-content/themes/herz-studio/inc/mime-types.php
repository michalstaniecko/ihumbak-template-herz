<?php


// function of new_update_mime()
add_filter('mime_types', 'new_update_mime');
// $existing_mimes from the list exist
function new_update_mime ( $existing_mimes = array() ) {
  $existing_mimes['ogv'] = 'application/octet-stream';
  return $existing_mimes;
}
function my_theme_output_upload_mimes() {
  var_dump( wp_get_mime_types() );
}
add_action( 'template_redirect', 'my_theme_output_upload_mimes' );