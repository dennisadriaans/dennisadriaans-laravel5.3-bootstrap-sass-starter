@extends('shell')


@section('content')

<ul>
    @foreach ($groups as $group)
        <li>{{ $group->title }}</li>
    @endforeach


    <a href="">Create Group</a>
</ul>


<!-- Replace div with modal or something -->
<div class="make-group">

    <!-- Make this form general. Group is only one option -->
    <form action="groups/store" method="post">
        <div class="form-group">
            <label for="group_name">Group name</label>
            <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Group name">
        </div>
        <div class="form-group">
            <label for="group_name">E-mail adres</label>
            <input type="text" class="form-control" id="email_one" name="email_one" placeholder="E-mailadres">
        </div>

        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


    <a href="{{ route('make-group', ['categoryType' => 'groups']) }}" class="btn btn-primary">Group aanmaken</a>
</div>
@endsection