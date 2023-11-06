@extends('home.masterpage')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5  fadeIn">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/images/main.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="maintext">SIMPLICITY BEATS<br>
                                        COMPLXITY <br></h1>
                                    <br>
                                    <a href="" class="btn1">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="/images/main.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="maintext">SIMPLICITY BEATS<br>
                                        COMPLXITY <br></h1>
                                    <br>
                                    <a href="" class="btn1">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 fadeIn">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="" src="/images/mainimg.jpg" height="600 hv">
                    </div>
                </div>
                <div class="col-lg-6  fadeIn">
                    <h1 class="display-5 mb-4">ANNE STEVERS</h1>
                    <p class="mb-4">Founded in 2020, we started as a small family-owned business with a vision to provide
                        exquisite home decor items that reflect your unique personality and lifestyle. Over the years, we
                        have grown into destination for homeowners, interior designers, and anyone who seeks to elevate the
                        aesthetics of their living spaces.</p>
                    <p><i class="fa fa-check text-danger-emphasis me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-warning-emphasis me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-warning-emphasis me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <br>
                    <a class="btn2" href="/about">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div>

        @include('home.category')
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">New Arrival </h1>
                        <p>We understand that quality and style matter to you, and that's why we're thrilled to introduce these exceptional products.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <!-- Your content here -->
                </div>
            </div>
        </div>
        @include('home.products')
    </div>



    <script>
        (function($) {
            "use strict";



            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


            // Testimonials carousel
            $(".testimonial-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                margin: 25,
                loop: true,
                center: true,
                dots: false,
                nav: true,
                navText: [
                    '<i class="bi bi-chevron-left"></i>',
                    '<i class="bi bi-chevron-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });


        })(jQuery);

        // استدعاء الدالة عند التمرير
        window.addEventListener("scroll", function() {
            let element = document.querySelector("maintext");
            let position = element.getBoundingClientRect().top;
            let windowHeight = window.innerHeight;

            if (position < windowHeight) {
                element.classList.add("active");
            }
        });
    </script>
@endsection
