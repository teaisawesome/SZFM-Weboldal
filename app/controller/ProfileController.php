<?php 

session_start();

require(ROOT . "model/ProfileModel.php");

class ProfileController extends Controller
{
    public $user;

    public function index()
    {
        $profil = new ProfileModel();
        
        $datas = $profil->getDatas($_SESSION['userId']);

        $this->user = $datas;

        $this->view('profile');
    }
}

?>