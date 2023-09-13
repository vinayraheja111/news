@extends('admin.layouts.app')

@section('content')

<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="/admin/add-user">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        @if(count($user) > 0)
                        @foreach($user as $arr)
                          <tr>
                              <td class='id'>{{ $loop->iteration }}</td>
                              <td>{{ $arr->name }}&nbsp{{ $arr->lname}}</td>
                              <td>{{ $arr->email }}</td>
                              <td>{{$arr->role == 0 ? 'admin' : 'user'}}</td>
                              <td class='edit'><a href='{{ route("admin.edit.user",$arr->id)}}'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='{{ route("admin.delete.user",$arr->id) }}'><i class='fa fa-trash-o'></i></a></td>
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
