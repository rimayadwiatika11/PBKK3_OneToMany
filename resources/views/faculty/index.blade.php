<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>DAFTAR FAKULTAS UNIVERSITAS BENGKULU</h1>
    <h2><a href="{{ route('faculty.create') }}">Tambah</a></h2>

    @if (session()->has('pesan'))
        <div style="color: rgb(0, 0, 0)">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Fakultas</th>
                <th>Email</th>
                <th>Dekan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $Faculty)
                <tr>
                    <td>{{ $Faculty->id }}</td>
                    <td>{{ $Faculty->name }}</td>
                    <td>{{ $Faculty->email }}</td>
                    <td>{{ $Faculty->dean }}</td>
                    <td>{{ $Faculty->description }}</td>
                    <td>
                        <a href="{{ route('faculty.show', $Faculty->id) }}">Lihat</a>
                        <a href="{{ route('faculty.edit', $Faculty->id) }}">Edit</a>
                        <a href="{{ route('faculty.edit', $Faculty->id) }}"method="post" class="delete-form">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
