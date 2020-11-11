@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<style>
body{
        background-color: {{$article->bgcolor}};
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
{{-- Facebook SDK --}}
<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            : 'your-app-id',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v8.0'
      });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>





<div class="w-full sm:pb-10 sm:py-2 text-center" style="background: url('/img/pattern.png');"  >


<div class="article sm:rounded shadow max-w-default mx-auto bg-white" >

    @if($article->image)
<img src="/img/{{$article->image}}" class="w-full sm:rounded" alt=""/>

    @endif

    <div class="p-6">
        <h2 class="text-2xl mb-4 text-center font-bold">
            {{$article->title}}
    
        </h2>
        @if ($article->subtitle)
        <h3 class=" text-center text-xl mb-4">
            {{$article->subtitle}}
    
        </h3>
            
        @endif
        
    
        <div class="text-justify word" style="hyphens: auto">
            {!!$article->body_raw!!}
    
        </div>

        <div class="w-full text-right mt-8">

            <div class="fb-share-button mr-auto" 
data-href="{{Request::url()}}"
data-layout="button">

</div>
        </div>
    </div>
    </div>
    

    <div class="p-2 sm:mt-4 sm:rounded bg-white max-w-default mx-auto shadow">

    <div class="fb-comments"  data-numposts="5" data-width=""></div>


    </div>

</div>
<div class="bg-huellitas_green">
<p class="text-center my-4 font-bold text-white">Card preview</p>


    <div class="w-full  bghuellitas p-4">
        <div class="max-w-default mx-auto ">
        
            @if ($article->relevant)
        
                @include('components.card-1',['card'=>$article]);
        
                @else
        
                @include('components.card-0',['card'=>$article]);
        
                
            @endif
            
        
        
        
        </div>
    
    </div>

</div>




    
@endsection
