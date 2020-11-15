<?php

require_once "Database.php";

require_once "../classes/ForumCommentRating.php";

class ForumRatingDAO
{
    private $con;

    private $getCommentRatingStatement;
    private $insertCommentRatingStatement;

    public function __construct()
    {
        $this->con = Database::con();

        $this->getCommentRatingStatement = $this->con->prepare("SELECT AVG(RATING) FROM `SZFM`.`FORUMRATINGS` WHERE COMMENT_ID = ? ;");

        $this->insertCommentRatingStatement = $this->con->prepare("INSERT INTO `SZFM`.`FORUMRATINGS` VALUES( ? , ? , ? );");
    }

    public function getCommentRating($commentId)
    {
        $this->getCommentRatingStatement->execute([$commentId]);

        $fetched = $this->getCommentRatingStatement->fetchAll();
        if($fetched !== [])
            return intval($fetched[0][0]);
        else 
            return null;
    }

    public function insertCommentRating($commentRating)
    {
        $this->insertCommentRatingStatement->execute([$commentRating->getUserId(), $commentRating->getCommentId(), $commentRating->getRating()]);
    }
}

// $forumRatingDAO = new ForumRatingDAO();

// // $forumRatingDAO->getCommentRating(2);

// $commentRating = new ForumCommentRating(1,2,2);

// $forumRatingDAO->insertCommentRating($commentRating);

?>