<?php

class dao
{
		protected $values = array();
		protected $log_save_path;
		
		public function __construct($qualifier = NULL)
		{
			$this->log_save_path = $_SERVER['DOCUMENT_ROOT'].'/logs/sql_'.date('YmdH').'.log';
			
			if (!is_null($qualifier)) {
				$conditional = array();
				
				if (is_numeric($qualifier)) {
					$conditional = array('id'=>$qualifier);
				} else if (is_array($qualifier)) {
					$conditional = $qualifier;
				} else {
					throw new Exception('Invalid type of qualifier given');
				}
				
				$this->populate($conditional);
			}
		}
		
		public function __set($name, $value)
		{
			$this->values[$name] = $value;
		}
		
		public function __get($name)
		{
			if (isset($this->values[$name])) {
				return $this->values[$name];
			} else {
				return null;
			}
		}
		
		protected function populate($conditional)
		{
			
			$connection = db::factory('mysql');
			
			$sql = "SELECT * FROM {$this->table} WHERE";
			
			$qualifier = '';
			
			foreach ($conditional AS $column=>$value) {
				if (!empty($qualifier)) {
					$qualifier .= ' and ';
				}
				$qualifier .= " `{$column}`='" . $connection->clean($value) . "' ";
			}
			
			$sql .= $qualifier;
			$valuearray = $connection->getArray($sql);
			
			file_put_contents($this->log_save_path,'['.date('Y-m-d H:i:s').']'.json_encode($valuearray)."\r\n",FILE_APPEND);
			
			if (!isset($valuearray[0])) {
				$valuearray[0] = array();
			}
			
			file_put_contents($this->log_save_path,'['.date('Y-m-d H:i:s').']'.$sql."\r\n",FILE_APPEND);
			
			foreach ($valuearray[0] as $name=>$value) {
				$this->$name = $value;
			}
			
		}
		
		public function save()
		{
			if (!$this->id) {
				$this->create();
			} else {
				$this->update();
			}
		}
		
		protected function create()
		{
			$connection = db::factory('mysql');
			
			$sql = "INSERT INTO {$this->table} (`";
			$sql .=implode("`, `", array_keys($this->values));
			$sql .="`) VALUES ('";
			
			$clean = array();
			foreach ($this->values AS $value) {
				$clean[] = $connection->clean($value);
			}
			
			$sql .= implode("', '",$clean);
			$sql .="')";
			
			$this->id = $connection->insertGetID($sql);
		}
		
		protected function update()
		{
			$connection = db::factory('mysql');
			
			$sql = "UPDATE {$this->table} SET ";
			
			$update = array();
			foreach ($this->values AS $key=>$value) {
				$updates[] = "`{$key}`='".$connection->clean($value)."' ";
			}
			
			$sql .= implode(', ', $updates);
			$sql .= "WHERE id={$this->id}";
			
			file_put_contents($this->log_save_path,'['.date('Y-m-d H:i:s').']'.$sql."\r\n",FILE_APPEND);
			
			$connection->execute($sql);
		}
}