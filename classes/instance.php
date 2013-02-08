<?php

namespace Rookers;

abstract class Instance
{

	protected static $data = array();

	public static function forge($name)
	{
		if ( class_exists($class = '\\Rookers\\'.$name, true))
		{
			return new $class();
		}

		echo $class;

		return false;
	}

	public function rand()
	{
		return static::$data[array_rand(static::$data)];
	}
}