@extends('shell')


@section('content')

<ul>
    @foreach ($groups as $group)
        <li>{{ $group->title }}</li>
    @endforeach


    <a href="">Create Group</a>
</ul>
@endsection