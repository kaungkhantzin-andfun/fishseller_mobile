<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    @yield('style')
</head>
<body>
    <header>

    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
<script src="{{ asset('js/script.js') }}"></script>
@yield('script')
</html>