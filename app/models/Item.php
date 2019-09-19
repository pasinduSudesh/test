<?php

namespace model;

require_once __DIR__ . '/../db/Database.php';

class Item
{
    private $itemID;   
    private $image;
    private $price;
    private $description;

    public function updateFromDB($id){
        $database = \Database::getInstance();
        $sql= "SELECT * FROM itemlist WHERE id=$id";
        $result = $database->query($sql);
        $row = $result->fetch_assoc();

        $this->itemID = $id;
        $this->image = $row['img'];
        $this->price = $row['price'];
        $this->description = $row['description'];

    }

    public function getVal(){
        return [$this->itemID,$this->image,$this->price,$this->description];
    }

    public function getPrice(){
        return $this->price;
    }
}