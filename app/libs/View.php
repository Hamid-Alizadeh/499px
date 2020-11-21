<?php

class View
{
    protected $viewFile;
    protected $viewData;
    public $pageTitle = SITENAME;

    public function __construct($viewFile, $viewData)
    {
        $this->viewFile = $viewFile;
        $this->viewData = $viewData;
    }

    public function render()
    {
        $viewFile = '.app/views/' . $this->viewFile . '.php';
        if (file_exists($viewFile)) {
            include $viewFile;
        }
    }
}
