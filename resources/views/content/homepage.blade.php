@extends('layout.app')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container position-relative">
            <h2>Welcome to 360 Hotel Supply</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam.
                Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                vel. Minus et tempore modi architecto.</p>
            <a href="#stats" class="btn-get-started">Read More</a>
        </div>
    </section><!-- /Hero Section -->



    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
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

            <div class=" " data-layout="masonry" data-sort="original-order">

                <div class="row gy-4  container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-3 col-md-4 portfolio-item    ">
                        <div class="portfolio-content h-100">
                            <a href="assets/img/departments-1.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/departments-1.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/product-detail" title="More Details">Bedroom</a></h4>
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
                                <h4><a href="/product-detail" title="More Details">Bathroom</a></h4>
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
                                <h4><a href="/product-detail" title="More Details">Dining & Kitchen</a></h4>
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
                                <h4><a href="/product-detail" title="More Details">Spa & Fitness</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>We are one of</h3>
                        <p>The largest and most well-known towel & linen suppliers <br>
                            in Indonesia</p>
                        <a class="cta-btn" href="#">Discover more!</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Products</h2>
            <p>We provide a wide range of customized linen and towel products with various specification and
                requirements.<br></p>
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
                            <h3 style="color: #20c997;">Free Plan</h3>
                            <div class="price"><sup>$</sup>0<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-box" style="color: #20c997;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <!-- Card Item 2 -->
                    <div class="pricing-item" data-index="1" style="flex: 0 0 25%; box-sizing: border-box;"
                        data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-tem">
                            <span class="featured">Featured</span>
                            <h3 style="color: #0dcaf0;">Starter Plan</h3>
                            <div class="price"><sup>$</sup>19<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-send" style="color: #0dcaf0;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <!-- Card Item 3 -->
                    <div class="pricing-item" data-index="2" style="flex: 0 0 25%; box-sizing: border-box;"
                        data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-tem">
                            <h3 style="color: #fd7e14;">Business Plan</h3>
                            <div class="price"><sup>$</sup>29<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-airplane" style="color: #fd7e14;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <!-- Card Item 4 -->
                    <div class="pricing-item" data-index="3" style="flex: 0 0 25%; box-sizing: border-box;"
                        data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-tem">
                            <h3 style="color: #0d6efd;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="pricing-item" data-index="3" style="flex: 0 0 25%; box-sizing: border-box;"
                        data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-tem">
                            <h3 style="color: #0d6efd;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="pricing-item" data-index="3" style="flex: 0 0 25%; box-sizing: border-box;"
                        data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-tem">
                            <h3 style="color: #0d6efd;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
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


    <!-- About Section -->
    <section id="about" class="about section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">MORE ABOUT US</span>
                    <h2 class="about-title">360 Hotel Supply</h2>
                    <p class="about-description">"360 Hotel Supply is dedicated to providing comprehensive solutions for
                        the hospitality and service industries, prioritizing user comfort and enhancing every guest
                        experience through premium products."</p>

                    <div class="row feature-list-wrapper">
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Diverse Product Range </li>
                                <li><i class="bi bi-check-circle-fill"></i> Laundry Equipment </li>
                                <li><i class="bi bi-check-circle-fill"></i> Bedroom Electronics </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Bathroom Fixtures </li>
                                <li><i class="bi bi-check-circle-fill"></i> Furniture Supply </li>
                                <li><i class="bi bi-check-circle-fill"></i> Industry-Specific Solutions </li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-wrapper">
                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <div class="profile d-flex align-items-center gap-3">
                                    <img src="assets/img/avatar-1.webp" alt="CEO Profile" class="profile-image">
                                    <div>
                                        <h4 class="profile-name">Mario Smith</h4>
                                        <p class="profile-position">CEO &amp; Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-info d-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div>
                                        <p class="contact-label">Call us anytime</p>
                                        <p class="contact-number">+123 456-789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                            <img src="assets/img/about-5.webp" alt="Business Meeting"
                                class="img-fluid main-image rounded-4">
                            <img src="assets/img/about-2.webp" alt="Team Discussion"
                                class="img-fluid small-image rounded-4">
                        </div>
                        <div class="experience-badge floating">
                            <h3>15+ <span>Years</span></h3>
                            <p>Of experience in business service</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->


    <!-- More Section -->
    <section id="more" class="more section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">

                </div>

                <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3>We work for you</h3>
                    <p>
                        Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit
                        quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt
                        reiciendis veritatis asperiores placeat.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Voluptatem et qui exercitationem</h5>
                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /More Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background" data-aos="fade-up">

        <div class="container">
            <!-- Section Title -->
            <div class="container section-title" >
                <h2>Client</h2>
                <p>We provide a wide range of customized linen and towel products with various specification and
                    requirements.<br></p>
            </div><!-- End Section Title -->

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                    "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                    }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
            </div>
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 700,
                    "autoplay": {
                    "delay": 6000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                    }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
            </div>
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                    "delay": 7000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                    }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
            </div>
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 900,
                    "autoplay": {
                    "delay": 8000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                    }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </section><!-- /Clients Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title" >
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" >

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 1
                  }
                }
              }
            </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                                enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                nisi cillum quid.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section" data-aos="fade-up">

        <!-- Section Title -->
        <div class="container section-title" >
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" >

            <div class="mb-4" >
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848.8060930852565!2d100.35448614208599!3d-0.9602719585945575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b99172a0656d%3A0xb37fc6694d5be585!2s360%20Hotel%20Supply!5e0!3m2!1sid!2sid!4v1730566115705!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" >
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Jl. HOS Cokroaminoto No. 100, Padang, Indonesia 25118</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" >
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us on WhatsApp</h3>
                            <p>Sumatera : +62 820 0000 0000</p>
                            <p>Jawa & Bali : +62 820 0000 0000</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" >
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" >
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
