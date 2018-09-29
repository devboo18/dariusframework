<?php

namespace Tables;

use Library\Table;
use Interfaces\TableInterface;

class ProjectsTable extends Table implements TableInterface{
	

	public function get($table,$condition = array()){

		$db = parent::db();

		$data = $db->from($table)->where($condition)->get();

		return $data;
		
	}

	public function put($table,$data = array()){

		$db = parent::db();

		$db->from($table)->insert($data);

		return $db->lastInsertedID();


	}

	public function save($table,$data = array(),$condition = array()){

		$db = parent::db();

		$db->from($table)->where($condition)->update($data);

	}


}
