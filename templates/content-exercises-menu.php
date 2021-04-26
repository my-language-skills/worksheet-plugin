<?php
//echo $data->section_title;
/**
* Exercises menu
*
* @since 0.1
*
*/

// Find the metafield vallues.
$key_worksheet_topic_watu_id_field = get_post_meta( get_the_ID(), 'worksheet_topic_watu_id_field', true );
$key_worksheet_book_h5p_id_field   = get_post_meta( get_the_ID(), 'worksheet_book_h5p_id_field',   true );

// Print the menu.
if ( is_singular()) { ?>
   <form method="post" onclick="gtag('event', 'view_info', {'event_category': 'information', 'event_label': 'show_info'});" action="<?php the_permalink()?>#learning"> <?php
   if ( !empty($key_worksheet_book_h5p_id_field)) {     // Check if the custom field has a value.
   ?> <input class="summaryblock1" type="submit" name="button_worksheet_book_h5p_id_field" aria-labelledby="buttonText1" value="Exercises"/> <?php
   }
   if ( !empty($key_worksheet_topic_watu_id_field)) {   // Check if the custom field has a value.
   ?> <input class="summaryblock2" type="submit" name="button_worksheet_topic_watu_id_field" aria-labelledby="buttonText2" value="Examination"/> <?php
   }
   ?> <input class="summaryblock3" type="submit" name="button_worksheet_info" aria-labelledby="buttonText3" value="Info"/>
  </form> <?php
 }
