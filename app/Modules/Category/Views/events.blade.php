@extends('shell')


@section('content')

<ul>
@foreach ($events as $event)
    <li>
        <a href="{{ route('category-detail', [
            'categoryType' => 'events',
            'id' => $event->id,
            'name' => $event->title
        ] ) }}">

            {{ $event->title }}
        </a>
    </li>
@endforeach
</ul>
@endsection