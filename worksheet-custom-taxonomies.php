<?php

/**
 * Custom taxonomies
 *
 * Description. (use period)
 *
 * @link URL
 *
 * @package worksheet-plugin
 * @subpackage worksheet-plugin/worksheet-custom-taxonomies
 * @since 0.1
 */
 /**
 * activation of categories
 *
 * @since 0.x
 *
 */
 //https://code.tutsplus.com/es/tutorials/php-control-structures-and-loops--cms-31999
 //https://wordpress.stackexchange.com/questions/156464/how-to-add-metabox-for-post-of-specific-category



 /**
 * Units taxonomy (category)
 *
 * @since 0.1
 *
 */

 add_action( 'init', 'register_taxonomy_unit' );

 function register_taxonomy_unit() {

     $labels = array(
         'name' => _x( 'Unit', 'unit' ),
         'singular_name' => _x( 'Unit', 'unit' ),
         'search_items' => _x( 'Search Units', 'unit' ),
         'popular_items' => _x( 'Popular Units', 'unit' ),
         'all_items' => _x( 'All Units', 'unit' ),
         'parent_item' => _x( 'Parent Unit', 'unit' ),
         'parent_item_colon' => _x( 'Parent Unit:', 'unit' ),
         'edit_item' => _x( 'Edit Unit', 'unit' ),
         'update_item' => _x( 'Update Unit', 'unit' ),
         'add_new_item' => _x( 'Add New Unit', 'unit' ),
         'new_item_name' => _x( 'New Unit', 'unit' ),
         'separate_items_with_commas' => _x( 'Separate Units with commas', 'unit' ),
         'add_or_remove_items' => _x( 'Add or remove Unit', 'unit' ),
         'choose_from_most_used' => _x( 'Choose from the most used Units', 'unit' ),
         'menu_name' => _x( 'Unit', 'unit' ),
     );

     $args = array(
         'labels' => $labels,
         'public' => true,
         'show_in_nav_menus' => true,
         'show_ui' => true,
         'show_tagcloud' => true,
         'show_admin_column' => true,
         'hierarchical' => true,
         'show_in_rest' => true,

     // Add capabilities for specific role
         'capabilities' => array (
         'manage_terms' => 'manage_options', // only admin
         'edit_terms' => 'manage_options', // only admin
         'delete_terms' => 'manage_options', // only admin
         'assign_terms' => 'read' // anyone can assign terms
          ),

         'rewrite' => true,
         'query_var' => true
     );

     register_taxonomy( 'unit', array('post'), $args );
 }





/**
* grammar taxonomy (category)
*
* @since 0.1
*
*/
add_action( 'init', 'register_taxonomy_grammar' );

function register_taxonomy_grammar() {

   $labels = array(
       'name' => _x( 'Grammar', 'grammar' ),
       'singular_name' => _x( 'Component', 'grammar' ),
       'search_items' => _x( 'Search Grammars', 'grammar' ),
       'popular_items' => _x( 'Popular Grammars', 'grammar' ),
       'all_items' => _x( 'All Grammars', 'grammar' ),
       'parent_item' => _x( 'Parent Grammar', 'grammar' ),
       'parent_item_colon' => _x( 'Parent Grammar:', 'grammar' ),
       'edit_item' => _x( 'Edit Grammar', 'grammar' ),
       'update_item' => _x( 'Update Grammar', 'grammar' ),
       'add_new_item' => _x( 'Add New Grammar', 'grammar' ),
       'new_item_name' => _x( 'New Grammar', 'grammar' ),
       'separate_items_with_commas' => _x( 'Separate Grammars with commas', 'grammar' ),
       'add_or_remove_items' => _x( 'Add or remove Grammar', 'grammar' ),
       'choose_from_most_used' => _x( 'Choose from the most used Grammar', 'grammar' ),
       'menu_name' => _x( 'Grammar', 'grammar' ),
   );

   $args = array(
       'labels' => $labels,
       'public' => true,
       'show_in_nav_menus' => true,
       'show_ui' => true,
       'show_tagcloud' => true,
       'show_admin_column' => true,
       'hierarchical' => true,
       'show_in_rest' => true,

   // Add capabilities for specific role
       'capabilities' => array (
       'manage_terms' => 'manage_options', // only admin
       'edit_terms' => 'manage_options', // only admin
       'delete_terms' => 'manage_options', // only admin
       'assign_terms' => 'read' // anyone can assign terms
        ),

       'rewrite' => true,
       'query_var' => true
   );

   register_taxonomy( 'grammar', array('post'), $args );
}

/**
* vocabulary taxonomy (category)
*
* @since 0.1
*
*/

add_action( 'init', 'register_taxonomy_vocabulary' );

function register_taxonomy_vocabulary() {

   $labels = array(
       'name' => _x( 'Vocabulary', 'vocabulary' ),
       'singular_name' => _x( 'Vocabulary', 'vocabulary' ),
       'search_items' => _x( 'Search Vocabularies', 'vocabulary' ),
       'popular_items' => _x( 'Popular Vocabularies', 'vocabulary' ),
       'all_items' => _x( 'All Vocabularies', 'vocabulary' ),
       'parent_item' => _x( 'Parent Component', 'vocabulary' ),
       'parent_item_colon' => _x( 'Parent Vocabulary:', 'vocabulary' ),
       'edit_item' => _x( 'Edit Vocabulary', 'vocabulary' ),
       'update_item' => _x( 'Update Vocabulary', 'vocabulary' ),
       'add_new_item' => _x( 'Add New Vocabulary', 'vocabulary' ),
       'new_item_name' => _x( 'New Vocabulary', 'vocabulary' ),
       'separate_items_with_commas' => _x( 'Separate Vocabularies with commas', 'vocabulary' ),
       'add_or_remove_items' => _x( 'Add or remove Vocabulary', 'vocabulary' ),
       'choose_from_most_used' => _x( 'Choose from the most used Vocabulary', 'vocabulary' ),
       'menu_name' => _x( 'Vocabulary', 'vocabulary' ),
   );

   $args = array(
       'labels' => $labels,
       'public' => true,
       'show_in_nav_menus' => true,
       'show_ui' => true,
       'show_tagcloud' => true,
       'show_admin_column' => true,
       'hierarchical' => true,
       'show_in_rest' => true,

   // Add capabilities for specific role
       'capabilities' => array (
       'manage_terms' => 'manage_options', // only admin
       'edit_terms' => 'manage_options', // only admin
       'delete_terms' => 'manage_options', // only admin
       'assign_terms' => 'read' // anyone can assign terms
        ),

       'rewrite' => true,
       'query_var' => true
   );

   register_taxonomy( 'vocabulary', array('post'), $args );
}

/**
* Component taxonomy (category)
*
* @since 0.1
*
*/

add_action( 'init', 'register_taxonomy_orthography' );

function register_taxonomy_orthography() {

   $labels = array(
       'name' => _x( 'Orthography', 'orthography' ),
       'singular_name' => _x( 'Component', 'orthography' ),
       'search_items' => _x( 'Search Orthographies', 'orthography' ),
       'popular_items' => _x( 'Popular Orthographies', 'orthography' ),
       'all_items' => _x( 'All Orthographies', 'orthography' ),
       'parent_item' => _x( 'Parent Orthography', 'orthography' ),
       'parent_item_colon' => _x( 'Parent Orthography:', 'orthography' ),
       'edit_item' => _x( 'Edit Orthography', 'orthography' ),
       'update_item' => _x( 'Update Orthography', 'orthography' ),
       'add_new_item' => _x( 'Add New Orthography', 'orthography' ),
       'new_item_name' => _x( 'New Orthography', 'orthography' ),
       'separate_items_with_commas' => _x( 'Separate Orthographies with commas', 'orthography' ),
       'add_or_remove_items' => _x( 'Add or remove Orthography', 'orthography' ),
       'choose_from_most_used' => _x( 'Choose from the most used Orthography', 'orthography' ),
       'menu_name' => _x( 'Orthography', 'orthography' ),
   );

   $args = array(
       'labels' => $labels,
       'public' => true,
       'show_in_nav_menus' => true,
       'show_ui' => true,
       'show_tagcloud' => true,
       'show_admin_column' => true,
       'hierarchical' => true,
       'show_in_rest' => true,


   // Add capabilities for specific role
       'capabilities' => array (
       'manage_terms' => 'manage_options', // only admin
       'edit_terms' => 'manage_options', // only admin
       'delete_terms' => 'manage_options', // only admin
       'assign_terms' => 'read' // anyone can assign terms
        ),

       'rewrite' => true,
       'query_var' => true
   );

   register_taxonomy( 'orthography', array('post'), $args );
}


/**
* Component taxonomy (category)
*
* @since 0.1
*
*/

add_action( 'init', 'register_taxonomy_culture' );

function register_taxonomy_culture() {

   $labels = array(
       'name' => _x( 'Culture', 'culture' ),
       'singular_name' => _x( 'Culture', 'culture' ),
       'search_items' => _x( 'Search Cultures', 'culture' ),
       'popular_items' => _x( 'Popular Cultures', 'culture' ),
       'all_items' => _x( 'All Cultures', 'culture' ),
       'parent_item' => _x( 'Parent Culture', 'culture' ),
       'parent_item_colon' => _x( 'Parent Culture:', 'culture' ),
       'edit_item' => _x( 'Edit Culture', 'culture' ),
       'update_item' => _x( 'Update Culture', 'culture' ),
       'add_new_item' => _x( 'Add New Culture', 'culture' ),
       'new_item_name' => _x( 'New Culture', 'culture' ),
       'separate_items_with_commas' => _x( 'Separate Cultures with commas', 'culture' ),
       'add_or_remove_items' => _x( 'Add or remove Culture', 'culture' ),
       'choose_from_most_used' => _x( 'Choose from the most used Culture', 'culture' ),
       'menu_name' => _x( 'Culture', 'culture' ),
   );

   $args = array(
       'labels' => $labels,
       'public' => true,
       'show_in_nav_menus' => true,
       'show_ui' => true,
       'show_tagcloud' => true,
       'show_admin_column' => true,
       'hierarchical' => true,
       'show_in_rest' => true,


   // Add capabilities for specific role
       'capabilities' => array (
       'manage_terms' => 'manage_options', // only admin
       'edit_terms' => 'manage_options', // only admin
       'delete_terms' => 'manage_options', // only admin
       'assign_terms' => 'read' // anyone can assign terms
        ),

       'rewrite' => true,
       'query_var' => true
   );

   register_taxonomy( 'culture', array('post'), $args );
}




/**
* Disable box if category not selected and is not administrator
*
* @since X.X
*
*/

// if (is_admin() ){
// $post_id = isset($_GET['post']) ? $_GET['post'] : isset($_POST['post_ID']) ;
// if( $post_id && in_category('audio', $post_id) ){
//
//    add_action('admin_init', 'add_meta_boxes', 1);
//  }
// }

add_action( 'admin_menu', 'remove_custom_taxonomy' );

function remove_custom_taxonomy() {
    $post_id = isset($_GET['post']) ? $_GET['post'] : isset($_POST['post_ID']) ;

    //OLD APROACH:::   $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

    if ( is_admin() )
        if( ! current_user_can('administrator')) {  {
            if ( $post_id && !in_category( 'grammar', $post_id ) ){
          	       remove_meta_box( 'grammardiv', 'post', 'side' );
                }
            if ( $post_id && !in_category( 'vocabulary', $post_id ) ){
                   remove_meta_box( 'vocabularydiv', 'post', 'side' );
                }
            if ( $post_id && !in_category( 'orthography', $post_id ) ){
                   remove_meta_box( 'orthographydiv', 'post', 'side' );
                }
            if ( $post_id && !in_category( 'culture', $post_id ) ){
                   remove_meta_box( 'culturediv', 'post', 'side' );
                }
            }
        }
    }
