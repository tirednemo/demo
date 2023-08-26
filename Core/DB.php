<?php

namespace Core;

class DB extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'db';
	}
}
