<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="{{ route('admin.posts') }}"><img class="logo" src="{{asset('assets/images/news.jpg')}}"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-9  col-md-1">
                        <a href="logout.php" class="admin-logout" >logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="{{ route('admin.posts') }}">Post</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.category') }}">Category</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.users') }}">Users</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
