<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->setView('home');
        $this->view->render();
    }

    public function help()
    {
        $this->setView('help');
        $this->view->render();
    }
}
