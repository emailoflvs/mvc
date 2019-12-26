<?php

require_once 'app/core/model.php';

class User extends Model
{
    protected $table = "users";
    protected $fillable = array("name", "age");
    protected $db;

    public function __construct($dbconnect)
    {
        $this->db = $dbconnect;
    }

    /*
     * Получение списка пользователей в ассоциативном массиве
     * */
    public function getUsers()
    {
        $users = $this->db->query("SELECT * FROM " . $this->table);

        return $users->fetch_all(MYSQLI_ASSOC);
    }


    /*
     * Добавление пользователя
     * */
    public function createUser($name, $age)
    {
        $query = "insert into users values (null, '" . $name . "','" . $age . "')";

        return $this->db->query($query);
    }
}