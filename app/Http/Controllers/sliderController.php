<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class sliderController extends Controller
{
    private function ChangeOrder($currentOrder, $anotherOrder, $currentSlider, $anotherSlider)
    {
        //SWAP ORDER
        $currentSlider->order = $anotherOrder;
        $anotherSlider->order = $currentOrder;
        //SAVE TO DATABASE
        $currentSlider->save();
        $anotherSlider->save();
    }

    public function index()
    {
        $sliders = slider::orderBy('order')->get();
        return view('admin.slider', ['sliders' => $sliders]);
    }

    public function destroy($id)
    {
        $slider = slider::findOrFail($id);
        $slider->delete();
        return redirect()->back()->with('delete', 'Delete successfully!');
    }

    public function active($id)
    {
        $slider = slider::findOrFail($id);
        if ($slider->active == 1) {
            $slider->active = 0;
            $action = 'disabled';
        } else {
            $slider->active = 1;
            $action = 'enabled';
        }
        $slider->save();
        return redirect()->back()->with('active', 'Slider has been successfully ' . $action);

    }

    public function moveUp($id)
    {
        $current_slider = slider::findOrFail($id);
        $current_order = $current_slider->order;
        //GET PREVIOUS SLIDER MEAINING IF CURRENT SLIDER IS AT 13 PREVIOUS IS AT 12 AND ORDER BY DESC
        $previous_slider = slider::where('order', '<', $current_order)
            ->orderBy('order', 'desc')
            ->first();

        if ($previous_slider) {
            $previous_order = $previous_slider->order;
            $this->ChangeOrder($current_order, $previous_order, $current_slider, $previous_slider);
            return redirect()->back();
        } else {
            return redirect()->back()->with('empty', 'No previous slider found');
        }
    }

    public function moveDown($id)
    {
        $current_slider = slider::findOrFail($id);
        $current_order = $current_slider->order;
        //GET NEXT SLIDER MEAINING IF CURRENT SLIDER IS AT 13 PREVIOUS IS AT 14 ORDER BY ASC
        $next_slider = slider::where('order', '>', $current_order)
            ->orderBy('order')
            ->first();

        if ($next_slider) {
            $next_order = $next_slider->order;
            $this->ChangeOrder($current_order, $next_order, $current_slider, $next_slider);
            return redirect()->back();
        } else {
            return redirect()->back()->with('empty', 'No next slider found');
        }
    }

    public function form()
    {
        $sliders = slider::select('order')->orderBy('order')->get();
        return view('admin.slider_new', ['sliders' => $sliders]);
    }

    public function store(Request $request)
    {
        // dd($request->image->isValid());
        // $request->hasFile('image') -> if image is not empty
        // dd(public_path());

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,webp|max:2048',
            'order' => 'integer',
        ]);

        if ($request->active == null) {
            $active = 0;
        } else {
            $active = 1;
        }

        //resize image
        $image = $request->image;
        $image_name = str_replace('.' . $image->extension(), '', $image->getClientOriginalName()) . time() . '.' . $image->extension();
        $destination = public_path('assets/admin/dist/img/slider/thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destination . '/' . $image_name);
        //save original
        $destination = public_path('assets/admin/dist/img/slider');
        $path = $image->move($destination, $image_name);
        slider::Create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'text' => $request->content,
            'image' => $image_name,
            'active' => $active,
            'order' => $request->order,
        ]);

        return redirect()->route('slider');

    }
}
