<?php

class CreateTicket extends Controller{
    public function index(){
        $data['judul'] = 'Create Ticket';
        $this-> view('templates/header',$data);
        $this-> view('createTicket/index');
        $this-> view('templates/footer');
        $this-> view();
    }

    public function send()
    {
        if($this->model('CreateTicket_model')->createTicket($_POST) > 0){
            header('Location: '. BASEURL .'/createTicket');
            exit;
        }
    }
}