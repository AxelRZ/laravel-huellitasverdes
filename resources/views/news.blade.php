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

.active {
    display: block;
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
        

        @foreach ($cards as $card)
            @if ($card->relevance == 1)
            <div class='column w-full'>

                <div class='card' style=" background-color: {{$card->bgcolor}}; color: {{$card->fgcolor}}; ">
                    @if ($card->image)
                    <img {{"src=/img/$card->image" }} class='w-full' />

                        
                    @else

                        
                    @endif
    
        
                    <div class='card-body flex flex-col justify-center'>
                        <div class='title text-lg md:text-4xl leading-6 md:leading-10  '>{{$card->title}}</div>
                        <div class='text-base md:text-xl text-justify'>
                            {{substr($card->body,0,270).'...'}}
                        </div>
        
        
                    </div>
        
                </div>
                
            </div>

                

            @else

                
                



            <div class='column w-full '>
            <div class='card card-irrelevant flex ' style="color: {{$card->fgcolor}}; background-color: {{$card->bgcolor}};"  >

                        @if ($card->image)
                        <div class=" h-full py-4 pl-4 left-0" style="width:17rem;">

                        <img {{"src=/img/$card->image" }} class="irr-image rounded" alt="" srcset="" style="object-fit:cover;"/>
                        </div>

                        @endif
                        
                    <div class='card-body w-full items-center flex-grow-1 text-bold' style="height:100%; padding:0.75rem 0.75rem; )  ">
                            
                            
                        <div class='  justify-center w-full h-full text-md sm:text-lg md:text-2xl  flex items-center relative '>

                            <div class="text-center absolute  font-bold w-full" style="overflow-wrap:break-word; height:auto" >
                                {{$card->title}} 
                            </div>
                        </div>
                    </div>
        
                </div>
                
            </div>
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




