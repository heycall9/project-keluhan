<?php

class TeruskanTiket extends Controller
{
    public function index()
    {
        $data["judul"] = "teruskan tiket";
        $data["tiket"] = $this->model("TiketKeluhan_model")->getTiketById(
            $_GET["id"]
        );
        $this->view("templates/header", $data);
        $this->view("tiket/detail", $data);
        $this->view("templates/footer");
    }

    public function showTeruskanTiket()
    {
        if( $this->model("Staff_model")->getPimpinan() > 0 ) {
            $data["judul"] = "teruskan tiket";
            $data["pimpinan"] = $this->model("Staff")->getPimpinan();
            $this->view("templates/header", $data);
            $this->view("tiket/teruskan", $data);
            $this->view("templates/footer");
        } else {
            Flasher::setFlash("tidak ada pimpinan", "mohon pilih pimpinan", "danger");
            header("Location: " . BASEURL . "/tiket");
            exit;
        }
    }

    public function teruskanTiket()
    {
        var_dump($_POST);
        $idPimpinan = (int)$_POST["tujuan"];
        $idTiket = (int)$_POST["idTiket"];
        if( $this->model("TiketKeluhan_model")->teruskan($idTiket, $idPimpinan) > 0 ) {
            Flasher::setFlash("berhasil", "tiket berhasil diteruskan", "success");
            header("Location: " . BASEURL . "/Tiket/detail&id=" . $idTiket);
            exit;
        } else {
            Flasher::setFlash("gagal", "tiket gagal diteruskan", "danger");
            header("Location: " . BASEURL . "/Tiket/detail&id=" . $idTiket);
            exit;
        }
    }
}
