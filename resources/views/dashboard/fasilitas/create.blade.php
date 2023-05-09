@extends('dashboard.layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
        Tambah Fasilitas Unggulan
    </div>
    <div class="card-body">
        <form method="post" action="/dashboard/facility" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Fasilitas</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Masukan Nama Fasilitas" autofocus required
                            value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="unggulan" name="unggulan"
                                value="{{ old('unggulan') }}" @error('unggulan') is-invalid @enderror>
                            <label class="custom-control-label" for="unggulan">Unggulan</label>
                        </div>
                    </div>
                    @error('unggulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" readonly required value="{{ old('slug') }}">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon"
                            name="icon" placeholder="Masukan Kode Icon" required value="{{ old('icon') }}">
                        @error('icon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Fasilitas</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control" style="height: 2.7rem;" type="file" id="image" name="image"
                            onchange="previewImage()">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="body" class="form-label">Isi Fasilitas</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success px-5">
                            <i class="fas fa-plus-circle"></i> Buat
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/fasilitas/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

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