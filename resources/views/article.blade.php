@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')

@endsection

@section('body')
@if($article->image)
<img src="/img/{{$article->image}}" class="w-full" alt=""/>

    @endif

<div class="w-full pb-10 pt-0 text-center" style="background-color:{{$article->bgcolor}}; "  >
<div class="article rounded-b p-2 max-w-default mx-auto " style="color:{{$article->fgcolor}}">



    <h2 class="text-2xl mb-4 text-center font-bold">
        {{$article->title}}

    </h2>
    @if ($article->subtitle)
    <h3 class=" text-center text-xl mb-4">
        {{$article->subtitle}}

    </h3>
        
    @endif
    

    <div class="text-justify">
        {!!$article->body_raw!!}

    </div>

    </div>

</div>

    
@endsection