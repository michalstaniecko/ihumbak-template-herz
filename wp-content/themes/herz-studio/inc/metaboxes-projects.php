<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 24.10.18
 * Time: 10:34
 */

add_filter( 'rwmb_meta_boxes', 'metabox_projects_register' );
function metabox_projects_register( $meta_boxes ) {

  $meta_boxes[] = array(
    'id'         => 'project',
    'title'      => 'Project Details',
    'post_types' => 'project',
    'context'    => 'normal',
    'fields'     => array(
      array(
        'name'=> 'Select Type',
        'id' => 'type',
        'type'=>'select_advanced',
        'options' => array(
          'image' => 'Image',
          'video' => 'Upload Video',
          /*'youtube' => 'Youtube',
          'vimeo' => 'Vimeo'*/
        )
      ),
      array(
        'name' => 'Link to project',
        'id' => 'url',
        'type' => 'text'
      ),
      array(
        'name'=> 'Image Desktop',
        'id' => 'image',
        'type' => 'image_advanced',
        'max_file_uploads' => 1,
      ),
      array(

        'name'=> 'Image Mobile',
        'id' => 'image-mobile',
        'type' => 'image_advanced',
        'max_file_uploads' => 1,
      ),
      array(
        'name' => 'Youtube ID',
        'id' => 'youtube',
        'type' => 'text',
        'visible' => array('type','=','youtube')
      ),
      array(
        'name' => 'Vimeo ID',
        'id' => 'vimeo',
        'type' => 'text',
        'visible' => array('type','=','vimeo')
      ),
      array(
        'name' => 'Upload Video',
        'id' => 'video',
        'type' => 'file_advanced',
        'max_file_uploads'=> 1,
        'visible' => array('type', '=', 'video')
      )
    )
  );

  return $meta_boxes;
}