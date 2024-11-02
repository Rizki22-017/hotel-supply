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
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
              <i class="fa-solid fa-user-doctor"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
              <i class="fa-regular fa-hospital"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                <p>Product</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
              <i class="fas fa-flask"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Material</p>
              </div>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </section><!-- /Stats Section -->




@endsection
