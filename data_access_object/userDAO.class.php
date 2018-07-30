<?php

class userDAO extends baseDAO
{
	protected $_tableName = 'userTable';
	protected $_primaryKey = 'id';
	
	public function getUserByFirstName($name)
	{
		$result = $this->fetch($name,'firstName');
		return $result;
	}
}