<h1>Créer un groupe</h1>

<form method="POST" action="{{ route('groups.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Nom du groupe">
    @error('name') <p style="color:red">{{ $message }}</p> @enderror

    <button type="submit">Créer</button>
</form>