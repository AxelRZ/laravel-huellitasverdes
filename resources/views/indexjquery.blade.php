@extends('layout')

@section('title',"Huellitas Verdes")

@section('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/owl.carousel.css">
<style>
    *:focus{
        outline-style: none;
    }

</style>
@endsection

@section('body')

    <div class="owl-carousel owl-theme" >

        <div >
            <img src="https://source.unsplash.com/random"  srcset="">
        </div>
        <div >
            <img src="https://source.unsplash.com/random/400x400" alt="" srcset="">
        </div>
        <div class="" ><img src="https://source.unsplash.com/random" alt="" srcset=""></div>
        <div>sdasdas</div>
    </div>
    



    
@endsection

@section('js')

<script>
    $(document).ready(function () {

        $('.owl-carousel').owlCarousel({

            loop:true,
            margin:100,
            items:1
            
            
        });

        $('.owl-carousel img').css({"height":"400px","width":"400px", "margin":"auto auto"})

    });
</script>
<script src="js/owl.carousel.js"></script>


@endsection




