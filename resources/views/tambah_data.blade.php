@extends('dashboard')

@section('content')
    <h1>{{$judul}}</h1>
    <form method="post" action="/employe/store">
        @csrf
        <p>Nama<br><input type="text" name="nama"></p>
        <p>Alamat<br><textarea name="alamat" rows="2"></textarea></p>
        <p>Gender<br>
            <select name="gender">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </p>
        <p>Gaji<br><input type="text" name="gaji"></p>
        <p><button type="submit">SIMPAN</button></p>
    </form>
@endsection