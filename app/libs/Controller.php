<?php

class Controller
{
    protected $view;

    public function go($controller, $action, $params = '')
    {
        $p = ($params) ? '&p=' . $params : '';
        $goingTo = "Location: index.php?c=" . $controller . "&a=" . $action . $p;

        header($goingTo);
    }

    public function goBack()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
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
