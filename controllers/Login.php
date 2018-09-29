<?php

namespace Controllers;

use Library\Controller;
use Library\Access;

class Login extends Controller {


	public function index(){

		if(isset($_POST['username']) && isset($_POST['password'])){

			$access = new Access();
			$userdata = $access->login($_POST);

			if($userdata !== FALSE){

				parent::session()->set('userdata')->add($userdata);
				
				header('location:/main');

			}


		}

		parent :: load() -> view("login");
		
	}

	public function facebook(){

		exit($_GET['code']);


	}

	public function logout(){

		session_destroy();
		header('location:/main');

	}



}