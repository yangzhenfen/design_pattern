<?php

class MixtapeCD extends CD
{
	public function __clone()
	{
		$this->title = 'Mixtape';
	}
}
?>