<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gallery.index', [
            'title' => "Gallery",
            'about' => About::all(),
            'galleries' => Gallery::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.create', [
            'title' => "Tambah Gallery",
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
            $validatedData['image'] = $request->file('image')->store('gallery-img');
        }

        Gallery::create($validatedData);
        return redirect('/dashboard/pages/gallery')->with('success', 'Gallery baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('dashboard.gallery.show', [
            'title' => 'Detail Berita',
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', [
            'title' => 'Ubah Berita',
            'gallery' => $gallery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        // return $request;
        $rules = [
            'caption' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('gallery-img');
        }

        Gallery::where('id', $gallery->id)->update($validatedData);
        return redirect('/dashboard/pages/gallery')->with('success', 'Gallery berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::destroy($gallery->id);
        return redirect('/dashboard/pages/gallery')->with('success', 'Gallery berhasil dihapus!');
    }
}
