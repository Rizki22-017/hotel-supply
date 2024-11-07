@extends('layout.app')
@section('content')
    <section id="product-details" class="container">
        <div class="row">
            <!-- Gallery (1/3 of the section) -->
            <div class="col-lg-4">
                <div id="productGalleryCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/departments-1.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/departments-2.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/departments-3.jpg" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productGalleryCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productGalleryCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Product Details (2/3 of the section) -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>Bed Sheet</b></h4>
                        <p style="padding-bottom:15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ipsa
                            repudiandae, dicta ut porro accusamus quisquam impedit non excepturi assumenda quis veniam nulla
                            ratione
                            praesentium provident quia. Earum, porro amet.</p>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped" style="width: 100%; table-layout: fixed;">
                            <tbody>
                                <tr>
                                    <th>Available colors</th>
                                    <td>Plain white</td>
                                    <td>Stripe 3cm</td>
                                    <td>Square/Checker 9cm</td>
                                </tr>
                                <tr>
                                    <th>Dimension</th>
                                    <td colspan="3">Customizeable</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td colspan="3">Bed sheets come in two main varieties: flat and fitted...</td>
                                </tr>
                                <tr>
                                    <th>Materials</th>
                                    <td colspan="3">
                                        <ul style="list-style-type: none; padding-left: 0;">
                                            <li>CVC</li>
                                            <li>Full Cotton</li>
                                            <li>Dobby/Satin Jacquard</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MOQ</th>
                                    <td colspan="3">Can be ordered without MOQ</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                        <!-- Order Now and Share buttons -->
                        <div class="d-flex align-items-center mt-3">
                            <button class="btn btn-primary me-2" style="border-radius: 12px">Order Now</button>
                            <button class="btn me-2" onclick="toggleShare()">Share</button>
                            <div id="share-icons" class="d-none">
                                <button class="btn btn-light"><i class="fab fa-whatsapp"></i></button>
                                <button class="btn btn-light"><i class="fab fa-instagram"></i></button>
                                <button class="btn btn-light"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-light"><i class="fab fa-facebook"></i></button>
                                <button class="btn btn-light"><i class="fas fa-link"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Related Products</h2>
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
                            <a href="assets/img/departments-2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/departments-2.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/product-detail">Bathroom</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Related Product Section -->

    <!-- Include Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function toggleShare() {
            const shareIcons = document.getElementById('share-icons');
            shareIcons.classList.toggle('d-none');
        }
    </script>
@endsection
