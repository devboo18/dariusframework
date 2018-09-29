<?php

namespace Server;

use Tables\ClientsTable;

class ClientsRequests{
	
	public function novo_cliente(){

		$u = new ClientsTable();

		$response['message'] = null;

		$id_usuario = $u->put('clientes',$_POST);
		$response['message'].="<b>[CLIENTE]:</b> Um novo cliente foi cadastrado<br>";


		echo json_encode($response);
		
	}


	public function editar_cliente($id_cliente){
		$u = new ClientsTable();

		$u->save('clientes',$_POST,array('id_cliente'=>$id_cliente['idcliente']));

		$response['message'] = null;
		$response['message'].="<b>[CLIENTE]:</b> Um cliente foi alterado<br>";

		echo json_encode($response);

	}



}