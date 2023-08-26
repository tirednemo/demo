<?php

namespace Core;

class Facade
{
    public static function defaultAliases()
    {
        return [
            'DB' => Database::class,
        ];
    }

    public static function __callStatic($method, $args)
    {
        $facadeAccessor = static::getFacadeAccessor();
        $instance = App::resolve($facadeAccessor);
        return $instance->$method(...$args);
    }

    protected static function getFacadeAccessor()
    {
    }
}
