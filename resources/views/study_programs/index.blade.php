<link rel = "stylesheet" href="{{asset ('css/list.css') }}">

<h1>DAFTAR PROGRAM STUDI UNIVERSITAS BENGKULU</h1>
<h2><a href="{{ route('study_programs.create') }}">Tambah</a></h2>
@foreach ($study_programs as $study_program)
    <div class="study_program-item">
        <div>
            Nama Program Studi : {{ $study_program->name }}
            <br>
            Fakultas : {{ $study_program->faculty->name}}
            <br>
            Jenjang : {{ $study_program->degree_level }}
            <br>
            Akreditasi : {{ $study_program->accreditation_status }}
            <br>
            Deskripsi : {{ $study_program->description }}
            <br>
            Email : {{ $study_program->email }}
        </div>
        <div>
            <a href="{{ route('study_programs.show', $study_program->id) }}">Lihat</a>
            <a href="{{ route('study_programs.edit', $study_program->id) }}">Edit</a>

            <form action="{{ route('study_programs.destroy', $study_program->id) }}" method="post" class="delete-form">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus">
            </form>
        </div>
    </div>
    <hr>
@endforeach
