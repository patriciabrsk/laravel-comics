<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('header')

    <main>
        @yield('main-content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
