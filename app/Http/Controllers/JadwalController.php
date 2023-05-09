<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jadwal.index', [
            'title' => "Jadwal",
            'about' => About::all(),
            'jadwals' => Jadwal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jadwal.create', [
            'title' => "Tambah Jadwal",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'caption' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('jadwal-img');
        }

        Jadwal::create($validatedData);
        return redirect('/dashboard/pages/jadwal')->with('success', 'Jadwal baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('dashboard.jadwal.show', [
            'title' => 'Detail Jadwal',
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('dashboard.jadwal.edit', [
            'title' => 'Ubah Jadwal',
            'jadwal' => $jadwal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $rules = [
            'caption' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('jadwal-img');
        }

        Jadwal::where('id', $jadwal->id)->update($validatedData);
        return redirect('/dashboard/pages/jadwal')->with('success', 'Jadwal berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);
        return redirect('/dashboard/pages/jadwal')->with('success', 'Jadwal berhasil dihapus!');
    }
}
