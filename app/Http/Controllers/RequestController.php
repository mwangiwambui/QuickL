<?php

namespace App\Http\Controllers;

use App\Industry;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function requests($type=''){
        if ($type == 'pending') {
            $requests = Industry::where('accepted', '0')->get();

        } elseif ($type == 'delivered'){
            $requests= Industry::where('accepted','1')->get();
        }else{
            $requests=Industry::all();
        }

        return view('admin.requests',compact('requests'));
    }

    public function toggleaccepted(Request $request,$industryId)
    {
        $industry= Industry::find($industryId);
        if($request->has('accepted')) {
            $industry->accepted = $request->accepted;
        }else{
            $industry->delivered="0";
        }
        $industry->save();
        return back();
    }
}
