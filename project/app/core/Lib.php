<?php
class Lib {
    public function getPublic()
    {
        $checkuri = explode('/', $_SERVER['REQUEST_URI']);
        $action = (isset($checkuri[1]))? $checkuri[1] : null;
        return $action;
    }

    public function getAction()
    {
        $checkuri = explode('/', $_SERVER['REQUEST_URI']);
        $action = (isset($checkuri[3]))? $checkuri[3] : null;
        return $action;
    }

    public function getValue()
    {
        $checkuri = explode('/', $_SERVER['REQUEST_URI']);
        $value = (isset($checkuri[4]))? $checkuri[4] : null;
        return $value;
    }

    public function  view($viewname, $params)
    {
        $getpublic = new Lib();
        $public = $getpublic->getPublic();
        $checkuri = explode('/', $_SERVER['REQUEST_URI']);

        $uri = $checkuri[2];

        $withparams = $params;
        $name = __DIR__. '/../views/'. $viewname. '.php';
        include __DIR__. '/../views/MainView.php';
    }
}