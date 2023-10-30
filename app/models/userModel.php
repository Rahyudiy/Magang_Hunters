<?php

class userModel {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function register($data){
        $query = 'INSERT INTO ' . $this->table . '(Email,UserName,Password) VALUES(:Email,:UserName,:Password)';
        $hashedPass = password_hash($data['Password'], PASSWORD_DEFAULT);
        $this->db->query($query);
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('UserName', $data['UserName']);
        $this->db->bind('Password', $hashedPass);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function login($data){
        $email = $data['Email'];
        $query = 'SELECT * FROM ' . $this->table . ' WHERE Email = :Email';
        $this->db->query($query);
        $this->db->bind(':Email', $email);
        $user = $this->db->single();
        $passPost = $data['Password'];
        $passUser = $user['Password'];
        if(password_verify($passPost, $passUser)){
            $_SESSION['login']=true;
            $_SESSION['role'] = $user['UserType'];
        }
    }

    public function logout(){
        session_destroy();
        header('location:' . BASEURLJOBS . '/auth/login');
        exit;
    }
}