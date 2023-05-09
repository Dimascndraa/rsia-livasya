@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            Tambah Pelayanan
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/pelayanan">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon"
                                name="icon" placeholder="Masukan nama icon" autofocus required
                                value="{{ old('icon') }}">
                            @error('icon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Masukan judul pelayanan" required value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="descript" class="form-label">Deskripsi Pelayanan</label>
                            <input id="descript" type="hidden" name="descript" value="{{ old('descript') }}">
                            <trix-editor input="descript"></trix-editor>
                            @error('descript')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                                name="url" placeholder="Masukan URL" required value="{{ old('url') }}">
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
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
@endsection
