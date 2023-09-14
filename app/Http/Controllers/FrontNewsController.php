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
        $post = post::paginate(1);
        return view('welcome',compact('post','category'));
    }
}
