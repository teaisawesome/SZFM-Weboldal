<?php 

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
}

?>