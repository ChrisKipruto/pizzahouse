<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- mdb.min -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- tailwind -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

    <!-- datatables.min -->
    <link href="{{ asset('css/addons/datatables.min.css') }}" rel="stylesheet">

    <!-- fontawesome - all.min -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- fav icon -->
    <link rel="shortcut icon" href="{{ asset('img/icons/pizza3.png') }}" type="image/x-icon">
</head>
<body class="bg-red-100">
    <div id="app">
        <header>
            @include('includes.nav')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center">
            <h3 class="font-weight-bold mb-3">
                <strong>
                    Copyright &copy; <?php echo date('Y'); ?> PizzaHouse 
                </strong>
            </h3>
        </footer>
    </div>

    <!-- jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- popper -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- mdb -->
    <script src="{{ asset('js/mdb.min.js') }}"></script>

    <!-- bootbox -->
    <script src="{{ asset('js/bootbox.min.js') }}"></script>

    <!-- main -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- datatables -->
    <script src="{{ asset('js/addons/datatables.min.js') }}"></script>
</body>
</html>
