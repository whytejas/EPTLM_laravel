<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){

        $name = "EPTLM";
        $people = ["A", "B", "C"];
        return view('pages.about')->with('people', $people);
    }


    public function contact(){

        $name = "EPTLM";
        return view('pages.contact')->with('name', $name);
    }
}
