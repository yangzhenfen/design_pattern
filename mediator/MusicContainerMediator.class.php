<?php

class MusicContainerMediator
{
	protected $_containers = array();
	
	public function __construct()
	{
		$this->_containers[] = 'CD';
		$this->_containers[] = 'MP3Archive';
	}
	
	public function change($originalObject, $newValue)
	{
		$title = $originalObject->title;
		$band = $originalObject->band;
		
		foreach ($this->_containers as $container) {
			if (!($originalObject instanceof $container)) {
				$object = new $container;
				$object->title = $title;
				$object->band = $band;
				
				foreach ($newValue AS $key=>$val) {
					$object->$key = $val;
				}
				
				$object->save();
			}
		}
	}
}