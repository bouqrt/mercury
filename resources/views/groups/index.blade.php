<h1>Liste des groupes</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<a href="{{ route('groups.create') }}">➕ Nouveau groupe</a>

<ul>
@foreach($groups as $group)
    <li>
        {{ $group->name }}

        <a href="{{ route('groups.edit', $group) }}">✏️</a>

        <form action="{{ route('groups.destroy', $group) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">🗑️</button>
        </form>
    </li>
@endforeach
</ul>