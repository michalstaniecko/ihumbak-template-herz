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
        'type'=>'group',
        'visible' => array('type', '=', 'video'),
        'fields' => array(
          array(

            'name' => 'Desktop WEBM',
            'id' => 'video-d-webm',
            'type' => 'file_advanced',
            'max_file_uploads'=> 1,
          ),
          array(

            'name' => 'Desktop MP4',
            'id' => 'video-d-mp4',
            'type' => 'file_advanced',
            'max_file_uploads'=> 1,
          ),
          array(

            'name' => 'Desktop OGV',
            'id' => 'video-d-ogv',
            'type' => 'file_advanced',
            'max_file_uploads'=> 1,
          ),
          array(

            'name' => 'Mobile WEBM',
            'id' => 'video-m-webm',
            'type' => 'file_advanced',
            'max_file_uploads'=> 1,
          ),
          array(

            'name' => 'Mobile MP4',
            'id' => 'video-m-mp4',
            'type' => 'file_advanced',
            'max_file_uploads'=> 1,
          ),
          array(

            'name' => 'Mobile OGV',
            'id' => 'video-m-ogv',
            'type' => 'file_advanced',
            'max_file_uploads'=> 1,
          )
        )
      ),
    )
  );

  return $meta_boxes;
}