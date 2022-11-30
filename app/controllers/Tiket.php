<?php

class Tiket extends Controller
{
    public function index()
    {
        $data["judul"] = "tiket";
        $this->view("templates/header", $data);
        $this->view("tiket/detail", $data);
        $this->view("templates/footer");
    }
    
    public function detail()
    {
        $idTiket = $_GET["id"];
        $data["judul"] = "Detail Tiket";
        $data["ticket"] = $this->model("TiketKeluhan_model")->getTiketById($idTiket);
        $data["pimpinan"] = $this->model("Staff_model")->getPimpinan();
        $this->view("templates/header_staff", $data);
        $this->view("tiket/detail", $data);
        $this->view("templates/footer");
    }
}
