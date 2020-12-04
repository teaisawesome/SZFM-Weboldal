<?php

class CommentRatingController extends Controller
{
    public function index()
    {
        require_once ROOT . "ajax/forumrating_ajax.php";
    }
}

?>