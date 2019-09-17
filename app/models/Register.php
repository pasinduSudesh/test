<?php

namespace model;

require_once __DIR__ . '/../db/Database.php';

class Register
{
    private $username;
    private $password;

    public function updateFromPost()
    {
        $this->username = $_POST['uname'];
        $this->password = $_POST['psw'];
        //hash the passwrd
        $this->passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function UpdateToDB(){
        $database = \Database::getInstance();
        $sql="INSERT INTO clientlist (username, psw, items)
VALUES ('$this->username', '$this->passwordHash', ' ')";
        $database->query($sql);

        
    }

    public function getUsername()
    {
        return $this->username;    
    }


}
