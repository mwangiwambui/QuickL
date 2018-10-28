<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
   protected $fillable=['companyname','mail','city','state','country','contact','capital','licence'];


}
