<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{@yield('title')}}</title>
    <link rel="stylesheet" href="{{asset("huellitas.css")}}">
    @yield('css')
    <script src="https://kit.fontawesome.com/1b5eb10e65.js" crossorigin="anonymous"></script>

</head>

<body class="flex flex-col">

    @include('components.header')


    


    <!-- END NAVBAR -->

    <!-- <div class="sm:opacity-0 opacity-100 transition-opacity duration-300 gradient w-full absolute" style="height: 100vh;" ></div> -->

    <div class="main pt-12 h-full flex w-full h-full flex-grow">
        <div class="wrapper w-full    justify-center">

            @yield('body')
            
            
         
        </div>

    </div>

    @include('components.header')


    @yield('js')

</body>

</html>