<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    private  $executives,$executive;

    public function index()
    {
        return view('backend.executive.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Executive::newExecutive($request);
        return back()->with('message','Executive Member Add successfully');
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
        $this->executive = Executive::all();

        return view('backend.executive.manage',['executives'=> $this->executive]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->executive = Executive::find($id);
        return view('backend.executive.edit',['executive' =>$this->executive]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Executive::updateExecutive($request, $id);
        return redirect('/executive-manage')->with('message',' Executive Member Info Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Executive::deleteExecutive($id);
        return back()->with('message','Executive Member Info Delete Successfully');
    }
}
