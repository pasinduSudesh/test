<?php

session_start();

class Login extends Controller
{
    public function loginUser()
    {        
        if (isset($_POST['log']))
        {
           $this->loginU();     // call loginU private function       
        }
        else
        {
            $this->view('login/index');
        }
    }

    private function loginU()
    {
        $user = $this->model('Login');
        $user->updateFromPost();
        if ($user-> checkFromDB()){
            $_SESSION['username'] = $user->getUsername();   
            $_SESSION['bill'] = 0;
            header("location: gallery");
            
        }
        else{
            $this->view('login/index');
        }         

    }
}