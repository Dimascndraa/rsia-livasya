@extends('layouts.main')

@section('container')
    <style>
        .home {
            background: rgba(255, 255, 255, 0.6) !important;
        }

        .book .row {
            gap: 0;
        }

        .swiper {
            width: 600px;
            height: 300px;
        }

        .home .image img {
            background: rgba(255, 255, 255, .5);
            animation: anim 5s ease-in-out infinite;
        }

        @keyframes anim {
            0% {
                transform: translatey(0px);
            }

            50% {
                transform: translatey(-30px);
            }

            100% {
                transform: translatey(0px);
            }
        }
    </style>
<link rel="stylesheet" href="css/animasi.css">
    <!-- home section start -->
    <section class="home mt-5 overflow-hidden" id="home" >
        <div class="image row juctify-content-center">
            <div class="">
                <img src="{{ asset('public/' . $jumbotron[0]->main_image) }}"
                    class="d-block m-auto img-fluid m-auto p-5 rounded-circle" alt="">
            </div>
        </div>
        <div class="content mx-5" data-aos="fade-left">
            <h3 class="mb-5" style="line-height: 3rem; ">{!! $jumbotron[0]->title !!}</h3>
            {!! $jumbotron[0]->title_description !!}
            <div class="row">
                <div class="col">
                    <a href="https://dafol.livasya.id" target="_blank" class="btn mt-3"> Daftar Sekarang <span
                            class="fas fa-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- icons section starts  -->
    <section class="icons-container overflow-hidden bg-white" style="margin-top: 0 !important">
        <div class="icons" data-aos="fade-right">
            <i class="fas fa-user-md"></i>
            <h3>{{ count($dokter) }}</h3>
            <p>Dokter</p>
        </div>
        <div class="icons" data-aos="fade-up">
            <i class="fas fa-users"></i>
            <h3>{{ $about[0]->jml_pasien_puas }}+</h3>
            <p>Pasien Puas</p>
        </div>
        <div class="icons" data-aos="fade-left">
            <i class="fas fa-procedures"></i>
            <h3>{{ $about[0]->jml_fasilitas_kamar }}+</h3>
            <p>Fasilitas Tempat Tidur</p>
        </div>
    </section>
    <!-- icons section ends -->

    <!-- services section starts  -->
    <section class="services py-5 overflow-hidden" style="background: #f5f5f5;" id="services">
        <div class="box-custom row d-flex justify-content-center align-items-center">
            <div class="pelayanan col-lg-2 d-flex m-5 align-items-center" >
                <div class="card-body mt-4 text-center ">
                    <i class="fas fa-heartbeat" style="font-size: 5rem"></i>
                    <p class="fs-3 mt-3 text fw-bold">Poliklinik</p>
                </div>
            </div>

            <div class="col-lg-9 align-items-center" style="height: 18rem;">
                <section class="splide" aria-labelledby="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card mx-3 border-0 " style="border-radius:20px;">
                                    <div class="card-body mt-4 text-center" >
                                       <img src="/img/doctorpoli.webp" alt="" width="50">
                                        <p class="fs-3 mt-3 text fw-bold" style="color: #e97f0d;">Poli Umum</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-3 border-0 " style="border-radius:20px;">
                                    <div class="card-body mt-4 text-center" >
                                       <img src="/img/pediatrics.webp" alt="" width="50">
                                        <p class="fs-3 mt-3 text fw-bold" style="color: #e97f0d;">Poli Anak</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-3 border-0 " style="border-radius:20px;">
                                    <div class="card-body mt-4 text-center" >
                                       <img src="/img/surgery.webp" alt="" width="50">
                                        <p class="fs-3 mt-3 text fw-bold" style="color: #e97f0d;">Poli Bedah</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-3 border-0 " style="border-radius:20px;">
                                    <div class="card-body mt-4 text-center" >
                                        <img src="/img/newborn.webp" width="50" alt="">
                                        <p class="fs-3 mt-3 text fw-bold" style="color: #e97f0d;">Poli Obgyn</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <h1 class="heading mt-5"> Pelayanan <span>Kami</span> </h1>
        <div class="box-custom row justify-content-center align-items-center">
            @foreach ($pelayanan as $p)
                <a href="/{{ $p->url }}"
                    class="pelayanan g-5 shadow col-lg-3 mx-5 d-flex align-items-center text-decoration-none"
                    style="height: 23rem;; border-radius: 2rem">
                    <div class="card-body text-center">
                        <i class="{{ $p['icon'] }} mb-3" style="font-size: 7rem;"></i>
                        <p class="fs-1 mt-3 text fw-bold">{{ $p['title'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <!-- services section end  -->

    <!-- booking section starts   -->
    <section class="gallery overflow-hidden" style="background: #f5f5f5;" id="services">
        <h1 class="heading pt-5" style="margin-bottom:-10px;"> <span>Jadwal</span> Dokter </h1>
        <div class="container">
            <div class="row justify-content-center g-5">
                <p class="imglist">
                    @foreach ($jadwals as $jadwal)
                        <div class="col-12 col-lg-6">
                            <a href="{{ asset('/public/'. $jadwal->image) }}" data-fancybox="group" data-caption="{{ $jadwal->caption }}">
                                <img src="{{ asset('/public/' . $jadwal->image)}}" class="img-thumbnail" alt="" style="border: none; border-radius: 20px">
                                {{-- <div class="card-img-top img overflow-hidden img-thumbnail" style="z-index: 0; background-image: url({{ asset('/public/' . $jadwal->image)}}); background-size: cover; background-position: center top;"></div>                         --}}
                            </a>
                        </div>
                    @endforeach
                </p>
            </div>
        </div>
    </section>
    <!-- booking section ends -->
    
    <!-- review section starts  -->
    <section class="review pt-5 overflow-hidden bg-white" id="review">
        <h1 class="heading">Temukan <span>Kami</span></h1>
        <div class="box-container mb-5">
            <div class="row juctify-content-center">
                <div class="card" style="border: none; border-radius: 20px">
                    <div class="card-body">
                        <iframe class="w-100" style="height: 50rem; border: none; border-radius: 20px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0386969407605!2d108.17566195081062!3d-6.765136368012836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f29b82be5b779%3A0xfc24e001da3669f9!2sRSIA%20Livasya%20Majalengka!5e0!3m2!1sid!2sid!4v1667793553251!5m2!1sid!2sid style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review section ends -->
@endsection
