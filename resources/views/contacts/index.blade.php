@extends('layouts.app')

@section('content')

<div class="top-bar" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
    <h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#77317e">
        </svg>
        Contacts
    </h1>

    <a href="{{ route('contacts.create') }}" class="btn btn-primary">
        Add New
    </a>
</div>

<form method="GET" action="{{ route('contacts.index') }}" class="search-bar" style="margin-bottom:30px;">
    <div style="display:flex;gap:10px;">
        <input
            type="text"
            name="search"
            placeholder="Who are you looking for?"
            value="{{ request('search') }}"
        >

        <select name="group_id">
            <option value="">All groups</option>
            @foreach($groups as $group)
                <option value="{{ $group->id }}"
                    {{ request('group_id') == $group->id ? 'selected' : '' }}>
                    {{ $group->name }}
                </option>
            @endforeach
        </select>

        <button class="btn btn-primary">
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 0 41 41">
            </svg>
        </button>
    </div>
</form>

@if($contacts->count())
    @foreach($contacts as $index => $contact)
        <div class="contact-card" style="animation-delay: {{ $index * 0.1 }}s">

            <div class="contact-info">
                <strong style="font-size:1.2rem;color:#5a189a;">
                    {{ $contact->name }}
                </strong><br>

                {{-- email SVG --}}
                <span style="opacity:.7;">
                    <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 -0.5 41 41">
                    </svg>
                    {{ $contact->email }}
                </span><br>

                {{-- phone SVG --}}
                <span style="opacity:.7;">
                    <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    </svg>
                    {{ $contact->phone ?? 'Private' }}
                </span><br>

                {{-- GROUP --}}
                @if($contact->group)
                    <span style="background:#ffc8dd;color:#5a189a;padding:4px 10px;border-radius:999px;font-size:12px;">
                        {{ $contact->group->name }}
                    </span>
                @else
                    <span style="color:#aaa;font-size:12px;">
                        No group
                    </span>
                @endif
            </div>

            <div class="contact-actions">
                {{-- edit SVG --}}
                <a href="{{ route('contacts.edit', $contact) }}" class="btn" style="background:#e2e2ff;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    </svg>
                </a>

                <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26">
                        </svg>
                    </button>
                </form>
            </div>

        </div>
    @endforeach
@else
    <p style="text-align:center;font-size:1.2rem;margin-top:50px;">
        No one here yet! 🎀
    </p>
@endif

@endsection
