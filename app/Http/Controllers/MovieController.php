<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{
    public function showAll()
    {
        $movies = Movie::all()->sortByDesc('created_at');
        return view('movies', ['movies' => $movies]);
    }

    public function details($id) {
 
        // ask the database for the message with the ID that we got
        // as a parameter. It is the same ID that we used to
        // generate the links to the message details
        // and the same ID that web.php took out of the link and
        // "passed it on" to the controller   
       
        
        $movies = Movie::findOrFail($id);
       
        // we return the view messageDetails.blade.php
        // and we also pass it the Message-Object that we got
        // back from the function findOrFail   
       
        return view('movieDetails', ['movie' => $movie]);
    }
}

