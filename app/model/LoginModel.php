<?php 

    require(ROOT . '/database/UserDAO.php');

    class LoginModel
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

        public function authentication($email, $password)
        {
            $valid = true; $loginErrors = array();

            if(!$this->emailValidation($email))
            {
                $loginErrors['emailErrorMessage'] = 'Kérlek e-mail formátumot adj meg!';
                $valid = false;
            }

            if($valid)
            {
                try
                {
                    if($this->userDao->auth($email, $password))
                    {
                        $_SESSION['logged'] = true;
                        $_SESSION['user'] = $email;
                        $_SESSION['userId'] = $this->userDao->getUserByEmail($email)->getId();
                        unset($_SESSION['login_errors']);

                        header("Location: http://localhost/SZFM-Weboldal/app/");
                    }
                    else
                    {
                        $loginErrors['loginErrorMessage'] = 'Sikertelen bejelentkezés! Hibás e-mail vagy jelszó!';

                        $_SESSION['login_errors'] = $loginErrors;

                        header("Location: http://localhost/SZFM-Weboldal/app/login");

                    }
                }
                catch(Exception $e)
                {
                    echo $e->getMessage();
                }
            }
            else
            {
                $_SESSION['login_errors'] = $loginErrors;
                
                header("Location: http://localhost/SZFM-Weboldal/app/login");
            }
        }
    }
?>