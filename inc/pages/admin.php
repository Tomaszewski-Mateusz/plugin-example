<?php

/**
 * @package ccPlugin
 */

namespace inc\pages;

use \inc\api\settingsApi;
use \inc\core\baseController;
use inc\api\callbacks\adminCallbacks;

/**
 * 
 */

class admin extends baseController
{
    public $settings;

    public $callbacks;

    public $pages = array();

    public $subpages = array();

    public function register()
    {
        $this->settings = new settingsApi();

        $this->callbacks = new adminCallbacks();

        $this->setPages();

        $this->setSubPages();
        
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = array(
            array(
                'page_title' => 'CODERHINO plugin',
                'menu_title' => 'CC Settings',
                'capability' => 'manage_options',
                'menu_slug' => 'cc',
                'callback' => array($this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-store',
                'position' => 110
            )
        );
        return $this;
    }
    public function setSubPages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'cc',
                'page_title' => 'Custom Post Types',
                'menu_title' => 'CPT',
                'capability' => 'manage_options',
                'menu_slug' => 'cc_cpt',
                'callback' => array($this->callbacks, 'adminDashboard'),
            ),
            array(
                'parent_slug' => 'cc',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'cc_taxonomies',
                'callback' => array($this->callbacks, 'adminDashboard')
            ),
            array(
                'parent_slug' => 'cc',
                'page_title' => 'Custom Widgets',
                'menu_title' => 'Widgets',
                'capability' => 'manage_options',
                'menu_slug' => 'cc_widgets',
                'callback' => array($this->callbacks, 'adminDashboard')
            ),
        );
        return $this;
    }
    public function admin_index()
    {
        // require template
        require_once $this->plugin_path . '/templates/admin.php';
    }
}
