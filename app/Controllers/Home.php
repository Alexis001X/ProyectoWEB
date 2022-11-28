<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function vacunas(){
        return view('veterinaria/vacunas');
    }
    public function adopcion(){
        return view('veterinaria/adopcion');
    }
    public function costos(){
        return view('veterinaria/costos');
    }
}
