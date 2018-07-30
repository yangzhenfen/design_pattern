<?php

class userCD
{
	protected $_user = NULL;
	
	public function setUser($user)
	{
		$this->_user = $user;
	}
	
	public function getTitle()
	{
		//mock here
		$title = 'Waste of a Rib';
		
		return $title;
	}
	
	public function getContent()
	{
		$content = 'This is very good CD, haha';
		
		return $content;
	}
}