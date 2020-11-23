<?php
class Router
{
    public static function parse($url, $request)
    {
        $url = trim($url);

        $domain = "/SZFM-Weboldal/app/";

        /**
         * /mvcpattern/ - fő mappára át kell írni
         */
        if($url == $domain)
        {
            $request->controller = "Home";
            $request->action = "index";
            $request->params = "data";
        }

        /**
         *  Registration routing
         */
        if($url == $domain . "registration")
        {
            $request->controller = "Registration";
            $request->action = "index";
            $request->params = "data";
        }

        if($url == $domain . "registrationservice")
        {
            $request->controller = "Registration";
            $request->action = "registration";
            $request->params = [
                                    $_POST['lastname'], 
                                    $_POST['firstname'], 
                                    $_POST['password'], 
                                    $_POST['email'], 
                                    $_POST['address'],
                                    $_POST['phone'],
                                    $_POST['card'],
                                    $_FILES['picture']
                                ];
        }
        /**
         *   Login routing
         */
        if($url == $domain . 'login')
        {
            $request->controller = "Login";
            $request->action = "index";
            $request->params = "data";
        }
        if($url == $domain . 'loginservice')
        {
            $request->controller = "Login";
            $request->action = "authentication";
            $request->params = [$_POST['email'], $_POST['password']];
        }

        /**
         *   Profile routing
         */
        if($url == $domain . 'profile')
        {
            $request->controller = "Profile";
            $request->action = "index";
            $request->params = "data";
        }

        /**
         *   Contact routing
         */
        if($url == $domain . 'contact')
        {
            $request->controller = "Contact";
            $request->action = "index";
            $request->params = "data";
        }

        /**
         *   Services routing
         */
        if($url == $domain . 'services')
        {
            $request->controller = "Service";
            $request->action = "index";
            $request->params = "data";
        }

        if($url == $domain . 'services/szauna')
        {
            $request->controller = "Service";
            $request->action = "szauna";
            $request->params = "data";
        }
        if($url == $domain . 'services/sobarlang')
        {
            $request->controller = "Service";
            $request->action = "sobarlang";
            $request->params = "data";
        }
        if($url == $domain . 'services/halpedikur')
        {
            $request->controller = "Service";
            $request->action = "halpedikur";
            $request->params = "data";
        }

        /**
         *   About routing
         */
        if($url == $domain . 'about')
        {
            $request->controller = "About";
            $request->action = "index";
            $request->params = "data";
        }
    }
}
?>