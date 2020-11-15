<?php

class ForumCommentRating
{
	private $userId;
	private $commentId;
	private $rating;

	//Konstruktor null alapértelmezett paraméterekkel

	public function __construct($userId=null, $commentId=null, $rating=null)
	{
		$this->userId = $userId;
		$this->commentId = $commentId;
		$this->rating = $rating;
	}

	//Getterek/Setterek

    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
        
    public function getCommentId()
    {
        return $this->commentId;
    }
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }
        
    public function getRating()
    {
        return $this->rating;
    }
    public function setRating($rating)
    {
        $this->rating = $rating;
    }
        
	//Builder pattern-szerűség

    public function UserId($userId)
    {
        $this->userId = $userId;
    }

    public function CommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    public function Rating($rating)
    {
        $this->rating = $rating;
    }
}
?>
