@extends('dashboard')

@section('content')
    <h1>{{$judul}}</h1>
    <form method="post" action="/employe/{{$employe->id}}">
        @method('put')
        @csrf
        <p>Nama<br><input type="text" name="nama" value="{{$employe->nama}}"></p>
        <p>Alamat<br><textarea name="alamat" rows="2">{{$employe->alamat}}</textarea></p>
        <p>Gender<br>
            <select name="gender">
                <option value="L" {{ $employe->gender === 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $employe->gender === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </p>
        <p>Gaji<br><input type="text" name="gaji" value="{{$employe->gaji}}"></p>
        <p><button type="submit">UPDATE</button></p>
    </form>
@endsection