<?php 
    require(ROOT . '/database/UserDAO.php');

    class RegistrationModel 
    {
        public $userDao;

        public function __construct()
        {
            $this->userDao = new UserDao();   
        }

        public function emailValidation($email)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                return false;
            }   

            return true;
        }

        public function phoneNumberValidation($phone)
        {
            if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone))
            {
                return true;
            }

            return false;
        }

        public function registration($inputs)
        {
            $valid = true; $registErrors = array();

            if(!$this->emailValidation($inputs['email']))
            {
                $valid = false;

                $registErrors['emailErrorMessage'] = "Email formátum kötelező!"; 
            }

            if(!$this->phoneNumberValidation($inputs['phone']))
            {
                $valid = false;

                $registErrors['phoneErrorMessage'] = "Telefonszám formátum kötelező!"; 
            }

            if($valid)
            {
                try
                {
                    $newUser = new User();
                    $newUser->Email($inputs['email'])
                    ->Password($inputs['password'])
                    ->Card(empty($inputs['card']) ? NULL : $inputs['card'])
                    ->Phone($inputs['phone'])
                    ->Name($inputs['name'])
                    ->Address($inputs['address'])
                    ->Rank(1)
                    ->IsPremiumMember(empty($inputs['card']) ? NULL : 1)
                    ->Image($inputs['picture']);

                    var_dump($this->userDao->createUser($newUser));

                    unset($_SESSION['regist_errors']);

                    header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app");
                }
                catch(Exception $e)
                {
                    echo $e->getMessage();
                }
            }
            else
            {
                $_SESSION['regist_errors'] = $registErrors;

                header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app");
            }
        }
    }
?>