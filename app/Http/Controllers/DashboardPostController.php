<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Berita',
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Tambah Berita',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img-berita');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Berita baru telah ditambahkan!');
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => 'Detail Berita',
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Ubah Berita',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        // return $request->file('image');
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('img-berita');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::where('id', $post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Berita berhasil diubah!');
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Berita berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
