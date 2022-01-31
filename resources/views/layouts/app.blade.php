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
<body>
    <div class="container-fluid">
        <nav class=" menu">
            <ul class="d-flex">
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ route('dashboard') }}">Dashbaord</a></li>
                <li><a href="{{ url('/posts')}}">Posts</a></li>
            </ul>
            <ul class="d-flex secondSubMenu">
                @if (auth()->user())
                    <li class="active"><a href="">{{auth()->user()->name}}</a></li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" value="" >Logout</button>
                    </form>
                @else
                    <li><a href="{{ route('login')}}">Login</a></li>
                    <li><a href="{{ route('register')}}">Register</a></li>
                @endif



            </ul>
        </nav>
        @yield('content')
    </div>
</body>
</html>
