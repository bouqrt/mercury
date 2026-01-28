@extends('layouts.app')

@section('content')

<div class="top-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#77317e"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="#5a189a" d="M15 14a5 5 0 0 1 4.995 4.783L20 19v2a1 1 0 0 1-1.993.117L18 21v-2a3 3 0 0 0-2.824-2.995L15 16H7a3 3 0 0 0-2.995 2.824L4 19v2a1 1 0 0 1-1.993.117L2 21v-2a5 5 0 0 1 4.783-4.995L7 14h8Zm6-1a1 1 0 1 1 0 2h-1a1 1 0 1 1 0-2h1ZM11 2a5 5 0 1 1 0 10a5 5 0 0 1 0-10Zm10 8a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2h2ZM11 4a3 3 0 1 0 0 6a3 3 0 0 0 0-6Zm10 3a1 1 0 0 1 .117 1.993L21 9h-3a1 1 0 0 1-.117-1.993L18 7h3Z"/></g></svg> Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add New </a>
</div>

<form method="GET" action="{{ route('contacts.index') }}" class="search-bar" style="margin-bottom: 30px;">
    <div style="display: flex; gap: 10px;">
        <input type="text" name="search" placeholder="Who are you looking for?" value="{{ $search ?? '' }}">
        <button class="btn btn-primary" style="background: var(--violet); color: #4a4a4a;"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 0 41 41"><g fill="none"><path fill="#ff52a1" stroke="#231f20" stroke-miterlimit="10" d="M28.39 5.85c-6.76-6.75-15-7.5-22.53 0s-6.75 15.77 0 22.52c5.79 5.79 12.68 7.15 19.26 2.71c.58.92 1.28 1.82 2.14 2.92c6.25 7.93 8.82 5.46 10.5 3.78S41.9 33.53 34 27.27c-1.08-.86-2-1.55-2.91-2.14c4.45-6.58 3.09-13.48-2.7-19.28Z"/><path fill="#a5dff3" stroke="#231f20" stroke-miterlimit="10" d="M7.14 17.11a9.99 9.99 0 1 0 19.98 0a9.99 9.99 0 0 0-19.98 0Z"/><path fill="#fff" d="M14.8 11a3.74 3.74 0 0 1 4.71-.16"/><path stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" d="M14.8 11a3.74 3.74 0 0 1 4.71-.16"/><path stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" d="M19.73 3.79a7.5 7.5 0 0 1 4.88 2.57"/></g></svg></button>
    </div>
</form>

@if($contacts->count())
    @foreach($contacts as $index => $contact)
        <div class="contact-card" style="animation-delay: {{ $index * 0.1 }}s">
            <div class="contact-info">
                <strong style="font-size: 1.2rem; color: #5a189a;">{{ $contact->name }}</strong><br>
                <span style="opacity: 0.7;"><svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 -0.5 41 41"><g fill="none" stroke-miterlimit="10"><path fill="#ff52a1" stroke="#231f20" d="M36 33.59c3-1.36 3.53-8.34 3.53-13.59S38.94 7.77 36 6.41c-1.48-1.36-9.4-1.73-16-1.73S5.52 5.05 4 6.41C1.06 7.77.5 14.75.5 20S1.06 32.23 4 33.59c1.49 1.36 9.41 1.73 16 1.73s14.49-.32 16-1.73Z"/><path stroke="#231f20" stroke-linecap="round" d="M4.67 13c3.65 3.81 8.94 7.93 10.57 8.64a10.81 10.81 0 0 0 9.52 0c1.62-.64 6.91-4.79 10.56-8.64m-20.89 8.39l-6.96 6.97m18.1-6.97l6.97 6.97"/><path stroke="#fff" stroke-linecap="round" d="M29.05 7.53a15.4 15.4 0 0 1 5.27.92"/></g></svg> {{ $contact->email }}</span><br>
                <span style="opacity: 0.7;"><svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g fill="none" stroke-width="3"><path fill="#ff52a1" d="M45 13c0-5.523-4.477-10-10-10h-.569a3 3 0 0 0-2.785 1.886L29.18 11.05a4 4 0 0 0 .885 4.314l3.077 3.077c.493.493.7 1.21.498 1.878a20.05 20.05 0 0 1-13.32 13.32c-.668.203-1.385-.005-1.878-.498l-3.077-3.077a4 4 0 0 0-4.314-.885l-6.165 2.466A3 3 0 0 0 3 34.43V35c0 5.523 4.477 10 10 10h.5c17.11 0 31.034-13.642 31.489-30.642q0-.008.005-.013a.02.02 0 0 0 .006-.013z"/><path stroke="#2859c5" stroke-linejoin="round" d="M45 13c0-5.523-4.477-10-10-10h-.569a3 3 0 0 0-2.785 1.886L29.18 11.05a4 4 0 0 0 .885 4.314l3.077 3.077c.493.493.7 1.21.498 1.878a20.05 20.05 0 0 1-13.32 13.32c-.668.203-1.385-.005-1.878-.498l-3.077-3.077a4 4 0 0 0-4.314-.885l-6.165 2.466A3 3 0 0 0 3 34.43V35c0 5.523 4.477 10 10 10h.5c17.11 0 31.034-13.642 31.489-30.642q0-.008.005-.013a.02.02 0 0 0 .006-.013z"/></g></svg> {{ $contact->phone ?? 'Private' }}</span>
            </div>

            <div class="contact-actions">
                <a href="{{ route('contacts.edit', $contact) }}" class="btn" style="background: #e2e2ff;">✏️</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">🗑️</button>
                </form>
            </div>
        </div>
    @endforeach
@else
    <p style="text-align: center; font-size: 1.2rem; margin-top: 50px;">No one here yet! 🎀</p>
@endif

@endsection