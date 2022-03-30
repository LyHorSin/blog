@extends('layouts.layout')
@include('layouts.navbar')
@section('content')
    @include('posts.postOption')
    @foreach ($posts as $post)
        <br>
        <div class="bg-dark rounded p-3">
            <div class="row d-flex">
                <div class="col-3 ">
                    <a  href="/posts/{{ $post->title }}">
                        <img class="rounded-circle "
                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" width="70" height="70">
                    </a>
                </div>
                <div class="col-9 m-0 p-0">
                    <a href="/posts/{{ $post->title }}"> <p> {{ $post->title }} </p> </a>
                    <p style="color: gray"> 13 min </p>
                </div>
            </div>

            <div class="row pt-2 pl-2">
                <p> {{ $post->body }} </p>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <a href=""> <img src="images/download.png" style="width: 100%"> </a>
                </div>
            </div>
            <hr>
            <div class="d-flex text-center bg-dark">
                <div class="col-3">
                    <a href="">Like</a>
                </div>
                <div class="col-6">
                    <a href="">Comment</a>
                </div>
                <div class="col-3">
                    <a href="">Share</a>
                </div>
            </div>
        </div>
    @endforeach
    <br>
@endsection
