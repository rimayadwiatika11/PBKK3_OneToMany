<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Portal Universitas Bengkulu</h1>
        <p>klik link berikut untuk menambah daftar Fakultas dan Program Studi</p>
        <ul>
            <li><a href="{{ route('faculty.create') }}">Tambah Daftar Fakultas</a></li>
            <li><a href="{{ route('study_programs.create') }}">Tambah Daftar Program Studi</a></li>
        </ul>
    </div>
</body>
</html>
