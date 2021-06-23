<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    function index() 
    {
        $dataMovie = Movie::all();

        $dataView = [
            'moviesList' => $dataMovie
        ];


        return view('home', $dataView);

    }
}
