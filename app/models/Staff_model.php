<?php

class Staff_model
{
    // private $table = 'staff';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPimpinan()
    {
        $query = "SELECT id, fullname FROM staff WHERE role = 'pimpinan'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getStaffById($idPimpinan)
    {
        $query = "SELECT * FROM staff WHERE id = $idPimpinan";
        $this->db->query($query);
        return $this->db->single();
    }
}
