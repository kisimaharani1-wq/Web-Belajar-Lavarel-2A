<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // READ: tampil semua data
    public function index() {
        $data['judul'] = 'CRUD Data Pegawai';
        $data['employes'] = Employe::all();
        return view('tampil_data', $data);
    }

    // CREATE: form tambah
    public function create() {
        $data['judul'] = 'Tambah Data Pegawai';
        return view('tambah_data', $data);
    }

    // CREATE: simpan ke database
    public function store(Request $request) {
        $employe = new Employe;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // UPDATE: form edit
    public function show(Employe $employe) {
        $data['judul'] = 'Edit Data Pegawai';
        $data['employe'] = $employe;
        return view('edit_data', $data);
    }

    // UPDATE: simpan perubahan
    public function update(Request $request, Employe $employe) {
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // DELETE
    public function destroy(Employe $employe) {
        $employe->delete();

        return redirect('/employe');
    }
}