<?php

abstract class baseDAO
{
	private $_connection;
	
	public function __construct()
	{
		$this->__connectToDB(DB_USER, DB_PASS, DB_HOST, DB_DATABASE);
	}
	
	private function __connectToDB($user, $pass, $host, $database)
	{
		$this->_connection = mysql_connect($host, $user, $pass);
		mysql_select_db($database, $this->_connection);
	}
	
	public function fetch($value, $key = null)
	{
		if (is_null($key)) {
			$key = $this->_primaryKey;
		}
		
		$sql = "select * from {$this->_tableName} where {$key}='{$value}'";
		$results = mysql_query($sql,$this->_connection);
		
		$rows = array();
		
		while ($result = mysql_fetch_array($results)) {
			$rows[] = $result;
		}
		
		return $rows;
	}
	
	public function update($keyedArray)
	{
		$sql = "update {$this->_tableName} set ";
		
		$updates = array();
		foreach ($keyedArray as $column=>$value) {
			$updates[] = "{$column}='{$value}' ";
		}
		$sql .= implode(',', $updates);
		$sql .= "where {$this->_primaryKey}='{$keyedArray[$this->_primaryKey]}'";
		
		mysql_query($sql, $this->_connection);
	}
}