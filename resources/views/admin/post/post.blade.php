@extends('admin.layouts.app')

@section('content')

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="/admin/add-post">add post</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        @if(count($post) >  0)
                        @foreach($post as $arr)
                          <tr>
                              <td class='id'>{{ $loop->iteration }}</td>
                              <td>{{ $arr->title }}</td>
                              <td>{{ $arr->category_id }}</td>
                              <td>{{ \Carbon\Carbon::parse($arr->created_at)->format('d M, Y') }}</td>
                              <td>{{ $arr->author == 0 ? 'admin' : 'user' }}</td>
                              <td class='edit'><a href="{{ route('admin.edit.post',$arr->id) }}"><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='{{ route("admin.delete.post",$arr->id) }}'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          @endforeach
                          @endif
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>

@endsection
