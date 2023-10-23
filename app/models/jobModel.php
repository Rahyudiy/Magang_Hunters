<?php

class jobModel
{
    private $table = 'joblistings';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJob()
    {
        $query = 'SELECT * FROM ' . $this->table . ' INNER JOIN company ON ' . $this->table . '.CompanyID = company.CompanyID';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getJobById($JobID)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN company ON ' . $this->table . '.CompanyID = company.CompanyID WHERE JobID=:JobID');
        $this->db->bind('JobID', $JobID);
        return $this->db->single();
    }
}
