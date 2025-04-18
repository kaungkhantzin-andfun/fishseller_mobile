<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">

    <!-- font awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
</head>
<body>
    <header>

        @include('frontend.include.header')

    </header>

    <main>
        @yield('content')
    </main>

    

    <footer>

        @include('frontend.include.footer_menu')

        <div class="copyright">
            Copyright 2025 designed by Andfun Yanogn Co.,Ltd
        </div>
    </footer>
</body>
<script src="{{ asset('js/script.js') }}"></script>
@yield('script')
</html>