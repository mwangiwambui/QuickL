<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $items= Product::all();
        return view('front.home',compact('items'));
    }

    public function items(){
        $items= Product::all();
        return view('front.items',compact('items'));


    }
    public function about(){
        return view('front.about');

    }
    public function contact(){
        return view('front.contact');

    }
    public function faq(){
        return view('front.faq');

    }
    public function error(){
        return view('front.404');

    }
    public function item(){
        return view('front.item');

    }

}
