@extends('layouts.layout')
@section('full_screen')
    <div class="row">
        <div class="col-6 d-flex justify-content-end">
            <img class="rounded-circle" src="images/camera.png" style="width: 150px; height: 150px">
        </div>
        <div class="col-6 d-flex">
            <a href="/logout"> <strong> LogOut </strong> </a> 
        </div>
    </div>
@endsection
