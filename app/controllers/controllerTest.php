<?php

include_once "app/core/controller.php";
include_once "app/core/view.php";


class ControllerTest extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}

	function index()
	{

        // Отправляем данные на страницу
        $this->view->generate('testView.php', 'fonView.php');

	}

    function test()
    {
        // Отправляем данные на страницу
        $data = "Вызов другой функции по выбранному контроллеру";
        $this->view->generate('testView.php', 'fonView.php', $data);
    }

}
