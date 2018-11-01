<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable= ['name','parent_id'];
    public function products()
    {
        return $this->hasMany('App\Product');
       // return $this->hasMany(Product::class);
    }
    public function maincategory(){
        return $this->belongsTo(MainCategory::class);

    }

    public function category(){
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
    public function children(){
        return $this->hasMany('App\Category','parent_id');
    }


}
