<?php

namespace Library;

use Library\ViewLoader;
use Library\Database;
use Library\SessionHandler;

class Controller{

	public function load(){

		return new ViewLoader();

	}

	public function session(){

		return new SessionHandler();

	}

	
}