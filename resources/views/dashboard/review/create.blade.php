@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            Tambah Review
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pagess/review" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama_klien" class="form-label">Nama Klien</label>
                            <input type="text" class="form-control @error('nama_klien') is-invalid @enderror"
                                id="nama_klien" name="nama_klien" placeholder="Masukan Nama Klien" autofocus required
                                value="{{ old('nama_klien') }}">
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
                                name="rating" placeholder="Masukan rating" autofocus required
                                value="{{ old('rating') }}">
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
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="image" name="image"
                                onchange="previewImage()">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="review" class="form-label">Review</label>
                            <input id="review" type="hidden" name="review" value="{{ old('review') }}">
                            <trix-editor input="review"></trix-editor>
                            @error('review')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-plus-circle"></i> Tambah
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
