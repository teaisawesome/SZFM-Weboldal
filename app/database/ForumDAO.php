<?php

require_once(ROOT . "/database/Database.php");
require_once(ROOT . "/classes/Calorie.php");

//require_once("../database/Database.php");
//require_once("../classes/ForumComment.php");

class ForumDAO
{
    private $con;
    
    private $insertCommentStatement;
    private $selectAllCommentsStatement;

    public function __construct()
    {
        $this->con = Database::con();

        $this->insertCommentStatement = $this->con->prepare("INSERT INTO `FORUM` VALUES (NULL, ?, ?);");
        $this->selectAllCommentsStatement = $this->con->prepare("SELECT * FROM `FORUM`;");
    }

    public function insertComment($forumComment)
    {
        $this->insertCommentStatement->execute([$forumComment->getUserID(), $forumComment->getComment()]);
    }

    public function selectAllComments()
    {
        $this->selectAllCommentsStatement->execute();
        $fetched = $this->selectAllCommentsStatement->fetchAll();
        $comments = [];
        for($i = 0; $i < count($fetched); $i++)
        {
            $comment = new ForumComment();
            $comment->Id($fetched[$i][0])->UserID($fetched[$i][1])->Comment($fetched[$i][2]);
            $comments[] = $comment;
        }

        return $comments;
    }
}

/*$dao = new ForumDAO();
$comment = new ForumComment();
$comment->UserID(1)->Comment("szeretem a tejet");
$dao->insertComment($comment);

echo "<pre>";
print_r($dao->selectAllComments());*/

?>