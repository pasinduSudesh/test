<?php

session_start();

class Register extends Controller
{
    public function registerUser()
    {        
        if (isset($_POST['reg']))
        {
           $this->registerU();     // call registerU private function       
        }
        else
        {
            $this->view('register/index');
        }
    }

    private function registerU()
    {
        $user = $this->model('Register');
        $user->updateFromPost();
        $user-> UpdateToDB();
        $_SESSION['username'] = $user->getUsername();  
        $_SESSION['bill'] = 0;
  
        header("location: gallery");       

    }
}