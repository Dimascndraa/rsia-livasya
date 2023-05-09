@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/pelayanan/{{ $pelayanan->id }}">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input name="icon" type="text" class="form-control @error('icon') is-invalid @enderror"
                                id="icon" icon="icon" placeholder="Masukan Judul" autofocus required
                                value="{{ old('icon', $pelayanan->icon) }}">
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
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" title="title" placeholder="Masukan Judul" autofocus required
                                value="{{ old('title', $pelayanan->title) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="descript" class="form-label">Dekripsi Pelayanan</label>
                            <input id="descript" type="hidden" name="descript"
                                value="{{ old('descript', $pelayanan->descript) }}">
                            <trix-editor input="descript"></trix-editor>
                            @error('descript')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input name="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                id="url" url="url" placeholder="Masukan Judul" autofocus required
                                value="{{ old('url', $pelayanan->url) }}">
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
                                <i class="fas fa-edit"></i> Ubah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
