@extends('layouts.app')

@section('content')
<h1>New Group</h1>

<div class="card">
<form method="POST" action="{{ route('groups.store') }}">
    @csrf

    <label>Group name</label>
    <input type="text" name="name">

    <button class="btn btn-primary">Save</button>
</form>
</div>
@endsection
