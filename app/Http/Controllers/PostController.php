<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.post.post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addpost()
    {
        $category = category::all();
        return view('admin.post.add-post',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

          //return $request->post('post_title');

          $request->validate([
            'post_title' => 'required|unique:posts,title',
            'postdesc' => 'required',
            'category' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);

          $post = new post();
          $post->title = $request->input('post_title');
          $post->description =$request->input('postdesc');
          $post->category_id = $request->input('category');
          if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }
          $post->author = 1;
          if($post->save()){
            return redirect('admin/posts')->with('success','Post created successfully');
          }else{
            return 'error';
          }
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
