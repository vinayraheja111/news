@extends('layouts.app')

@section('content')
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <!-- post-container -->
                    <div class="post-container">
                        <div class="post-content single-post">
                            <h3>{{ $post->title }}</h3>
                            <div class="post-information">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    Html
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href='author.php'>{{$post->role == 0 ? 'Admin' : 'User'}}</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
                                </span>
                            </div>
                            <img class="single-feature-image" src="{{asset('/images/'.$post->image)}}" alt=""/>
                            <p class="description">
                                {{ $post->description }}
                            </p>
                        </div>
                    </div>
                    <!-- /post-container -->
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
