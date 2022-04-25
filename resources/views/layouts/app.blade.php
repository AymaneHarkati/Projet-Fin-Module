<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
    @powerGridStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen  bg-green-100" style="background-color: #eec0c6;
    background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%);
    ">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow bg-orange-200">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
                {{ $header }}

            </div>
        </header>

        <!-- Page Content -->
        <main style="background-color: #eec0c6;
        background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%);
        ">
            {{ $slot }}
        </main>
    </div>
    <!-- Scripts -->
    @livewireScripts
    @powerGridScripts
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
