<?php

class CDFactory
{
	public static function create($type)
	{
		$class = strtolower($type) . 'CD';
		
		return new $class;
	}
}