<?php

class Auth extends Controller
{

    public function __construct()
    {
        if (isset($_SESSION['login']) == true) {
            header('location:' . BASEURLJOBS . '/home');
        }
    }
    public function register()
    {
        require_once 'app/view/templates/header.php';
        $this->view('register', 'auth/register');
        require_once 'app/view/templates/footer.php';
    }
    public function login()
    {
        require_once 'app/view/templates/header.php';
        $this->view('login', 'auth/login');
        require_once 'app/view/templates/footer.php';
    }

    public function tryRegister()
    {
        $this->model('userModel')->register($_POST);
        header('Location:' . BASEURLJOBS . '/auth/login');
    }

    public function tryLogin()
    {
        $this->model('userModel')->login($_POST);
        if ($_SESSION['role'] == 'admin') {
            header('Location:' . BASEURLJOBS . '/admin/index');
        }
        elseif ($_SESSION['role']=='company'){
            header('Location:' . BASEURLJOBS . '/company/index');
        }else{
            header('Location:' . BASEURLJOBS . '/home/index');
        }
    }

    public function logout()
    {
        $this->model('userModel')->logout();
    }
}
