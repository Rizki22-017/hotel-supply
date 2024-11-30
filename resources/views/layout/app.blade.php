<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>360 Hotel Supply</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="360-hotelsupply">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body class="index-page">

    <header id="header" class="header sticky-top light-background">
        <div class="branding2">
            <!-- Tempatkan Google Translate di Kanan -->
            <div class="google-translate">
                <div id="google_translate_element"></div>
            </div>
        </div>
        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('assets/img/logo360.png') }}" alt="">
                    {{-- <h1 class="sitename">Medilab</h1> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
                        <li><a href="/product"
                                class="{{ request()->is('product') || request()->is('product-detail/*') ? 'active' : '' }}">Products</a>
                        </li>
                        <li><a href="/#about">About</a></li>
                        <li><a href="/#clients">Our Client</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                {{-- <a class="cta-btn d-none d-sm-block"
                    href="https://wa.me/{{ $about->wa_sumatera ?? 'Data Not Available' }}" target="_blank">
                    Order Now
                </a> --}}

                <a class="cta-btn d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">
                    Order Now
                </a>
            </div>

        </div>

    </header>

    <main class="main">

        @yield('content')

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets/img/logo360.png') }}" alt="">
                        {{-- <span class="sitename">360 Hotel Supply</span> --}}
                    </a>
                    <div class="footer-contact pt-3">
                        <p><strong>Jl. HOS Cokroaminoto No. 100</strong></p>
                        <p>Padang, Indonesia 25118</p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Contact</h4>
                    <p class="mt-3"><strong>Phone:</strong> <br>
                        <span>Sumatera : {{ $about?->wa_sumatera ?? 'Data Not Available' }}</span><br>
                        <span>Jawa & Bali : {{ $about->wa_jawa ?? 'Data Not Available' }}</span>
                    </p>
                    <p class="mt-3"><strong>Email:</strong> <span>{{ $about->email ?? 'Data Not Available' }}</span>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Operational Hours</h4>
                    <p class="mt-3">
                        <span>Mon - Sat</span><br>
                        <span>09.00 - 17.00 WIB</span>
                    </p>

                    <div class="social-links d-flex mt-4">
                        <a href="{{ $about->twitter ?? 'Data Not Available' }}" target="_blank" rel="noopener">
                            {{-- <i class="bi bi-twitter-x"></i> --}}
                            <img src="{{ asset('assets/img/x.svg')}}" alt="X">
                        </a>
                        <a href="{{ $about->facebook ?? 'Data Not Available' }}" target="_blank" rel="noopener">
                            {{-- <i class="bi bi-facebook"></i> --}}
                            <img src="{{ asset('assets/img/facebook.svg')}}" alt="Facebook">
                        </a>
                        <a href="{{ $about->instagram ?? 'Data Not Available' }}" target="_blank" rel="noopener">
                            {{-- <i class="bi bi-instagram"></i> --}}
                            <img src="{{ asset('assets/img/instagram.svg')}}" alt="Instagram">
                        </a>
                        <a href="{{ $about->linkedin ?? 'Data Not Available' }}" target="_blank" rel="noopener">
                            {{-- <i class="bi bi-linkedin"></i> --}}
                            <img src="{{ asset('assets/img/linkedin.svg')}}" alt="Linkedin">
                        </a>
                        {{-- <a href="{{ $about->shopee ?? '#' }}" target="_blank" rel="noopener">
                            <img src="{{ asset('assets/img/shopee.svg') }}" alt="Shopee Logo">
                        </a> --}}
                        @if (!empty($about?->shopee))
                            <a href="{{ $about->shopee }}" target="_blank" rel="noopener">
                                <img src="{{ asset('assets/img/shopee.svg') }}" alt="Shopee Logo">
                            </a>
                        @endif
                        {{-- @if($about->shopee)
                            <a href="{{ $about->shopee ?? 'Data Not Available' }}" target="_blank" rel="noopener">
                                <img src="{{ asset('assets/img/shopee.svg') }}" alt="Shopee Logo">
                            </a>
                        @endif --}}

                        {{-- @if($about && $about->shopee)
                            <a href="{{ $about->shopee }}" target="_blank" rel="noopener">
                                <img src="{{ asset('assets/img/shopee.svg') }}" alt="Shopee Logo">
                            </a>
                        @else
                            <p></p>
                        @endif --}}

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="/#about">About 360 Hotel Supply</a></li>
                        <li><a href="/product">Browse Products</a></li>
                        <li><a href="/#clients">Our Clients</a></li>
                        <li><a href="/#contact">Contact Us</a></li>
                    </ul>
                </div>



            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">360 Hotel Supply</strong> <span>All Rights
                    Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div class="whatsapp-float">
        <a href="https://wa.me/{{ $about->wa_sumatera ?? 'Data Not Available' }}" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    <div class="email-float">
        <a href="mailto:{{ $about->email ?? 'Data Not Available' }}" target="_blank">
            <i class="bi bi-envelope"></i>
        </a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fs-5" id="exampleModalLabel">Select App to Order</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/{{ $about->wa_sumatera ?? 'Data Not Available' }}" target="_blank" class="btn w-100 mb-2">WhatsApp</a>
                <a href="mailto:{{ $about->email ?? 'Data Not Available' }}" target="_blank" class="btn w-100">Email</a>
            </div>

          </div>
        </div>
    </div>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- google translate --}}
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // Bahasa sumber website Anda (ubah jika perlu)
                includedLanguages: 'en,id,pt,ru,ja,zh-CN,zh-TW,yue,hi,ar,es,fr,de', // Bahasa target yang didukung, tambahkan bahasa lain jika perlu
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


</body>

</html>
