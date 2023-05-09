<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fasilitas.index', [
            'title' => 'Fasilitas',
            'fasilitas' => Fasilitas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fasilitas.create', [
            'title' => 'Tambah Fasilitas Unggulan',
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:fasilitas',
            'image' => 'image|file|max:5120',
            'body' => 'required',
            'icon' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img-fasilitas');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 500);

        Fasilitas::create($validatedData);
        return redirect('/dashboard/facility')->with('success', 'Fasilitas baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $facility)
    {
        return view('dashboard.fasilitas.show', [
            'title' => 'Detail Fasilitas',
            'fasilitas' => $facility
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $facility)
    {
        return view('dashboard.fasilitas.edit', [
            'title' => "Ubah Fasilitas",
            'fasilitas' => $facility
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $facility)
    {
        $rules = [
            'name' => 'required|max:255',
            'body' => 'required',
            'icon' => 'required',
        ];

        if ($request->slug != $facility->slug) {
            $rules['slug'] = 'required|unique:fasilitas';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('img-berita');
        }

        Fasilitas::where('id', $facility->id)->update($validatedData);
        return redirect('/dashboard/facility')->with('success', 'Fasilitas berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $facility, Request $request)
    {
        Storage::delete($request->oldImage);
        Fasilitas::destroy($facility->id);
        return redirect('/dashboard/facility')->with('success', 'Fasilitas berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Fasilitas::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
