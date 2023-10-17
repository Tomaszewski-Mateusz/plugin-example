<?php
/**
 * @package ccPlugin
 */

namespace inc\core;

/**
 * 
 */

class activate
{
    public static function activate()
    {
        // generate a CPT
        // custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }
}