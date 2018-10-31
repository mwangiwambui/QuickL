<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RequestIndustry extends Model
{
   protected $fillable=['companyname','mail','city','state','country','contact','capital','licence','accepted'];

    public  function user(){
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
        // return $this->hasMany(Product::class);
    }






    public static function createRequest()
    {

        $user = Auth::user();
        $industries = $user->request()->create([

            'accepted' => 0

        ]);









}



}
