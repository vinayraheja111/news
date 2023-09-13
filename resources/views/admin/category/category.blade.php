@extends('admin.layouts.app')

@section('content')

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="/admin/add-category">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @if(count($category) > 0)
                        @foreach($category as $cat)
                        <tr>
                            <td class='id'>{{ $loop->iteration}}</td>
                            <td>{{ $cat->category_name }}</td>
                            <td>5</td>
                            <td class='edit'><a href='{{ route("admin.edit.category",$cat->id) }}'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='{{ route("admin.delete.category",$cat->id) }}'><i class='fa fa-trash-o'></i></a></td>
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
