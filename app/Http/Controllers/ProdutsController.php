<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produt;

class ProdutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Products = produt::all();
        
       return  view('productindex',compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productcreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'title'=>'required',
            'image'=>'required',
            'descreption'=>'required',


        ]);

         $Produt  =new produt();
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
       return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produt=produt::find($id);

        return view('productedit',compact('produt'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $produt = produt::find($id);

        $produt->title = request('title');
        $produt->description=request('description');


        //$categories->image=request('image');
        if ($request->hasFile('image')) {
           // dd('10');

            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/Products', $filename);
            $produt->image = $filename;


        }
        $produt->save();
        return redirect('/produts');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        produt::find($id)->delete();
        return redirect('/produts');
    }
}
