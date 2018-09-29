<?php

namespace Library;

class Database{

	protected $PDO;

	public function __construct(){

		$this->PDO = new \PDO("mysql:dbname=darius;host=localhost", "boo","root");

	}

	public function getInstance(){

		return $this->PDO;

	}


}