@extends('layouts.app')

@section('assets')
    <style>
        body {
            background: url("/images/khabib-mcGregor.jpg");
            background-color: black;
            //background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <div class="jumbotron text-center">
        @guest
            <h1>{{$title}}</h1>
        @else
            <h1>you are welcome douchebag {{auth()->user()->name}}</h1>
        @endauth
        @guest
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg"
                                                                                          href="/register"
                                                                                          role="button">Register</a>
            </p>
        @endauth
    </div>
@endsection
