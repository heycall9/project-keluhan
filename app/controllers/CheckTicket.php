<?php

class CheckTicket extends Controller{
    public function index(){
        $data['judul'] = 'Check Ticket';
        $this-> view('templates/header',$data);
        $this-> view('checkTicket/index');
        $this-> view('templates/footer');
    }
    
}