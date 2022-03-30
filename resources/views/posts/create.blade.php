@extends('layouts.layout')
@section('content')
    <form action='/posts' method='POST'>
        {{ csrf_field() }}
        <div class="group">
            <label for="fname">Title</label>
            <input type="text" id="title" name="title" required><br><br>
            <label for="lname">Body</label>
            <input type="text" id="body" name="body" required><br><br>
            <input type="submit" value="Submit">
        </div>
    </form>
@endsection
