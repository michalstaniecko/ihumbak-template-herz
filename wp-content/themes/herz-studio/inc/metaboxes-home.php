<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 24.10.18
 * Time: 09:49
 */


add_filter( 'rwmb_meta_boxes', 'metabox_home_register' );
function metabox_home_register( $meta_boxes ) {

  $meta_boxes[] = array(
    'id'         => 'home',
    'title'      => 'Home',
    'post_types' => 'page',
    'context'    => 'normal',
    'tabs'      => array(
      'section-1' => array(
        'label' => 'Section 1',
      ),
      'section-2'  => array(
        'label' => 'Section 2',
      ),
      'section-3'    => array(
        'label' => 'Section 3',
      ),
      'logos' => array(
        'label' => 'Logos'
      )
    ),
    'fields'     => array(
      array(
        'id'     => 'section-1',
        'tab' => 'section-1',
        'type'   => 'group',
        'fields' => array(
          array(
            'name' => 'Title',
            'id'   => 'title',
            'type' => 'text'
          ),

          array(
            'name' => 'Lead',
            'id'   => 'lead',
            'type' => 'textarea',
          )
        )
      ),
      array(
        'id'     => 'section-2',
        'tab'=>'section-2',
        'type'   => 'group',
        'fields' => array(
          array(
            'name'      => 'Columns',
            'id'        => 'columns',
            'type'      => 'group',
            'clone'     => true,
            'max_clone' => 3,
            'fields'    => array(
              array(
                'name' => 'Title',
                'id'   => 'title',
                'type' => 'text'
              ),
              array(
                'name'   => 'Features List',
                'id'     => 'list',
                'type'   => 'group',
                'clone'  => true,
                'fields' => array(
                  array(
                    'name' => 'Feature',
                    'id'   => 'feature',
                    'type' => 'text'
                  )

                )
              )
            )

          )
        )
      ),
      array(
        'id'     => 'section-3',
        'tab'=>'section-3',
        'type'   => 'group',
        'fields' => array(
          array(
            'name' => 'Title',
            'id'   => 'title',
            'type' => 'text',
          ),
          array(
            'name'      => 'Columns',
            'id'        => 'columns',
            'type'      => 'group',
            'clone'     => true,
            'max_clone' => 3,
            'fields'    => array(
              array(
                'name' => 'Text',
                'id'   => 'text',
                'type' => 'textarea',
              )
            )
          )
        )
      ),
      array(
        'id' => 'logos',
        'tab' => 'logos',
        'type' => 'image_advanced',
      )

    ),


  );

  return $meta_boxes;
}