<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        $movies = movie::all();

        return view('welcome', compact('movies'));
    }
}
