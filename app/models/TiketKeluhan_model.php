<?php

class TiketKeluhan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTiketById($idTiket)
    {
        $this->db->query('SELECT * FROM ticket t 
        JOIN mahasiswa m ON t.id_mahasiswa 
        WHERE t.id =' . $idTiket);
        return $this->db->single();
    }

    public function getId($idTiket)
    {
        $query = "SELECT id FROM ticket WHERE id = $idTiket";
        $this->db->query($query);
        return $this->db->single();
    }

    public function teruskan($idTiket, $idPimpinan)
    {
        $query = "UPDATE ticket SET id_staff = $idPimpinan WHERE id = $idTiket";
        $this->db->query($query);
        $this->db->execute();
		return $this->db->rowCount();
    }
}

