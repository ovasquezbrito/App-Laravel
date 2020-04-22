<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'App')</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
        
    </style>
</head>
<body>
    <div id="app" 
        class="d-flex 
            flex-column
            h-screen justify-content-between">
        <header>
            @include('partials.nav')

            @include('partials.session-status')
        </header>

        <main class="py-4">
            @yield('content')
        </main>
        
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
        
    </div>
   
</body>
</html>