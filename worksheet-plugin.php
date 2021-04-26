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


 /**
	* Documentation
	*
	* @link https://www.smashingmagazine.com/2011/03/ten-things-every-wordpress-plugin-developer-should-know/
  * @link https://www.it-swarm-es.com/es/get-template-part/pasando-variables-traves-de-locate-template/957269982/
	*
	*/


 /**
	* If Wordpres lower version activated
	*
	* @since 01
	* @return
	*/

 function dw_deactivate_theme_options() {
   if ( version_compare( get_bloginfo('version'), '4.0', '<') )  {
     $message = "Impossible activate Theme Settings plugin because ";
     $message .= "WordPress version is lower than 4.0";
     die( $message );
   }
 }

 /**
	* Define plugin version
	*
	* @since 01
	* @return int
	*/

 if (!defined('MYPLUGIN_VERSION_KEY'))
     define('MYPLUGIN_VERSION_KEY', 'myplugin_version');

 if (!defined('MYPLUGIN_VERSION_NUM'))
     define('MYPLUGIN_VERSION_NUM', '0.1');

 add_option(MYPLUGIN_VERSION_KEY, MYPLUGIN_VERSION_NUM);



  /**
 	* If lower version activated
 	*
 	* @since 01
 	* @return int
 	*/

 $new_version = '0.1';

 if (get_option(MYPLUGIN_VERSION_KEY) != $new_version) {
     // Execute your upgrade logic here

     // Then update the version value
     update_option(MYPLUGIN_VERSION_KEY, $new_version);
 }



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
require_once plugin_dir_path( __FILE__ ) . 'worksheet-shortcodes.php';

require_once plugin_dir_path( __FILE__ ) . 'inc/worksheet-snippets.php';

require_once plugin_dir_path( __FILE__ ) . 'lib/custom-metadata/custom_metadata.php';
require_once plugin_dir_path( __FILE__ ) . 'lib/display-posts-shortcode/display-posts-shortcode.php';



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

/**
* Templates
* @link https://stackoverflow.com/questions/52199629/how-to-disable-gutenberg-block-editor-for-certain-post-types
* @since 0.1
*
*/


add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);

function prefix_disable_gutenberg($current_status, $post_type) {
    // Use your post type key
    if ($post_type === 'post') return false;
    return $current_status;

    }



  /**
  * Templates worksheet_content_templates
  * https://wordpress.stackexchange.com/questions/383751/is-there-a-way-to-loop-through-a-shortcode-datasource-to-create-a-table
  * https://carlalexander.ca/designing-class-generate-wordpress-html-content/     -- creo que esto tambien es  --
  *
  * @since 0.1
  *
  */

define( 'WORKSHEET_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require WORKSHEET_PLUGIN_DIR . 'templates/worksheet-template-loader.php';
require WORKSHEET_PLUGIN_DIR . 'templates/worksheet-template-loader-extension.php';

function worksheet_template_shortcode() {
  $templates = new WorkSheet_Template_Loader;

    // $args = array( 'section_title' => 'hello world' );
    // ob_start();
    // $templates->set_template_data($args); // assign variable array before calling templates
    $templates->get_template_part( 'content', 'exercises-menu' );
    $templates->get_template_part( 'content', 'exercises' );
    // $templates->get_template_part( 'content', 'info' );
    return ob_get_clean();

}

add_shortcode( 'worksheet_content_templates', 'worksheet_template_shortcode' );























add_action('admin_menu', 'worksheet_admin_menu');

function worksheet_admin_menu() {
    $page_title = 'WorkSheet Settings';
    $menu_title = 'WorkSheet';
    $capability = 'manage_options';
    $menu_slug = 'worksheet-settings';
    $function = 'worksheet_settings';
    add_options_page($page_title, $menu_title, $capability, $menu_slug, $function);
}

function worksheet_settings() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }
    ?>
    Here is where you could start displaying the HTML needed for the settings
    page, or you could include a file that handles the HTML output for you.
    <?php
}
