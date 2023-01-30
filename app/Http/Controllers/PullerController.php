<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PullerController extends Controller
{
    public function index(){
        return view('admin.zipper.puller.index');
    }
}
