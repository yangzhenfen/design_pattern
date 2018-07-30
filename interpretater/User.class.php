<?php

class User
{
	protected $_username = '';
	
	public function __construct($username)
	{
		$this->_username = $username;
	}
	public function getProfilePage()
	{
		// In lieu of getting the info from the DB, we mock here
		$profile = "<h2> I like Never Again! </h2>";
		$profile .= "I love all of their songs. My favorite CD :<br/>";
		$profile .= "{{myCD.getTitle}}!!<br/>";
		$profile .= "{{myCD.getContent}}.";
		
		return $profile;
	}
}