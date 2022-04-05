@extends('layouts.layout')
@section('content')

    <form action="/comments/{id}" method="POST" >
        {{ csrf_field() }}
        <label for="fname">Comment</label>
        <input type="text" id="comment" name="comment" required ><br><br>
        <input type="submit" value="Submit">
    </form>

@endsection