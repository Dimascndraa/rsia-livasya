<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JumbotronController extends Controller
{
    public function index()
    {
        return view('dashboard.jumbotron.index', [
            'title' => 'Jumbotron',
            'jumbotron' => Jumbotron::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.jumbotron.create', [
            'title' => 'Jumbotron'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'title_description' => 'required',
            'main_image' => 'image|file|max:5120',
        ]);

        if ($request->file('main_image')) {
            $validatedData['main_image'] = $request->file('main_image')->store('jumbotron-img');
        }

        Jumbotron::create($validatedData);
        return redirect('/dashboard/pages/jumbotron')->with('success', 'Jumbotron Berhasil!');
    }

    public function edit(Jumbotron $jumbotron)
    {
        return view('dashboard.jumbotron.edit', [
            'title' => 'Ubah Jumbotron',
            'jumbotron' => Jumbotron::all()
        ]);
    }

    public function update(Request $request, Jumbotron $jumbotron)
    {
        $rules = [
            'title' => 'required|max:255',
            'title_description' => 'required',
            'main_image' => 'image|file',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('main_image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['main_image'] = $request->file('main_image')->store('jumbotron-img');
        }

        Jumbotron::where('id', $jumbotron->id)->update($validatedData);
        return redirect('/dashboard/pages/jumbotron')->with('success', 'Jumbotron berhasil diubah!');
    }
}
