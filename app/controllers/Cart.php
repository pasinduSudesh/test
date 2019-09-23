<?php

session_start();

class Cart extends Controller

{
    public function addItem(){
        if (isset($_POST['itemIDCart'])){
            $item = $this->model('Item');
            $item->updateFromDB($_POST['itemIDCart']);           
            $price = (float)$item->getPrice();
            $username = $_SESSION['username'];
            echo $username;
            $bill = $this->model('Bill');
            $bill->updateFromDB($username);
            $currentPrice = (float)$bill->getPrice();
            $currentPrice += $price;
            $bill->addPrice($currentPrice,$username);
            echo $currentPrice;




            

            

            
            // $bill=null;
            // if ($bill == null){
            //     $bill = $this->model('Bill');
            // }
            // $bill->calcPrice($price);
            // $totalPrice =  $_SESSION['bill'];
            // echo $totalPrice;
            




        }

        else{
            echo"fvfvfv";
        }
    }

   

}