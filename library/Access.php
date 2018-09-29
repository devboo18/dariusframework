<?php 

namespace Library;

use Tables\UsersTable;

class Access{
	
	public function login($post){

		$u = new UsersTable();

		$condition['username'] = $post['username']; 
		
		$query = $u->get($condition,true);

		if(count($query) > 0){
			
			if(isset($query['username'])){

				if(password_verify($post['password'],$query['password'])){

					unset($query['password']);
					return $query;

				}

			}

		}

		return false;

	}

}