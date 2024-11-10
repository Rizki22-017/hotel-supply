@extends('layout.app')
@section('content')
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Category</h2>
        <p>Here's oru category product for your lovely hotel supply<br></p>
    </div><!-- End Section Title -->

    <div class="container">
        <!-- Container Carousel -->
        <div class="carousel-wrapper" style="position: relative; overflow: visible;">

            <!-- Tombol Navigasi Kiri -->
            <button id="prev-btn" class="btn-carousel">&laquo;</button>

            <!-- Kontainer Card -->
            <div class="pricing-carousel" style="display: flex; gap: 20px; transition: transform 0.3s ease;">

                <!-- Card Item 1 -->
                <div class="pricing-item" data-index="0" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-tem">
                        <img src="assets/img/product-5.jpg" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card Item 2 -->
                <div class="pricing-item" data-index="1" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="pricing-tem">
                        <span class="featured">Featured</span>
                        <img src="assets/img/product-5.jpg" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card Item 3 -->
                <div class="pricing-item" data-index="2" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-tem">
                        {{-- <div class="title-wrapper">
                            <h3 style="color: #fd7e14;">Business Plan</h3>
                        </div> --}}
                        <img src="assets/img/product-5.jpg" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card Item 4 -->
                <div class="pricing-item" data-index="3" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="400">
                    <div class="pricing-tem">
                        <img src="assets/img/product-5.jpg" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="pricing-item" data-index="3" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="400">
                    <div class="pricing-tem">
                        <img src="assets/img/product-5.jpg" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="pricing-item" data-index="3" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="400">
                    <div class="pricing-tem">
                        <img src="assets/img/product-5.jpg" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan card lain sesuai kebutuhan di sini -->

            </div><!-- End pricing-carousel -->

            <!-- Tombol Navigasi Kanan -->
            <button id="next-btn" class="btn-carousel">&raquo;</button>
        </div>
    </div>

</section>

<script>
    const carousel = document.querySelector('.pricing-carousel');
    const nextBtn = document.getElementById('next-btn');
    const prevBtn = document.getElementById('prev-btn');
    const cards = document.querySelectorAll('.pricing-item'); // Select all cards
    const cardWidth = document.querySelector('.pricing-item').offsetWidth + 20; // Tambah gap antar card
    let currentPosition = 0;
    let autoSlideInterval;
    let remainingTime = 5000; // Time remaining for auto slide

    function updateCardOpacity() {
        cards.forEach((card, index) => {
            if (index < Math.abs(currentPosition / cardWidth) || index >= Math.abs(currentPosition /
                    cardWidth) + 4) {
                card.style.opacity = '0.5'; // Redupkan card yang tidak terlihat
            } else {
                card.style.opacity = '1'; // Kembalikan opasitas card yang terlihat
            }
        });
    }

    function slideToNext() {
        const maxPosition = -(carousel.children.length - 4) * cardWidth;
        currentPosition -= cardWidth;

        if (currentPosition < maxPosition) {
            currentPosition = 0; // Kembali ke awal jika sudah habis
        }

        carousel.style.transform = `translateX(${currentPosition}px)`;
        updateCardOpacity();
    }

    function slideToPrev() {
        currentPosition += cardWidth;

        if (currentPosition > 0) {
            currentPosition = -(carousel.children.length - 4) * cardWidth; // Kembali ke akhir
        }

        carousel.style.transform = `translateX(${currentPosition}px)`;
        updateCardOpacity();
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            slideToNext();
        }, remainingTime);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    nextBtn.addEventListener('click', () => {
        slideToNext();
        stopAutoSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
        slideToPrev();
        stopAutoSlide();
        startAutoSlide();
    });

    // Add event listeners to each card to pause on hover
    cards.forEach(card => {
        card.addEventListener('mouseover', stopAutoSlide); // Stop auto sliding on hover
        card.addEventListener('mouseout', startAutoSlide); // Resume auto sliding when not hovering
    });

    // Inisialisasi opasitas saat halaman dimuat
    updateCardOpacity();

    // Auto slide setiap 5 detik
    startAutoSlide();
</script>

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
