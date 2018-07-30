<?php
class contactgroupscollection extends daocollection implements daocollectioninterface
{
	protected $contact;
	
	public function __construct(dao $contact)
	{
		$this->contact = $contact;
	}
	
	public function getwithdata()
	{
		$connection = db::factory('mysql');
		
		$sql = "SELECT * FROM contactgroup WHERE contactid=" . $this->contact->id . ' ORDER BY label';
		$results = $connection->getArray($sql);
		
		$this->populate($results, 'contactgroup');
	}
}