<?php

// https://www.w3schools.com/w3css/w3css_tabulators.asp

/**
 *
 * ADDED: Exercises Sidebar
 * @link https://wordpress.org/support/topic/how-to-get-current-site-blog-id/
 * @link https://wordpress.stackexchange.com/questions/169306/check-if-is-on-child-page-of-a-particular-page
 * @since X.X
 *
 */

 function b4l_sidebar_exercises() {

   $key_worksheet_topic_watu_id_field = get_post_meta( get_the_ID(), 'worksheet_topic_watu_id_field', true );
   $key_worksheet_book_h5p_id_field = get_post_meta( get_the_ID(), 'worksheet_book_h5p_id_field', true );


   // revision-topics-1-6 null-12/ is_single
   // $blog_id = get_current_blog_id();
   //( $blog_id != 23) && ( $blog_id != 24)


   // if ( is_singular()) { ?>
     <!-- <style>
     summaryblock1:hover {
   background-color: #ccc;
 }
 </style> -->

      <form method="post" onclick="gtag('event', 'view_info', {'event_category': 'information', 'event_label': 'show_info'});" action="<?php the_permalink()?>#learning">
      <?php
      if ( !empty($key_worksheet_book_h5p_id_field)) {     // Check if the custom field has a value.
      ?>
        <input class="summaryblock1" type="submit" name="button_worksheet_book_h5p_id_field" aria-labelledby="buttonText1" value="Book exercises"/>
      <?php
      }
      if ( !empty($key_worksheet_topic_watu_id_field)) {     // Check if the custom field has a value.
      ?>
        <input class="summaryblock2" type="submit" name="button_worksheet_topic_watu_id_field" aria-labelledby="buttonText2" value="Topic examination"/>
      <?php
      }
      ?>
      <input class="summaryblock3" type="submit" name="button_info" aria-labelledby="buttonText3" value="General info"/>
      <!-- </form> -->

      <!-- <form method="post" onclick="gtag('event', 'view_info', {'event_category': 'information', 'event_label': 'show_info'});" action="<?php the_permalink()?>#info"> -->
         <!-- <input class="summaryblock1" type="submit" name="button3" aria-labelledby="buttonText3" value="Show info"/>
         <input class="summaryblock2" type="submit" name="button4" aria-labelledby="buttonText4" value="Hide info"/> -->
       </form> <?php
    }
 	// }
 add_shortcode('exercises_sidebar','b4l_sidebar_exercises');
