<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.category.index', [
            'title' => 'Kategori',
            'categories' => Category::all(),
            'pelayanan' => Pelayanan::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.category.create', [
            'title' => "Tambah Kategori"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);
        return redirect('/dashboard/category')->with('success', 'Kategori Berhasil Ditambahkan!');
    }

    public function show(Category $category)
    {
        return view('dashboard.kategori.edit', [
            'title' => 'Ubah Pelayanan',
            'categories' => $category,
        ]);
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit', [
            'title' => 'Ubah Kategori',
            'category' => $category,
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)->update($validatedData);
        return redirect('/dashboard/category')->with('success', 'Kategori berhasil diubah!');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/category')->with('success', 'Kategori berhasil dihapus!');
    }
}
