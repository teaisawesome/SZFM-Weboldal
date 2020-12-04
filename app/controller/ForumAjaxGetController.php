<?php

class ForumAjaxGetController extends Controller
{
    public function index()
    {
        require_once ROOT . "view/template/navtemp.php";
        require_once ROOT . "ajax/forum_ajax.php";
    }
}

?>