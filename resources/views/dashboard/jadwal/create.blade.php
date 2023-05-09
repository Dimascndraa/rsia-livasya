@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            Tambah Jadwal
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/pages/jadwal" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Jadwal</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="image" name="image"
                                onchange="previewImage()">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input id="caption" type="hidden" name="caption" value="{{ old('caption') }}">
                            <trix-editor input="caption"></trix-editor>
                            @error('caption')
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