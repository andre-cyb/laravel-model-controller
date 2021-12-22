<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index() {
        $film= Movie::all();

        return view("movie", [
            "film"=> $film
        ]);
    }  
}
