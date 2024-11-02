@extends('layout.app')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative">



          <div class="content row gy-4">


            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="d-flex flex-column justify-content-center">
                <div class="row gy-4">

                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">

                        <h1 class="mb-4">
                          Everything you need <br>
                          For hotel linen
                        </h1>

                        <div class="hero-buttons">
                          <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Browse Now!</a>
                        </div>
                      </div>

                </div>
              </div>
            </div>
          </div><!-- End  Content-->

        </div>

      </section><!-- /Hero Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Product Range</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class=" "  data-layout="masonry" data-sort="original-order">

            <div class="row gy-4  container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-3 col-md-4 portfolio-item    ">
                <div class="portfolio-content h-100">
                  <a href="assets/img/departments-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/departments-1.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Bedroom</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-3 col-md-4 portfolio-item    ">
                <div class="portfolio-content h-100">
                  <a href="assets/img/departments-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/departments-2.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Bathroom</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-3 col-md-4 portfolio-item    ">
                <div class="portfolio-content h-100">
                  <a href="assets/img/departments-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/departments-3.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Dining & Kitchen</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-3 col-md-4 portfolio-item    ">
                <div class="portfolio-content h-100">
                  <a href="assets/img/departments-4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/departments-4.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Spa & Fitness</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->



            </div><!-- End Portfolio Container -->

          </div>

        </div>

    </section><!-- /Portfolio Section -->




@endsection
