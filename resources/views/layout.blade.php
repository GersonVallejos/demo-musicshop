<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href=" {{mix('css/app.css')}} ">
    <script src=" {{mix('js/app.js')}} " defer></script>
    <script src="https://kit.fontawesome.com/e211a248d1.js" crossorigin="anonymous"></script>

    <style>
       
    </style>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen 
        justify-content-between">

        <header>
            @include('partials.nav')
            @include('partials.estados')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-dark text-center text-white py-3 shadow">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
        

        
    </div>
</body>

</html>