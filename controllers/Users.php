<?php

namespace Controllers;

use Library\Controller;
use Tables\UsersTable;

class Users extends Controller {

	public function index(){

		$u = new UsersTable();
		$data['usuarios'] = $u->get();
		
		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Users/users',$data)
			->newFragment('bot');

	}

	public function novoUsuario(){

		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Users/novoUsuario')
			->newFragment('bot');

	}

	public function editarUsuario($idusuario){

		$u = new UsersTable();

		$condition['id_usuario'] = $idusuario['idusuario'];


		$data = $u->get('usuarios',$condition)->rowArray();


		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Users/editarUsuario',$data)
			->newFragment('bot');

	}

	public function editarCredenciais($idusuario){

		$u = new UsersTable();

		$condition['id_usuario'] = $idusuario['idusuario'];


		$data = $u->get('acessos',$condition)->rowArray();


		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Users/credenciais',$data)
			->newFragment('bot');
			
	}

	// public function user($params){

	// 	echo $params;


	// }

}