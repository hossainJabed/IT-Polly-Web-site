<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $gallerys,$gallery;

    public function index()
    {
        return view('backend.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd($request->all());
        Gallery::newGallery($request);
        return back()->with('message','Gallery create successfully');
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
        $this->gallery = Gallery::all();
        return view('backend.gallery.manage',['gallerys'=> $this->gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->gallery = Gallery::find($id);
        return view('backend.gallery.edit',['gallery' =>$this->gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Gallery::updateGallery($request, $id);
        return redirect('/gallery-manage')->with('message','gallery Page Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Gallery::deleteGallery($id);
        return back()->with('message','gallery Info Delete Successfully');
    }
//    public function allGallery()
//    {
//        $this->gallery = Gallery::all();
//        return view('frontend.gallery.index',['gallery'=> $this->gallery]);
//    }
}
