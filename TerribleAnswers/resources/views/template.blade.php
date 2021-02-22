<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terrible Answers</title>


    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="script" href="{{mix('js/app.js')}}">

    <style>
        .btn-primary {
            background-image: linear-gradient(to bottom, #6B0AC1 0, #6001D1 100%);
        }

        .btn-primary:focus, .btn-primary:hover {
            background-color: #570EC4;
        }

        .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
            color: #fff;
            background-color: #740CEB;
            border-color: #122b40;
        }

        .btn-link {
            color: #6001D1;
        }

        .btn-link:hover, .btn-link:focus {
            color: #570EC4;
        }
    </style>

    @yield('styles')

    <script src="https://kit.fontawesome.com/f7b3d50ded.js" crossorigin="anonymous"></script>
    @yield('scripts')

</head>
<body class="antialiased">

@include('_includes/nav/topnav')

@yield('content')
</body>
</html>
