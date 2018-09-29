<?php

namespace Controllers;

use Library\Controller;
use Tables\Users;

class Main extends Controller {

	public function index(){

		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('main')
			->newFragment('bot');
		
	}

}