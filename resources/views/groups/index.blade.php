@extends('layouts.app')

@section('content')
<h1>Groups</h1>

<a href="{{ route('groups.create') }}" class="btn btn-primary">➕ Add Group</a>

<br><br>

@foreach($groups as $group)
    <div class="group-item">
        <span class="group-badge">{{ $group->name }}</span>

        <div>
            <a href="{{ route('groups.edit', $group) }}" class="btn btn-secondary">✏️</a>

            <form action="{{ route('groups.destroy', $group) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">🗑️</button>
            </form>
        </div>
    </div>
@endforeach

@if($groups->isEmpty())
    <p class="empty">No groups yet 🎀</p>
@endif
@endsection
