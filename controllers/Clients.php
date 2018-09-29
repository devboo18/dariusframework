<?php

namespace Controllers;

use Library\Controller;
use Tables\ClientsTable;

class Clients extends Controller {

	public function index(){
		
		$c = new ClientsTable();
		$data['clients'] = $c->get();

		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Clients/clients',$data)
			->newFragment('bot');

	}

	public function novoCliente(){

		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Clients/novocliente')
			->newFragment('bot');

	}

	public function editarCliente($idcliente){

		$u = new UsersTable();

		$condition['id_cliente'] = $idcliente['idcliente'];

		$data = $u->get('clientes',$condition)->rowArray();


		parent :: load()
			->newFragment('top')
			->newFragment('navbar-dashboard')
			->view('Clients/editarcliente',$data)
			->newFragment('bot');

	}


	// public function user($params){

	// 	echo $params;


	// }

}