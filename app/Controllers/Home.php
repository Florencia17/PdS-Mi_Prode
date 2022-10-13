<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $titulo = (["titulo" => "Home"]);

        return view("layouts/header", $titulo).view('index').view("layouts/footer");
    }
}
