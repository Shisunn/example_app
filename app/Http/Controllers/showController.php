<?php

namespace App\Http\Controllers;

use App\Models\related;

class showController extends Controller
{
    //
    public function show()
    {
        $related = related::all();
        return view('/show', compact('related'));

    }
}
