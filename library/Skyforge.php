<?php

namespace Library;

class Skyforge {

	protected $PDO; # Variável de conexão com o banco de dados
	private $create;# Variável que contém a sintaxe dos CREATES
	private $name; # Variável que contém o nome da tabela ou banco de dados
	private $fields;

	public function __construct($PDO){

		$this->PDO = $PDO;
		$this->name = '';
		$this->fields = array();

	}

	#Função para criar o banco de dados
	public function database(){

		$this->create = "CREATE DATABASE IF NOT EXISTS ".DATABASENAME."; CREATE USER '".DATABASEUSER."'@'localhost' IDENTIFIED BY '".DATABASEPASSWORD."';
                GRANT ALL ON `".DATABASENAME."`.* TO '".DATABASEUSER."'@'localhost';
                FLUSH PRIVILEGES;";

	}

	public function field($name,$type,$length,$notnull=TRUE,$default=''){

		$this->fields[] = "$name $type($length)".($notnull === TRUE?' NOT NULL ':'')

	}

	public function forge(){

		if($this->create != ''){
			return $this->PDO->exec($this->create);
		}

	}

	#Função para criar tabelas no banco de dados
	public function table(){

		$this->create = "CREATE TABLE {$this->name}";
		$this->create .= "(id_{$this->name} INT(11) AUTO_INCREMENT PRIMARY KEY,".implode(',', $this->fields).');';

		return $this;
	}

	#Função para definir o nome da tabela ou banco de dados
	public function setName($name){

		$this->name = $name;

		return $this;

	}







}