<?php

class Controller
{
    protected $view;

    public function go($controller, $action)
    {
        $goingTo = "Location: index.php?c=" . $controller . "&a=" . $action;

        header($goingTo);
    }

    public function setView($viewFile, $viewData = [])
    {
        $this->view = new View($viewFile, $viewData);
        return $this->view;
    }

    public function setModel($model)
    {
        $model = ucfirst($model);
        require_once  './app/models/' . $model . '.php';
        return new $model;
    }
}
