<?php

class ForumAjaxPostController extends Controller
{
    public function index()
    {
        require_once ROOT . "ajax/forum_ajax.php";
    }
}

?>