<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fasilitas;
use App\Models\Pelayanan;
use Illuminate\Routing\Controller;

class FasilitasController extends Controller
{
    public function index(About $about)
    {
        return view('fasilitas.index', [
            'title' => 'Fasilitas Unggulan',
            'name' => $about->nama_instansi,
            'about' => About::all(),
            'pelayanan' => Pelayanan::all(),
            'facilities' => Fasilitas::where('unggulan', 1)->get()
        ]);
    }

    public function lainnya(About $about)
    {
        return view('fasilitas.index', [
            'title' => 'Fasilitas Lainnya',
            'name' => $about->nama_instansi,
            'about' => About::all(),
            'pelayanan' => Pelayanan::all(),
            'facilities' => Fasilitas::where('unggulan', 0)->get()
        ]);
    }

    public function show(Fasilitas $fasilitas)
    {
        return view('fasilitas.show', [
            'title' => $fasilitas->name,
            'name' => 'RSIA Livasya',
            'fasilitas' => $fasilitas,
            'about' => About::all(),
            'pelayanan' => Pelayanan::all()
        ]);
    }
}
