<?php

class CDMakeXML
{
	public static function create(CD $cd)
	{
		$doc = new DomDocument();
		
		$root = $doc->createElement('CD');
		$root = $doc->appendChild($root);
		
		$title = $doc->createElement('TITLE', $cd->title);
		$title = $root->appendChild($title);
		
		$band = $doc->createElement('BAND', $cd->band);
		$band = $root->appendChild($band);
		
		$tracks = $doc->createElement('TRACKS');
		$tracks = $root->appendChild($tracks);
		
		foreach ($cd->tracks as $track) { 
			$track = $doc->createElement('TRACK',$track);
			$track = $tracks->appendChild($track);
		}
		
		return $doc->saveXML();
		
	}
}