@extends('layouts.app')

@section('content')
    <div class="container col-md-4 registerPage">
        <h2 class="text-center">Login</h2>
        @if (Session::has('fail'))
            <div class="alert alert-danger col-12 successMsg">{{ Session::get('fail') }}</div>
        @endif
        <form action="{{ route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="sr-only">Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email')}}" placeholder="Your Email Address">
                @error('email')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control" value="" placeholder="Your Password">
                @error('password')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <input type="submit" value="Login" class="btn btn-success col-md-12">
        </form>
    </div>
@endsection
