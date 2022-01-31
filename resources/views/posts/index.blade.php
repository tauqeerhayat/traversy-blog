@extends('layouts.app')

@section('content')
    <div class="container indexPage">
        <h2>Posts</h2>
        @if (Session::has('success'))

        @endif
    </div>
@endsection
