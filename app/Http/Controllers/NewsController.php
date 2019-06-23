<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
	public $data = [];

    public function index()
    {
    	$news = News::all();
    	foreach($news as $value) {
    		$this->data[] = [
                'id' => $value->id,
    			'author' => $value->author,
    			'title' => $value->title,
    			'description' => $value->description,
    			'image' => $value->image,
    			'content' => $value->content,
    			'category_id' => $value->Category->category,
                'status' => $value->status,
    		];
    	}

        $dataJSON = [
            'status' => 200,
            'data' => $this->data
        ];
    	return response()->json($dataJSON, 200);
    }

    public function edit($id)
    {
    	$news = News::findOrFail($id);

        $dataJSON = [
            'status' => 200,
            'data' => $news
        ];
    	return response()->json($dataJSON, 200);
    }

    public function store(Request $request)
    {
    	$news = new News;
        $news->author = $request->author;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = $request->image;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        $news->status = 0;

        $news->save();

        $dataJSON = [
            'status' => 201,
            'data' => $news
        ];
    	return response()->json($dataJSON, 201);
    }

    public function update(Request $request, $id)
    {
    	$news = News::findOrFail($id);
        $news->author = $request->author;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = $request->image;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        if ($news->status == 0) {
            $news->status = 0;
        } else {
            $news->status = 1;
        }

        $news->save();

        $dataJSON = [
            'status' => 200,
            'data' => $news
        ];
    	return response()->json($dataJSON, 200);
    }

    public function destroy($id)
    {
    	$news = News::findOrFail($id);
    	$news->delete();

    	return response()->json($news, 204);
    }

    public function publish($id)
    {
        $news = News::findOrFail($id);

        if ($news->status == 0) {
            $news->status = 1;
        }

        $news->save();

        $dataJSON = [
            'status' => 200,
            'data' => $news
        ];
        return response()->json($news, 200);
    }
}
