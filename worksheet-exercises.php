<?php






/**
 *
 * H5P exercises integration
 * @internal https://open.books4languages.com/wp-content/themes/books4languages-book-child-theme-for-pressbooks/assets/js/h5p-resizer.js
 * @internal /worksheet.books4languages.com/wp-content/plugins/h5p
 * @internal https://github.com/Automattic/custom-metadata
 * @since 1.x
 *
 */

  /**
   *
   * Exercises section
   * @internal English
   * @link https://worksheet.books4languages.com/english/
   * @link https://books4languages.com/contribute/
   *
   * @since 1.x
   *
   */

function wallpress_exercises() {
$key_worksheet_audio_recorder_h5p_id_field = get_post_meta( get_the_ID(), 'worksheet_audio_recorder_h5p_id_field', true ); //output value: on
$key_worksheet_topic_watu_id_field = get_post_meta( get_the_ID(), 'worksheet_topic_watu_id_field', true );
$key_worksheet_book_h5p_id_field = get_post_meta( get_the_ID(), 'worksheet_book_h5p_id_field', true );
//Buttom creation
?>

<h2 class="textbox__title">Exercises</h2>
<br>
<br>
    <?php
    if ( isset($_POST['button_worksheet_book_h5p_id_field']) && !empty($key_worksheet_book_h5p_id_field)) {     // Check if the custom field has a value.
      ?>

      <?php echo do_shortcode( '[h5p id="' . $key_worksheet_book_h5p_id_field . '"]' ); ?>
      <p>External link to <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="https://worksheet.books4languages.com/english/wp-admin/admin-ajax.php?action=h5p_embed&id=<?php echo $key_worksheet_book_h5p_id_field?>"><?php _e( ' exercises ' . the_title() . ' (' . $key_worksheet_book_h5p_id_field . ')' , 'pressbooks-book' ); ?></a>.</p>

      <br>
      <?php
    }

    else if ( isset($_POST['button_worksheet_topic_watu_id_field']) && !empty($key_worksheet_topic_watu_id_field)) {     // Check if the custom field has a value.
      ?>

      <?php echo do_shortcode( '[watupro ' . $key_worksheet_topic_watu_id_field . ']' ); ?>
      <br>
      <?php
    }

    else if ( isset($_POST['button_close'])) {
      ?>
      Thanks for your help
      <br>
      <?php

echo do_shortcode( '[infomenu]' );


    /**
     *
     * Custom metaboxes data output
     * @internal English
     * @link https://worksheet.books4languages.com/english/
     * @link https://books4languages.com/contribute/
     *
     * @since 1.x
     *
     */

    if ( current_user_can('editor') || current_user_can('administrator')){
          ?><br> worksheet_audio_recorder_h5p_id_field: <?php
          echo $value = get_metadata( 'post', get_the_ID(), 'worksheet_audio_recorder_h5p_id_field', true ); // Returns post metadata value for the field 'featured'
          ?><br> worksheet_topic_watu_id_field: <?php
          echo $value = get_metadata( 'post', get_the_ID(), 'worksheet_topic_watu_id_field', true ); // Returns post metadata value for the field 'featured'
          ?><br> worksheet_book_h5p_id_field: <?php
          echo $value = get_metadata( 'post', get_the_ID(), 'worksheet_book_h5p_id_field', true ); // Returns post metadata value for the field 'featured'
          ?><br><?php
            }
    }

else {
  // Default content

      if ( !empty($key_worksheet_book_h5p_id_field)) {
      ?>
      <!-- <br>
      <h2 class="textbox__title">Exercises</h2>
      <br> -->
      <?php echo do_shortcode( '[h5p id="' . $key_worksheet_book_h5p_id_field . '"]' ); ?>
      <p>External link to <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="https://worksheet.books4languages.com/english/wp-admin/admin-ajax.php?action=h5p_embed&id=<?php echo $key_worksheet_book_h5p_id_field?>"><?php _e( ' exercises ' . the_title() . ' (' . $key_worksheet_book_h5p_id_field . ')' , 'pressbooks-book' ); ?></a>.</p>

      <br>
      <?php
      }
   }
}

  add_shortcode('exercises','wallpress_exercises'); // Code to shorcode.
