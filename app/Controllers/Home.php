<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('_partials/header');
        echo view('main');
        echo view('_partials/footer');
    }
    public function home()
    {
        echo view('_partials/header');
        echo view('home');
        echo view('_partials/footer');
    }
    public function contact()
    {
        echo view('_partials/header');
        echo view('contact');
        echo view('_partials/footer');
    }
    public function about()
    {
        echo view('_partials/header');
        echo view('about');
        echo view('_partials/footer');
    }
}
