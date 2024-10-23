<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <title>Harmony Property</title>

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div class="p-0 bg-white container-xxl">
        <!-- Spinner Start -->
        <div id="spinner"
            class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="bg-transparent container-fluid nav-bar">
            <nav class="px-4 py-0 bg-white navbar navbar-expand-lg navbar-light">
                <a href="index.html" class="text-center navbar-brand d-flex align-items-center">
                    <div class="p-2 icon me-2">
                        <img class="img-fluid" src="{{ asset('img/icon-deal.png') }}" alt="Icon"
                            style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Harmony Property</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="m-0 dropdown-menu rounded-0">
                                <a href="property-list.html" class="dropdown-item">Property List</a>
                                <a href="property-type.html" class="dropdown-item">Property Type</a>
                                <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="m-0 dropdown-menu rounded-0">
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="px-3 btn btn-primary d-none d-lg-flex">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="p-0 bg-white container-fluid header">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="p-5 col-md-6 mt-lg-5">
                    <h1 class="mb-4 display-5 animated fadeIn">Find A <span class="text-primary">Perfect Home</span> To
                        Live With Your Family</h1>
                    <p class="pb-2 mb-4 animated fadeIn">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="" class="px-5 py-3 btn btn-primary me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="mb-5 container-fluid bg-primary wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="py-3 border-0 form-control"
                                    placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="py-3 border-0 form-select">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="py-3 border-0 form-select">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="py-3 border-0 btn btn-dark w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Types</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                        eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                                </div>
                                <h6>Apartment</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                                </div>
                                <h6>Villa</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                                </div>
                                <h6>Home</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                                </div>
                                <h6>Office</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-building.png" alt="Icon">
                                </div>
                                <h6>Building</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon">
                                </div>
                                <h6>Townhouse</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-condominium.png" alt="Icon">
                                </div>
                                <h6>Shop</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid" src="img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6>Garage</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-5 overflow-hidden about-img position-relative pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="px-5 py-3 mt-3 btn btn-primary" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="mx-auto mb-5 text-start wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                                ipsum sit eirmod sit diam justo sed rebum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="mb-5 nav nav-pills d-inline-flex justify-content-end">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill"
                                    href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="p-0 tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-2.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-3.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-4.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-5.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-6.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-2.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-3.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-4.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-5.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-6.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-2.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-3.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-4.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-5.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Sell</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-6.jpg"
                                                alt=""></a>
                                        <div
                                            class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0">
                                            For Rent</div>
                                        <div
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">$12,345</h5>
                                        <a class="mb-2 d-block h5" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="py-2 text-center flex-fill border-end"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="py-2 text-center flex-fill"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="p-3 rounded bg-light">
                    <div class="p-4 bg-white rounded" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="rounded img-fluid w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                                <a href="" class="px-4 py-3 btn btn-primary me-2"><i
                                        class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="px-4 py-3 btn btn-dark"><i
                                        class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Agents</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                        eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="overflow-hidden rounded team-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="p-4 mt-3 text-center">
                                <h5 class="mb-0 fw-bold">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="overflow-hidden rounded team-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="p-4 mt-3 text-center">
                                <h5 class="mb-0 fw-bold">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="overflow-hidden rounded team-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="p-4 mt-3 text-center">
                                <h5 class="mb-0 fw-bold">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="overflow-hidden rounded team-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="p-4 mt-3 text-center">
                                <h5 class="mb-0 fw-bold">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                        eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-3 rounded testimonial-item bg-light">
                        <div class="p-4 bg-white border rounded">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                                diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 rounded img-fluid" src="img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="mb-1 fw-bold">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded testimonial-item bg-light">
                        <div class="p-4 bg-white border rounded">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                                diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 rounded img-fluid" src="img/testimonial-2.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="mb-1 fw-bold">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded testimonial-item bg-light">
                        <div class="p-4 bg-white border rounded">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                                diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 rounded img-fluid" src="img/testimonial-3.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="mb-1 fw-bold">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="pt-5 mt-5 container-fluid bg-dark text-white-50 footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="pt-2 d-flex">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Photo Gallery</h5>
                        <div class="pt-2 row g-2">
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="mx-auto position-relative" style="max-width: 400px;">
                            <input class="py-3 bg-transparent form-control w-100 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="text-center col-md-6 text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
</body>

</html>
