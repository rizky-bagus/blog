<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::count();
        $berita = News::count();
        $news = News::where('status',1)->get();
        return view('home',compact('news','category','berita'));
    }

    public function view($id)
    {
        $news = News::findOrFail($id);
        return view('show-news',compact('news'));
    }
}
