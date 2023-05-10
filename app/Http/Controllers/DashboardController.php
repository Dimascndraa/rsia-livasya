<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dokter;
use App\Models\Fasilitas;
use App\Models\Pelayanan;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'posts' => Post::all(),
            'kategori_berita' => Category::all(),
            'dokter' => Dokter::all(),
            'review' => Review::all(),
            'facility' => Fasilitas::all(),
            'pelayanan' => Pelayanan::all()
        ]);
    }
}
