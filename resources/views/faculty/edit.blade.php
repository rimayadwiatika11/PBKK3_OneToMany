<form action="{{ route('faculty.update', $Faculty->id) }}" method="POST">
    @csrf
    @method('PUT')

    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

    <div>
        <label for="id">ID:</label>
        <input type="text" name="id" value="{{ old('id', $Faculty->id) }}" />
        <br>
        @error('id')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="name">Nama Fakultas:</label>
        <input type="text" name="name" value="{{ old('name', $Faculty->name) }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ old('email', $Faculty->email) }}" />
        <br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="dean">Dekan:</label>
        <input type="text" name="dean" value="{{ old('dean', $Faculty->dean) }}" />
        <br>
        @error('dean')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ old('description', $Faculty->description) }}</textarea>
        <br>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>

    <br>
</form>
