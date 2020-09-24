
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    

    <p>
        {{$errors->first('email')}}
        {{$errors->first('password')}}
        {{$status ??''}}
        

    </p>


    <p>
        <form action="/login" method="post">
            @csrf
            <label for="first">mail</label>
            <input type="text" name="email" id="first"><br>
            <label for="second">pass</label>
            <input type="text" name="password" id="second"><br>
            <input type="submit">
            
        </form>
    </p>


    
</body>
</html>