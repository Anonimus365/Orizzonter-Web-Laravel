<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Orizzonter')</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('index.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <div id="containerHeader" class="flex flex-col h-screen">
        @include('includes.header')

        @include('includes.sectionHeader')
    </div>

        @include('includes.features')

    <main>
            @yield('content')
    </main>

    @include('includes.focusPlace')

    @include('includes.download')

    @include('includes.footer')

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('index.js') }}"></script>
    <script src="{{ asset('/dist/home/funcion.js') }}"></script>
</body>
</html>
