@extends('layouts.app')

@section('content')
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                        @foreach($post as $arr)
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="post-img" href="single.php"><img src="{{asset('/images/'.$arr->image)}}" alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php'>{{ $arr->title }}</a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php'>PHP</a>
                                            </span>
                                            <span>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href='author.php'>{{$arr->role == 0 ? 'Admin' : 'user'}}</a>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                {{ \Carbon\Carbon::parse($arr->created_at)->format('d M, Y') }}
                                            </span>
                                        </div>
                                        <p class="description">
                                        {{ Illuminate\Support\Str::limit($arr->description, 200, '...') }}
                                        </p>
                                        <a class='read-more pull-right' href='single.php'>read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <ul class='pagination'>
                            <!-- <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li> -->
                            @for ($i = 1; $i <= $post->lastPage(); $i++)
                            <li class="{{ $i === $post->currentPage() ? 'active' : '' }}">
                                <a href="{{ $post->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        </ul>
                    </div><!-- /post-container -->
                </div>
              @include('layouts.sidebar')
            </div>
        </div>
    </div>

@endsection

