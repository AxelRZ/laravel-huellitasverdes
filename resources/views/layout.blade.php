<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta property="fb:admins" content="100003904609972"/>
    <meta property="fb:admins" content="100023031935388"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("css/huellitas.css")}}">
    @yield('css')
    <script src="https://kit.fontawesome.com/1b5eb10e65.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=""></script>

</head>

<body class="flex flex-col">

    @yield('body-start')

    @include('components.header')


    <div class="main pt-12 h-full flex w-full h-full flex-grow">
        <div class="wrapper w-full    justify-center">

            {{-- TMP msg--}}
            @if(session()->has('status'))

            <div class="w-full bg-huellitas_dark text-white p-2 text-center">
            <p> {{session('status')}}</p>
            </div>

            @endif
            

            {{-- TMP msg--}}

            @yield('body')
            
            
         
        </div>

    </div>

    @include('components.footer')


    <script src="{{ asset('js/app.js') }}"></script>

    @yield('js')
    

</body>

</html>