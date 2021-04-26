<?php

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

$key_worksheet_audio_recorder_h5p_id_field = get_post_meta( get_the_ID(), 'worksheet_audio_recorder_h5p_id_field', true ); //output value: on
$key_worksheet_topic_watu_id_field = get_post_meta( get_the_ID(), 'worksheet_topic_watu_id_field', true );
$key_worksheet_book_h5p_id_field = get_post_meta( get_the_ID(), 'worksheet_book_h5p_id_field', true );
//Buttom creation
if ( isset($_POST['button_worksheet_topic_watu_id_field']) && !empty($key_worksheet_topic_watu_id_field)) {     // Check if the custom field has a value.
  ?> <style> .summaryblock2 {background-color:#bbb !important} </style>
  <br>
  <div id="ws_content_section" class="ws_content_section">
  <h2 class="content__title">Examination</h2> <br> <br>
  <?php echo do_shortcode( '[watupro ' . $key_worksheet_topic_watu_id_field . ']' ); ?>
  <br> </div>
  <?php
}
else if ( isset($_POST['button_worksheet_info'])) { //button_close
  ?> <style> .summaryblock3 {background-color:#bbb !important} </style>
  <br>
  <div id="ws_content_section" class="ws_content_section">
  <?php echo do_shortcode( '[infomenu]' ); ?>
  <br> </div> <?php
}
else {
  if (!empty($key_worksheet_book_h5p_id_field)) {     // Check if the custom field has a value.
  ?> <style> .summaryblock1 {background-color:#bbb !important} </style>
  <br>
  <div id="ws_content_section" class="ws_content_section">
  <h2 class="content__title">Exercises</h2> <br> <br>
  <?php echo do_shortcode( '[h5p id="' . $key_worksheet_book_h5p_id_field . '"]' ); ?>
  <p>Open in a new tab: <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="https://worksheet.books4languages.com/english/wp-admin/admin-ajax.php?action=h5p_embed&id=<?php echo $key_worksheet_book_h5p_id_field?>"><?php _e( the_title() . ' (' . $key_worksheet_book_h5p_id_field . ')' , 'worksheet' ); ?></a> exercises.</p> <br>
  <br> </div>
  <?php
  }
}
