<?php

namespace model;

require_once __DIR__ . '/../db/Database.php';

class Bill
    
{
    
    private $price= 0 ;

    public function calcPrice($x){
        $this->price = $this->price + (float)$x;

    }
    public function getTotal(){
        return $this->price;// return price
    }

   
}