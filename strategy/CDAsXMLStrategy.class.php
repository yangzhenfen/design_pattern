<?php

class CDAsXMLStrategy
{
	public function get(CDusesStrategy $cd)
	{
		$doc = new DomDocument();
		$root = $doc->createElement('CD');
		$root = $doc->appendChild($root);
		$title = $doc->createElement('TITLE',$cd->title);
		$title = $root->appendChild($title);
		$band = $doc->createElement('BAND', $cd->band);
		$band = $root->appendChild($band);
		
		return $doc->saveXML();
	}
}