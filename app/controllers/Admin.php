<?php

class Admin extends Controller
{
    public function __construct()
    {
        if (!$_SESSION['login']) {
            header("Location: " . BASEURLJOBS . "/auth/login");
        }
    }

    public function index()
    {
        $this->view('Admin', 'admin/index');
    }
}
