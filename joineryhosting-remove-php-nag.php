<?php
/**
 * Joineryhosting Remove PHP Nag Plugin is the simplest WordPress plugin to forcely remove the PHP Update Required section in your admin dashboard when activated.
 *
 * @package Joineryhosting Remove PHP Nag
 * @author Joineryhosting
 * @license 
 * @link 
 * @copyright 2020 Joineryhosting. All rights reserved.
 *
 *            @wordpress-plugin
 *            Plugin Name: Joineryhosting Remove PHP Nag Plugin
 *            Plugin URI: 
 *            Description: Joineryhosting Remove PHP Nag Plugin is the simplest WordPress plugin to forcely remove the PHP Update Required section in your admin dashboard when activated.
 *            Version: 1.0
 *            Author: Joineryhosting
 *            Author URI: 
 *            Text Domain: joineryhosting-remove-php-nag
 *            Contributors: Joineryhosting
 *            License: 
 *            License URI: 
 */

/**
 * Function and Hooks to forcely remove dashboard_php_nag or PHP Update Required section
 *
 * @since 1.0
 */
function remove_php_nag(){
    remove_meta_box('dashboard_php_nag', 'dashboard', 'normal');
}
 
add_action('wp_dashboard_setup', 'remove_php_nag');