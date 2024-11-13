@extends('layout.app')
@section('content')
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Result</h2>
            <p>Here's the result of <b>{{ $category->category_name }}</b></p>
        </div><!-- End Section Title -->

        <div class="container" id="product">
            <div class="d-flex justify-content-end mb-4" style="padding-right:2.2rem">
                <form action="{{ route('search') }}#product" method="GET" class="d-flex w-100">
                    <input type="text" name="query" class="form-control" placeholder="Search product..."
                        aria-label="Search">
                    <button type="submit" class="btn btn-outline-secondary ms-2">Search</button>
                </form>
            </div>



            <div class=" " data-layout="masonry" data-sort="original-order">

                <div class="row gy-4  container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 portfolio-item">
                            <a href="{{ route('detail.product', $product->id) }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('storage/' . $product->product_image) }}" class="img-fluid"
                                        alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $product->product_name }}</h4>
                                        {{-- <p>{{ $product->product_description }}</p> --}}
                                        <p class="category-description">
                                            {{ strlen($product->product_description) > 75 ? \Illuminate\Support\Str::limit($product->product_description, 75) . '...' : $product->product_description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->


            </div>

        </div>

    </section><!-- /Portfolio Section -->
@endsection
