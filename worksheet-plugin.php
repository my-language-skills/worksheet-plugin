<?php
/**
 * Worksheet plugin
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/my-language-skills/extensions-for-pressbooks
 * @since             1.0
 * @package           worksheet-plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Worksheet plugin
 * Plugin URI:        https://github.com/my-language-skills/extensions-for-pressbooks
 * Description:       Site specific plugin.
 * Version:           0.1
 * Pressbooks tested up to: 5.10
 * Author:            My Language Skills team
 * Author URI:        https://github.com/my-language-skills/
 * License:           GPL 3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       worksheet-plugin
 * Domain Path:       /languages
 *
 */

 // Network: 					True


// At single, chage post css by category.
//https://wordpress.stackexchange.com/questions/202107/change-every-post-background-based-on-category

 // add_filter( 'body_class', function( $classes ) {
 //     if ( is_single() ) {
 //         global $post;
 //
 //         foreach( ( get_the_category( $post->ID ) ) as $category ) {
 //             $classes[] = 'category-' . $category->slug;
 //         }
 //     }
 //
 //     return $classes;
 // } );
 //







 // add_filter( 'page_template', 'wpa3396_page_template' );
 // function wpa3396_page_template( $page_template )
 // {
 //     if ( is_page( 'test-2' ) ) {
 //         $page_template = dirname( __FILE__ ) . '/archive-worksheet.php';
 //     }
 //     return $page_template;
 // }




 // Exit if accessed directly.
 defined( 'ABSPATH' ) || exit;



 /**
	* If lower version activated
	*
	* @since 01
	* @return
	*/


 // if ( version_compare( get_bloginfo( 'version' ), '4.7', '>=' ) ) { }


 /**
 * Required files
 *
 * @since 0.1
 * @return
 */
// plugin_dir_path correct option.
require_once plugin_dir_path( __FILE__ ) . 'worksheet-custom-taxonomies.php';
require_once plugin_dir_path( __FILE__ ) . 'worksheet-custom-widgets.php';
require_once plugin_dir_path( __FILE__ ) . 'worksheet-admin-columns.php';
require_once plugin_dir_path( __FILE__ ) . 'worksheet-custom-metabox.php';
require_once plugin_dir_path( __FILE__ ) . 'worksheet-exercises.php';
require_once plugin_dir_path( __FILE__ ) . 'worksheet-shortcodes.php';
// //
// require_once plugin_dir_path( __FILE__ ) . 'worksheet-page-templates.php';


require_once plugin_dir_path( __FILE__ ) . 'inc/worksheet-snippets.php';
require_once plugin_dir_path( __FILE__ ) . 'lib/custom-metadata/custom_metadata.php';


//If the plugin "Restric Content Pro" is not active nothing happens
// if (is_plugin_active('restrict-content-pro/restrict-content-pro.php')){
// include_once plugin_dir_path( __FILE__ ) . "rcp/efpb-rcp-registration-fields.php";
// }



/**
* If theme is active
*
* @since 0.1
* @return
*/
 // $theme = wp_get_theme(); // gets the current theme
 // if ( 'dw-wallpress' == $theme->name || 'dw-wallpress' == $theme->parent_theme ) {
 //     // if you're here Twenty Twelve is the active theme or is
 //     // the current theme's parent theme
 //
 //
 //
 //
	// }

  // include_once plugin_dir_path( __FILE__ ) . "post/efpb-post.php";
