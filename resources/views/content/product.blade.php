@extends('layout.app')
@section('content')
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Category</h2>
        <p>Here's our category product for your lovely hotel supply<br></p>
    </div><!-- End Section Title -->

    <div class="container">
        <!-- Container Carousel -->
        <div class="carousel-wrapper" style="position: relative; overflow: visible;">

            <!-- Tombol Navigasi Kiri -->
            <button id="prev-btn" class="btn-carousel">&laquo;</button>

            <!-- Kontainer Card -->
            <div class="pricing-carousel" style="display: flex; gap: 20px; transition: transform 0.3s ease;">

                <!-- Card Item 1 -->
                @foreach ($categories as $category)
                <div class="pricing-item" data-index="0" style="flex: 0 0 25%; box-sizing: border-box;"
                    data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{ route('filter', ['category_id' => $category->id]) }}">
                    <div class="pricing-tem">
                        <img src="{{asset('storage/' . $category->category_image)}}" class="img-fluid" alt="">
                        <div class="pricing-info">
                            <h4>{{$category->category_name}}</h4>
                            <p>{{$category->category_description}}</p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach

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
            <p>The Best Solution for Your Hotel Supplies</p>
        </div><!-- End Section Title -->

        <div class="container" id="product">
            <div class="d-flex justify-content-end mb-4" style="padding-right:2.2rem">
                <form action="{{ route('search') }}#product" method="GET" class="d-flex w-100">
                    <input type="text" name="query" class="form-control" placeholder="Search product..." aria-label="Search">
                    <button type="submit" class="btn btn-outline-secondary ms-2">Search</button>
                </form>
            </div>



            <div class=" " data-layout="masonry" data-sort="original-order">

                <div class="row gy-4  container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 portfolio-item">
                        <a href="{{ route('detail.product', $product->id) }}">
                        <div class="portfolio-content h-100">
                           <img src="{{asset('storage/' . $product->product_image)}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$product->product_name}}</h4>
                                <p>{{$product->product_description}}</p>
                            </div>
                        </div>
                        </a>
                    </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->


            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>

    </section><!-- /Portfolio Section -->
@endsection
