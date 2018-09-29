<?php

namespace Tables;

use Library\Table;
use Interfaces\TableInterface;

class UsersTable extends Table {
	
	private $table;

	public function __construct(){

		$this->setTableName('users');

	}


	public function setTableName($TableName){

		$this->table = $TableName;
		
	}

	public function get($condition = array(),$single = false){

		$db = parent::db();

		$data = $db->from($this->table)
		->where($condition)->get();
		if($single)
			return $data->rowArray();
		return $data->resultArray();
		
	}

	public function put($data = array()){

		return parent::db()->insert($this->table,$data);

	}

	public function save($data = array(),$condition = array()){

		$db = parent::db();

		$db->from($this->table)->where($condition)->update($data);

	}


}
