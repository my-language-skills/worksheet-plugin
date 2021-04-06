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


// https://wordpress.stackexchange.com/questions/45901/passing-a-parameter-to-filter-and-action-functions/45920
// https://wordpress.stackexchange.com/questions/193852/hook-filter-after-the-content-on-a-specific-page
// https://wordpress.stackexchange.com/questions/44152/why-is-the-content-not-displaying-the-content







 // add_shortcode('b4l_test','b4l_test');


 // https://www.w3schools.com/w3css/w3css_tabulators.asp

 /**
  *
  * ADDED: Exercises menu
  * @link https://wordpress.org/support/topic/how-to-get-current-site-blog-id/
  * @link https://wordpress.stackexchange.com/questions/169306/check-if-is-on-child-page-of-a-particular-page
  * @since X.X
  *
  */

  function worksheet_exercises_menu() {

    $key_worksheet_topic_watu_id_field = get_post_meta( get_the_ID(), 'worksheet_topic_watu_id_field', true );
    $key_worksheet_book_h5p_id_field   = get_post_meta( get_the_ID(), 'worksheet_book_h5p_id_field',   true );


    // revision-topics-1-6 null-12/ is_single
    // $blog_id = get_current_blog_id();
    //( $blog_id != 23) && ( $blog_id != 24)


    if ( is_singular()) { ?>
       <form method="post" onclick="gtag('event', 'view_info', {'event_category': 'information', 'event_label': 'show_info'});" action="<?php the_permalink()?>#learning"> <?php
       if ( !empty($key_worksheet_book_h5p_id_field)) {     // Check if the custom field has a value.
       ?> <input class="summaryblock1" type="submit" name="button_worksheet_book_h5p_id_field" aria-labelledby="buttonText1" value="Exercises"/> <?php
       }
       if ( !empty($key_worksheet_topic_watu_id_field)) {     // Check if the custom field has a value.
       ?> <input class="summaryblock2" type="submit" name="button_worksheet_topic_watu_id_field" aria-labelledby="buttonText2" value="Examination"/> <?php
       }
       ?> <input class="summaryblock3" type="submit" name="button_worksheet_info" aria-labelledby="buttonText3" value="Info"/>
      </form> <?php
     }
  	}
  add_shortcode('exercises_menu','worksheet_exercises_menu');


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
    if ( isset($_POST['button_worksheet_book_h5p_id_field']) && !empty($key_worksheet_book_h5p_id_field)) {     // Check if the custom field has a value.
      ?> <style> .summaryblock1 {background-color:#bbb !important} </style>
      <h2 class="textbox__title">Exercises</h2> <br> <br>
      <?php echo do_shortcode( '[h5p id="' . $key_worksheet_book_h5p_id_field . '"]' ); ?>
      <p>External link to <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="https://worksheet.books4languages.com/english/wp-admin/admin-ajax.php?action=h5p_embed&id=<?php echo $key_worksheet_book_h5p_id_field?>"><?php _e( ' exercises ' . the_title() . ' (' . $key_worksheet_book_h5p_id_field . ')' , 'worksheet' ); ?></a>.</p> <br>
      <?php
    }

    else if ( isset($_POST['button_worksheet_topic_watu_id_field']) && !empty($key_worksheet_topic_watu_id_field)) {     // Check if the custom field has a value.
      ?> <style> .summaryblock2 {background-color:#bbb !important} </style>
      <h2 class="textbox__title">Examination</h2> <br> <br>
      <?php echo do_shortcode( '[watupro ' . $key_worksheet_topic_watu_id_field . ']' ); ?> <br>
      <?php
    }

    else if ( isset($_POST['button_worksheet_info'])) { //button_close
      ?> <style> .summaryblock3 {background-color:#bbb !important} </style>
      Thanks for your help. <br>
      <?php echo do_shortcode( '[infomenu]' );

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
      ?> <style> .summaryblock1 {background-color:#bbb !important} </style>
      <!-- <br>
      <h2 class="textbox__title">Exercises</h2>
      <br> -->
      <?php echo do_shortcode( '[h5p id="' . $key_worksheet_book_h5p_id_field . '"]' ); ?>
      <p>External link to <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="https://worksheet.books4languages.com/english/wp-admin/admin-ajax.php?action=h5p_embed&id=<?php echo $key_worksheet_book_h5p_id_field?>"><?php _e( the_title() . ' (' . $key_worksheet_book_h5p_id_field . ')' , 'worksheet' ); ?></a> exercises.</p>
      <br>
      <?php
      }
   }
}

add_shortcode('exercises','wallpress_exercises'); // Code to shorcode.
