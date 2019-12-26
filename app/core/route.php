<?php

/*
* Класс-маршрутизатор для определения запрашиваемой страницы.
* создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/

class Route
{

    static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'Index';
        $functionName = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }

        // получаем имя функции
        if (!empty($routes[2])) {
            $functionName = $routes[2];
        }

        //подключаем контроллер
        $controllerPath = "app/controllers/controller" . $controllerName . ".php";
        if (file_exists($controllerPath)) {
            include $controllerPath;

            // создаем контроллер
            $class = "Controller" . $controllerName . "";
            $controller = new $class;

            if (method_exists($controller, $functionName)) {
                // вызываем действие контроллера
                $controller->$functionName();
            } else {
                // здесь можно добавить исключение, но ставлю ошибку для упрощения
                Route::ErrorPage404();
            }

        } else {
            // здесь можно добавить исключение, но ставлю ошибку для упрощения
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}
