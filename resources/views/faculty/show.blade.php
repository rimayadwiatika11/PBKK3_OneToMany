<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Fakultas</title>
  <link rel="stylesheet" href="{{asset ('css/show.css') }}">
</head>
<body>
  <div class="container">
    <div class="text-center">
      <h4>DATA FAKULTAS</h4>
      <div class="faculty-info">
        <p>ID: <span>{{ $Faculty->id }}</span></p>
        <p>Nama Fakultas: <span>{{ $Faculty->name }}</span></p>
        <p>Email: <span>{{ $Faculty->email }}</span></p>
        <p>Dekan: <span>{{ $Faculty->dean }}</span></p>
        <p>Deskripsi: <span>{{ $Faculty->description }}</span></p>
      </div>
    </div>
  </div>
</body>
</html>
