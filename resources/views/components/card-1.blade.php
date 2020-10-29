<div class='column w-full' >

    <div class='card cursor-pointer' style=" background-color: {{$card->bgcolor}}; color: {{$card->fgcolor}}; " onclick="window.location='/news/article/{{$card->id}}'">
        @if ($card->image)
        <img {{"src=/img/$card->image" }} class='w-full' />
        @endif


        <div class='card-body flex flex-col justify-center'>
            <div class='title text-lg md:text-4xl leading-6 md:leading-10  '>{{$card->title}} {{$card->id}}</div>
            <div class='text-base md:text-xl text-justify'>
                {{substr($card->body,0,270).'...'}}
            </div>


        </div>

    </div>
    
</div>