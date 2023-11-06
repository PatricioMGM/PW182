<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    @if (session()->has('confirmacion'))
    <script>
        const confirmacion = @json(session('confirmacion'));
        Swal.fire({
            icon: 'success',
            title: confirmacion.titulo,
            text: confirmacion.dato
        });
    </script>
    @endif


    
    <header>
        @include('partials.navBar')
    </header>
    <body class="margen-bottom">
        @yield('contenido')
    </body>
    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>