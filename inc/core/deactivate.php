<?php
/**
 * @package ccPlugin
 */

namespace inc\core;

/**
 * 
 */

class deactivate
{
    public static function deactivate()
    {
        // flush rewrite rules
        flush_rewrite_rules();
    }
}