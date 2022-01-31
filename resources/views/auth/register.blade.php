@extends('layouts.app')

@section('content')
    <div class="container col-md-4 registerPage">
        <h2 class="text-center">Register New User</h2>
        <form action="{{ route('register')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name')}}" placeholder="Your Name">
                @error('name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" class="form-control" value="{{ old('username')}}" placeholder="Your Username">
                @error('username')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
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
            <div class="form-group mb-3">
                <label for="password_confirmation" class="sr-only">Password Again</label>
                <input type="password" name="password_confirmation" class="form-control" value="" placeholder="Your Password Again">
                @error('password_confirmation')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <input type="submit" value="Save" class="btn btn-success col-md-12">
        </form>
    </div>
@endsection
