<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $members ,$member;

    public function index()
    {
        return view('backend.member.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Member::newMember($request);
        return back()->with('message','Member Add successfully');
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
        $this->member = Member::all();
        //dd($this->notice->all());
        return view('backend.member.manage',['members'=> $this->member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->member = Member::find($id);
        return view('backend.member.edit',['member' =>$this->member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Member::updateMember($request, $id);
        return redirect('/member-manage')->with('message','Member Info Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Member::deleteMember($id);
        return back()->with('message','Member Info Delete Successfully');
    }
}
