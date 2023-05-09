@extends('dashboard.layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
        Tambah Fasilitas Unggulan
    </div>
    <div class="card-body">
        <form method="post" action="/dashboard/facility/{{ $fasilitas->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Fasilitas</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Masukan Nama Fasilitas" autofocus required
                            value="{{ old('name', $fasilitas->name) }}">
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
                            <input type="checkbox" class="custom-control-input" id="unggulan" name="unggulan" {{
                                $fasilitas->unggulan === 1 ? "checked" : "" }} @error('unggulan') is-invalid
                            @enderror>
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
                            name="slug" readonly required value="{{ old('slug', $fasilitas->slug) }}">
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
                            name="icon" placeholder="Masukan Kode Icon" required
                            value="{{ old('icon', $fasilitas->icon) }}">
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
                        <input type="hidden" name="oldImage" value="{{ $fasilitas->image }}">
                        @if ($fasilitas->image)
                        <img src="{{ asset('public/' . $fasilitas->image) }}"
                            class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="{{ $fasilitas->image }}">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                        <label for="body" class="form-label">Isi Fasilitas</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $fasilitas->body) }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success px-5">
                            <i class="fas fa-pencil"></i> Ubah
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