<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    //Pagina trains
    public function trains()
    {
        $houses = [];
        return view('trains', compact('houses'));
    }
}
