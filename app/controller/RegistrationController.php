<?php 
session_start();

require(ROOT . "model/RegistrationModel.php");

class RegistrationController extends Controller
{
    public function index()
    {
        $this->view('regisztracio');
    }

    public function registration($inputs)
    {
        $formInputs = array(
            'name' => $inputs[0] . " " . $inputs[1],
            'password' => $inputs[2],
            'email' => $inputs[3],
            'address' => $inputs[4],
            'phone' => $inputs[5],
            'card' => empty($inputs[6]) ? NULL : $inputs[6],
            'picture' => getimagesize($inputs[7]["tmp_name"]) !== false ? $inputs[7]['name'] : "app-default-user-picture.png"
        );

        $target_dir = ROOT . "datas/pictures/";

        $target_file = $target_dir . basename($inputs[7]['name']);

        if(move_uploaded_file($inputs[7]['tmp_name'], $target_file))
        {
            // log: download OK
        }
        else
        {
            // log: download FAIL
        }
        
        $registModel = new RegistrationModel();

        $registModel->registration($formInputs);

    }
}
?>