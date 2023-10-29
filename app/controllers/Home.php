<?php

class Home extends Controller
{
    public function __construct()
    {
        if (!$_SESSION['login']) {
            header("Location: " . BASEURLJOBS . "/auth/login");
        }
    }
    
    public function index()
    {
        $data['jobs'] = $this->model('jobModel')->getAllJob();
        $this->view('Home', 'home/index', $data);
    }


    public function detail($JobID)
    {    
        $data['jobs'] = $this->model('jobModel')->getJobById($JobID);
        $this->view('Detail', 'home/detail', $data);
    }
}
