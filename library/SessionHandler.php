<?php

namespace Library;

class SessionHandler {
	
	private $sessionID;

	public function __construct(){



	}

	public function set($sessionID){

		$this->sessionID = $sessionID;

		return $this;

	}



	public function add($array_data){

		$_SESSION[$this->sessionID] = $array_data;

	}


}