<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Posty</title>
</head>
<body style="background-color: ">
    <div class="container-fluid">
        <nav class=" menu">
            <ul class="d-flex">
                <li class="active"><a href="">Home</a></li>
                <li><a href="">Dashbaord</a></li>
                <li><a href="">Posts</a></li>
            </ul>
            <ul class="d-flex secondSubMenu">
                <li class="active"><a href="">Tauqeer Hayat</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Register</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </nav>
        @yield('content')
    </div>
</body>
</html>
