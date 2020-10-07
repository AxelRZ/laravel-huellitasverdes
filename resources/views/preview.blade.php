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

    <div class=" mt-12">
        <p>Card preview</p>
        @if ($article->relevant == false)
        <div class='column w-full' >

                <div class='card' style=" background-color: {{$article->bgcolor}}; color: {{$article->fgcolor}}; " onclick="window.location='article/{{$article->id}}'">
                    @if ($article->image)
                    <img {{"src=/img/$article->image" }} class='w-full' />
                    @endif
    
        
                    <div class='card-body flex flex-col justify-center'>
                        <div class='title text-lg md:text-4xl leading-6 md:leading-10  '>{{$article->title}} {{$article->id}}</div>
                        <div class='text-base md:text-xl text-justify'>
                            {{substr($article->body,0,270).'...'}}
                        </div>
        
        
                    </div>
        
                </div>
                
            </div>

                

            @else
            <div class='column w-full '>
            <div class='card card-irrelevant flex ' style="color: {{$article->fgcolor}}; background-color: {{$article->bgcolor}};"  onclick="window.location='article/{{$article->id}}'" >

                        @if ($article->image)
                        <div class=" h-full py-4 pl-4 left-0" style="width:17rem;">

                        <img {{"src=/img/$article->image" }} class="irr-image rounded" alt="" srcset="" style="object-fit:cover;"/>
                        </div>

                        @endif
                        
                    <div class='card-body w-full items-center flex-grow-1 text-bold' style="height:100%; padding:0.75rem 0.75rem; )  ">
                            
                            
                        <div class='  justify-center w-full h-full text-md sm:text-lg md:text-2xl  flex items-center relative '>

                            <div class="text-center absolute  font-bold w-full" style="overflow-wrap:break-word; height:auto" >
                                {{$article->title}} {{$article->id}}
                            </div>
                        </div>
                    </div>
        
                </div>
                
            </div>
            @endif



    </div>

</div>

    
@endsection