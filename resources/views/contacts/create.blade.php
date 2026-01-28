<h1>Add contact</h1>

<form method="POST" action="{{ route('contacts.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    @error('name') <p>{{ $message }}</p> @enderror

    <input type="email" name="email" placeholder="Email"><br>
    @error('email') <p>{{ $message }}</p> @enderror

    <input type="text" name="phone" placeholder="Phone"><br>
    @error('phone') <p>{{ $message }}</p> @enderror

    <button type="submit">Save</button>
</form>