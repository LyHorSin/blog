@extends('layouts.layout')
@section('content')
    <article>
        <strong> {{ $post->title }} </strong>
        <p> {{ $post->body }} </p>
    </article>

    @foreach ($post->comments as $comment)
        <p> {{ $comment->body }} </p>
    @endforeach

    <hr>
    <form action="/comments/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        <label for="fname">Comment</label>
        <input type="text" id="comment" name="comment" required><br><br>
        <input type="submit" value="Submit">
    </form>
@endsection