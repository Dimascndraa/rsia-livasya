<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index()
    {
        return view('dashboard.pelayanan.index', [
            'title' => 'Pelayanan',
            'pelayanans' => Pelayanan::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.pelayanan.create', [
            'title' => 'Tambah Pelayanan'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'icon' => 'required|max:255',
            'title' => 'required',
            'descript' => 'required',
            'url' => 'required',
        ]);

        Pelayanan::create($validatedData);
        return redirect('/dashboard/pages/pelayanan')->with('success', 'Pelayanan Berhasil Ditambahkan!');
    }

    public function edit(Pelayanan $pelayanan)
    {
        return view('dashboard.pelayanan.edit', [
            'title' => 'Ubah Pelayanan',
            'pelayanan' => $pelayanan,
        ]);
    }

    public function update(Request $request, Pelayanan $pelayanan)
    {
        $rules = [
            'icon' => 'required|max:255',
            'title' => 'required',
            'descript' => 'required',
            'url' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Pelayanan::where('id', $pelayanan->id)->update($validatedData);
        return redirect('/dashboard/pages/pelayanan')->with('success', 'Pelayanan berhasil diubah!');
    }

    public function destroy(Pelayanan $pelayanan)
    {
        Pelayanan::destroy($pelayanan->id);
        return redirect('/dashboard/pages/pelayanan')->with('success', 'Pelayanan berhasil dihapus!');
    }
}
