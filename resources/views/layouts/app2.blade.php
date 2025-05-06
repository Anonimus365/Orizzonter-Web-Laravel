<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<div id="containerHeader" class="flex flex-col h-screen">
        @include('includes.header')

        @include('includes.selector-form')

        <div class="py-20">
            @yield('content')
        </div>

        @include('includes.footer')
    </div>
</body>
</html>