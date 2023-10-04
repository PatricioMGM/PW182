<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/js/app.js'])
        @import('resources/views/layouts/plantilla')
    </head>
    <body class="antialiased">
        
        <div class="justify-content-center h-100 w-100">
            <h1 class="text-danger">Inicio</h1>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Card del bootstrap</h5>
                    <p class="card-text">El loreipsum esta bien chido, te llena un buen espacio y aveces dice cosas que tienen 0 centido pero otras veces tambien</p>
                    <a href="#" class="btn btn-primary">XD</a>
                </div>
            </div>
        </div>
    </body>
</html>
