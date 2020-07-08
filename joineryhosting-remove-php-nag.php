<?php
/**
 * Joinery Hosting is the simplest WordPress plugin to forcely remove the PHP Update Required section in your admin dashboard when activated.
 *
 * @package Joinery Hosting
 * @author Joinery
 * @license 
 * @link 
 * @copyright 2020 Joinery Hosting. All rights reserved.
 *
 *            @wordpress-plugin
 *            Plugin Name: Joinery Hosting
 *            Plugin URI: 
 *            Description: Joinery Hosting is the simplest WordPress plugin to forcely remove the PHP Update Required section in your admin dashboard when activated.
 *            Version: 1.0
 *            Author: Joinery
 *            Author URI: 
 *            Text Domain: joinery
 *            Contributors: Joinery
 *            License: 
 *            License URI: 
 */

/**
 * Function and Hooks
 * @since 1.0
 */
function joineryhosting_remove_php_nag(){
    remove_meta_box('dashboard_php_nag', 'dashboard', 'normal');
}
 
add_action('wp_dashboard_setup', 'joineryhosting_remove_php_nag');