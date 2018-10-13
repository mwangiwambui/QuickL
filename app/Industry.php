<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = ['accepted'];



    public static function createRequest()
    {

        $user = Auth::user();
        $request = $user - Industry()->create([

                'accepted' => 0

            ]);

    }
}
