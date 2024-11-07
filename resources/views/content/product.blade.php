@extends('layout.app')
@section('content')
    <section id="heroproduct" class="heroproduct section light-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start"
                    data-aos="fade-up">
                    <h2>CREATING WEBSITES THAT MAKE YOU STOP &amp; STARE</h2>
                    <p>We are team of talented designers making websites with Bootstrap</p>
                    <div class="d-flex mt-4 justify-content-center justify-content-md-start">
                        <a href="#about" class="cta-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Products</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class=" " data-layout="masonry" data-sort="original-order">

                <div class="row gy-4  container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-3 col-md-4 portfolio-item">
                        <div class="portfolio-content h-100">
                            <a href="assets/img/departments-1.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/departments-1.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/product-detail">Bedroom</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-3 col-md-4 portfolio-item    ">
                        <div class="portfolio-content h-100">
                            <a href="assets/img/departments-2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/departments-2.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/product-detail">Bathroom</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-3 col-md-4 portfolio-item    ">
                        <div class="portfolio-content h-100">
                            <a href="assets/img/departments-3.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/departments-3.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/product-detail">Kitchen</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-3 col-md-4 portfolio-item    ">
                        <div class="portfolio-content h-100">
                            <a href="assets/img/departments-4.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/departments-4.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/product-detail">Spa & Fitness</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section><!-- /Portfolio Section -->
@endsection
