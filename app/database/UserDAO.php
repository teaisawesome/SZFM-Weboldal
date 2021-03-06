<?php

require("../classes/User.php");

class UserDAO
{
    private $con;
    private $insertUserString;
    private $updateUserString;
    private $deleteUserString;
    private $getUserByIdString;
    private $getAllUserString;
    private $getUserByEmailStatement;
    private $auth;

    public function __construct()
    {
        $this->con = Database::con();

        $this->insertUserString = $this->con->prepare("INSERT INTO `USERS` (`NAME`, `PASSWORD`, `ADDRESS`, `EMAIL`, `PHONE_NUMBER`, `RANK_ID`, `ISPREMIUMMEMBER`, `IMAGE`, `CARD`) VALUES (:name, :password, :address, :email, :phone_number, 1, :ispremiummember, :image, :card);");

        $this->updateUserString = $this->con->prepare("UPDATE `USERS` SET `NAME`=:name, `PASSWORD`=:password, `ADDRESS`=:address, `EMAIL`=:email, `PHONE_NUMBER`=:phone, `RANK_ID`=:rank_id, `ISPREMIUMMEMBER`=:ispremiummember, `IMAGE`=:image WHERE `ID` = :id;");

        $this->deleteUserString = $this->con->prepare("DELETE FROM `USERS` WHERE `ID` = :id;");

        $this->getUserByIdString = $this->con->prepare("SELECT * FROM `USERS` WHERE `ID` = :id;");

        $this->getAllUserString = $this->con->prepare("SELECT * FROM `USERS`;");

        $this->getUserByEmailStatement = $this->con->prepare("SELECT * FROM `USERS` WHERE `EMAIL` = ? ;");

        $this->auth = $this->con->prepare("SELECT * FROM `USERS` WHERE `EMAIL`=:email AND `PASSWORD`=:password;");
    }

    public function createUser($user)
    {
        var_dump($user);

        return $this->insertUserString->execute([":name" => $user->getName(), ":password" => $user->getPassword(), ":address" => $user->getAddress(), ":email" => $user->getEmail(), ":phone_number" => $user->getPhone(), ":ispremiummember" => $user->getIsPremiumMember(), ":image" => $user->getImage(), ":card" => $user->getCard()]);
    }

    public function updateUser($user)
    {
        $this->updateUserString->execute([":id" => $user->getID(), ":name" => $user->getName(), ":password" => $user->getPassword(), ":address" => $user->getAddress(), ":email" => $user->getEmail(), ":phone" => $user->getPhone(), ":rank_id" => $user->getRank(), ":ispremiummember" => $user->getIsPremiumMember(), ":image" => $user->getImage(), ":card" => $user->getCard()]);
    }

    public function deleteUser($user)
    {
        $this->deleteUserString->execute([":id" => $user->getID()]);
    }

    public function getUserById($id)
    {
        $this->getUserByIdString->execute([":id" => $id]);
        $fetched = $this->getUserByIdString->fetchAll();
        $user = new User();
        $user->Id($fetched[0][0])->Name($fetched[0][1])->Password($fetched[0][2])->Address($fetched[0][4])->Email($fetched[0][5])->Phone($fetched[0][6])->Rank($fetched[0][7])->IsPremiumMember($fetched[0][8])->Image($fetched[0][9])->Card($fetched[0][3]);
        return $user;
    }

    public function getUsers()
    {
        $this->getAllUserString->execute();
        $fetched = $this->getAllUserString->fetchAll();
        $users = [];
        for($i = 0; $i < count($fetched); $i++)
        {
            $user = new User();
            $user->Id($fetched[$i][0])->Name($fetched[$i][1])->Password($fetched[$i][2])->Address($fetched[$i][3])->Email($fetched[$i][4])->Phone($fetched[$i][5])->Rank($fetched[$i][6])->IsPremiumMember($fetched[$i][7])->Image($fetched[$i][8])->Card($fetched[$i][9]);
            $users[] = $user;
        }

        return $users;
    }

    public function getUserByEmail($email)
    {
        $this->getUserByEmailStatement->execute([$email]);

        $fetched = $this->getUserByEmailStatement->fetchAll();
        $user = new User();
        $user->Id($fetched[0][0])->Name($fetched[0][1])->Password($fetched[0][2])->Address($fetched[0][4])->Email($fetched[0][5])->Phone($fetched[0][6])->Rank($fetched[0][7])->IsPremiumMember($fetched[0][8])->Image($fetched[0][9])->Card($fetched[0][3]);
        return $user;
    }

    public function auth($email, $pwd)
    {
        $this->auth->execute([":email" => $email, ":password" => $pwd]);

        $result = $this->auth->fetch(PDO::FETCH_ASSOC);

        return $result > 0 ? true : false;
    }
}

?>
