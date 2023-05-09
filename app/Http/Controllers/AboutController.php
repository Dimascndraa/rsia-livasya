<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('dashboard.about.index', [
            'title' => 'Identitas',
            'about' => About::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.about.create', [
            'title' => "Tambah"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'nama_instansi' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'descript' => 'required',
            'sejarah' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'no_telp1' => 'required',
            'no_telp2' => 'required',
            'gmail' => 'required|email:dns',
            'alamat' => 'required',
            'jml_dokter' => 'required',
            'jml_pasien_puas' => 'required',
            'jml_fasilitas_kamar' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('about-img');
        }

        About::create($validatedData);
        return redirect('/dashboard/pages/about')->with('success', 'About baru telah ditambahkan!');
    }

    public function edit(About $about)
    {
        return view('dashboard.about.edit', [
            'title' => 'Ubah Identitas',
            'about' => $about,
        ]);
    }

    public function update(Request $request, About $about)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'descript' => 'required',
            'sejarah' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'no_telp1' => 'required',
            'no_telp2' => 'required',
            'gmail' => 'required|email:dns',
            'alamat' => 'required',
            'jml_dokter' => 'required',
            'jml_pasien_puas' => 'required',
            'jml_fasilitas_kamar' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('about-img');
        }

        About::where('id', $about->id)->update($validatedData);
        return redirect('/dashboard/pages/about')->with('success', 'Identitas berhasil diubah!');
    }
}
