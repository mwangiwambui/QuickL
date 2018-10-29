@extends('layout.main')
@section('title','feedback')
@section('content')


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">404
            <small>Page Not Found</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">404</li>
        </ol>

        <div class="jumbotron">
            <h1 class="display-1">404</h1>Use the links on the navigation bar to get you back on track:

        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->
    @endsection
