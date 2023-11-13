<?php

namespace App\Http\Controllers;

use App\Models\PhotoCategory;
use Illuminate\Http\Request;

class PhotoCategoryController extends Controller
{
    private $categories ,$category;

    public function index()
    {
        return view('backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        PhotoCategory::newPhotoCategory($request);
        return back()->with('message','Category Add successfully');
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
        $this->category = PhotoCategory::all();
        //dd($this->notice->all());
        return view('backend.category.manage',['categories'=> $this->category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->category = PhotoCategory::find($id);
        return view('backend.category.edit',['category' =>$this->category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        PhotoCategory::updatePhotoCategory($request, $id);
        return redirect('/category-manage')->with('message','category Info Update Successfully');
    }

}
