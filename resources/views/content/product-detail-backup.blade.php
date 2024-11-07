@extends('layout.app')
@section('content')
    <section id="hero" class="hero section">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
    </section>

    <section id="detail" class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><b>Bed Sheet</b></h4>
                <p style="padding-bottom:15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ipsa
                    repudiandae, dicta ut porro accusamus quisquam impedit non excepturi assumenda quis veniam nulla ratione
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
                            <td colspan="3">Bed sheets come in two main varieties: flat and fitted. A flat sheet is
                                simply a rectangular sheet of cloth, while a fitted sheet has its four corners, and
                                sometimes two or four sides, fitted with elastic, to be used only as a bottom sheet.</td>
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
                        <button class="btn btn-light">Copy Link</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include Font Awesome for social media icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <script>
            function toggleShare() {
                const shareIcons = document.getElementById('share-icons');
                shareIcons.classList.toggle('d-none');
            }
        </script>

    </section>

    <!-- gallery Section -->
    <section id="gallery" class="gallery section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                {{-- <ul class="gallery-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End gallery Filters --> --}}

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-books">
                        <img src="assets/img/departments-1.jpg" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>Books 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/departments-1.jpg" title="Branding 1" data-gallery="gallery-gallery-book"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="gallery-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End gallery Item -->

                    <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-app">
                        <img src="assets/img/departments-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/departments-2.jpg" title="App 2" data-gallery="gallery-gallery-app"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="gallery-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End gallery Item -->

                    <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-product">
                        <img src="assets/img/departments-3.jpg" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/departments-3.jpg" title="Product 2" data-gallery="gallery-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="gallery-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End gallery Item -->

                    <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-branding">
                        <img src="assets/img/departments-4.jpg" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/departments-4.jpg" title="Branding 2"
                                data-gallery="gallery-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="gallery-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End gallery Item -->

                    <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-books">
                        <img src="assets/img/departments-1.jpg" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>Books 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/departments-1.jpg" title="Branding 2" data-gallery="gallery-gallery-book"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="gallery-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End gallery Item -->

                    <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-app">
                        <img src="assets/img/departments-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/departments-2.jpg" title="App 3" data-gallery="gallery-gallery-app"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="gallery-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End gallery Item -->



                </div><!-- End gallery Container -->

            </div>

        </div>

    </section><!-- /gallery Section -->


    <!-- Portfolio Section -->
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
                                <h4><a href="#" title="More Details" data-bs-toggle="modal"
                                        data-bs-target="#detailModal">Bedroom</a></h4>
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
                                <h4><a href="#" title="More Details" data-bs-toggle="modal"
                                        data-bs-target="#detailModal">Bathroom</a></h4>
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
                                <h4><a href="#" title="More Details" data-bs-toggle="modal"
                                        data-bs-target="#detailModal">Kitchen</a></h4>
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
                                <h4><a href="#" title="More Details" data-bs-toggle="modal"
                                        data-bs-target="#detailModal">Bathroom</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    {{-- Modal --}}
                    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-5">
                                    <!-- Features Details Section -->
                                    <section id="features-details" class="features-details section">
                                        <div class="container">
                                            <div class="row gy-4 justify-content-between features-item">
                                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                                    <img src="assets/img/card.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up"
                                                    data-aos-delay="200">
                                                    <div class="content">
                                                        <h3>Corporis temporibus maiores provident</h3>
                                                        <p>
                                                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                                            aute irure dolor in reprehenderit in voluptate
                                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                                            sint occaecat cupidatat non proident.
                                                        </p>
                                                        <a href="/product-detail" class="btn more-btn">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /Features Details Section -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>




                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->
@endsection
