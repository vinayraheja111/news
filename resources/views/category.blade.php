@extends('layouts.app')
@section('content')
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                @if($categoryPosts->isNotEmpty())
                <h2 class="page-heading">{{ $categoryPosts[0]->category_name }}</h2>
                @else
                <h2 class="page-heading">Category does Not exist</h2>
                @endif
                  @foreach($categoryPosts as $cps)
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="{{ route('single.post',$cps->id) }}"><img src="{{asset('images/'.$cps->image)}}" alt=""/></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h3><a href='single.php'>{{ $cps->title }}</a></h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='category.php'>PHP</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href='author.php'>{{$cps->role == 0 ? 'Admin' : 'User'}}</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ \Carbon\Carbon::parse($cps->created_at)->format('d M, Y') }}
                                        </span>
                                    </div>
                                    <p class="description">
                                        {{ $cps->description }}
                                     </p>
                                    <a class='read-more pull-right' href='{{ route("single.post",$cps->id)}}'>read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <ul class='pagination'>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                    </ul>
                </div>

            </div>
            @include('layouts.sidebar')
        </div>
      </div>
    </div>
@endsection
