<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    
    public function index(){

        //? leggo file dal DB:
        $movies = Movie::all();

        return view('index', compact('movies'));
    }

    public function show($id){

        $movie = Movie::find($id);

        if($movie === NULL) {
            return redirect()->route('home');
        }

        return view('movie', compact('movie'));
    }


}
