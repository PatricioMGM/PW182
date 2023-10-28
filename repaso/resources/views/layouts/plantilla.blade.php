<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('titulo')</title>
    <script src="sweetalert2.all.min.js"></script>
</head>
<body>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Todo correcto',
            text: 'Libro guardado'
        });
    </script>
    
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