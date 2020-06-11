<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = ['image','title','status'];

    public function produt(){

    		return $this->hasMany(produt::class,'Categories_id');
    }
}
