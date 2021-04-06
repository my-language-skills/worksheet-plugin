<?php

// https://www.w3schools.com/w3css/w3css_tabulators.asp

/**
 *
 * ADDED: Shortcodes activation
 * @link https://wordpress.org/support/topic/how-to-get-current-site-blog-id/
 * @link https://wordpress.stackexchange.com/questions/169306/check-if-is-on-child-page-of-a-particular-page
 * @since 0.1
 *
 */


 

  /**
  * Append shortcode to the content
  * See http://wordpress.stackexchange.com/q/116264/
  *
  * @param string $content
  * @return string $content
  */
 function the_content_excerpt( $content ){

     if( is_single() ){
       the_excerpt();
     }
     return $content;
 }

 add_filter( 'the_content', 'the_content_excerpt', 11, 1 );




 /**
  * external_link_to shortcode
  *
  */

  function b4l_external_link_to() {
    $key_worksheet_topic_url_field = get_post_meta( get_the_ID(), 'worksheet_topic_url_field', true ); //output value: URL

    // revision-topics-1-6 null-12/ is_single
    // $blog_id = get_current_blog_id();
    //( $blog_id != 23) && ( $blog_id != 24)


    if ( is_singular()) { ?>
      <p>External link to <a target="_blank" rel="noopener noreferrer"  onclick="gtag('event', 'visit_exercise', {'event_category': 'resources', 'event_label': 'worksheet'});" href="<?php echo $key_worksheet_topic_url_field?>"><?php _e( ' topic' . the_title(), 'pressbooks-book' ); ?></a>.</p>
      <hr> <br> <?php
     }
  	}
  add_shortcode('external_link_to','b4l_external_link_to');
  ?>
  <!-- END -->
 <?php


  /**
   * Append shortcode to the content
   * See http://wordpress.stackexchange.com/q/116264/
   *
   * @param string $content
   * @return string $content
   */
  function the_content_shortcode_elt( $content ){
      if( is_single() ){
        $content .= do_shortcode( '[external_link_to]' );
      }
      return $content;
  }

  add_filter( 'the_content', 'the_content_shortcode_elt', 11, 1 );


   /**
    * Append shortcode to the content
    * See http://wordpress.stackexchange.com/q/116264/
    *
    * @param string $content
    * @return string $content
    */
   function the_content_shortcode_exercises( $content ){
       if( is_single() ){
         $content .= do_shortcode( '[exercises]' );
       }
       return $content;
   }

   add_filter( 'the_content', 'the_content_shortcode_exercises', 11, 1 );
