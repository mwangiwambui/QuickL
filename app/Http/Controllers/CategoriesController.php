<?php

namespace App\Http\Controllers;

use App\Category;
use App\MainCategory;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('isIndustry')){
            abort(404, "Sorry, You cant do this actions");
        }
        $user= Auth::user()->id;
        $categories= Category::all()->where('user_id',$user);
        $maincategories= MainCategory::pluck('name','id');


        return view('admin.category.index',compact('categories','user','maincategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maincategories= MainCategory::pluck('id','name');

        return view('admin.category.index',compact('maincategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->all();
        Auth::user()->category()->create($formInput);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId)
    {
        if(!empty($categoryId)) {
            $products = Category::find($categoryId)->products;
        }

        $categories= Category::all();
        return view('admin.category.index',compact(['categories','products']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        Category::destroy($id);
        return back();
    }
}
