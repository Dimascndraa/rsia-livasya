<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function index()
    {
        return view('dashboard.dokter.index', [
            'title' => 'Dokter',
            'dokter' => Dokter::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.dokter.create', [
            'title' => 'Tambah Dokter'
        ]);
    }

    public function store(Request $request, Dokter $dokter)
    {
        // return $request;
        $validatedData = $request->validate([
            'nama_dokter' => 'required|max:255',
            'jabatan' => 'required',
            'jadwal' => 'required',
            'image' => 'image|file|max:5120',
            'poster_dokter' => 'image|file|max:5120',
            'poster_jadwal' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('dokter-img');
        }


        if ($request->file('poster_dokter')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['poster_dokter'] = $request->file('poster_dokter')->store('dokter-img/poster-dokter');
        }


        if ($request->file('poster_jadwal')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['poster_jadwal'] = $request->file('poster_jadwal')->store('dokter-img/poster-jadwal');
        }

        Dokter::create($validatedData);
        return redirect('/dashboard/dokter')->with('success', 'Dokter telah ditambahkan!');
    }

    public function show(Dokter $dokter)
    {
        return view('dashboard.dokter.show', [
            'title' => 'Detail Dokter',
            'dokter' => $dokter
        ]);
    }

    public function edit(Dokter $dokter)
    {
        // return $dokter;
        return view('dashboard.dokter.edit', [
            'title' => 'Ubah Dokter',
            'dokter' => $dokter
        ]);
    }

    public function update(Request $request, Dokter $dokter)
    {
        $rules = [
            'nama_dokter' => 'required|max:255',
            'jabatan' => 'required',
            'image' => 'image|file',
            'poster_dokter' => 'image|file',
            'poster_jadwal' => 'image|file',
            'jadwal' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('dokter-img');
        }

        if ($request->file('poster_dokter')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['poster_dokter'] = $request->file('poster_dokter')->store('dokter-img/poster-dokter');
        }

        if ($request->file('poster_jadwal')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['poster_jadwal'] = $request->file('poster_jadwal')->store('dokter-img/poster-jadwal');
        }

        Dokter::where('id', $dokter->id)->update($validatedData);
        return redirect('/dashboard/dokter')->with('success', 'Dokter Berhasil Diubah!');
    }

    public function destroy(Dokter $dokter, Request $request)
    {
        Storage::delete($request->oldImage);
        Storage::delete($request->oldPosterDokter);
        Storage::delete($request->oldPosterJadwal);
        Dokter::destroy($dokter->id);
        return redirect('/dashboard/dokter')->with('success', 'Dokter berhasil dihapus!');
    }
}
