<?php

class Route {

    public static function start()
    {
        $checkuri = explode('/', $_SERVER['REQUEST_URI']);

        $controllername = $checkuri[2]. 'Controller';
        $controller = __DIR__. '/../controllers/'. $checkuri[2]. 'Controller.php';
        $model = __DIR__. '/../models/'. $checkuri[2]. 'Model.php';

        $action = (isset($checkuri[3]))? $checkuri[3] : 'index';

        if(file_exists($controller)){
            require_once $controller;
            if(file_exists($model)){
                require_once $model;
            }
            $start = new $controllername;
            $start->$action();
        }else{
            echo 'no found controller';
        }
    }
}