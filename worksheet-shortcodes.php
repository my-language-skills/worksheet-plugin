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
 	<!-- @ADDED: integration with h5p -->
 	<!-- <iframe src="https://worksheet.books4languages.com/content/wp-admin/admin-ajax.php?action=h5p_embed&id=2" width="927" height="1" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
 	<script src="https://worksheet.books4languages.com/content/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script> -->
  <?php
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
        ?><h2 class="content__title">Info</h2> <?php
        ?><br> worksheet_audio_recorder_h5p_id_field: <b><?php
        echo $value = get_metadata( 'post', get_the_ID(), 'worksheet_audio_recorder_h5p_id_field', true ); // Returns post metadata value for the field 'featured'
        ?></b>
        <br> worksheet_topic_watu_id_field: <b><?php
        echo $value = get_metadata( 'post', get_the_ID(), 'worksheet_topic_watu_id_field', true ); // Returns post metadata value for the field 'featured'
        ?></b>
        <br> worksheet_book_h5p_id_field: <b><?php
        echo $value = get_metadata( 'post', get_the_ID(), 'worksheet_book_h5p_id_field', true ); // Returns post metadata value for the field 'featured'
        ?></b>
        <br><?php
  } ?>
  <!-- class="wp-block-button__link" -->
  <br>
  <h2 class="content__title">We value your opinion</h2> <br>
  <p>We hope to make your experience of dealing with Books4Languages an excellent one and we welcome your comments, suggestions and details of satisfaction or dissatisfaction. This could be about the service you have experienced when contacting us, or when using any of our textbooks or services.  We would also like to hear from you if a particular member of staff has provided exceptional service.</p>
  <p>External link to <a target="_blank" rel="noopener noreferrer" href="https://books4languages.com/review/" title="Book review">Book review</a>.</p> <br>
  <br>
  <h2 class="content__title">Spelling mistakes and Book suggestions</h2> <br>
  <p>You can use our Open TextBook errors and suggestions report form.</p>
  <p>External link to <a target="_blank" rel="noopener noreferrer" href="https://books4languages.com/contribute/form/error/" title="Book errors and suggestions">Book errors and suggestions</a>.</p> <br>
  <br>
  <h2 class="content__title">Contribute</h2> <br>
  <p>We are searching for contributors to act as contributing writers, educators and expert teachers.</p>
  <p>To create Open Educational Resources (OER) for Teaching and Learning Second Languages which can be reused, modified, and shared and that provide unconstrained materials for the benefit and the enjoyment of others.</p>
  <p>We aim at democratising the second language teaching.</p>
  <p>So, dust off your pen and start writing!</p>
  <p>External link to <a target="_blank" rel="noopener noreferrer" href="https://books4languages.com/contribute/" title="Contribute">contribute</a>.</p> <br>
  <br>
  <h2 class="content__title"> License Request</h2> <br>
  <p>While you can use Books4Languages Content for online education (through our websites) with relatively few limitations, your ability to incorporate it into an external project depends on which type of license you’re using. Here’s a look at our different licenses and what they mean for your next textbook undertaking.</p>
  <p>Our Content is covered by our Basic License (share). If you are an Author and the Content is going to be free to the end-user then an Extended License (share and adapt) is what you need. An Editorial License (share and adapt) is required if the end-user must pay to use the finish Content.</p>
  <p>If you need more information about our licenses, visit <a target="_blank" rel="noopener noreferrer" href="https://books4languages.com/legal/licence-to-use/" title="Visit more information page">more information</a>.</p>
  <p>If you require a License, visit <a target="_blank" rel="noopener noreferrer" href="https://books4languages.com/legal/licence-to-use/" title="Visit licenses page">licenses page</a>.</p>
  <br>



  <?php } // }

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
     * Append and prepend to the content
     *
     * @param string $fullcontent
     * @return string $fullcontent
     */
