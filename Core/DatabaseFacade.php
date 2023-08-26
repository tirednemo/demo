<?php

namespace Core;

class DatabaseFacade extends Facade {
	protected static function getFacadeAccessor(){
    	return Database::class;
    }
}