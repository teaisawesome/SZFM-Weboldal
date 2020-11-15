<?php 

session_start();

require(ROOT . "model/ProfileModel.php");

class ProfileController extends Controller
{
    public function index()
    {
        $this->view('profil');
    }
}

?>