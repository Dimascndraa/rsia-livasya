@extends('dashboard.layouts.main')

@section('container')
<style>
    .card-text div{
        text-align: justify;
        margin-left: 3rem;
        margin-right: 3rem;
    }
</style>
    <span></span>
    <div class="container py-5">
        <div class="d-flex mb-3 justify-content-start">
            <a href="/dashboard/pages/review/{{ $review->id }}/edit" class="badge mx-1 bg-warning p-2">
                Ubah <i class="fas fa-edit"></i>
            </a>

            <form action="/dashboard/pages/review/{{ $review->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge mx-1 badge-danger p-2 border-0" onclick="return confirm('Anda takin?')">
                    Hapus <i class="fas fa-trash"></i>
                </button>
            </form>

        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center fs-3"><strong>Review</strong></h5>
            </div>
            <div class="card-body">
                <div class="mb-3 row justify-content-center">
                    <img src="{{ asset('public/' . $review->image) }}" class="img-fluid rounded-circle d-blok m-auto img-thumbnail w-25"
                        alt="{{ $review->image }}">
                </div>

                <span class="card-text fs-4">
                    <p class="text-center">{{  $review->nama_klien  }}</p>
                    {!! $review->review !!}
                </span>
            </div>
            <a href="/dashboard/pages/review" class="text-decoration-none ms-3 mb-3 fs-4 text-center">
                <span class="fas fa-chevron-left my-3"></span> Kembali ke halaman review
            </a>
        </div>
    </div>
@endsection
