<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $guarded=[];

    public function defaultName(){
        return $this->belongsTo(Product::class);
    }

}
