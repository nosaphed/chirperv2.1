<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    
    public function index(): View
    {
        //return response("Hello, world!");
        return view("chirps", [
            
        ]);

    }


}
