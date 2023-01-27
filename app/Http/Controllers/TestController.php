<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($category){
        dd($category);
    }
    public function base($category, $product){
        dump($category);
        dump($product);
    }
    public function prod($category, $product, $pro){
        dump($category);
        dump($product);
        dump($pro);
    }
}
