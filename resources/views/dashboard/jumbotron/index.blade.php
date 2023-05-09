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
            Jumbotron

            <a href="/dashboard/pages/jumbotron/{{ $jumbotron[0]->id }}/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>

        </div>
        <div class="card-body align-items-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6">
                    <img src="{{ asset('/public/'.$jumbotron[0]->main_image) }}" class="img-fluid d-block m-auto" alt="">
                </div>
                <div class="col-sm-6">
                    <h3 class="jumbotron-title">{!! $jumbotron[0]->title !!}</h3>
                    <p class="text-black-50">{!! $jumbotron[0]->title_description !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
