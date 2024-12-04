<!DOCTYPE html>
<html lang="en">
    <head>
        @include('userLayout.header')
    </head>
    <body>
        @include('userLayout.nav')
        @yield('content')
        @include('userLayout.footer')
    </body>
</html>