<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link bootstrap --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- link local css --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>    
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-4 bg-red">
                @yield('profile')
            </div>
            <div class="col-4">
                @yield('content')
            </div>
            <div class="col-4">
                @yield('special')
            </div>
        </div>
        @yield('full_screen')
    </div>

</body>

</html>
