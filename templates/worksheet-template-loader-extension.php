 <?php

 /**
  * Template loader for PW Sample Plugin.
  * @link      https://pippinsplugins.com/template-file-loaders-plugins/
  * @link      https://wordpress.stackexchange.com/questions/383751/is-there-a-way-to-loop-through-a-shortcode-datasource-to-create-a-table
  *
  * Only need to specify class properties here.
  *
  */
 class WorkSheet_Template_Loader extends Gamajo_Template_Loader {



 /**
  * Prefix for filter names.
  *
  * @since 1.0.0
  * @type string
  */
 protected $filter_prefix = 'worksheet';

 /**
  * Directory name where custom templates for this plugin should be found in the theme.
  *
  * @since 1.0.0
  * @type string
  */
 protected $theme_template_directory = 'worksheet-templates';

 /**
  * Reference to the root directory path of this plugin.
  *
  * @since 1.0.0
  * @type string
  */
 protected $plugin_directory = WORKSHEET_PLUGIN_DIR;

}
