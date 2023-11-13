<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\News;
use App\Models\Notice;
use App\Models\Photo;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $news;
    public function index()
    {
        return view('frontend.home.index',[
            'notices'=>Notice::all(),
           'news'=> News::where('type','news')->latest()->take(4)->get(),
           'event'=> News::where('type','event')->latest()->take(4)->get(),
            'gallerys' => Gallery::all(),

        ]);
    }
    public function about()
    {
        return view('frontend.about.index');
    }
    public function executive()
    {
        return view('frontend.about.executive',[
//            'executives' =>Executive::orderBy('id', 'desc')->paginate(10)
            'executives' =>Executive::all()
        ]);
    }
    public function contact()
    {
        return view('frontend.about.contact');
    }
    public function member()
    {
        return view('frontend.member.member',[
            'members'=>Member::orderBy('id', 'desc')->paginate(20)
        ]);
    }
    public function search(Request $request)
    {
        return view('frontend.member.member',[
            'members'=>Member::where('name', 'LIKE', '%'.$request->search.'%')->get()
        ]);
    }
    public function details($id)
    {
        $this->news = News::find($id);
        return view('frontend.home.details',['news'=>$this->news]);
    }
    public function media()
    {
        return view('frontend.photo.photo',[
            'categories' => PhotoCategory::where('status', 1)->get(),
            'photos'=> Photo::where('status', 1)->get()
        ]);

    }

    public function photoByCategory($id)
    {
        return view('frontend.photo.photo',[
            'categories' => PhotoCategory::where('status', 1)->get(),
            'photos'=> Photo::where('photo_category_id', $id)->get()
        ]);
    }

}
