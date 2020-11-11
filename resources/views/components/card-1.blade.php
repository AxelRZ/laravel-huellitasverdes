<div class='column w-full' >

    <div class='card cursor-pointer' style=" background-color: {{$card->bgcolor}}; color: {{$card->fgcolor}}; " onclick="window.location='/news/article/{{$card->id}}'">
        @if ($card->image)
        <img {{"src=/img/$card->image" }} class='w-full' />
        @endif


        <div class='card-body flex flex-col justify-center'>
            <div class='title text-lg md:text-4xl leading-6 md:leading-10  '>{{$card->title}}</div>
            <div class='text-base md:text-xl text-justify'>
		     @if (strlen($card->body) > 220) 
		    {{substr($card->body,0,220).'...'}}
		    @else
	       	{{$card->body}}
		    @endif 

            </div>


        </div>

    </div>
    
</div>
