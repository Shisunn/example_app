<?php

namespace App\Http\Controllers;

use App\Models\cat_months;
use App\Models\features;
use App\Models\slider;

class indexController extends Controller
{
    public function index()
    {
        $sliders = slider::where('active', 1)->orderBy('order')->get();
        $cat_months = cat_months::all();
        $features = features::all();
        return view('index', compact('sliders', 'cat_months', 'features'));
    }
}
