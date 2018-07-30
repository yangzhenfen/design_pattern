<?php

class buyCDNotifyStreamObserver
{
	public function update(CD $cd)
	{
		$activity = "The CD named {$cd->title} by ";
		$activity .= "{$cd->band} was just purchased.";
		activityStream::addNewItem($activity);
	}
}