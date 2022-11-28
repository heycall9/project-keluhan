<?php 

class CreateTicket_model {
    private $table = "ticket";
    private $db;

    public function __construct()
    {
        $this-> db = new Database;
    }
    public function createTicket($data){       
       $data['id_mahasiswa'] = 1;
       $query = "INSERT INTO ticket values
                 ('', :id_mahasiswa, :fullname, :topic, :subject, :details, '')";
       $this->db->query($query);
       $this->db->bind('id_mahasiswa', $data['id_mahasiswa']);
       $this->db->bind('fullname', $data['fullname']);
       $this->db->bind('topic', $data['topic']);
       $this->db->bind('subject', $data['subject']);
       $this->db->bind('details', $data['details']);

       $this->db->execute();

       return $this->db->rowCount();

    }

}