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
        <div class="mb-2 bg-transparent container-fluid nav-bar">
            <nav class="px-2 py-1 bg-white navbar navbar-expand-lg navbar-light">
                <a href="/" class="text-center navbar-brand d-flex align-items-center">
                    <div class="p-2 icon me-2">
                        <img class="img-fluid" src="{{ asset('img/icon-deal.png') }}" alt="Icon"
                            style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Harmony Property</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class=" navbar-toggler-icon"></span>
                </button>
                <div class="pr-4 collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#service" class="nav-item nav-link">Services</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="#contact" class="px-3 btn btn-primary d-none d-lg-flex">Get Started</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="p-0 bg-white container-fluid header">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="p-5 col-md-6 mt-lg-5">
                    <h1 class="mb-4 display-5 animated fadeIn">Discover the <span class="text-primary">Ideal Home</span>
                        For Your Family</h1>

                    <p class="pb-2 mb-4 animated fadeIn">Making property ownership, and maintenance a seamless and
                        rewarding experience...</p>
                    <a href="#contact" class="px-5 py-3 text-2xl font-bold btn btn-secondary me-3 animated fadeIn">Get
                        Started</a>
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


        <!-- Our Services Start -->
        {{-- <div id="services" class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Services</h1>
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
                                <h6>Residential Property Management</h6>
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
                                <h6>Commercial Property Management</h6>
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
                                <h6>Industrial Cleaning Services</h6>
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
        </div> --}}
        <!-- Our Services End -->

        <!-- Our Services  Start -->
        <div id="service" class="py-5 container-xxl">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="mx-auto mb-5 text-start wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Our Services</h1>
                            <p>We're here to make property ownership and maintenance a seamless and
                                rewarding experience.</p>
                        </div>
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

                                        <h5
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Residential Property </h5>
                                    </div>
                                    <div class="p-4 pb-0 text-justify text-balance">
                                        <p>We provide hassle-free property
                                            oversight, ensuring tenant satisfaction, timely maintenance, and efficient
                                            property upkeep.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-2.jpg"
                                                alt=""></a>

                                        <h5
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Commercial Property </h5>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <p>We caters to the unique needs of commercial property
                                            owners, offering solutions that drive tenant retention and property
                                            appreciation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="img/property-3.jpg"
                                                alt=""></a>

                                        <h5
                                            class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">
                                            Industrial Cleaning </h5>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <p>We specialize in industrial cleaning
                                            services, providing high-quality and efficient cleaning solutions for
                                            commercial, industrial, and residential properties.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services  End -->



        <!-- About Start -->
        <div id="about" class="py-5 container-xxl">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-5 overflow-hidden about-img position-relative pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">About Us</h1>
                        <p class="mb-4 text-justify ">Harmony Property Management and Services Limited is a dedicated

                            <span class="text-primary">Real Estate</span>
                            property management firm specializing in residential property management on a contractual
                            basis.
                        </p>
                        <h2 class="mb-4">Why Choose Us?</h2>
                        <p><i class="fa fa-check text-primary me-3"></i>Comprehensive Solutions</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Experienced Professionals</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Client-Centric Approach</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Transparent Communication</p>
                        <p class="mb-4 text-justify">We are committed to excellence and provides industrial
                            cleaning services, ensuring a comprehensive approach to property care and maintenance.</p>

                        <a class="px-5 py-3 mt-3 btn btn-primary" href="#contact">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Contact Start -->
        <div id="contact" class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Contact Us</h1>
                    <p>For more information on our services and how we can assist with your property management and
                        cleaning needs, reach out to us.</p>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="p-3 rounded bg-light">
                                    <div class="p-3 bg-white rounded d-flex align-items-center"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <span>18,Lune Walk Droylsden Manchester M436df UK</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="p-3 rounded bg-light">
                                    <div class="p-3 bg-white rounded d-flex align-items-center"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>omas_archer@yahoo.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="p-3 rounded bg-light">
                                    <div class="p-3 bg-white rounded d-flex align-items-center"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>+44 7838 277528 / <br>+44 7424 225094
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="rounded position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.4680124656743!2d-2.1469981237342965!3d53.47796707232779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb6b867d9bfb5%3A0xa3982fcca1926610!2s18%20Lune%20Walk%2C%20Droylsden%2C%20Manchester%20M43%206DF%2C%20UK!5e0!3m2!1sen!2sng!4v1730718184012!5m2!1sen!2sng"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">We're here to make property ownership and maintenance a seamless and
                                rewarding experience.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="py-3 btn btn-primary w-100" type="submit">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->




        <!-- Testimonial Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>Hear what our clients are saying...</p>
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
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>18,Lune Walk Droylsden Manchester
                            M436df UK</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+44 7838 277528 / +44 7424 225094</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>omas_archer@yahoo.com</p>
                        <div class="pt-2 d-flex">
                            <a class="btn btn-outline-light btn-social" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="#about">About Us</a>
                        <a class="btn btn-link text-white-50" href="#service">Our Services</a>
                        <a class="btn btn-link text-white-50" href="#contact">Contact Us</a>
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
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                            &copy; <a class="border-bottom" href="/">Harmony Property</a>, All Right Reserved.


                            Designed By <a class="border-bottom" href="https://jcitech.com.ng">JCITech</a>
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
