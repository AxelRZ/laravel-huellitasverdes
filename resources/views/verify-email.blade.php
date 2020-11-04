@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')

@endsection

@section('body')

<div class="max-w-default mx-auto">
    @csrf

    <p class="text-center">Un email de verificacion ha sido enviado</p>

    <form action="/email/reverify" class="text-center" method="post">

        <input type="submit" value="Volver a enviar">

    </form>
</div>

    
@endsection
