<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = ['accepted'];
    public  function user(){
        return $this->belongsTo(User::class);
    }

    public function requestIndustry(){
        return $this->belongsTo(Request::class);
    }



    public static function createRequest()
    {

        $user = Auth::user();
        $industries = $user->industry()->create([

                'accepted' => 0

            ]);
        $requestdetails= Request::content();

            $industries->requestIndustry()->attach($requestdetails->id,[
                'companyname'=>$requestdetails->companyname,
                'license'=>$requestdetails->license,
                ]);







    }
}
