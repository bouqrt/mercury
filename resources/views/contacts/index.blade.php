<h1>Contacts</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<a href="{{ route('contacts.create') }}">➕ New contact</a>

<ul>
@foreach($contacts as $contact)
    <li>
        {{ $contact->name }} - {{ $contact->email }} - {{ $contact->phone }}

        <a href="{{ route('contacts.edit', $contact) }}">✏️</a>

        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">🗑️</button>
        </form>
    </li>
@endforeach
</ul>