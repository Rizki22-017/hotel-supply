@extends('layout.app')
@section('content')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
                showConfirmButton: true
            });
        </script>
    @endif

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="image-container">

            <img src="assets/img/tes1.jpg" alt="" data-aos="fade-in">

            <!-- Label untuk setiap elemen -->

            <div class="label pillow">
                <a href="#portfolio">
                    <div class="label-box">
                        <div class="label-text"><b>Pillow</b></div>
                    </div>
                </a>
            </div>

            <div class="label duvet-cover">
                <a href="#portfolio">
                    <div class="label-box">
                        <div class="label-text"><b>Duvet Cover</b></div>
                    </div>
                </a>
            </div>

            <div class="label blanket">
                <a href="#portfolio">
                    <div class="label-box">
                        <div class="label-text"><b>Blanket</b></div>
                    </div>
                </a>
            </div>

            <div class="label natural-linen-blanket">
                <a href="#portfolio">
                    <div class="label-box">
                        <div class="label-text"><b>Natural Linen</b></div>
                    </div>
                </a>
            </div>

            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2>Welcome to 360 Hotel Supply</h2>
                        <p>We are team of talented hotel suppliers</p>
                        <a href="#about" class="btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->



    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 text-center">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <h2><strong>2</strong> <span class="small-text">YEARS</span></h2>
                        <p>Established since 2022</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <h2><strong>14</strong> <span class="small-text">DAYS</span></h2>
                        <p>Fast Delivery</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <h2><strong>Fast</strong></h2>
                        <p>Response</p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <h2><strong>Free</strong><span class="small-text">LABEL TAG</span></h2>
                        <p>Can be customized</p>
                    </div>
                </div>

            </div>


        </div>


    </section><!-- /Stats Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Product Category</h2>
            <p>Find everything you need here</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class=" " data-layout="masonry" data-sort="original-order">

                <div class="row gy-4  container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-md-4 portfolio-item    ">
                            <a href="{{ route('filter', ['category_id' => $category->id]) }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('storage/' . $category->category_image) }}" class="img-fluid"
                                        alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $category->category_name }}</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Portfolio Item -->
                    @endforeach
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
                        <h3>Discover what you need with us</h3>
                        <p>{{ $about->history }}</p>
                        <a class="cta-btn" href="/#about">Browse more!</a>
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
                    @foreach ($products as $product)
                        <div class="pricing-item" data-index="0" style="flex: 0 0 25%; box-sizing: border-box;"
                            data-aos="zoom-in" data-aos-delay="100">
                            <a href="/product-detail">
                                <div class="pricing-tem">
                                    <img src="{{ asset('storage/' . $product->product_image) }}" class="img-fluid"
                                        alt="">
                                    <div class="pricing-info">
                                        <h4>{{ $product->product_name }}</h4>
                                        <p>{{ $product->product_description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

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
                    <p class="about-description">"{{ $about->about_desc }}"</p>

                    <div class="row feature-list-wrapper">
                        <div class="col-md-6">
                            <ul class="feature-list">
                                @foreach (json_decode($about->about_poin1) as $point1)
                                    <li><i class="bi bi-check-circle-fill"></i> {{ $point1 }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="feature-list">
                                @foreach (json_decode($about->about_poin2) as $point2)
                                    <li><i class="bi bi-check-circle-fill"></i> {{ $point2 }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="info-wrapper">
                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <div class="profile d-flex align-items-center gap-3">
                                    <img src="{{ asset('storage/' . $about->leader_pict) }}" alt="CEO Profile"
                                        class="profile-image">
                                    <div>
                                        <h4 class="profile-name">{{ $about->leader_name }}</h4>
                                        <p class="profile-position">CEO &amp; Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-info d-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div>
                                        <p class="contact-label">Call us anytime</p>
                                        <p class="contact-number">{{ $about->phone }}</p>
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
                            <h3>50+<span>Supplies</span></h3>
                            <p>are waiting for you</p>
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
                        {{ $about->vision }}
                    </p>
                    <ul>
                        @foreach (json_decode($about->mission) as $mission)
                            <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    {{ $mission }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /More Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background" data-aos="fade-up">

        <div class="container">
            <!-- Section Title -->
            <div class="container section-title">
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
                    @foreach ($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid" alt="">
                        </div>
                    @endforeach

                    <!-- Ulangi data jika jumlah testimonial lebih sedikit dari 6 -->
                    @for ($i = 0; $i < 8 - count($clients); $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $clients[$i % count($clients)]->logo) }}" class="img-fluid"
                                alt="">
                        </div>
                    @endfor
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
                    @foreach ($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid" alt="">
                        </div>
                    @endforeach

                    <!-- Ulangi data jika jumlah testimonial lebih sedikit dari 6 -->
                    @for ($i = 0; $i < 8 - count($clients); $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $clients[$i % count($clients)]->logo) }}" class="img-fluid"
                                alt="">
                        </div>
                    @endfor
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
                    @foreach ($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid" alt="">
                        </div>
                    @endforeach

                    <!-- Ulangi data jika jumlah testimonial lebih sedikit dari 6 -->
                    @for ($i = 0; $i < 8 - count($clients); $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $clients[$i % count($clients)]->logo) }}" class="img-fluid"
                                alt="">
                        </div>
                    @endfor
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
                    @foreach ($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid" alt="">
                        </div>
                    @endforeach

                    <!-- Ulangi data jika jumlah testimonial lebih sedikit dari 6 -->
                    @for ($i = 0; $i < 8 - count($clients); $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $clients[$i % count($clients)]->logo) }}" class="img-fluid"
                                alt="">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section><!-- /Clients Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Testimonials</h2>
            <p>What people say about us</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                    "loop": {{ count($testimonials) >= 4 ? 'true' : 'false' }},
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000,
                        "disableOnInteraction": false
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
                    @foreach ($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>{{ $testimonial->customer_review }}</p>
                                <div class="profile mt-auto">
                                    <h3>{{ $testimonial->customer_name }}</h3>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach

                    <!-- Repeat testimonials if count < 3 -->
                    @if (count($testimonials) < 3)
                        @for ($i = 0; $i < 3 - count($testimonials); $i++)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>{{ $testimonials[$i % count($testimonials)]->customer_review }}</p>
                                    <div class="profile mt-auto">
                                        <h3>{{ $testimonials[$i % count($testimonials)]->customer_name }}</h3>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endfor
                    @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section" data-aos="fade-up">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Contact</h2>
            <p>Get in touch with us</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="mb-4">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848.8060930852565!2d100.35448614208599!3d-0.9602719585945575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b99172a0656d%3A0xb37fc6694d5be585!2s360%20Hotel%20Supply!5e0!3m2!1sid!2sid!4v1730566115705!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>{{ $about->address }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us on WhatsApp</h3>
                            <p>Sumatera : {{ $about->wa_sumatera }}</p>
                            <p>Jawa & Bali : {{ $about->wa_jawa }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>{{ $about->email }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="{{ route('send.email') }}" method="POST" class="php-email-form">
                        @csrf
                        <div class="loading d-none">Loading...</div> <!-- Loading message -->
                        <div class="error-message d-none"></div> <!-- Error message -->
                        <div class="sent-message d-none">Your message has been sent successfully!</div>
                        <!-- Sent message -->

                        <!-- Form fields -->
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div><!-- End Contact Form -->


            </div>

        </div>

    </section><!-- /Contact Section -->
    <script src="path/to/validate.js"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            var name = document.querySelector('input[name="name"]').value;
            var email = document.querySelector('input[name="email"]').value;
            var message = document.querySelector('textarea[name="message"]').value;

            if (!name || !email || !message) {
                e.preventDefault(); // Mencegah form dikirimkan
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all fields!'
                });
            }
        });
    </script>


@endsection
