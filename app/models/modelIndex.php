<?php

require_once 'app/models/User.php';
require_once 'app/core/model.php';

class ModelIndex extends Model
{
    protected $dbConnect;

    public function __construct()
    {
        include("config.php");

        //открыываем соединение с БД
        $this->dbConnect = new mysqli($host, $username, $password, $dbname);

    }

    /*
     * Полоучаем данные по пользователям
     * */
    public function getData()
    {
        $usersData = new User($this->dbConnect);

        $users = $usersData->getUsers();

        return $users;
    }

    /*
     * Добавляем данные из формы
     * */
    public function createUser($user)
    {
        //проверяем валидность введенных данных
        $input_text = strip_tags($user['user']);
        $input_text = htmlspecialchars($input_text);
        $name = $input_text;

        $input_text = strip_tags($user['age']);
        $input_text = htmlspecialchars($input_text);
        $age = $input_text;


        $newUser = new User($this->dbConnect);

        //Создаем нового пользователя
        $users = $newUser->createUser($name, $age);

        return $users;
    }
}
