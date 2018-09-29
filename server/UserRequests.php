<?php

namespace Server;

use Tables\UsersTable;
use Library\DataManipulate;

class UserRequests{

	private static $U;

	public function __construct(){

		self::$U = new UsersTable();

	}

	public function create(){

		if(!count($_POST) > 0){
			return false;
		}

		self::$U->put($_POST);
		echo 'DONE';


	}

	public function single(){
		
		if(!count($_POST) > 0){
			return false;
		}

		$return = self::$U->get($_POST,true);
		unset($return['password']);

		echo json_encode($return);

	}

	public function all(){
		$return = self::$U->get();

		foreach($return as $k=>$value){

			unset($value['password']);
			$return[$k] = $value;

		}

		echo json_encode($return);
	}
	

}