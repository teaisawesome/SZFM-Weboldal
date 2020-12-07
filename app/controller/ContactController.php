<?php 
session_start();

class ContactController extends Controller
{
    public function index()
    {
        $this->view("kapcsolat_oldal/kapcsolat");
    }
}

?>