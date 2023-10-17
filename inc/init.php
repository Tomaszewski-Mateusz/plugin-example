<?php
/**
 * @package ccPlugin
 */

namespace inc;

final class init
{
    public static function get_service()
    {
        return [
            pages\admin::class,
            core\books::class,
            core\settings::class,
            core\enqueue::class,
        ];
    }
    public static function register_service()
    {
        foreach (self::get_service() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
    private static function instantiate($class)
    {
        $service = new $class();
        return $service;
    }
}



