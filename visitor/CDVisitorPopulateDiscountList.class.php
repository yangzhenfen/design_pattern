<?php

class CDVisitorPopulateDiscountList
{
	public function visitCD($cd)
	{
		if ($cd->price < 10) {
			$this->_popualteDiscountList($cd);
		}
	}
	
	protected function _popualteDiscountList($cd)
	{
		//stub connects to sqlite and logs
	}
}