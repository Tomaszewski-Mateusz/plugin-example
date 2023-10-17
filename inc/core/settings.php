<?php
/**
 * @package ccPlugin
 */

namespace inc\core;

use \inc\core\baseController;

/**
 * 
 */

class settings extends baseController
{
    function register()
    {
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }
    function settings_link($links)
    {
        // add custom settings link
        $settings_link = '<a href="admin.php?page=coderhino_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}