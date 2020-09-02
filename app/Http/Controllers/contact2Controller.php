<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact2Controller extends Controller
{
    public function contacts()
    {

        $people = [

        ];
        return view('contacts', compact('people'));
    }
}
