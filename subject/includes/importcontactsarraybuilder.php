<?php
class importcontactsarraybuilder
{
	protected $importedstring;
	
	public function __construct($importedstring)
	{
		$this->importedstring = $importedstring;
	}
	
	/*public function bulidarray()
	{
		$lines = explode("\n", $this->importedstring);
		$keys = explode(',', array_shift($lines));
		
		$array = array();
		
		foreach ($lines as $line) {
			if (!empty($line)) {
				$keyed = array_combine($keys, explode(',', $line));
				$array[] = $keyed;
			}
		}
		
		return $array;
	}*/
	
	public function buildcollection($type)
	{
		$classname = "{$type}importcontactsarraydelegate";
		
		$delegate = new $classname;
		$delegate->setcontents($this->importedstring);
		$array = $delegate->getArray();
		
		return $array;
	}
}
