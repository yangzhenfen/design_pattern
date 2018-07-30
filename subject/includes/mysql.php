<?php
class mysql extends db implements singletoninterface
{
	protected static $instance = null;
	protected $link;
	
	public static function getInstance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}
	
	protected function __construct()
	{
		$user = 'root';
		$pass = '';
		$host = 'localhost';
		$db  = 'contacts';
		
		$this->link = mysqli_connect($host, $user, $pass, $db);
	}
	
	public function clean($string)
	{
		return mysqli_real_escape_string($this->link, $string);
	}
	
	public function getArray($query)
	{
		$result = mysqli_query($this->link, $query);
		
		$return = array();
		
		if ($result) {
			while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
				$return[] = $row;
			}
		}
		
		return $return;
	}
	
	public function execute($query)
	{
		mysqli_query($this->link, $query);
	}
	
	public function insertGetID($query)
	{
		$this->execute($query);
		
		return mysqli_insert_id($this->link);
	}
}