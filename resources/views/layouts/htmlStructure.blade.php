<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('layouts._partials.nav')

    <main>
        @yield('content')
    </main>
    @include('layouts._partials.footer')
</body>
</html>