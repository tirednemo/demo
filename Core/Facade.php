<?php
 
 namespace Core;

 class Facade{
    protected static $container;

    public static function __callStatic($method, $args){
            $facadeAccessor = static::getFacadeAccessor();
            $instance = App::resolve($facadeAccessor);
            return $instance->$method(...$args);
    }
    
    protected static function getFacadeAccessor(){
    }
}