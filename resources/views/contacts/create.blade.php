@extends('layouts.app')

@section('content')
<h1>New Contact</h1>

<div class="card">
<form method="POST" action="{{ route('contacts.store') }}">
    @csrf

    <label>Name</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Phone</label>
    <input type="text" name="phone">

    <label>Group</label>
    <select name="group_id">
        <option value="">No group</option>
        @foreach($groups as $group)
            <option value="{{ $group->id }}">{{ $group->name }}</option>
        @endforeach
    </select>

    <button class="btn btn-primary">Save</button>
</form>
</div>
@endsection
