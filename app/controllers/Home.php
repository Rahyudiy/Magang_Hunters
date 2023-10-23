<?php

class Home extends Controller
{
    public function index()
    {

        if (!$_SESSION['login']) {
            header("Location: " . BASEURLJOBS . "/auth/login");
        }

        $data['jobs'] = $this->model('jobModel')->getAllJob();
        $this->view('Home', 'home/index', $data);
        // Menghitung akumulasi waktu dari start date dan end date
        $startDate = strtotime($data['jobs']['startDate']);
        $endDate = strtotime($data['jobs']['endDate']);
        $diffInSeconds = $endDate - $startDate;

        // Mengonversi selisih waktu ke bulan
        $diffInMonths = floor($diffInSeconds / (30 * 24 * 60 * 60));
    }


    public function detail($JobID)
    {
        if (!$_SESSION['login']) {
            header("Location: " . BASEURLJOBS . "/auth/login");
        }
        
        $data['jobs'] = $this->model('jobModel')->getJobById($JobID);
        $this->view('Detail', 'home/detail', $data);
    }
}
