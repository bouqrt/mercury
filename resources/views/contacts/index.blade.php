<h1>Contacts</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<hr>

<form method="GET" action="{{ route('contacts.index') }}">
    <input
        type="text"
        name="search"
        placeholder="Search contacts by name"
        value="{{ $search ?? '' }}"
    >
    <button type="submit">🔍 Search</button>
    <a href="{{ route('contacts.index') }}">Reset</a>
</form>

<hr>

<a href="{{ route('contacts.create') }}">➕ New contact</a>

@if($contacts->count() > 0)
    <ul>
        @foreach($contacts as $contact)
            <li>
                {{ $contact->name }} -
                {{ $contact->email }} -
                {{ $contact->phone ?? '—' }}

                <a href="{{ route('contacts.edit', $contact) }}">✏️</a>

                <form action="{{ route('contacts.destroy', $contact) }}"
                      method="POST"
                      style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No contacts found.</p>
@endif