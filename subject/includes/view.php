<?php
class view
{
	protected static $viewtype;
	
	public function __construct()
	{
		ob_start();
	}
	
	public function finish()
	{
		$content = ob_get_clean();
		return $content;
	}
	
	protected static function setviewtype()
	{
		switch (TRUE) {
			case stripos($_SERVER['HTTP_USER_AGENT'], 'Windows CE') !== FALSE:
				self::$viewtype = 'mobile';
				break;
			default:
				self::$viewtype = 'default';
		}
	}
	
	public static function show($location, $params=array())
	{
		if (empty(self::$viewtype)) {
			self::setviewtype();
		}
		$views = array();
		
		$views[] = $_SERVER['DOCUMENT_ROOT'] .'/views/'.self::$viewtype . '/' .$location.'.php';
		
		$content = '';
		
		foreach ($views as $viewlocation) {
			if (is_readable($viewlocation)) {
				$view = $params;
				
				ob_start();
				
				include $viewlocation;
				
				$content = ob_get_clean();
				break;
			}
		}
		
		
		return $content;
	}
}