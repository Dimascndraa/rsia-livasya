@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            Ubah Dokter
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/dokter/{{ $dokter->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror"
                                id="nama_dokter" name="nama_dokter" value="{{ $dokter->nama_dokter }}"
                                placeholder="Masukan Nama Dokter" autofocus required
                                value="{{ old('nama_dokter', $dokter->nama_dokter) }}">
                            @error('nama_dokter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                name="jabatan" value="{{ $dokter->jabatan }}" placeholder="Masukan Jabatan" autofocus
                                required value="{{ old('jabatan', $dokter->jabatan) }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Dokter</label>
                            <input type="hidden" name="oldImage" value="{{ $dokter->image }}">
                            @if ($dokter->image)
                                <img src="{{ asset('public/' . $dokter->image) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                            <label for="jadwal" class="form-label">Jadwal</label>
                            <input id="jadwal" type="hidden" name="jadwal"
                                value="{{ $dokter->jadwal }}">
                            <trix-editor input="jadwal"></trix-editor>
                            @error('jadwal')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="poster_dokter" class="form-label">Poster Dokter</label>
                            @if ($dokter->poster_dokter)
                                <img src="{{ asset('public/' . $dokter->poster_dokter) }}" class="poster_dokter img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="poster-dokter img-fluid mb-3 col-sm-5 d-block">
                            @endif
                                <input class="form-control" style="height: 2.7rem;" type="file" id="poster_dokter" name="poster_dokter" onchange="posterDokter()">
                            @error('poster_dokter')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="poster_jadwal" class="form-label">Poster Jadwal</label>
                            @if ($dokter->poster_jadwal)
                                <img src="{{ asset('public/' . $dokter->poster_jadwal) }}" class="poster_jadwal img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="poster_jadwal img-fluid mb-3 col-sm-5 d-block">
                            @endif
                            <img class="poster-jadwal img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="poster_jadwal" name="poster_jadwal" onchange="posterJadwal()">
                            @error('poster_jadwal')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
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

        function posterDokter() {
            const image = document.querySelector('#poster_dokter');
            const imgPreview = document.querySelector('.poster-dokter')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function posterJadwal() {
            const image = document.querySelector('#poster_jadwal');
            const imgPreview = document.querySelector('.poster-jadwal')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
