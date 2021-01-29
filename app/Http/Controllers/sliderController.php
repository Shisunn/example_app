<?php

namespace App\Http\Controllers;

use App\Models\slider;

class sliderController extends Controller
{
    public function index()
    {
        $sliders = slider::all();
        return view('admin.slider', compact('sliders'));
    }
}
