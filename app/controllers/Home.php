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
        require_once 'app/view/templates/headerNav.php';
        $this->view('Home', 'home/index', $data);
        require_once 'app/view/templates/footer.php';
    }


    public function detail($JobID)
    {
        $data['jobs'] = $this->model('jobModel')->getJobById($JobID);
        require_once 'app/view/templates/headerNav.php';
        $this->view('Detail', 'home/detail', $data);
        require_once 'app/view/templates/footer.php';
    }
}
