@extends('layouts.plantilla')

@section('titulo', 'Formulario')
    
@section('contenido')


<div class="contenedor-form">

    <form action="/RegistrarLibro" method="POST">
        @csrf <!-- token de seguridad-->

        <div class="mb-3">
          <label for="ISBN" class="form-label">ISBN</label>
          <input type="text" name="ISBN" class="form-control" aria-describedby="emailHelp" value= "{{old('txtISBN')}}">
          <h2 class="errores">{{ $errors->first('txtISBN')  }}</h2>
        </div>
        <div class="mb-3">
          <label for="Titulo" class="form-label">Titulo</label>
          <input type="text" name="titulo" class="form-control" id="exampleInputPassword1 value= "{{old('txtTitulo')}}">
          <h2 class="errores">{{ $errors->first('txtTitulo')  }}</h2>
        </div>
        <div class="mb-3">
          <label for="Autor" class="form-label">Autor</label>
          <input type="text" name="txtAutor" class="form-control" value= "{{old('txtAutor')}}">
          <h2 class="errores">{{ $errors->first('txtAutor')  }}</h2>
        </div>
        <div class="mb-3">
          <label for="Páginas" class="form-label">Páginas</label>
          <input type="text" name="txtPaginas" class="form-control" value= "{{old('txtPaginas')}}">
          <h2 class="errores">{{ $errors->first('txtPaginas')  }}</h2>
        </div>
        <div class="mb-3">
          <label for="Editorial" class="form-label">Editorial</label>
          <input type="text" name="txtEditorial" class="form-control" value= "{{old('txtEditorial')}}">
          <h2 class="errores">{{ $errors->first('txtEditorial')  }}</h2>
        </div>
        <div class="mb-3">
          <label for="Email de la editorial" class="form-label">Email de la editorial</label>
          <input type="text" name="txtEmaileditorial" class="form-control" value= "{{old('txtEmaileditorial')}}">
          <h2 class="errores">{{ $errors->first('txtEmaileditorial')  }}</h2>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary mt-3">Registrar libro</button>
        </div>
        
    </form>

</div>

@endsection