<?php

abstract class Controller
{
    protected function model($model)
    {
        require_once __DIR__ . '/../models/' . $model . '.php';
        $model = 'model\\' . $model;
        return new $model();
    }

    protected function view($view, $data = [])
    {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

    protected function modelFolder($folder,$file)
    {
        require_once __DIR__ . '/../models/' . $folder .'/'.$file. '.php';
        return new $file();
    }
}
