<?php

class UserController extends Controller
{
    public function login()
    {
        $userModel = $this->setModel('User');
        $user = $userModel->getByEmail($_POST['email']);

        if (!$user) {
            $this->go('home', 'login');
        }

        if (password_verify($_POST['password'], $user->password)) {
            $_SESSION["userId"] = $user->id;
            $_SESSION["userIsAdmin"] = $user->is_admin;
            $_SESSION["userName"] = $user->name;
            $_SESSION["userEmail"] = $user->email;
        }

        if (isset($_SESSION["userId"]) && $_SESSION['userIsAdmin']) {
            $this->go('admin', 'dashboard');
        } else if (isset($_SESSION["userId"])) {
            $this->go('user', 'profile');
        } else {
            $this->go('home', 'login');
        }
    }

    public function register()
    {
        print_r($_POST);
    }

    public function profile()
    {
        echo "Welcome to your profile";
    }

    public function logout()
    {
        unset($_SESSION["userId"]);
        unset($_SESSION["userIsAdmin"]);
        unset($_SESSION["userName"]);
        unset($_SESSION["userEmail"]);
        $this->go("home", "login");
    }
}
