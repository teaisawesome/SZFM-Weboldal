<?php 
session_start();

class ServiceController extends Controller
{
    public function index()
    {
        $this->view("szolgaltatasok_osszessege_weboldal/szolgaltatasok");
    }

    public function halpedikur()
    {
        $this->view("szolgaltatas_oldalak/halpedikur");
    }

    public function sobarlang()
    {
        $this->view("szolgaltatas_oldalak/sobarlang");
    }

    public function szauna()
    {
        $this->view("szolgaltatas_oldalak/szauna");
    }
    public function uszoda()
    {
        $this->view("szolgaltatas_oldalak/uszoda");
    }
    public function teknos()
    {
        $this->view("szolgaltatas_oldalak/teknos");
    }
    public function melyviz()
    {
        $this->view("szolgaltatas_oldalak/melyviz");
    }
    public function edzoterem()
    {
        $this->view("szolgaltatas_oldalak/edzoterem");
    }
    public function etterem()
    {
        $this->view("szolgaltatas_oldalak/etterem");
    }
    public function calculator()
    {
        $this->view("fitt_oldal/fitt");
    }
}

?>