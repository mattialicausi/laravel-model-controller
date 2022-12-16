<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        $movie = Movie::all();
        dd($movie);
        return view('home', compact('movie'));
    }
}
