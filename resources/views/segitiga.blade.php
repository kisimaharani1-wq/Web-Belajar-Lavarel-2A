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
        <form action="/kalkulator/segitiga" method="post">
            @csrf
            <p>Alas: <input type="text" name="alas" value="{{$alas}}"></p>
            <p>Tinggi: <input type="text" name="tinggi" value="{{$tinggi}}"></p>
            <p><button type="submit">HITUNG</button></p>
        </form>
        <h2>Luas = {{$hasil}}</h2>
    </div>
</body>
</html>