<?php
/**
 * @package ccPlugin
 */
/*
Plugin Name: CODERHINO plugin
Plugin URI: https://coderhino.cc/
Description: This is my first plugin
Version: 1.0.0
Author: Mateusz Tomaszewski
Author URI: https://toma.szewski.me/
License: GPLv2 or later
Text Domain: cc-plugin
*/

if (!defined('ABSPATH')) {
    die;
}

require_once dirname(__FILE__) . '/vendor/autoload.php';

function activate_cc_plugin()
{
    inc\core\activate::activate();
}
register_activation_hook(__FILE__, 'activate_cc_plugin');
function deactivate_cc_plugin()
{
    inc\core\deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_cc_plugin');

if (class_exists('inc\\init')) {
    inc\init::register_service();
}