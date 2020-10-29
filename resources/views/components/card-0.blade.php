<div class='column w-full '>
    <div class='card card-irrelevant flex cursor-pointer' style="color: {{$card->fgcolor}}; background-color: {{$card->bgcolor}};"  onclick="window.location='/news/article/{{$card->id}}'" >

                @if ($card->image)
                <div class=" h-full py-4 pl-4 left-0" style="width:17rem;">

                <img {{"src=/img/$card->image" }} class="irr-image rounded" alt="" srcset="" style="object-fit:cover;"/>
                </div>

                @endif
                
            <div class='card-body w-full items-center flex-grow-1 text-bold' style="height:100%; padding:0.75rem 0.75rem; )  ">
                    
                    
                <div class='  justify-center w-full h-full text-md sm:text-lg md:text-2xl  flex items-center relative '>

                    <div class="text-center absolute  font-bold w-full" style="overflow-wrap:break-word; height:auto" >
                        {{$card->title}} {{$card->id}}
                    </div>
                </div>
            </div>

        </div>
        
    </div>