<?php

namespace App\Http\Controllers\Zipper;

use App\Http\Controllers\Controller;
use App\Models\ZipperCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Promise\rejection_for;

class CategoryController extends Controller
{
    public function index() {
        $categories = ZipperCategory::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {

        return view('admin.categories.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $data['image']);
        ZipperCategory::create($data);
        return redirect()->route('admin.categories');
    }
}
