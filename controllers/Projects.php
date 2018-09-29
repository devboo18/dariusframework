<?php

namespace Controllers;

use Library\Controller;
use Tables\ProjectsTable;

class Projects extends Controller {
	
	public function index(){

		$p = new ProjectsTable();

		$data['projetos'] = $p->get('projetos')->resultArray(); 

		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Projects/projects',$data)
			->newFragment('bot');

	}

	public function projeto($url_data){

		$p = new ProjectsTable();

		$data['projeto'] = $p->get('projetos',array('id_projeto'=>$url_data['idprojeto']))->rowArray(); 

		parent :: load()
			->newFragment('top')
			// ->newFragment('navbar-dashboard')
			->view('Projects/project',$data)
			->newFragment('bot');


	}

	public function novoProjeto(){

		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Projects/novoprojeto')
			->newFragment('bot');

	}

}