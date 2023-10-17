<?php
/**
 * @package ccPlugin
 */

namespace inc\core;

use \inc\core\baseController;

/**
 * 
 */

class enqueue extends baseController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style('cc-style', $this->plugin_url . 'assets/cc-style.css');
        wp_enqueue_script('cc-script', $this->plugin_url . 'assets/cc-script.js');
    } 
}