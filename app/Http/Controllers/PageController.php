<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //Pagina home
    public function index()
    {
        return view('home');
    }
    //Pagina trains
    public function trains()
    {
        return view('trains');
    }
}
