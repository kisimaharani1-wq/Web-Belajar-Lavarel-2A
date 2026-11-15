<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga() {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['hasil'] = 0;
        return view('segitiga', $data);
    }

    public function hitungSegitiga(Request $request) {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = (float) $request->input('alas');
        $data['tinggi'] = (float) $request->input('tinggi');
        $data['hasil'] = 0.5 * $data['alas'] * $data['tinggi'];
        return view('segitiga', $data);
    }
}