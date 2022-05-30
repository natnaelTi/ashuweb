@extends('layouts.guest')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $artist->name }}</h1>
            <p style="color: #bd1220 !important;">visual artist.</p>
            <div class="social-links">
                <a href="https://twitter.com/ashumestika" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/AshenafeMestikaArt/" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/ashenafimestika/?hl=en" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://www.behance.net/ashumestika/appreciated" class="behance"><i
                        class="bx bxl-behance"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="height: 100vh !important; width: 100% !important; position: relative !important;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About</h2>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 pt-4 pt-lg-0 content">
                        <p style="font-size: 15px !important; line-height: 1.5 !important; padding-left: 0 !important; maring-left: 0 !important; padding-top: 5em !important;">
                            {!! $artist->bio !!}
                        </p>
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 pt-4 pt-lg-0 content">
                        <p style="font-size: 15px !important; line-height: 1.5 !important; padding-left: 0 !important; maring-left: 0 !important; padding-top: 5em !important;">
                            {!! $artist->statement !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter="#painting">Painting</li>
                            <li data-filter="#drawing">Drawing</li> 
                            <li data-filter="#photography">Photography</li>
                            <li data-filter="#video">Videography</li>
                        </ul>
                    </div>
                </div>
                
                @foreach($years as $year)
                    <div class="row my-5 mx-4" data-aos="fade-up" data-aos-delay="200">
                        <h3 style="font-weight: lighter !important;">
                            {{ $year }}
                        </h3>
                    </div>
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach($artworks as $artwork)
                            @if($artwork->year == $year)
                                <div class="col-lg-4 col-md-6 portfolio-item" id="{{$artwork->type}}">
                                    <div class="portfolio-wrap">
                                        <img src="{{ asset('/artworks/') }}/{{ $artwork->filepath }}" class="img-fluid"
                                            alt="">
                                        <div class="portfolio-info">
                                            <h4>{{ $artwork->title }}</h4>
                                            <p>{{ $artwork->type }}</p>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('/artworks/') }}/{{ $artwork->filepath }}"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                                        class="bx bi-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Exhibition Section ======= -->
        <section id="exhibitions" style="height: 100vh !important; width: 100% !important; position: relative !important;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="mx-auto justify-content-center">Exhibitions</h2>
                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 pt-4 pt-lg-0 content">
                        <p style="font-size: 15px !important; line-height: 1.5 !important; padding-left: 0 !important; maring-left: 0 !important; padding-top: 5em !important;">
                            {!! $artist->exhibitions !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Exhibition Section -->

        <!-- ======= Links Section ======= -->
        <section id="links" style="height: 100vh !important; width: 100% !important; position: relative !important;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="mx-auto justify-content-center">Links</h2>
                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @if (count($prs) > 0)
                        @foreach ($prs as $pr)
                            <div class="col-lg-4 col-sm-6 col-md-12 pt-4 pt-lg-0 content">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{$pr->image}}" alt="{{$pr->title}}"/ width="50px">
                                        <h5 class="pt-4">{{$pr->title}}</h5>
                                        {{-- <p> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- End Exhibition Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="height: 100vh !important; width: 100% !important; position: relative !important;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Addis Ababa, Ethiopia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>ashenafemestikaart@gmail.com / contact@ashenafemestika@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+251 984 742 585</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection