<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view("home", compact("movies"));
    }

    public function sortByVote() {
        $movies = Movie::where('id', '>', 0)->orderBy('vote', 'desc')->get();
        return view("sortByVote", compact("movies"));
    }

    public function sortByTitle() {
        $movies = Movie::where('id', '>', 0)->orderBy('title', 'asc')->get();
        return view("sortByTitle", compact("movies"));
    }

    public function contactUs() {
        return view("contactUs");
    }
}
