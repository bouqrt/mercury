@extends('layouts.app')

@section('content')
<h1>Edit Contact</h1>

<div class="card">
<form method="POST" action="{{ route('contacts.update', $contact) }}">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text" name="name" value="{{ $contact->name }}">

    <label>Email</label>
    <input type="email" name="email" value="{{ $contact->email }}">

    <label>Phone</label>
    <input type="text" name="phone" value="{{ $contact->phone }}">

    <label>Group</label>
    <select name="group_id">
        <option value="">No group</option>
        @foreach($groups as $group)
            <option value="{{ $group->id }}"
                {{ $contact->group_id == $group->id ? 'selected' : '' }}>
                {{ $group->name }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-primary">Update</button>
</form>
</div>
@endsection
