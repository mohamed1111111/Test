<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Categories=Categories::all();

        return  view('index',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'=>'required',
            'image'=>'required'
        ]);
       $categories=new Categories();
       $categories->title =request('title');
       //$categories->image=request('image');
       if($request->hasFile('image')){
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time() . '.' . $extension ;
           $file->move('uploads/categories',$filename);
           $categories->image=$filename;
       }

       $categories->save();
       return redirect('/categories');
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

        $Categories=Categories::find($id);

        return  view('show',compact('Categories'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Categories=Categories::find($id);
        return view('edit',compact('Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request,$id)
    {
        $categories = Categories::find($id);

        $categories->title = request('title');
        $categories->status= request('status');

        //$categories->image=request('image');
        if ($request->hasFile('image')) {
           // dd('10');

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/categories', $filename);
            $categories->image = $filename;


        }
        $categories->save();
        return redirect('/categories');
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
        Categories::find($id)->delete();
        return redirect('/categories');
    }
}
