<?php

namespace Library;

class DataManipulate {

	private $data;

	public function prepareArrayToDB($array, $fields = null){

		if($fields === null){
			$this->data =  $array;
			return $this;
		}

		foreach ($array as $key => $value) {

			if(in_array($key, explode(',', $fields))){

				$this->data[$key] = $value;

			}

		}

		return $this;

	}

	public function postUpdates($post,$updates){

		foreach ($updates as $key => $value) {

			$post[$key] = ($key == 'password')?$this->pwdEncrypt($value):$value;

		}

		$this->data = $post;

		return $this;

	}

	private function pwdEncrypt($pwd){

		return password_hash($pwd,PASSWORD_DEFAULT);

	}


	public function do(){

		return $this->data;

	}

}