<?php

session_start();

class Gallery extends Controller

{
    public function show(){

        if(isset($_POST['itemID'])){
            $item = $this->model('Item');
            $item->updateFromDB($_POST['itemID']);
            $this->view('itemProfile/index',$item->getVal());
            // echo "qqqqqqqqqqqqqqqqqqqqqqqqssssssssssss";
            if(isset($_POST['itemIDCart'])){
                echo "1111111111111111111111111111";
            }
                
            
            
        }else{
        
        $this->view('gallery/index',$this->get());
        
        }

    }

    public function get(){
        $gallery = $this->model('Gallery');
        $gallery->updateFromDB();
        return $gallery->getVal();
    }
}

    
