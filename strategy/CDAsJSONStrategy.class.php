<?php
class CDAsJSONStrategy
{
	public function get(CDusesStrategy $cd)
	{
		$json = array();
		$json['CD']['title'] = $cd->title;
		$json['CD']['band'] = $cd->band;
		
		return json_encode($json);
	}
}
