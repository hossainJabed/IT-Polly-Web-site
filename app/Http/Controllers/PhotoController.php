<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $photos,$photo;

    public function index()
    {

        return view('backend.photo.index', ['categories' => PhotoCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd($request->all());
        Photo::newPhoto($request);
        return back()->with('message','Photo create successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function manage()
    {
        $this->photo = Photo::all();
        return view('backend.photo.manage',['photos'=> $this->photo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->photo = Photo::find($id);
        return view('backend.photo.edit',['photo' =>$this->photo, 'categories' => PhotoCategory::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Photo::updatePhoto($request, $id);
        return redirect('/photo-manage')->with('message','Photo Page Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Photo::deletePhoto($id);
        return back()->with('message','Photo Info Delete Successfully');
    }
}
