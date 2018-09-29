<?php

namespace Library;

use Library\Database;
use Library\QueryBuilder;

class Table{

	public function db(){
		$pdo = new Database();
		return new QueryBuilder($pdo->getInstance());
		

	}

}