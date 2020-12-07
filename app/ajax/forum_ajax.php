<?php
// define('ROOT', str_replace("info/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
session_start();

require_once ROOT . "/database/ForumDAO.php";
require_once ROOT . "/database/UserDAO.php";
require_once ROOT . "/database/ForumRatingDAO.php";
require_once ROOT . "/classes/ForumComment.php";

if(isset($_SESSION["logged"]) && $_SESSION["logged"])
// if(isset($_POST["num"]))
{
    $forumDAO = new ForumDAO();
    $comments = $forumDAO->selectAllComments();

    $forumRatingDAO = new ForumRatingDAO();
    
    $newCommentForm = '
    <div id="new-comment-form">
        <form action="api/postforumcomment" method="post">
            <span id="greeting">Értékeld az SZFM-Wellnesközpontot-et!</span>
            <textarea name="comment" id="ta-comment" rows="10" ></textarea>
            <input type="submit" name="submit" value="Beküld">
        </form>
    </div>
    ';
    echo $newCommentForm;

    foreach($comments as $comment)
    {
        $userDAO = new UserDAO();
		$user = $userDAO->getUserById($comment->getUserID());
		
		// echo "<pre>";
		// print_r($user);

        $commentID = $comment->getID();
        $avg = $forumRatingDAO->getCommentRating($commentID);
        // echo "<script>alert(${avg})</script>";

        
        $forumComment = '
            <div class="comment">
                <div class="email">'. $user->getEmail() .'</div>
                <div class="ratings">
                    <span id="onestar-' . $commentID . '" class="rate">&#11088;</span>
                    <span id="twostar-' . $commentID . '" class="rate">&#11088;</span>
                    <span id="threestar-' . $commentID . '" class="rate">&#11088;</span>
                    <span id="fourstar-'. $commentID . '" class="rate">&#11088;</span>
					<span id="fivestar-' .$commentID . '" class="rate">&#11088;</span>
                    <span id="avg-' . $commentID . '" class="avg"><span id="rating">Értékelések átlaga: ' . $avg . '</span></span>
				</div>
				<div class="message">
				'.
					$comment->getComment()
				.'</div>
            </div>
        ';
        echo $forumComment;
    }

    

}

if(isset($_SESSION["logged"]) && $_SESSION["logged"])
{
    //echo 4;
    if(isset($_POST["submit"]))
    {
        // echo $_POST["comment"];
        //echo 1;
        if(isset($_POST["comment"]) && strlen($_POST["comment"]) > 0)
        {
            //echo 2;
            $comment = strip_tags($_POST["comment"]);
            if(strlen($comment) > 0 && strlen($comment) <= 400)
            {
                //echo 3;
                $userDAO = new UserDAO();
                $userId = $userDAO->getUserByEmail($_SESSION["user"]);
                $forumComment = new ForumComment(null, $userId->getID(), $comment);

                $forumDAO = new ForumDAO();
                $forumDAO->insertComment($forumComment);
                
            }
        }
        header("Location: http://localhost/SZFM-Weboldal/app/forum");
        
    }
    
}



?>