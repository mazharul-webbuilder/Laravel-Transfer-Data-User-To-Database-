<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand">BRAND</a>
            <ul class="navbar-nav ms-auto">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('full-name-maker')}}" class="nav-link">Full Name Make</a></li>
                <li><a href="{{route('registration')}}" class="nav-link">Student Registration</a></li>
            </ul>
        </div>
    </nav>


    @yield('section-one')



<script src="{{asset('/js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
</body>
</html>
