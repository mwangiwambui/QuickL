<?php

namespace App\Http\Controllers;

use App\Industry;
use App\RequestIndustry;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "RequestIndustry Sent";


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput= $request->except('license');
       $this->validate($request,[
           'companyname'=>'required',
           'mail'=>'required',
           'city'=>'required',
           'state'=>'required',
           'country'=>'required',
           'contact'=>'required',
           'capital'=>'required',
       ]);
       $license= $request->license;
       if($license){
           $licenseName= $license->getClientOriginalName();
           $license->move('licenses',$licenseName);
           $formInput['license']=$licenseName;

       }
       Auth::user()->request()->create($request->all());
       return redirect()->route('industry.request')->with('message','request has been sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    public function Industries($type = '')
    {
        if ($type == 'pending') {
            $industries = RequestIndustry::where('accepted', '0')->get();

        } elseif ($type == 'delivered') {
            $industries = RequestIndustry::where('accepted', '1')->get();
        } else {
            $industries = RequestIndustry::all();
        }

        return view('admin.requests', compact('industries'));
    }

    public function toggleaccepted(Request $request, $requestId)
    {
        $industry = RequestIndustry::find($requestId);
        if ($request->has('accepted')) {
            $industry->accepted = $request->accepted;
        } else {
            $industry->accepted = "0";
        }
        $industry->save();
        return back();
    }
}
