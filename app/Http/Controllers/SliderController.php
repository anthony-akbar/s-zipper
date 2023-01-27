<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\SliderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = SliderItem::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        SliderItem::create($data);
        return redirect()->route('admin.slider');
    }
}
