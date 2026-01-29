@extends('layouts.app')

@section('content')



<h1> create new contact </h1>

<form method="POST" action="{{ route('contacts.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    @error('name') <p>{{ $message }}</p> @enderror

    <input type="email" name="email" placeholder="Email"><br>
    @error('email') <p>{{ $message }}</p> @enderror

    <input type="text" name="phone" placeholder="Phone"><br>
    @error('phone') <p>{{ $message }}</p> @enderror

    <button type="submit">Save</button>
</form>

<label>Group (optional)</label>
<select name="group_id">
    <option value="">— No group —</option>

    @foreach($groups as $group)
        <option value="{{ $group->id }}">
            {{ $group->name }}
        </option>
    @endforeach
</select>