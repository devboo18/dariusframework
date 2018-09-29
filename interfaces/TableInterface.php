<?php

namespace Interfaces;

interface TableInterface{

	public function setTableName($tableName);
	public function get($condition = array());
	public function put($data = array());
	public function save($data = array(),$condition = array());

}