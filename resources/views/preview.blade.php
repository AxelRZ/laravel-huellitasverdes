@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<style>

.title{
    margin-bottom: 0.5rem;
    text-align: center;
    font-weight: bold;
}
.card-body{
    padding: 1rem 1.5rem;
    height: 15rem;
}
.card-irrelevant{
    height: 9rem;
    width: 100%;
    
}
.irr-image{
    height: 100%;
}
.bghuellitas{
    background: url('/img/pattern.png')
}


.card-wrapper{
    background: url("/img/pattern.png");

}

.card img{
    max-height: 500px;
}
</style>

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
<p class="text-center my-4 font-bold">Card preview</p>

<div class="w-full bghuellitas p-4">
    <div class="max-w-default mx-auto ">
    
        @if ($article->relevant == true)
    
            @include('components.card-1',['card'=>$article]);
    
            @else
    
            @include('components.card-0',['card'=>$article]);
    
            
        @endif
        
    
    
    
    </div>

</div>



    
@endsection