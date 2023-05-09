<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Pelayanan;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blogs',
            'name' => 'RSIA Livasya',
            'slogan_jumbotron' => "Stay Safe, Stay Healty",
            'deskripsi_jumbotron' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!",
            'posts' => Post::latest()->filter(request(['search']))->paginate(9)->withQueryString(),
            'about' => About::all(),
            'pelayanan' => Pelayanan::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'name' => 'RSIA Livasya',
            'post' => $post,
            'about' => About::all(),
            'pelayanan' => Pelayanan::all()
        ]);
    }
}
