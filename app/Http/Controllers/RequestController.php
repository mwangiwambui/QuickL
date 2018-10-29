<?php

namespace App\Http\Controllers;


use App\RequestIndustry;

use Illuminate\Http\Request;

class RequestController extends Controller
{
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
