<?php

namespace App\Http\Controllers;
use App\produt;
use App\Categories;

use Illuminate\Http\Request;

class CategoriesProdutsController extends Controller
{
    //

    public function store(Categories $Categories,Request $request){

    	request()->validate([
            'title'=>'required',
            'image'=>'required',
            'descreption'=>'required',


        ]);
         $Produt  =new produt();
         $Produt->Categories_id=$Categories->id;
       $Produt->title =request('title');
       //$categories->image=request('image');

       if($request->hasFile('image')){
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time() . '.' . $extension ;
           $file->move('uploads/Products',$filename);
           $Produt->image=$filename;
       }

      $Produt->description=request('descreption');


       $Produt->save();
       return redirect();
    }

}
