<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerAdminController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $data['image']);
        Partner::create($data);
        return redirect()->route('admin.partners');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Partner::find($id);
        $product->update($data);
        return redirect()->route('admin.partners');
    }

    public function destroy($id)
    {
        Partner::destroy($id);
        return redirect()->route('admin.partners');
    }
}
