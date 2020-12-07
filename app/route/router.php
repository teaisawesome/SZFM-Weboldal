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
        if($url == $domain . 'services/uszoda')
        {
            $request->controller = "Service";
            $request->action = "uszoda";
            $request->params = "data";
        }
        if($url == $domain . 'services/teknos')
        {
            $request->controller = "Service";
            $request->action = "teknos";
            $request->params = "data";
        }
        if($url == $domain . 'services/melyviz')
        {
            $request->controller = "Service";
            $request->action = "melyviz";
            $request->params = "data";
        }
        if($url == $domain . 'services/edzoterem')
        {
            $request->controller = "Service";
            $request->action = "edzoterem";
            $request->params = "data";
        }
        if($url == $domain . 'services/etterem')
        {
            $request->controller = "Service";
            $request->action = "etterem";
            $request->params = "data";
        }
        if($url == $domain . 'services/calculator')
        {
            $request->controller = "Service";
            $request->action = "calculator";
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

        /**
         *  Forum routing
         */
        if($url == $domain . "forum")
        {
            $request->controller = "Forum";
            $request->action = "index";
            $request->params = "data";
        }

        if($url == $domain . "api/getforumcomments")
        {
            $request->controller = "ForumAjaxGet";
            $request->action = "index";
            $request->params = [];
        }

        if($url == $domain . "api/postforumcomment")
        {
            $request->controller = "ForumAjaxPost";
            $request->action = "index";
            $request->params = [$_POST["submit"], $_POST["comment"]];
        }
        if($url == $domain . "api/postcommentrating")
        {
            $request->controller = "CommentRating";
            $request->action = "index";
            $request->params = [];
        }
        
    }
}
?>