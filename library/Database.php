<?php

namespace Library;

use Library/Skyforge;

class Database{

	protected $PDO;

	public function __construct(){




		$this->PDO = new \PDO("mysql:dbname=".DATABASENAME.";host=".DATABASEHOST."",DATABASEUSER ,DATABASEPASSWORD);

	}

	public function getInstance(){

		return $this->PDO;

	}


}