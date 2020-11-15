<?php

session_start();

require_once "../database/ForumRatingDAO.php";
require_once "../classes/ForumCommentRating.php";
require_once "../database/UserDAO.php";

if(isset($_SESSION["logged"]) && $_SESSION["logged"])
// if(isset($_POST["num"]))
{
    if(isset($_POST["rating"]) && $_POST["rating"] > 0 && $_POST["rating"] <= 5)
    {
        if(isset($_POST["comment_id"]))
        {
            $userDAO = new UserDAO();
            $userId = $userDAO->getUserByEmail($_SESSION["user"])->getID();

            $forumCommentRating = new ForumCommentRating($userId, $_POST["comment_id"], $_POST["rating"]);

            $forumRatingDAO = new ForumRatingDAO();
            $forumRatingDAO->insertCommentRating($forumCommentRating);
        }
    }
}

?>