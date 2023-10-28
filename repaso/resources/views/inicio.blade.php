@extends('layouts.plantilla')

@section('titulo', 'Inicio')
    
@section('contenido')

<div class="row imagenes-bootstrap">
    <div class="col-md-6">
        <!-- Contenido de la segunda mitad de la pantalla -->
        <div class="card text-bg-dark imagen_noticia  mt-5 ">
            <img src="https://images.hola.com/mx/imagenes/estar-bien/20231027242579/13-mejores-libros-de-miedo-y-suspense-halloween/1-330-162/gettyimages-1200264389-t.jpg?tx=w_1200" class="card-img" alt="Los 13 mejores libros de terror" height="350px">
            <div class="card-img-overlay">
                <h4 class="card-title txcolores"><a class="card-text txcolores esp" href="https://mx.hola.com/estar-bien/galeria/20231027242579/13-mejores-libros-de-miedo-y-suspense-halloween/1/" target="_blank">Los 13 mejores libros de terror</a></h4>
                <p class="card-text txcolores">Tenemos Halloween a la vuelta de la esquina y pocos son los escaparates de tiendas (incluso decoramos nuestras casas), que no nos lo recuerdan.</p>       
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Contenido de la segunda mitad de la pantalla -->
        <div class="card text-bg-dark imagen_noticia  mt-5 ">
            <img src="https://i.ytimg.com/vi/WDzGRkuXBXs/maxresdefault.jpg" class="card-img" alt="Los 13 mejores libros de terror" height="350px">
            <div class="card-img-overlay">
                <h4 class="card-title txcolores"><a class="card-text txcolores esp" href="https://www.24-horas.mx/2023/10/24/literatura-de-terror-un-genero-inagotable/" target="_blank">Literatura de terror, un género inagotable</a></h4>
                <p class="card-text txcolores">La literatura de terror se ha ganado un lugar especial entre los lectores de todas las lenguas y año tras año el mercado publica títulos cuyas editoriales esperan con gran expectativa el que se coloquen en el gusto del público lector</p>
            </div>
        </div>
    </div>
</div>
    
@endsection