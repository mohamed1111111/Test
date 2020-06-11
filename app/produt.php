<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produt extends Model
{
    //
          protected $fillable = ['image','title','description'];


       public  function Categories(){

       	return $this->belongsTo(Categories::class);
       }   

}
