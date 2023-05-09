@extends('dashboard.layouts.main')

@section('container')
    <style>
        .jumbotron-title {
            font-size: 2rem;
            color: #444;
            line-height: 1.8;
            text-shadow: .1rem .1rem 0 rgba(0, 0, 0, .2);
        }
    </style>
    <div class="card">
        <div class="card-header d-flex  justify-content-center w-100">
            Identitas
            
            <a href="/dashboard/pages/about/{{ $about[0]->id }}/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>

        </div>
        <div class="card-body align-items-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6">
                    <img src="{{ asset('/public/'.$about[0]->image) }}" class="img-fluid d-block m-auto" alt="">
                </div>
                <div class="col-sm-6">
                    <h3 class="jumbotron-title">{{ $about[0]->title }}</h3>
                    <p class="text-black-50">{!! $about[0]->descript !!}</p>
                </div>
            </div>
        </div>
        <div class="card-footer pt-5 px-5">
            <h5>Lainnya</h5>
            <div class="row">
                <div class="col-lg-4">
                    <ul>
                        <div class="mb-3">
                            <li><strong>URL Facebook:</strong>  {{ $about[0]->facebook }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>URL Instagram:</strong>  {{ $about[0]->instagram }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>URL Twitter:</strong>  {{ $about[0]->twitter }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>URL Youtube:</strong>  {{ $about[0]->youtube }}</li>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul>
                        <div class="mb-3">
                            <li><strong>No Handphone:</strong> {{ $about[0]->no_telp1 }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>No Telepon:</strong> {{ $about[0]->no_telp2 }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>Gmail:</strong> {{ $about[0]->gmail }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>Alamat:</strong> {{ $about[0]->alamat }}</li>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul>
                        <div class="mb-3">
                            <li><strong>Jumlah Dokter:</strong> {{ $about[0]->jml_dokter }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>Jumlah Pasien Puas:</strong> {{ $about[0]->jml_pasien_puas }}+</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>Jumlah Fasilitas Kamar:</strong> {{ $about[0]->jml_fasilitas_kamar }}+</li>
                        </div>
                    </ul>
                </div>
            </div>
            <h5>Sejarah</h5>
            <div class="row">
                {!! $about[0]->sejarah !!}
            </div>
        </div>
    </div>
@endsection