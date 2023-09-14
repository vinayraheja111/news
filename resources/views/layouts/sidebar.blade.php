<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
         @if(count($recentPosts) > 0)
         @foreach($recentPosts as $rp)
        <div class="recent-post">
            <a class="post-img" href="{{ route('single.post',$rp->id) }}">
                <img src="{{asset('/images/'.$rp->image)}}" alt=""/>
            </a>
            <div class="post-content">
                <h5><a href="{{ route('single.post',$rp->id )}}">{{$rp->title}}</a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php'>Html</a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    {{ \Carbon\Carbon::parse($rp->created_at)->format('d M, Y') }}
                </span>
                <a class="read-more" href="single.php">read more</a>
            </div>
        </div>
        @endforeach
        @endif


    </div>
    <!-- /recent posts box -->
</div>
