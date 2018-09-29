<?php

namespace Library;

class ViewLoader {

	private $content;
	private $template;
	private $fixed_top;
	private $fixed_bot;
	private $view;

	public function __construct(){

		$this->content = null;
		$this->template = null;
		$this->fixed_bot = null;
		$this->fixed_top = null;

	}

	public function load($content){

		$this->content = $content;

		return $this;
	
	}


	public function newFragment($fragmentname, $array_data = array()){

		$path = getcwd().APPVIEWFRAGMENTS.''.$fragmentname.'.php';

		extract($array_data);

		include($path);

		return $this;
	}

	public function view($viewname,$array_data = array()){

		$path = getcwd().APPVIEW.$viewname.'.php';

		extract($array_data);

		include($path);

		return $this;
	}

	public function getComponent($component,$params = null){

		$path = getcwd().APPCOMPONENTS.$component.'.php';		

		extract($params);

		include($path);

	}

	public function getAction($action_name,$params){
		
		$path = getcwd().APPCOMPONENTS.'actions/'.$action_name.'_action.php';		
		
		extract($params);

		include($path);

	}


	public function render(){

		echo $this->content;

	}



}