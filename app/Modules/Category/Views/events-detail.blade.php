@extends('shell')


@section('content')

{{ $item->title }}


    @foreach ($item->properties as $prop)
        {{ $prop->tag }}:  {{$prop->value}} <br>
    @endforeach

    <a href="">Make a group</a>


<br>
<br>
<br>
<br>


<h2>Create group:</h2>

<!-- Make this form general. Group is only one option -->
<form action="/groups/store" method="post">
    <div class="form-group">
        <label for="group_name">Group name</label>
        <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Group name">
    </div>
    <div class="form-group">
        <label for="group_name">E-mail adres</label>
        <input type="text" class="form-control" id="email_one" name="users[0]" placeholder="E-mailadres">
    </div>

    <div class="form-group">
        <label for="group_name">E-mail adres</label>
        <input type="text" class="form-control" id="email_one" name="users[1]" placeholder="E-mailadres">
    </div>

    <div class="form-group">
        <label for="group_name">E-mail adres</label>
        <input type="text" class="form-control" id="email_one" name="users[2]" placeholder="E-mailadres">
    </div>

    <input type="hidden" class="form-control" id="type" name="type" value="groups">
    <input type="hidden" class="form-control" id="event" name="event" value="{{ $item->id }}">

    {{ csrf_field() }}

    <button type="submit" class="btn btn-default">Submit</button>
</form>


@endsection