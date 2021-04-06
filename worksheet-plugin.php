

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



 // Exit if accessed directly.
 defined( 'ABSPATH' ) || exit;

 /**
  * ADDED: h5p info menu
  *
  * @since 1.5
  * @link  https://books4languages.com/feedback/
  *
  */
 function b4l_info_menu() { ?>
 	<?php if ( is_singular()) { ?>
 	<!-- if( ! is_user_logged_in()  ) { -->
 	<div id="info" class="info">
 		<h2 class="textbox__title">Info</h2>

 	<!-- @ADDED: integration with h5p -->
 		<iframe src="https://worksheet.books4languages.com/content/wp-admin/admin-ajax.php?action=h5p_embed&id=2" width="927" height="1" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
 		<script src="https://worksheet.books4languages.com/content/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script>
 	<?php } ?>
 	</div>

 <?php }
 add_shortcode('infomenu','b4l_info_menu');









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
require_once plugin_dir_path( __FILE__ ) . 'worksheet-exercises-sidebar.php';
require_once plugin_dir_path( __FILE__ ) . 'worksheet-shortcodes.php';

require_once plugin_dir_path( __FILE__ ) . 'vendor/custom-metadata/custom_metadata.php';


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

    //If the plugin "Restric Content Pro" is not active nothing happens
  if (is_plugin_active('restrict-content-pro/restrict-content-pro.php')){
    // include_once plugin_dir_path( __FILE__ ) . "rcp/efpb-rcp-registration-fields.php";
  }






 /**
  * Hide formats metabox
	* https://wordpress.stackexchange.com/questions/65653/how-do-i-remove-the-post-format-meta-box
  */





 /**
  * Redirect users after logout
  */
	// add_action('wp_logout','ps_redirect_after_logout');
	// function ps_redirect_after_logout(){
	//          wp_redirect( 'https://worksheet.books4languages.com/' );
	//          exit();
	// }



/**
 * Hide admin bar
 *
 */
add_filter( 'show_admin_bar', 'hide_admin_bar' );
function hide_admin_bar(){ return false; }





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
