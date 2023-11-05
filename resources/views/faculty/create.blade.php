<form action="{{ route('faculty.store') }}" method="POST">
    <h2><a href="{{ route('faculty.index') }}">Lihat Data Fakultas</a></h2>
    @csrf
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <div>
        <label for="name">ID:</label>
        <input type="text" name="id" value="{{ old('id') }}" />
        <br>
        @error('id')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="name">Nama Fakultas:</label>
        <input type="text" name="name" value="{{ old('name') }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}" />
        <br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="dean">Dekan:</label>
        <textarea name="dean">{{ old('dean') }}</textarea>
        <br>
        @error('dean')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ old('description') }}</textarea>
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
