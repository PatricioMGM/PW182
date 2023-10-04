<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="row">
        <div class="col-4">
        <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
            <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
            <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
            <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
        </div>
        </div>
        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h4 id="list-item-1"><a href="/">inicio</a></h4>
                
                <h4 id="list-item-2"><a href="/vis1">vista1</a></h4>
                
                <h4 id="list-item-3"><a href="/vis2">vista2</a></h4>
                
                <h4 id="list-item-4"><a href="/vis3">vista3</a></h4>

                
            </div>
        </div>
    </div>
    <br>
    @yield('contenido')

</body>
</html>