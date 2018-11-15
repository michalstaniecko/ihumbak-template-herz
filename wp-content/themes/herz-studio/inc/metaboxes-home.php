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
      ),
      'stones' => array(
        'label' => 'Stones'
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
      ),
      array(
        'id' => 'stones',
        'tab' => 'stones',
        'type' => 'group',

        'fields' => array(
          array(
            'id' => 'stone-left',
            'type' => 'group',
            'name' => 'Left Side',
            'clone' => true,
            'columns' => 6,
            'sort_clone' => true,

            'fields' => array(
              array(
                'id' => 'image',
                'name' => 'Image',
                'type' => 'image_advanced'
              ),
              array(
                'id' => 'top',
                'name' => 'Top',
                'description' => 'Percentage of page height',
                'type' => 'text',

              ),
              array(
                'id' => 'left',
                'name' => 'Left Container',
                'type' => 'text',
              ),
              array(
                'id' => 'left-image',
                'name' => 'Image position in container',
                'type' => 'text'
              ),
              array(
                'id' => 'scroll',
                'name' => 'Scroll',
                'type' => 'text',
                'step' => 'any'
              ),
              array(
                'id' => 'z-index',
                'name' => 'Layer Position',
                'type' => 'select_advanced',

                'options' => array(
                  'under' => 'Under',
                  'above' => 'Above'
                ),

                'std' => 'above'
              )
            )
          ),
          array(
            'id' => 'stone-right',
            'type' => 'group',
            'name' => 'Right Side',
            'clone' => true,
            'columns' => 6,
            'sort_clone' => true,

            'fields' => array(
              array(
                'id' => 'image',
                'name' => 'Image',
                'type' => 'image_advanced'
              ),
              array(
                'id' => 'top',
                'name' => 'Top',
                'type' => 'text',
                'description' => 'Percentage of page height',

              ),
              array(
                'id' => 'right',
                'name' => 'Right Container',
                'type' => 'text',
                'step' => 'any'
              ),
              array(
                'id' => 'right-image',
                'name' => 'Image position in container',
                'type' => 'text'
              ),
              array(
                'id' => 'scroll',
                'name' => 'Scroll',
                'type' => 'text',
                'step' => 'any'
              ),
              array(
                'id' => 'z-index',
                'name' => 'Layer Position',
                'type' => 'select_advanced',

                'options' => array(
                  'under' => 'Under',
                  'above' => 'Above'
                ),

                'std' => 'above'
              )
            )
          )
        )
      )

    ),


  );

  return $meta_boxes;
}