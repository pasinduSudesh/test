<?php

namespace model;

require_once __DIR__ . '/../db/Database.php';

class Login
{
    private $username;
    private $password;

    public function updateFromPost()  // to get username and psswrd from post method
    {
        $this->username = $_POST['uname'];
        $this->password = $_POST['psw'];
        
    }

    public function checkFromDB(){   // check if username and psswrd in database
        $database = \Database::getInstance();
        //get row from DB according to username
        $sql = "SELECT `psw` FROM `clientlist` WHERE `username` = '{$this->username}'";
        $result = $database->query($sql);
        $result = $result->fetch_assoc();

        //check psswrd is coorct
        //chek hashed psswrd id DB and enterd passwrd are correct
        if (($result) && password_verify($this->password, $result['psw'])){
            return true;
        }else{
            return false;
        }
        

        
    }

    public function getUsername()
    {
        return $this->username;    
    }


}
