<form action="{{ route('study_programs.store') }}" method="POST">

    <h2><a href="{{ route('study_programs.index') }}">Lihat Data Program Studi di Universitas Bengkulu</a></h2>
    @csrf
    <br>
    <link rel = "stylesheet" href="{{asset ('css/create.css') }}">

    <div>
        Nama Program Studi:
        <input type="text" name="name" value="{{ old('name') }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Fakultas:
        <select name="faculty_id">
            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
            @endforeach
        </select>
        <br>
        @error('faculty')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Jenjang:
        <textarea name="degree_level">{{ old('degree_level') }}</textarea>
        <br>
        @error('degree_level')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Akreditasi:
        <textarea name="accreditation_status">{{ old('accreditation_status') }}</textarea>
        <br>
        @error('accreditation_status')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi:
        <textarea name="description">{{ old('description') }}</textarea>
        <br>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <textarea name="email">{{ old('email') }}</textarea>
        <br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
    <br>
</form>

