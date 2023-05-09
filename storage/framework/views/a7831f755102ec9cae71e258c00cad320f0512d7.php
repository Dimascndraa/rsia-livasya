<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="zUQMkNpBa0KPi9FqAO6eaWtbuvUjYK__y2mIee9tHVE" />
    <meta name="google-site-verification" content="qkgOTUKpY1-bXDjm3IKE9DJUzFp6SZgPjGAaGp790tk" />
    <meta name="description" content="RSIA Livasya merupakan Rumah sakit di Majalengka yang menyelenggarakan pelayanan medik spesialistik atau pelayanan dasar dan spesialistik.">
    <?php if($title === "Home"): ?>
        <title>Rumah Sakit Ibu dan Anak Livasya</title>   
    <?php else: ?>
        <title>RSIA LIVASYA | <?php echo e($title); ?> </title>
    <?php endif; ?>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63ce504147425128790f20af/1gneuj0cg';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!--Start of Fancybox Style-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!--End of Fancybox Style-->

    <!-- custom css file link  -->
    <script src="/js/splide.min.js"></script>
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/timeline.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">

</head>

<body class="m-0">
    <div class="position-fixed" style="top: 0; left: 0; bottom: 0; right: 0; background: url('/img/bg.webp'); background-size: cover; background-position: center; z-index: -999;"></div>
    

    <!-- header section starts  -->

    <?php echo $__env->make('partials/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- header section ends -->

    <!-- home section starts  -->

    <?php echo $__env->yieldContent('container'); ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>

    <!-- custom js file link  -->
    <script src="/js/script.js"></script>

    <script>
    // Dropdown Menu Fade    
        jQuery(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).fadeIn("fast");
                },
                function () {
                    $('.dropdown-menu', this).fadeOut("fast");
                });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                pauseOnHover: true,
                autoplay: true,
                interval: 2000,
                pagination: false,
            }).mount();
        });

        AOS.init({
            once: true
        });



        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            adaptiveHeight: true,
            infinite: false,
            useTransform: true,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 5000,

            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });

        $('.slider-nav')
            .on('init', function(event, slick) {
                $('.slider-nav .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                    }
                }, {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }]
            });

        $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
        });

        $('.slider-nav').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');

            $('.slider-single').slick('slickGoTo', goToSingleSlide);
        });
    </script>

    <!-- DataTables -->
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#datatab").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": false,
                "ordering": false,
                "info": false,
                "searching": false
            });
        });
    </script>

    <!--Start of Fancybox Script-->
        <script>
            $('[data-fancybox]').fancybox({
            // Options will go here
            buttons : [
                'close'
            ],
            wheel : false,
            transitionEffect: "slide",
            // thumbs          : false,
            // hash            : false,
            loop            : true,
            // keyboard        : true,
            toolbar         : false,
            // animationEffect : false,
            // arrows          : true,
            clickContent    : false
            });
        </script>
    <!--End of Fancybox Script-->

</body>

</html><?php /**PATH /var/www/html/livasya/resources/views/layouts/main.blade.php ENDPATH**/ ?>