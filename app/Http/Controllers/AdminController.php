<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function category(){
        $data= Category::all();
        return view('admin.category', compact('data'));
    }

    public function delete_category($id){
        $data= Category::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit_category($id){
        $data= Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id){
        $data= Category::find($id);
        $data->category_name= $request->category;
        $data->save();
        return redirect('admin.update_category');
    }

    public function article(){
        return view('admin.article');
    }

    public function add_category(Request $request){
        $category = new Category;
        $category->category_name= $request->category;
        $category->save();
        return redirect()->back();
    }
}
