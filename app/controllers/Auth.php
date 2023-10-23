<?php

class Auth extends Controller
{

    public function register()
    {
        $this->view('register', 'auth/register');
    }
    public function login()
    {

        if (isset($_SESSION['login']) == true) {
            header('location:' . BASEURLJOBS . '/home');
        }
        $this->view('login', 'auth/login');
    }

    public function tryRegister()
    {
        $this->model('userModel')->register($_POST);
        header('Location:' . BASEURLJOBS . '/auth/login');
    }

    public function tryLogin()
    {
        $this->model('userModel')->login($_POST);
        header('Location:' . BASEURLJOBS . '/home/index');
    }

    public function logout(){
        $this->model('userModel')->logout();
    }
}
