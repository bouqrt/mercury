<h1>Modifier groupe</h1>

<form method="POST" action="{{ route('groups.update', $group) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $group->name }}">
    @error('name') <p style="color:red">{{ $message }}</p> @enderror

    <button type="submit">Modifier</button>
</form>