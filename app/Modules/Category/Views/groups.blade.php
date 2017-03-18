@extends('shell')


@section('content')

<ul>
    @foreach ($groups as $group)
        <li>{{ $group->title }}</li>
    @endforeach
</ul>
@endsection