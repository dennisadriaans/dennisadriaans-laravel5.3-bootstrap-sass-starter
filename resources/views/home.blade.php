@extends('shell')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@if (Auth::check())
<h2>User {{ Auth::user()->name }} logged in.</h2>
@else
345
@endif


@section('content')
    <h1>Dennis Laravel + Bootstrap starter</h1>
    <ul>
        <li>Webpack</li>
        <li>Sass</li>
        <li>Bootstrap</li>
        <a href="/facebook/login" >Login with Facebook</a>
    </ul>
@endsection