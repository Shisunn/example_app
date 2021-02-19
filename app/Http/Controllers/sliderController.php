<?php

namespace App\Http\Controllers;

use App\Models\slider;

class sliderController extends Controller
{
    public function index()
    {
        $sliders = slider::all();
        return view('admin.slider', ['sliders'=>$sliders]);
    }

    public function destroy($id)
    {
        $slider = slider::findOrFail($id);
        $slider->delete();
        return redirect()->back()->with('status', 'Delete successfully!');
    }
}
