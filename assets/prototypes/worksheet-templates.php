<?php
/**
  *
  * @link https://wordpress.stackexchange.com/questions/169831/custom-single-template-for-a-specific-category
  * @link https://www.wpexplorer.com/wordpress-page-templates-plugin/
  *
  */

 // add_filter( 'single_template', function ( $single_template ) {
 //
 //     $parent     = 'grammar'; //Change to your category ID
 //     $categories = get_categories( 'child_of=' . $parent );
 //     $cat_names  = wp_list_pluck( $categories, 'name' );
 //
 //     if ( has_category( 'movies' ) || has_category( $cat_names ) ) {
 //         $single_template = dirname( __FILE__ ) . '/templates/template-grammar.php';
 //     }
 //     return $single_template;
 //
 // }, PHP_INT_MAX, 2 );
 //



 /**
   *
   * @link https://wordpress.stackexchange.com/questions/115968/create-a-custom-archive-page-for-a-custom-post-type-in-a-plugin
   *
   */

   /**
    *
    * ADDED: Inlcude Archive
    * @since X.X
    *
    */

   // add_filter('template_include', 'archive_worksheet');

   // function archive_worksheet( $template ) {
   //    // if ( is_post_type_archive('my_plugin_lesson') ) {
   //    $theme_files = array('archive-worksheet.php', 'worksheet-plugin/archive-worksheet.php');
   //    $exists_in_theme = locate_template($theme_files, false);
   //    if ( $exists_in_theme != '' ) {
   //      return $exists_in_theme;
   //    } else {
   //      return plugin_dir_path(__FILE__) . '/archive-worksheet.php';
   //    } //}
   //  return $template;
   // }











/**
 *
 * ADDED: Inlcude Category culture
 * @since X.X
 *
 */
// add_filter('template_include', 'category_culture');
//
// function category_culture( $template ) {
//     $theme_files = array('category-culture.php', 'worksheet-plugin/category-culture.php');
//     $exists_in_theme = locate_template($theme_files, false);
//     if ( $exists_in_theme != '' ) {
//       return $exists_in_theme;
//     } else {
//       return plugin_dir_path(__FILE__) . 'templates/category-culture.php';
//     }
//   return $template;
// }
//

/**
 *
 * ADDED: Inlcude Category grammar
 * @since X.X
 *
 */
// add_filter('template_include', 'category_grammar');
//
// function category_grammar( $template ) {
//     $theme_files = array('category-grammar.php', 'worksheet-plugin/category-grammar.php');
//     $exists_in_theme = locate_template($theme_files, false);
//     if ( $exists_in_theme != '' ) {
//       return $exists_in_theme;
//     } else {
//       return plugin_dir_path(__FILE__) . 'templates/category-grammar.php';
//     }
//   return $template;
// }
//
//
/**
 *
 * ADDED: Inlcude Category orthography
 * @since X.X
 *
 */
// add_filter('template_include', 'category_orthography');
//
// function category_orthography( $template ) {
//     $theme_files = array('category-orthography.php', 'worksheet-plugin/category-orthography.php');
//     $exists_in_theme = locate_template($theme_files, false);
//     if ( $exists_in_theme != '' ) {
//       return $exists_in_theme;
//     } else {
//       return plugin_dir_path(__FILE__) . 'templates/category-orthography.php';
//     }
//   return $template;
// }
//

/**
 *
 * ADDED: Inlcude Category vocabulary
 * @since X.X
 *
 */
// add_filter('template_include', 'category_vocabulary');
//
// function category_vocabulary( $template ) {
//     $theme_files = array('category-vocabulary.php', 'worksheet-plugin/category-vocabulary.php');
//     $exists_in_theme = locate_template($theme_files, false);
//     if ( $exists_in_theme != '' ) {
//       return $exists_in_theme;
//     } else {
//       return plugin_dir_path(__FILE__) . '/templates/category-vocabulary.php';
//     }
//   return $template;
// }


/**
 *
 * ADDED: Inlcude Category activities
 * @since X.X
 *
 */
// add_filter('template_include', 'category_activities');
//
// function category_activities( $template ) {
//     $theme_files = array('category-activities.php', 'worksheet-plugin/category-activities.php');
//     $exists_in_theme = locate_template($theme_files, false);
//     if ( $exists_in_theme != '' ) {
//       return $exists_in_theme;
//     } else {
//       return plugin_dir_path(__FILE__) . 'templates/category-activities.php';
//     }
//   return $template;
// }








/**
 *
 * ADDED: Inlcude templates from plugin
 * @link https://wordpress.stackexchange.com/questions/115968/create-a-custom-archive-page-for-a-custom-post-type-in-a-plugin/116025#116025?s=78d56189de1e4f47b6aceb6c99c63715
 * @since X.X
 *
 */
 // add_filter('template_include', 'lessons_template');
 //
 // function lessons_template( $template ) {
 //     $theme_files = array('archive-my_plugin_lesson.php', 'myplugin/archive-lesson.php');
 //     $exists_in_theme = locate_template($theme_files, false);
 //     if ( $exists_in_theme != '' ) {
 //       return $exists_in_theme;
 //     } else {
 //       return plugin_dir_path(__FILE__) . 'category-vocabulary.php';
 //     }
 //   return $template;
 // }
