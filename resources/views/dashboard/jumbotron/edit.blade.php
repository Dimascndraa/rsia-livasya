{{-- @dd($jumbotron[0]->main_image) --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/jumbotron/{{ $jumbotron[0]->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Masukan Judul" autofocus required
                                value="{{ old('title', $jumbotron[0]->title) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="main_image" class="form-label">Gambar Berita</label>
                            <input type="hidden" name="oldImage" value="{{ $jumbotron[0]->main_image }}">
                            @if ($jumbotron[0]->main_image)
                                <img src="{{ asset('public/' . $jumbotron[0]->main_image) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @endif
                            <input class="form-control @error('main_image') is-invalid @enderror" style="height: 2.7rem;"
                                type="file" id="main_image" name="main_image" onchange="previewImage()">
                            @error('main_image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title_description" class="form-label">Isi Berita</label>
                            <input id="title_description" type="hidden" name="title_description"
                                value="{{ $jumbotron[0]->title_description }}">
                            <trix-editor input="title_description"></trix-editor>
                            @error('title_description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-edit"></i> Ubah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#main_image');
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
