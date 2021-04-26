<?php

 /**
  * Post order in all places by title
	* https://wordpress.stackexchange.com/questions/65653/how-do-i-remove-the-post-format-meta-box
  */


function homepage_posts($query) {
  if(!is_admin()) {
    if ( $query->is_main_query())    {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        $query->set( 'posts_per_page', 50 );
    }
  }
}
  add_action('pre_get_posts', 'homepage_posts');

  /**
   * pre_get_posts action to exclude categories from search query
   * https://wordpress.stackexchange.com/questions/162232/exclude-categories-from-search-query
   */


function wcs_exclude_category_search( $query ) {
  if(!is_admin()) {
    if ( $query->is_home() && $query->is_main_query() ) {     // if ( $query->is_main_query()) {
    $query->set( 'cat', '-110, -115, -142' );
    }
  }
  return $query;
}
// }
add_action( 'pre_get_posts', 'wcs_exclude_category_search', 1 );






 /**
  * Redirect users after logout
  */
	// add_action('wp_logout','ps_redirect_after_logout');
	// function ps_redirect_after_logout(){
	//          wp_redirect( 'https://worksheet.books4languages.com/' );
	//          exit();
	// }


  /**
   * Activate admin excerpt
   *
   */
add_post_type_support( 'post', 'excerpt' );

/**
 * Hide admin bar
 *
 */
// //Hide Admin bar
// add_filter( 'show_admin_bar', 'hide_admin_bar' );
// function hide_admin_bar(){ return false; }

// //Hide Admin bar just users

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}



/**
 * Block wp-admin access for non-admins
 * https://jeroensormani.com/block-dashboard-access-non-admins/
 */
// function ace_block_wp_admin() {
// 	if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
// 		wp_safe_redirect( home_url() );
// 		exit;
// 	}
// }
// add_action( 'admin_init', 'ace_block_wp_admin' );
//





/**
 * Hide formats metabox
 * https://wordpress.stackexchange.com/questions/65653/how-do-i-remove-the-post-format-meta-box
 */






 // Custom WordPress Admin CSS
 function admin_css() {
 	wp_enqueue_style( 'admin_css', get_stylesheet_directory_uri() . '/style_admin.css' );
 }
 add_action('admin_print_styles', 'admin_css' );















 /**
  * Couunt the post in each category
  * https://www.isitwp.com/count-all-posts-in-category/
  */


 function worksheet_count_cat_post($category) {
   if(is_string($category)) {
       $catID = get_cat_ID($category);
   }
   elseif(is_numeric($category)) {
       $catID = $category;
   } else {
       return 0;
   }

   $cat = get_category($catID);
   return $cat->count;
 }


 // use the folling code to show in the theme the numberposts
 //echo  count_cat_post('grammar');
