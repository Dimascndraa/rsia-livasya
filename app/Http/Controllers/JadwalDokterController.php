<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pelayanan;

class JadwalDokterController extends Controller
{
    public function show(Request $request, About $about, Dokter $dokter)
    {
        // return $dokter;
        return view('dokter', [
            'name' => $about->nama_instansi,
            'title' => 'Dokter',
            'about' => About::all(),
            'dokter' => $dokter,
            'pelayanan' => Pelayanan::all()
        ]);
    }
}
