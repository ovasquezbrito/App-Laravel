<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App')</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
        
    </style>
</head>
<body>
    @include('partials.nav')

    @include('partials.session-status')

    @yield('content')
</body>
</html>