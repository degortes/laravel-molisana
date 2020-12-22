<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta charset="utf-8">
        <title>@yield('page-title', 'home')</title>
    </head>
    <body>
        @include('partials.header')
        <main>

            @yield('content')

        </main>
        @include('partials.footer')
    </body>
</html>
