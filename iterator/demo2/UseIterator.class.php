<?php
namespace demo2;

class UseIterator
{
	public static function index()
	{
		$ag = new ConcreteAggregate(10);
		$it_sort = new ConcreteIteratorSort($ag);
		$it_sort->first();
		for (;$it_sort->isDone() == false; $it_sort->next()) {
			echo $it_sort->currentItem().'***';
		}
		echo '<br/>';
		
		$it_unsort = new ConcreteIteratorUnSort($ag);
		$it_unsort->first();
		
		for (;$it_unsort->isDone() == false; $it_unsort->next()) {
			echo $it_unsort->currentItem().'***';
		}
	}
}