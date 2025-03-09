<?php


class Usermodal{

    private $db;

    public function __construct()
    {
        $this->db = new Database();

    }

    public function getAlldata(){

        $this->db->query("SELECT * FROM members");
        $data = $this->db->getAllres();
        return $data;
    }
}