<?php

class Company extends Controller
{

    public function __construct()
    {
        if (!$_SESSION['login']) {
            header("Location: " . BASEURLJOBS . "/auth/login");
        }
    }

    // public function index($CompanyID)
    // {
    //     $data['jobs'] = $this->model('companyModel')->getOurJob($CompanyID);
    //     $this->view('Company', 'company/index', $data);
    // }
}
