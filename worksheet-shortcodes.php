<?php

// https://www.w3schools.com/w3css/w3css_tabulators.asp

/**
 *
 * ADDED: Shortcodes activation
 * @link https://wordpress.org/support/topic/how-to-get-current-site-blog-id/
 * @link https://wordpress.stackexchange.com/questions/169306/check-if-is-on-child-page-of-a-particular-page


 *
 * @link http://wordpress.stackexchange.com/q/116264/
 * @since 0.1
 *
 */


 /**
  * ADDED: h5p info menu
  *
  * @since 1.5
  * @link  https://books4languages.com/feedback/
  *
  */
function b4l_info_menu() {  // if ( is_singular()) { ?>
  <div id="info" class="info">
 	<h2 class="textbox__title">Info</h2>
 	<!-- @ADDED: integration with h5p -->
 	<iframe src="https://worksheet.books4languages.com/content/wp-admin/admin-ajax.php?action=h5p_embed&id=2" width="927" height="1" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
 	<script src="https://worksheet.books4languages.com/content/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script>
  </div>  <?php } // }

add_shortcode('infomenu','b4l_info_menu');


    /**
    * Append excerpt to the content
    *
    * @param string $content
    * @return string $content
    */
// function the_content_excerpt( $content ){
//    if( is_single() ){ the_excerpt();  }
//    return $content;
// }
//
// add_filter( 'the_content', 'the_content_excerpt', 11, 1 );
//


 // revision-topics-1-6 null-12/ is_single
 // $blog_id = get_current_blog_id();
 //( $blog_id != 23) && ( $blog_id != 24)


    /**
    * Shortcode [external_link_to] creation
    *
    */

function b4l_external_link_to() {
  $key_worksheet_topic_url_field = get_post_meta( get_the_ID(), 'worksheet_topic_url_field', true ); //output value: URL

  if ( is_singular()) { ?>
    <p>External link to <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="<?php echo $key_worksheet_topic_url_field?>"><?php _e( ' topic' . the_title(), 'worksheet' ); ?></a>.</p>
    <hr> <br> <?php
  }
}
add_shortcode('external_link_to','b4l_external_link_to');



    /**
     * Append and prepend to the content
     *
     * @param string $fullcontent
     * @return string $fullcontent
     */
