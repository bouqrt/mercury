<h1> group list </h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<a href="{{ route('groups.create') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="#000000" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zm149.3 277.3c0 11.8-9.5 21.3-21.3 21.3h-85.3V384c0 11.8-9.5 21.3-21.3 21.3h-42.7c-11.8 0-21.3-9.6-21.3-21.3v-85.3H128c-11.8 0-21.3-9.6-21.3-21.3v-42.7c0-11.8 9.5-21.3 21.3-21.3h85.3V128c0-11.8 9.5-21.3 21.3-21.3h42.7c11.8 0 21.3 9.6 21.3 21.3v85.3H384c11.8 0 21.3 9.6 21.3 21.3v42.7z"/></svg> </a>

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