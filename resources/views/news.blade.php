@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<style>
*{
    z-index: 10;
}

html {
}


.menu {
    top: 3rem;
}


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


.card-wrapper{
    background: url("/img/pattern.png");

}

.card img{
    max-height: 500px;
}
</style>
@endsection


@section('body')
<div class="w-full card-wrapper flex py-6 justify-center px-2 sm:px-6 md:px-0 relative">




<div class=" max-w-3xl flex flex-col  lg:space-y-3 space-y-5 items-center ">





    <div class="cards root  max-w-default">
        

        @foreach ($cards->reverse() as $card)
            @if ($card->relevant == true)

            @include('components.card-1')

            @else

            @include('components.card-0')
            
            @endif
        

            
        @endforeach


    </div>
    <div class="flex px-2 text-4xl rounded bg-white bg-opacity-75 max-w-default justify-center space-x-10">
        <a href="/news/{{$page-1}}">
        <button >
            <i class="fas fa-arrow-circle-left"></i>
        </button>

        </a>
        <p>{{$page}}</p>

        <a href="/news/{{$page+1}}">
            <button >
                <i class="fas fa-arrow-circle-right"></i>
            </button>
    
        </a>
    </div>

</div>

<div class="flex-col ml-4 h-full hidden xl:flex ">
    <i class="fab fa-facebook-square fa-5x"></i>
    <i class="fab fa-instagram-square fa-5x"></i>
</div>

</div>


@endsection




