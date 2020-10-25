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
            $request->params = [$_POST['email'], $_POST['pwd']];
        }
    }
}
?>