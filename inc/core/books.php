<?php
/**
 * @package ccPlugin
 */

namespace inc\core;

/**
 * 
 */

class books
{
    public function register()
    {
        add_action('init', array($this, 'custom_post_type'));
    }
    function custom_post_type()
    {
        register_post_type(
            'book',
            array(
                'public' => true,
                'label' => 'book',
            )
        );
    }
}