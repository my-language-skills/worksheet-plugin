<?php

/**
 * admin colum extension
 *
 * This file is responsible for generating all the new columns in admin.php (post catalog page in admin area)
 *
 *
 * @link https://www.smashingmagazine.com/2017/12/customizing-admin-columns-wordpress/
 * @link https://premium.wpmudev.org/blog/wordpress-admin-tables/
 * @link https://www.tweaking4all.com/web-development/wordpress/wordpress-adding-custom-columns-in-the-posts-admin-page/
 *
 * @package worksheet-plugin
 * @since xxxx
 */

defined ("ABSPATH") or die ("Action denied!");


// /**
//  * Create the columns title
//  *
//  * @since    X.0
//  */



add_filter( 'manage_posts_columns', 'worksheet_filter_posts_columns' );
function worksheet_filter_posts_columns( $columns ) {
  $columns['image'] = __( 'Image' );
  $columns['h5p'] = __( 'h5p', 'worksheet' );
  $columns['watu'] = __( 'watu', 'worksheet' );
  $columns['audio-rec'] = __( 'audio-rec', 'worksheet' );
  $columns['url'] = __( 'url', 'worksheet' );
  $columns['exceropt'] = __( 'excerpt', 'worksheet' );

  return $columns;
}



//Reorder the columns so that "Image" is first.
// add_filter( 'manage_posts_columns', 'worksheet_columns' );
// function worksheet_columns( $columns ) {
//     $columns = array(
//       'cb' => $columns['cb'],
//       'image' => __( 'Image' ),
//       'title' => __( 'Title' ),
//       'h5p' => __( 'h5p', 'worksheet' ),
//       'watu' => __( 'watu', 'worksheet' ),
//     );
//
//   return $columns;
// }





// Populating Columns
add_action( 'manage_posts_custom_column', 'worksheet_column', 10, 2);
function worksheet_column( $column, $post_id ) {
  // Image column
  if ( 'image' === $column ) {
    echo get_the_post_thumbnail( $post_id, array(80, 80) );
  }


  // h5p column
  if ( 'h5p' === $column ) {
    $key_worksheet_book_h5p_id_field = get_post_meta( $post_id, 'worksheet_book_h5p_id_field', true ); //output value: URL
    if ( !empty( $key_worksheet_book_h5p_id_field ) ) {
      ?> <a target="_blank" href="https://worksheet.books4languages.com/english/wp-admin/admin-ajax.php?action=h5p_embed&id=<?php echo $key_worksheet_book_h5p_id_field?>"><?php _e( ' h5p ' . $key_worksheet_book_h5p_id_field , 'pressbooks-book' );
    }
    else {
      _e('No h5p');
    }
  }


  // watu column
  if ( 'watu' === $column ) {
    $key_worksheet_topic_watu_id_field = get_post_meta( $post_id, 'worksheet_topic_watu_id_field', true ); //output value: URL
    if ( !empty( $key_worksheet_topic_watu_id_field ) ) {
      ?> <a target="_blank" href="https://worksheet.books4languages.com/english/wp-admin/admin.php?page=watupro_exams&cat_id=-1&title&comments&exam_id=<?php echo $key_worksheet_topic_watu_id_field?>&filter_tag"><?php _e( ' watu ' . $key_worksheet_topic_watu_id_field , 'pressbooks-book' );
    }
    else {
      _e('No watu');
    }
  }
  // audio recorder column
  if ( 'audio-rec' === $column ) {
    $key_worksheet_audio_recorder_h5p_id_field = get_post_meta( $post_id, 'worksheet_audio_recorder_h5p_id_field', true ); //output value: URL
    if ( !empty( $key_worksheet_audio_recorder_h5p_id_field ) ) {
      echo $key_worksheet_audio_recorder_h5p_id_field;
    }
    else {
      _e('No audio-rec');
    }
  }

  // URL column
  if ( 'url' === $column ) {
    $key_worksheet_topic_url_field = get_post_meta( $post_id, 'worksheet_topic_url_field', true ); //output value: URL
    if ( !empty( $key_worksheet_topic_url_field ) ) {
      ?> <a target="_blank" href="<?php echo $key_worksheet_topic_url_field?>"><?php _e( 'topic', 'pressbooks-book' ); ?></a> <?php //the_title()
    }
    else {
      _e('No URL');
    }
  }



}
