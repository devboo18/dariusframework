<?php

namespace Tables;

use Library\Table;
use Interfaces\TableInterface;

class ClientsTable extends Table implements TableInterface{
	
	private $table;

	public function __construct(){

		$this->setTableName('clients');

	}


	public function setTableName($TableName){

		$this->table = $TableName;
		
	}


	public function get($condition = array()){

		$db = parent::db();

		$data = $db->from($this->table)->where($condition)->get()->resultArray();

		return $data;
		
	}

	public function put($data = array()){

		$db = parent::db();

		$db->from($table)->insert($data);

		return $db->lastInsertedID();


	}

	public function save($data = array(),$condition = array()){

		$db = parent::db();

		$db->from($table)->where($condition)->update($data);

	}


}
