<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 25.09.18
 * Time: 21:48
 */

class Repeater {


  public function __construct( $components ) {
    add_filter( 'rwmb_meta_boxes', array( $this, 'components_register' ), 100 );

    $this->components = $components;

  }


  function components_register( $meta_boxes ) {
    $prefix = 'repeater_';

    $meta_boxes[] = array(
      'id'         => 'components',
      'title'      => 'Components',
      'post_types' => 'page',
      'context'    => 'normal',
      'fields'     => array(
        array(

          'id'          => 'group',
          'type'        => 'group',
          'clone'       => true,
          'sort_clone'  => true,
          'collapsible' => true,

          'fields' => array(
            array(
              'id'   => 'select',
              'type' => 'select_advanced',

              'options' => array(
                'one-column'                => 'One Column',
                'three-columns-with-titles' => 'Three Columns with Titles',
                'three-columns-one-title'   => 'Three Columns one Title'
              )
            ),
            array(
              'id'   => 'component',
              'type' => 'group',

              'fields' => array(

                $this->components['one-column'],
                $this->components['three-columns-with-titles'],
                $this->components['three-columns-one-title']
              )
            ),

          )
        ),

      ),


    );

    return $meta_boxes;
  }
}

$components['one-column'] =
  array(
    'name' => 'One Column',
    'id'   => 'one-column',
    'type' => 'group',

    'fields'  => array(
      array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text'
      ),

      array(
        'name' => 'Lead',
        'id' => 'lead',
        'type' => 'textarea',
      )
    ),
    'visible' => array( 'select', '=', 'one-column' )
  );

$components['three-columns-with-titles'] = array(
  'name' => 'Three Columns with Titles',
  'id'   => 'three-columns-with-titles',
  'type' => 'group',

  'fields'  => array(
    array(
      'name' => 'Columns',
      'id'   => 'columns',
      'type' => 'group',
      'clone'=> true,

      'fields' => array(
        array(
          'name' => 'Title',
          'id' => 'title',
          'type' => 'text'
        ),
        array(
          'name' => 'Text',
          'id' => 'text',
          'type' => 'textarea',
        )
      )
    )
  ),
  'visible' => array( 'select', '=', 'three-columns-with-titles' )
);
$components['three-columns-one-title'] = array(
  'name' => 'Three Columns One Title',
  'id'   => 'three-columns-one-title',
  'type' => 'group',

  'fields'  => array(
    array(
      'name' => 'Title',
      'id' => 'title',
      'type' => 'text'
    ),
    array(
      'name' => 'Columns',
      'id'   => 'columns',
      'type' => 'group',
      'clone'=> true,

      'fields' => array(

        array(
          'name' => 'Text',
          'id' => 'text',
          'type' => 'textarea',
        )
      )
    )
  ),
  'visible' => array( 'select', '=', 'three-columns-one-title' )
);


new Repeater( $components );
