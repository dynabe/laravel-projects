@extends('layouts.app')
@extends('header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <img src="{{ asset(Auth::user()->avatar)}}">

                    <a class="dropdown-item" href="http://localhost/laravel2/public/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
