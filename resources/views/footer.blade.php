<!-- footer section starts  -->

<section class="footer" style="background: rgba(255, 255, 255, 0.9)">

    <div class="box-container">
        <div class="box">
            <h3  class="fw-bold">Hubungi Kami</h3>
            <a class="nav-link" href="https://wa.me/{{ $about[0]->no_telp1 }}"> <i class="fas fa-phone"></i>
                +{{ $about[0]->no_telp1 }} </a>
            <a class="nav-link" href="javascript:void(0)"> <i class="fas fa-phone"></i> {{ $about[0]->no_telp2 }} </a>
            <a class="nav-link" href="mailto:{{ $about[0]->gmail }}"> <i class="fas fa-envelope"></i>
                {{ $about[0]->gmail }} </a>
            <a class="nav-link" href="javascript:void(0)"> <i class="fas fa-map-marker-alt"></i>
                {{ $about[0]->alamat }}</a>
        </div>

        <div class="box">
            <h3  class="fw-bold">Ikuti Kami</h3>
            <a class="nav-link" href="{{ $about[0]->facebook }}"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a class="nav-link" href="{{ $about[0]->twitter }}"> <i class="fab fa-twitter"></i> Twitter </a>
            <a class="nav-link" href="{{ $about[0]->instagram }}/"> <i class="fab fa-instagram"></i> Instagram </a>
            <a class="nav-link" href="{{ $about[0]->youtube }}"> <i class="fab fa-youtube"></i> Youtube </a>
        </div>

    </div>

    <div class="credit"> created by <span>Team IT Livasya</span> | all rights reserved
        @guest
            <a style="margin-left: -6px" href="/bukan-login" class="text-decoration-none text-black-50">.</a>
        @endguest
    </div>

</section>
<!-- footer section ends -->
