<?php

namespace App\Http\Controllers;

use App\Industry;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function Industries($type = '')
    {
        if ($type == 'pending') {
            $industries = Industry::where('accepted', '0')->get();

        } elseif ($type == 'delivered') {
            $industries = Industry::where('accepted', '1')->get();
        } else {
            $industries = Industry::all();
        }

        return view('admin.requests', compact('industries'));
    }

    public function toggleaccepted(Request $request, $industryId)
    {
        $industry = Industry::find($industryId);
        if ($request->has('accepted')) {
            $industry->accepted = $request->accepted;
        } else {
            $industry->accepted = "0";
        }
        $industry->save();
        return back();
    }
}
