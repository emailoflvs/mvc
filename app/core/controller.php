<?php


class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}

	/*
	 * Функция, вызываемая по умолчанию
	 * */
	function index()
	{

	}
}
