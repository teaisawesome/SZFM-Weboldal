<?php 
    require(ROOT . '/database/UserDAO.php');

    class ProfileModel 
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

        public function getDatas($id)
        {
            try
            {
                $result = $this->userDao->getUserById($id);

                return $result;
            }
            catch(Exception $e)
            {
                echo "Botond szerint ide kell error üzenet: " . $e->getMessage();
            }
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
                    ->Card($inputs['card'])
                    ->Phone($inputs['phone'])
                    ->Name($inputs['name'])
                    ->Address($inputs['address'])
                    ->Rank(1)
                    ->IsPremiumMember(is_null($inputs['card']) ? 0 : 1)
                    ->Image($inputs['picture']);

                    var_dump($this->userDao->createUser($newUser));

                    unset($_SESSION['regist_errors']);

                    header("Location: http://localhost/SZFM-Weboldal/app");
                }
                catch(Exception $e)
                {
                    echo $e->getMessage();
                }
            }
            else
            {
                $_SESSION['regist_errors'] = $registErrors;

                header("Location: http://localhost/SZFM-Weboldal/app/registration");
            }
        }
    }
?>