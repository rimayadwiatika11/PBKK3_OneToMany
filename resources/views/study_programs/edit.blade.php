<form action="{{ route('study_programs.update', $study_program->id) }}" method="POST">
    @csrf
    @method('PUT')

    <link rel = "stylesheet" href="{{asset ('css/create.css') }}">
    <div>
        Nama Prodi :
        <input type="text" name="name" value="{{ old('name', $study_program->name) }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Fakultas :
        <select name="faculty_id">
            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
            @endforeach
        </select>

        <br>

        @error('faculty_id')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Jenjang :
        <textarea name="degree_level">{{ old('degree_level', $study_program->degree_level) }}</textarea>

        <br>

        @error('degree_level')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Akreditasi :
        <textarea name="accreditation_status">{{ old('accreditation_status', $study_program->accreditation_status) }}</textarea>

        <br>

        @error('accreditation_status')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi :
        <textarea name="description">{{ old('description', $study_program->description) }}</textarea>

        <br>

        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email :
        <textarea name="email">{{ old('email', $study_program->email) }}</textarea>

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
