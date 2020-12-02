<?php

class UserController extends Controller
{
    public function login()
    {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

    public function register()
    {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
}
