@extends('layouts.app')

@section('content')
    <div class="container col-md-10 dashboardPage">
        <div class="d-flex" style="align-items: baseline;">
            <h2 class="">Dashboard</h2>
            @if (Session::has('success'))
                <div class="alert alert-info col-5 ml-2 successMsg">{{ Session::get('success') }}</div>
            @endif
        </div>
    </div>
@endsection
