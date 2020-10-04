<?php

class ForumComment
{
    private $id;
    private $userID;
    private $comment;

    //Konstruktor

    public function __construct($id=null, $userID=null, $comment=null)
    {
        $this->id = $id;
        $this->userID = $userID;
        $this->comment = $comment;
    }

    //Getterek/Setterek

    public function getID()
    {
        return $this->id;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getUserID()
    {
        return $this->userID;
    }
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }
    public function getComment()
    {
        return $this->comment;
    }
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    //Builder pattern szerűség

    public function ID($id)
    {
        $this->id = $id;
        return $this;
    }
    public function UserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }
    public function Comment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

?>