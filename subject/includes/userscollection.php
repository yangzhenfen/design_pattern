<?php
class userscollection extends daocollection implements daocollectioninterface
{
	public function __construct(dao $currentuser)
	{
		$this->currentuser = $currentuser;
	}
	
	public function getwithdata()
	{
		$connection = db::factory('mysql');
		
		$sql = "SELECT * FROM user ORDER BY username";
		
		$results = $connection->getArray($sql);
		
		$this->populate($results, 'user');
	}
}