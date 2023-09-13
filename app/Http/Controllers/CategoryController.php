<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        $category =category::all();
        return view('admin.category.category',compact('category'));
    }

    public function addcategory()
    {
        return view('admin.category.add-category');
    }

    public function store(Request $request)
{
    $request->validate([
        'category' => 'required|unique:categories,category_name'
    ]);

    $category = new Category();
    $category->category_name = $request->input('category');

    if ($category->save()) {
        return redirect('admin/categories')->with('success', 'Category added successfully');
    } else {
        return 'error';
    }
}
    public function editcategory(Request $request,$id)
    {
         $category = Category::find($id);
         return view('admin.category.update-category',compact('category'));
    }

    public function updatecategory(Request $request,$id)
    {
        $category = Category::find($id);

        $request->validate([
            'category' => 'required'
        ]);

        $category->category_name = $request->input('category');
        $category->save();
        if($category){
            return redirect('admin/categories')->with('success','category updated successfully');
        }

    }

    public function destroy(Request $request,$id)
    {
         $category = Category::find($id);
         $category->delete();
         return redirect('admin/categories')->with('success','Category deleted Successfully');

    }
}
