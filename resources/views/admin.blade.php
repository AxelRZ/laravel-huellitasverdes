@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')

@endsection

@section('body')

<div class="innerwrapper p-10 w-full text-center">

    <div class="max-w-default mx-auto">


        <h2 class=" text-2xl bg-black text-white rounded-t">
            Editar articulos.
        </h2>

        <div class="w-full rounded-b overflow-y-scroll bg-huellitas_light p-4" style="height: 500px">

            <form action="/admin/create/article">
                <input class="mb-4 py-4 w-full bg-white rounded" type="submit" value="Agregar nuevo">
            </form>
            @foreach ($articles->reverse() as $article)

        <button class="p-4 mb-4 rounded bg-opacity-50 w-full bg-white text-justify" onclick="window.location = 'admin/edit/article/{{$article->id}}'">
                <p>ID: <span class="font-bold">{{$article->id}}</span></p>
                <p>Fecha de publicacion: {{$article->created_at->format('d-m-Y')}}</p>
                <p>Fecha de actualizacion: {{$article->updated_at->format('d-m-Y')}}</p>
                <p>Ultima edicion hecha por: {{$article->last_editor ?? '¿Nadie?'}}</p>
                <p>Titulo: <span class="font-bold">{{$article->title}}</span></p>


            </button> <br>
                
            @endforeach





        </div>

        <div class="mt-2">
            <a class="w-full border-2"href="/admin/upload">Subir un archivo</a>
        </div>

        


        
        
    </div>

</div>

    
@endsection
