@extends('admin.layouts.app')

@section('content')
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="{{ route('admin.update.post',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" value="{{ $post->title }}" class="form-control" autocomplete="off" required>
                          @error('post_title')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" value="{{ $post->description }}" class="form-control" rows="5"  required>{{ $post->description }}</textarea>
                          @error('postdesc')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="file" required>
                          @error('file')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <img src="{{asset('/images/'.$post->image)}}" width="50px" height="50px" alt="post_image" style="margin-top:3px">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                          <option value="" selected> Select Category</option>
                          @if(count($category) > 0)
                            @foreach($category as $cat)
                            <option value="{{ $cat->id }}" {{ $post->category_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->category_name }}
                            </option>
                            @endforeach
                        @endif
                          </select>
                          @error('category')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>


  @endsection

