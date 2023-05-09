<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('dashboard.review.index', [
            'title' => 'Review',
            'review' => Review::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.review.create', [
            'title' => 'Tambah Review'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_klien' => 'required|max:255',
            'rating' => 'required',
            'review' => 'required',
            'image' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('review-img');
        }

        Review::create($validatedData);
        return redirect('/dashboard/pages/review')->with('success', 'Review telah ditambahkan!');
    }

    public function show(Review $review)
    {
        return view('dashboard.review.show', [
            'title' => "Detail Review",
            'review' => $review

        ]);
    }

    public function edit(Review $review)
    {
        return view('dashboard.review.edit', [
            'title' => "Ubah Review",
            'review' => $review

        ]);
    }

    public function update(Request $request, Review $review)
    {
        $rules = [
            'nama_klien' => 'required|max:255',
            'rating' => 'required',
            'review' => 'required',
            'image' => 'image|file',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('review-img');
        }


        Review::where('id', $review->id)->update($validatedData);
        return redirect('/dashboard/pages/review')->with('success', 'Review Berhasil Diubah!');
    }

    public function destroy(Review $review)
    {
        Review::destroy($review->id);
        return redirect('/dashboard/pages/review')->with('success', 'Review berhasil dihapus!');
    }
}
