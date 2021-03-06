<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {

        $items= Product::all();
        $id= Product::all('category_id');
        $categories = Category::all('parent_id')->where('id',$id);


        return view('front.home',compact('items','categories'));
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
    public function item(Product $product){


        return view('front.item', compact('product'));

    }

    public function request(){
        return view('front.requests');
    }
    public function feedback(){
      return view('front.Thankyou');
    }

}
