<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $fillable= ['name'];

    public function category(){
        return $this->hasMany(Category::class);
    }
}
