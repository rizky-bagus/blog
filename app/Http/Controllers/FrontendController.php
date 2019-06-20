<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class FrontendController extends Controller
{

    public function timeZone($location){
        return date_default_timezone_set($location);
    }


    public function index()
    {
        $this->timeZone('Asia/Jakarta');
        $hari =  date("Y-m-d");
        $waktu = date("H:i:s");
        $category = Category::paginate(10);
        $news = News::orderBy('created_at', 'DESC')->where('status', 1)->take(6)->get();
        $recents = News::orderBy('created_at', 'desc')->where('status', 1)->take(8)->get();

        return view('welcome', compact('news', 'waktu', 'recents','hari', 'category'));
    }

    public function detail($id)
    {
        $this->timeZone('Asia/Jakarta');
        $hari =  date("Y-m-d");
        $waktu = date("H:i:s");
    	$news = News::findOrFail($id);
        $category = Category::paginate(10);
        $recents = News::orderBy('created_at', 'desc')->where('status', 1)->take(6)->get();

        return view('detail', compact('news', 'recents', 'category', 'hari', 'waktu'));
    }

    public function news()
    {
        $this->timeZone('Asia/Jakarta');
        $hari =  date("Y-m-d");
        $waktu = date("H:i:s");
        $category = Category::paginate(10);
        $news = News::orderBy('created_at', 'DESC')->where('status', 1)->paginate(7);
        $recents = News::orderBy('created_at', 'desc')->where('status', 1)->take(6)->get();

        return view('news', compact('news', 'recents', 'hari', 'waktu', 'category'));
    }

    public function search(Request $request)
    {
        $this->timeZone('Asia/Jakarta');
        $hari =  date("Y-m-d");
        $waktu = date("H:i:s");
        $search = $request->search;
        $news = News::where('title', 'like', "%".$search."%")->where('status', 1)->paginate(7);
        $category = Category::paginate(10);
        $recents = News::orderBy('created_at', 'desc')->where('status', 1)->take(6)->get();
        
        return view('news', compact('hari', 'waktu', 'search', 'news', 'category', 'recents'));
    }

    public function filter($id)
    {
        $this->timeZone('Asia/Jakarta');
        $hari =  date("Y-m-d");
        $waktu = date("H:i:s");
        $category = Category::paginate(10);
        $categories = Category::findOrFail($id);
        $news = $categories->News()->latest()->where('status', 1)->paginate(6);
        $recents = News::orderBy('created_at', 'desc')->where('status', 1)->take(6)->get();

        return view('category', compact('hari', 'waktu', 'category', 'news', 'recents'));
    }
}
