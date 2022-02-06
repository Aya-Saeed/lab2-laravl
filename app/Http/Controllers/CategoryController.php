<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function list()
    {
        $categories= category::all();
        return view('category.category',['catego'=>$categories]);
        
    }
    public function create()
    {
        return view('category.create');
    }
    public function save(Request $request)
    {
        $category = new category;
        $category -> name = $request -> name;
        $category->save(); // INSERT INTO TABLE 

        return redirect()->route('categories.list');
        // save new category
    }
    public function update($id)
    {
        $data=category::find($id);
        return view('category.edit',['data'=>$data]);
    }

    public function updateddata(Request $request)
    {
        $category = category::find($request->id);
        $category -> name = $request->name;
        $category->save();

        return redirect()->route('categories.list');
      
    }
    public function delete($id)
    {
        // $category = Category::where('id','=', $id)->get(); 
        $category = category::find($id);
        // $cateogry = Category::whereId($id)->get();
        //$category = Category::findOrFail($id);

        if($category)
        {
            $category -> delete();
        }

        return redirect()->route('categories.list');

    }
    public function show($id)
    {
        $categories=category::all();
        return view("category.categorydetails",["cat"=>$categories[$id-1]]);
    }

}
