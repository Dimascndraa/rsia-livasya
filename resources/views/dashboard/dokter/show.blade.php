@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header d-flex  justify-content-center w-100">
            Detail Dokter

            <a href="/dashboard/dokter/{{ $dokter->id }}/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>

        </div>
        <div class="card-body align-items-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-4 p-5">
                    <img src="{{ asset('public/'.$dokter->image) }}" class="img-fluid d-block m-auto" alt="">
                </div>
                <div class="col-sm-6 p-5">
                    <h3 class="jumbotron-title">{{ $dokter->nama_dokter }}</h3>
                    <p class="text-black-50">{{ $dokter->jabatan }}</p>
                    {!! $dokter->jadwal !!}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5" style="height: 100%;">
                    <h3 class="jumbotron-title">Poster Dokter</h3>
                    <img src="{{ asset('storage/'.$dokter->poster_dokter) }}" class="img-fluid d-block m-auto" alt="">
                </div>
                <div class="col-sm-4 p-5 h-100" height: 100%;>
                    <h3 class="jumbotron-title">Jadwal Dokter</h3>
                    <img src="{{ asset('storage/'.$dokter->poster_jadwal) }}" class="img-fluid d-block m-auto" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
