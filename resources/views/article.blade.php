@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<meta property="og:title"         content="{{$article->title}}" />
<meta property="og:description"   content="{{$article->body}}" />


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
    <div class="fb-share-button w-full" 
data-href="{{Request::url()}}"
data-layout="button">

</div>

    <div class="fb-comments"  data-numposts="8" data-width=""></div>

</div>

    
@endsection