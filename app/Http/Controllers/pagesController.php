<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function contact()
    {
        $people = [

        ];
        return view ('contact', compact("people"));

        //or
        //return view ('contact)->with('name',$name)->with('location',$location);
        //or
        //return view ('contact', compact('name','location'));



    }
}
