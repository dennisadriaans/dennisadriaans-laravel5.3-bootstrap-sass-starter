@extends('shell')


@section('content')


    @foreach ($item->properties as $prop)
        {{ $prop->tag }}:  {{$prop->value}} <br>
    @endforeach


    <a href="">Make a group</a>


@endsection