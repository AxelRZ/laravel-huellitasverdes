@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<link rel="stylesheet" href="css/owl.carousel.css">
<style>
    

.first{
    background: url("img/mainbg.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.gradient{
    background: linear-gradient(white,#2fafcc);
}

.active {
    display: block;

}

</style>
@endsection

@section('body-start')

{{-- <div id="particles-js" class=" w-full h-full bg-huellitas_green" style="position: absolute; min-height:100%;"></div> --}}



@endsection

@section('body')

<div class="first w-full  max-h-full max-w-full sm:p-12 p-6 flex h-auto" style="min-height: 40rem;">

                    
    <div class="my-auto break-words w-full   text-white p-3 text-center">

        <p class="sm:text-5xl lg:text-6xl text-4xl">
            

            Lorem, ipsum dolor. <span class=" text-huellitas_green">Lorem, ipsum.</span>

        </p>

        <p class="text-2xl">
            

        </p>

    </div>
</div>


<div class="p-4" ">







<div class="cards max-w-default ">
    <div class="column md:w-1/2 ">
        <div class="card bg-huellitas_brown p-4 text-white ">
            <p class="text-4xl">
                Lorem, ipsum dolor.
            </p>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ipsum incidunt est aperiam iusto, quo deleniti soluta vero velit eligendi laborum exercitationem beatae dolorum esse tenetur dolores debitis delectus qui, facere voluptates hic cum rem ad? Expedita totam tenetur saepe?
            </p>

        </div>

    </div>
    <div class="column  md:w-1/2  ">
        <div class="card bg-huellitas_light p-4 text-white h-full ">
            <p class="text-4xl">
                Lorem, ipsum dolor.
            </p>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ipsum incidunt est aperiam iusto, quo deleniti soluta vero velit eligendi laborum exercitationem beatae dolorum esse tenetur dolores debitis delectus qui, facere voluptates hic cum rem ad? Expedita totam tenetur saepe?
            </p>

        </div>

    </div>
    <div class="column  ">
        <div class="card bg-huellitas_pink p-4 text-white h-full ">
            <p class="text-4xl">
                Lorem, ipsum dolor.
            </p>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ipsum incidunt est aperiam iusto, quo deleniti soluta vero velit eligendi laborum exercitationem beatae dolorum esse tenetur dolores debitis delectus qui, facere voluptates hic cum rem ad? Expedita totam tenetur saepe?
            </p>

        </div>

    </div>
    

</div>

<div class="max-w-default mx-auto p-4">
    <div class="owl-carousel owl-theme">

        <div>
            <img src="https://source.unsplash.com/random/703x600" alt="" srcset="">
        </div>
        <div>
            <img src="https://source.unsplash.com/random/702x600" alt="" srcset="">
        </div>        
        <div>
            <img src="https://source.unsplash.com/random/701x600" alt="" srcset="">
        </div>
        <div>
            <img src="https://source.unsplash.com/random/700x400" alt="" srcset="">
        </div>

    </div>

</div>
</div>


@endsection

@section('js')


<script>
    $(document).ready(function () {

        $('.owl-carousel').owlCarousel({

            loop:false,
            margin:100,
            items:1
            
            
        });

        $('.owl-carousel img').css({"height":"400px","width":"100%", "margin":"auto auto"})
        particlesJS.load('particles-js', 'assets/particles.json', function() {
        console.log('callback - particles.js config loaded');
});

    });
</script>
<script src="js/owl.carousel.js"></script>
<script src="js/particles.js"></script>

    
@endsection

