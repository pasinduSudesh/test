<?php

namespace model;

require_once __DIR__ . '/../db/Database.php';

class Bill
    
{
    
    private $price= 0 ;//price

    public function updateFromDB($username){
        $database = \Database::getInstance();
        $sql = "SELECT * FROM clientlist WHERE username=$username";
        $result = $database->query($sql);
        $result = $result->fetch_assoc();
        $this->price = $result['currentBill'];

    }

    public function addPrice($p,$username){
        $this->price = $p;
        $database = \Database::getInstance();
        $sql = "INSERT INTO clientlist (currentBill) ('$p') WHERE username=$username";
        $database->query($sql);

    }

    public function clear($username){
        $database = \Database::getInstance();
        $sql = "INSERT INTO clientlist (currentBill) ('0') WHERE username=$username";
        $database->query($sql);
    }

    public function getPrice(){
        return $this->price;
    }

   
}