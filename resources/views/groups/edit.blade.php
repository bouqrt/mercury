@extends('layouts.app')

@section('content')
<h1>Edit Group</h1>

<div class="card">
<form method="POST" action="{{ route('groups.update', $group) }}">
    @csrf
    @method('PUT')

    <label>Group name</label>
    <input type="text" name="name" value="{{ $group->name }}">

    <button class="btn btn-primary">Update</button>
</form>
</div>
@endsection
