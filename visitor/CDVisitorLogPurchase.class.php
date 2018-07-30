<?php

class CDVisitorLogPurchase
{
	public function visitCD($cd)
	{
		$logline = "{$cd->title} by {$cd->band} was purchased for {$cd->price}";
		$logline .= "at" . date('r') ."\n";
		
		file_put_contents('logs/purchases.log', $logline, FILE_APPEND);
	}
}