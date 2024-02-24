<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    
    <main>
        <div>
            @yield('content')
        </div>
    </main>
    
    @include('partials.footer')
</body>
</html>