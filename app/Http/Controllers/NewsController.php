<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $newseis,$news, $events;

    public function index()
    {
        return view('backend.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd($request->all());
        News::newNews($request);
        return back()->with('message','News create successfully');
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
        $this->news = News::all();
        return view('backend.news.manage',['newseis'=> $this->news]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->news = News::find($id);
        return view('backend.news.edit',['news' =>$this->news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        News::updateNews($request, $id);
        return redirect('/news-manage')->with('message','news Page Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        News::deleteNews($id);
        return back()->with('message','News Info Delete Successfully');
    }
    public function allNews()
    {
        $this->news = News::all();
        return view('frontend.news.index',['news'=> $this->news]);
    }
    public function allEvent()
    {
        $this->events = News::all();
        return view('frontend.event.index',['events'=> $this->events]);
    }
}
