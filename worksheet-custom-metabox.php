<?php

/**
 * h5p exercises integration
 *
 * This file is responsible for generating all the required elements with h5p exercises integration
 *
 *
 * @link worksheed.books4languages.com
 *
 * @package extensions-for-pressbooks/efpb-h5p
 * @since xxxx
 */

// defined ("ABSPATH") or die ("Action denied!");


// /**
//  * Create the metabox 'h5p' for Chapter
//  *
//  * @since    X.0
//  */

add_action( 'custom_metadata_manager_init_metadata', 'x_init_custom_fields' );

function x_init_custom_fields() {

// adds a new group to the test post type
x_add_metadata_group( 'worksheet_exercises_meta_box', 'post', array(
  'label' => 'Exercises'
) );

// adds a number field in the first group (with no min/max)
x_add_metadata_field( 'worksheet_topic_watu_id_field', 'post', array(
    'group' => 'worksheet_exercises_meta_box',
    'field_type' => 'number',
    'label' => 'Topic examination ID',
    'description' => 'This field It\'s the id of the watu exercise.', // description for the field
    'required_cap' => 'remove_users',

  ) );

// h5p id
x_add_metadata_field( 'worksheet_book_h5p_id_field', 'post', array(
    'group' => 'worksheet_exercises_meta_box',
    'field_type' => 'number',
    'label' => 'H5p Book Exercise ID',
    'description' => 'This field It\'s the id of the h5p exercise at Book.', // description for the field
    'required_cap' => 'remove_users',
  ) );

}



// /**
//  * Create the metabox for links
//  *
//  * @since    X.0
//  */

add_action( 'custom_metadata_manager_init_metadata', 'x_init_custom_fields2' );

function x_init_custom_fields2() {

// adds a new group to the test post type
x_add_metadata_group( 'worksheet_url_meta_box', 'post', array(
  'label' => 'External links'
) );
x_add_metadata_field( 'worksheet_topic_url_field', 'post', array(
    'group' => 'worksheet_url_meta_box',
    'field_type' => 'text',
    'label' => 'Source book url',
    'description' => 'This field is the url to the source page of the book.', // description for the field
    'required_cap' => 'remove_users',
  ) );
}



// /**
//  * Create the metabox 'h5p' for Activities
//  *
//  * @since    X.0
//  */

add_action( 'custom_metadata_manager_init_metadata', 'x_init_custom_fields3' );

function x_init_custom_fields3() {

// adds a new group to the test post type
x_add_metadata_group( 'worksheet_activities_meta_box', 'post', array(
  'label' => 'Activities'
) );

// h5p id
// adds a number field in the first group (with no min/max)
x_add_metadata_field( 'worksheet_speaking_h5p_id_field', 'post', array(
    'group' => 'worksheet_activities_meta_box',
    'field_type' => 'number',
    'label' => 'H5P Speaking activity ID',
    'description' => 'This field It\'s the id of the Speaking activity.', // description for the field
    'required_cap' => 'remove_users',
  ) );

// h5p id
// adds a number field in the first group (with no min/max)
x_add_metadata_field( 'worksheet_writing_h5p_id_field', 'post', array(
    'group' => 'worksheet_activities_meta_box',
    'field_type' => 'number',
    'label' => 'H5P Writing activity ID',
    'description' => 'This field It\'s the id of the Writing activity.', // description for the field
    'required_cap' => 'remove_users',
  ) );

  // h5p id
  // adds a number field in the first group (with no min/max)
  x_add_metadata_field( 'worksheet_reading_h5p_id_field', 'post', array(
      'group' => 'worksheet_activities_meta_box',
      'field_type' => 'number',
      'label' => 'H5P Reading activity ID',
      'description' => 'This field It\'s the id of the Reading activity.', // description for the field
      'required_cap' => 'remove_users',
    ) );

    // h5p id
    // adds a number field in the first group (with no min/max)
    x_add_metadata_field( 'worksheet_listening_h5p_id_field', 'post', array(
        'group' => 'worksheet_activities_meta_box',
        'field_type' => 'number',
        'label' => 'H5P Listening activity ID',
        'description' => 'This field It\'s the id of the Listening activity.', // description for the field
        'required_cap' => 'remove_users',
      ) );
}




// /**
//  * Create the metabox 'h5p' for Activities
//  *
//  * @since    X.0
//  */

add_action( 'custom_metadata_manager_init_metadata', 'x_init_custom_fields4' );

function x_init_custom_fields4() {

// adds a new group to the test post type
x_add_metadata_group( 'worksheet_extended_exercises_meta_box', 'post', array(
  'label' => 'Extended exercises'
) );

x_add_metadata_field( 'worksheet_audio_recorder_h5p_id_field', 'post', array(
    'group' => 'worksheet_extended_exercises_meta_box',
    'field_type' => 'checkbox',
    'label' => 'Activate Audio Recorder',
    'description' => 'This field activate the students Audio recoreder in the topic.', // description for the field
    'required_cap' => 'remove_users',
  ) );

// h5p id
// adds a number field in the first group (with no min/max)
x_add_metadata_field( 'worksheet_extended_exercises_form_h5p_id_field', 'post', array(
    'group' => 'worksheet_extended_exercises_meta_box',
    'field_type' => 'number',
    'label' => 'H5p Form Exercise ID',
    'description' => 'This field It\'s the id of the h5p exercise about the Form.', // description for the field
    'required_cap' => 'remove_users',
  ) );

// h5p id
// adds a number field in the first group (with no min/max)
x_add_metadata_field( 'worksheet_extended_exercises_use_h5p_id_field', 'post', array(
    'group' => 'worksheet_extended_exercises_meta_box',
    'field_type' => 'number',
    'label' => 'H5P Use Exercise ID',
    'description' => 'This field It\'s the id of the h5p exercise about the Use.', // description for the field
    'required_cap' => 'remove_users',
  ) );

  // h5p id
  // adds a number field in the first group (with no min/max)
  x_add_metadata_field( 'worksheet_extended_exercises_wordsearch_h5p_id_field', 'post', array(
      'group' => 'worksheet_extended_exercises_meta_box',
      'field_type' => 'number',
      'label' => 'H5P WordSearch activity ID',
      'description' => 'This field It\'s the id of the WordSearch activity.', // description for the field
      'required_cap' => 'remove_users',
    ) );


}
