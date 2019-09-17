<?php
session_start();
class Home extends Controller
{
    public function index()
    {
        $this->view('home/index');
    
    }
}