@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')

@endsection

@section('body')

<div class="max-w-default w-full mx-auto p-8">

    <form action="/admin/imageupload" class="text-center" method="post" enctype="multipart/form-data">

        @csrf
        <label for="file">Selecciona o arrastra el archivo: </label>
        <input type="file" name="file" id="file" class="border-2"><br><br>
        <input type="submit" class="mx-auto" value="Subir archivo"><br>

    </form>
    <p class="mt-8 text-center">
        Si falla constantemente la subida del archivo, pongase en
        contacto con el desarrollador.
    </p>

</div>

    
@endsection

