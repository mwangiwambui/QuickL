<?php

namespace App\Http\Controllers;

use App\RequestIndustry;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt([
            'email'=> $request->email,
            'password'=> $request->password,
        ])){
           $user= User::where('email',$request->email)->first();

           if($user->users_role=='admin'){
               return redirect()->route('admin.index');
           }
           elseif($user->users_role== 'industry'){
               return redirect()->route('admin.index');
           }else{
               return redirect()->route('home');
           }
        }
    }
}
