<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerFrontController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $partners = Partner::all();
        return view('front.index', compact('partners'));
    }



}
