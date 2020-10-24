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
            'card' => $inputs[6],
            'picture' => $inputs[7]
        );

        $registModel = new RegistrationModel();

        $registModel->registration($formInputs);
    }
}
?>