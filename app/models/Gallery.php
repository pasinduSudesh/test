<?php

namespace model;

require_once __DIR__ . '/../db/Database.php';

class Gallery
{
    private $itemIDs = [];
    private $image = [];
    private $price = [];
    private $description = [];

    public function updateFromDB(){
        $database = \Database::getInstance();
        for ($x=0;$x < 9;$x++){
            $sql="SELECT * FROM itemList WHERE id=$x ";
            $result=$database->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    //header("Content-type: image/png");
                    
                    array_push($this->itemIDs,$x);
                    array_push($this->image,$row['img']);
                    array_push($this->price,$row['price']);
                    array_push($this->description,$row['description']);
                }
            }
        }
    }

    public function getVal(){
        return [$this->itemIDs,$this->image,$this->price,$this->description];
    }
}