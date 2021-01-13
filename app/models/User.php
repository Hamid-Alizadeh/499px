<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";

        $this->db->query($sql);

        $this->db->bind(":email", $email);

        return $this->db->single();
    }
    
    public function getById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";

        $this->db->query($sql);

        $this->db->bind(":id", $id);

        return $this->db->single();
    }
}
