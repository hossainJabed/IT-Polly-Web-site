<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $notices,$notice;

    public function index()
    {
        return view('backend.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Notice::newNotice($request);
        return back()->with('message','Notice create successfully');
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
        $this->notice = Notice::all();
        //dd($this->notice->all());
        return view('backend.notice.manage',['notices'=> $this->notice]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->notice = Notice::find($id);
        return view('backend.notice.edit',['notice' =>$this->notice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Notice::updateNotice($request, $id);
        return redirect('/notice-manage')->with('message','Notice Page Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Notice::deleteNotice($id);
        return back()->with('message','Notice Info Delete Successfully');
    }


    public function download(Request $request,$file){
        //dd($file);
        return response()->download(public_path('notice-images/'.$file));

    }

    public function show($id)
    {
        $this->notice = Notice::find($id);
        return view('frontend.home.notice', ['notice' => $this->notice]);
    }

}
