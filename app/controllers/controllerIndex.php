<?php

include_once "app/core/controller.php";
include_once "app/core/view.php";

include_once "app/models/modelIndex.php";

class ControllerIndex extends Controller
{

    function __construct()
    {
        $this->model = new ModelIndex();
        $this->view = new View();
    }

	function index()
	{
        // Если поступили данные из формы, передаем их для доббавления в базу
        if (!empty($_POST) && isset($_POST['add_user']))
            $this->model->createUser($_POST);

        // Получаем список пользователей
        $data = $this->model->getData();

        // Отправляем данные на страницу
        $this->view->generate('indexView.php', 'fonView.php', $data);
	}

}