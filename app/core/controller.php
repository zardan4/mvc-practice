<?php

class Controller {
	public $model;
	public $view;
	
	public function __construct()
	{
		$this->view = new View();
	}
	
    // default action
	public function action_index()
	{
	}
}