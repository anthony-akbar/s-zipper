<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ZipperCategory;
use Illuminate\Http\Request;

class ZipperCategoryController extends Controller
{

    public function index()
    {
        $categories = ZipperCategory::all();
        return view('front.zipper-categories.index', compact('categories'));
    }

}
