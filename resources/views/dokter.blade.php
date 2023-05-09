@extends('layouts.main')

@section('container')
    <section class="main bg-white" style="margin-top: 8rem">
        <!-- <h2 class="d-inline-block fw-bold" style="border-bottom: 3px solid var(--primary)">Dokter</h2> -->

        <div class="row mt-5">
            <div class="col-lg-2">
                <img src="{{ asset('public/' . $dokter->image) }}" class="img-fluid" style="width: 20rem" alt="{{ $dokter->nama_dokter }}">
            </div>
            <div class="col-lg-3">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <p class="fw-bold">{{ $dokter->nama_dokter }}</p>
                        <p>{{ $dokter->jabatan }}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    {!! $dokter->jadwal !!}
                </div>
            </div>
        </div>
    </section>
@endsection
