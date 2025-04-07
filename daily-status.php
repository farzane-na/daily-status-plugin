<?php
/*
 * Plugin Name:       Daily Status
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Farzane Nazmabadi
 * Author URI:        https://farzanenazmabadi.ir/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       daily-status
 * Domain Path:       /languages
 */


 function daily_status_load_textdomain() {
    load_plugin_textdomain('daily-status', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'daily_status_load_textdomain');


 define("DAILY_STATUS_DIR_PATH",plugin_dir_path( __FILE__ ));


 if ( !defined( 'ABSPATH' ) ) {
    exit;
};

require_once DAILY_STATUS_DIR_PATH."include/admin.php";