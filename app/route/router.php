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
                                    $_POST['picture']
                                ];
        }
        /**
         *   Login routing
         * 
         *  Currently not working root!
         */
        /*
        if($url == $domain . 'login')
        {
            $request->controller = "Login";
            $request->action = "index";
            $request->params = "data";
        }
        if($url == $domain . 'loginvalidation')
        {
            $request->controller = "Login";
            $request->action = "authentication";
            $request->params = [$_POST['email'], $_POST['pwd']];
        }
        if($url == $domain . 'logout')
        {
            $request->controller = "Home";
            $request->action = "logout";
            $request->params = "data";
        }
        */

        /**
         *  Registration routing
         * 
         *  Currently not working root!
         */
        /*
        if($url == $domain . 'regist')
        {
            $request->controller = "Registration";
            $request->action = "index";
            $request->params = "data";
        }

        if($url == $domain . 'registvalidation')
        {
            $request->controller = "Registration";
            $request->action = "registration";
            $request->params = [$_POST['name'], $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['password']];
        }
        */
    }
}
?>