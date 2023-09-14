<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;

class FrontNewsController extends Controller
{
    public function index()
    {
        $category = category::take(5)->get();
        $post = post::paginate(5);
        $recentPosts = Post::latest()->get();
        return view('welcome',compact('post','category','recentPosts'));
    }

    public function singlepost(Request $request,$id)
    {
        $category = category::take(5)->get();
        $recentPosts = Post::latest()->get();
        $post = post::find($id);
        return view('single',compact('post','category','recentPosts'));
    }

    public function category(Request $request, $id)
    {
        $category = category::take(5)->get();
        $recentPosts = Post::latest()->get();
        $categoryPosts = category::leftJoin('posts', 'categories.id', '=', 'posts.category_id')
            ->where('categories.id', $id)
            ->select('posts.*', 'categories.category_name')
            ->get();
    //    echo "<pre>";
    //     print_r($categoryPosts);
    //    die;
       return view('category',compact('categoryPosts','category','recentPosts'));
    }
}
