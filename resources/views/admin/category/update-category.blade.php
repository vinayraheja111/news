@extends('admin.layouts.app')

@section('content')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="{{ route('admin.update.category',$category->id) }}" method="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" value="{{ $category->category_name }}" name="category" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="update" required />
                      @error('category')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
@endsection
