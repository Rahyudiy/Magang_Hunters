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
        require_once 'app/view/templates/header.php';
        $this->view('Admin', 'admin/index');
        require_once 'app/view/templates/footer.php';
    }
}
