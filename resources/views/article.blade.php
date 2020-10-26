@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<meta property="og:title"         content="{{$article->title}}" />
<meta property="og:description"   content="{{$article->body}}" />


100023031935388
<style>
    body{
        background-color: {{$article->bgcolor}};
    }
</style>
@endsection

@section('body')
{{-- Facebook SDK --}}
<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            : 'null',
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
        
    
        <div class="text-justify">
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

    
@endsection