@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            Ubah Review
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/review/{{ $review->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama_klien" class="form-label">Nama Klien</label>
                            <input type="text" class="form-control @error('nama_klien') is-invalid @enderror"
                                id="nama_klien" name="nama_klien" value="{{ $review->nama_klien }}"
                                placeholder="Masukan Nama Dokter" autofocus required
                                value="{{ old('nama_klien', $review->nama_klien) }}">
                            @error('nama_klien')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="rating" class="form-label">rating</label>
                            <input type="number" min="0" max="5" class="form-control @error('rating') is-invalid @enderror" id="rating"
                                name="rating" value="{{ $review->rating }}" placeholder="Masukan rating" autofocus required
                                value="{{ old('rating', $review->rating) }}">
                            @error('rating')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Klien</label>
                            <input type="hidden" name="oldImage" value="{{ $review->image }}">
                            @if ($review->image)
                                <img src="{{ asset('public/' . $review->image) }}"
                                    class="img-preview img-fluid mb-3 col-sm-3 img-thumbnail rounded-circle d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-3 img-thumbnail rounded-circle d-block">
                            @endif
                            <input class="form-control @error('image') is-invalid @enderror" style="height: 2.7rem;"
                                type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="review" class="form-label">Isi Berita</label>
                            <input id="review" type="hidden" name="review" value="{{ old('review', $review->review) }}">
                            <trix-editor input="review"></trix-editor>
                            @error('review')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-plus-circle"></i> Ubah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
