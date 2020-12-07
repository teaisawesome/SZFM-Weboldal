<?php 
session_start();

class AboutController extends Controller
{
    public function index()
    {
        $this->view("rounk_oldal/rolunk");
    }
}

?>