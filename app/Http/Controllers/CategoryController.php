<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;

class CategoryController extends Controller
{

    public $data = [];

    public function index()
    {
     
     $category = Category::all();
        foreach($category as $value) {
            $this->data[] = [
                'id' => $value->id,
                'category' => $value->category,
            ];
        }

        $dataJSON = [
            'status' => 200,
            'data' => $this->data
        ];
        return response()->json($dataJSON, 200);

    }

    
    public function showNews($id)
    {
        $category = News::where('category_id', $id)->get();

        $dataJSON = [
            'status' => 200,
            'data' => $category
        ];
        return response()->json($dataJSON, 200);
    }

    
    public function store(Request $request)
    {
        //
        $category = new Category;
        $category->category = $request->category;
        $category->save();

        $dataJSON = [
            'status' => 201,
            'data' => $category
        ];
        return response()->json($dataJSON, 201);
    }
 
    public function edit($id)
    {
        //
        $category = Category::findOrFail($id);

        $dataJSON = [
            'status' => 200,
            'data' => $category
        ];
        return response()->json($dataJSON, 200);
    }

    
    public function update(Request $request, $id)
    {
        //
        $category = Category::findOrFail($id);
        $category->category = $request->category;

        $category->save();

        $dataJSON = [
            'status' => 200,
            'data' => $category
        ];
        return response()->json($dataJSON, 200);
    }

    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json($category, 204);
    }
}
