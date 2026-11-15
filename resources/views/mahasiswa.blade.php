<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$judul}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <h1>{{$judul}}</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gender</th>
            </tr>
            @foreach ($mahasiswa as $row)
            <tr>
                <td>{{$row['nama']}}</td>
                <td>{{$row['alamat']}}</td>
                <td>{{$row['gender']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>