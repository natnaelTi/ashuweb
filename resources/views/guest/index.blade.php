@extends('layouts.guest')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>My Works</h2>
                <p>Gallery</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-wc">Woodcut Prints</li>
                        <li data-filter=".filter-sp">Screen Prints</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                {{-- {{dd($drawings)}} --}}
                @foreach ($artworks as $artwork)
                    <a href="{{ asset('/artworks/') }}/{{ $artwork->filepath }}" data-gallery="portfolioGallery"
                        class="portfolio-lightbox" data-title="Hidden Interaction #01"
                        data-description='{!! $artwork->description !!}'
                        data-desc-position="right" data-type="image" data-effect="fade" data-height="auto"
                        data-zoomable="true" data-draggable="true">
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $artwork->type }}">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/artworks/') }}/{{ $artwork->filepath }}"
                                    class="img-fluid portfolio-img" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $artwork->title }}</h4>
                                    <p>{{ $artwork->type }}</p>
                                    <small
                                        style="font-family: 'Courier New', Courier, monospace !important;">{{ $artwork->medium }}
                                        - {{ $artwork->width }}CM x {{ $artwork->height }}CM</small>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('/artworks/') }}/{{ $artwork->filepath }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            data-title="Hidden Interaction #01"
                                            data-description='{!! $artwork->description !!}'
                                            data-desc-position="right" data-type="image" data-effect="fade"
                                            data-height="auto" data-zoomable="true" data-draggable="true">
                                            <i class="bx bx-plus"></i>
                                        </a>
                                        <!-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Short Bio ... </p>
                    </div>
                    <div class="col-md-2 offset-md-3">
                        <span style="margin-right: 0 !important;">
                            <a class="inline btn btn-outline-secondary btn-sm" type="button"
                                href="assets/img/resume/birhanu.manaye.resume.pdf" target="_blank">Download PDF</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('/artists/') }}/{{ $artist->filepath }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <p class="">
                        {!! $artist->bio !!}
                    </p>

                    <div class="row mt-5">
                        <div class="col-md-6 col-sm-12">
                            <p style="font-weight: 700 !important;">WORKSHOPS</p>
                            <ul style="font-style: italic; font-size: small !important;">
                                @foreach ($workshops as $workshop)
                                    <li>“{{ $workshop->title }}” - {{ $workshop->location }}. -
                                        {{ Carbon\Carbon::parse($workshop->end_date)->format('Y') }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p style="font-weight: 700 !important;">GROUP EXHIBITIONS</p>
                            <ul style="font-style: italic; font-size: small !important;">
                                @foreach ($exhibitions as $exhibition)
                                    <li>“{{ $exhibition->title }}” - {{ $exhibition->location }}. -
                                        {{ Carbon\Carbon::parse($exhibition->end_date)->format('Y') }}
                                        ({{ $exhibition->type }})</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div><!-- End About Me -->
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Events and Shows</h2>
                <p>Upcoming Events</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Please signup to my newsletter or check back later to get updates.</p>
                </div>
            </div>
        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">
                <div class="col-md-12 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="https://instagram.com/birhanu_manaye?igshid=YmMyMTA2M2Y=" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100008771567696&mibextid=LQQJ4d"
                                class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/ManayeBirhanu" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.behance.net/birhanumanaye1" class="linkedin"><i
                                    class="bi bi-behance"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p><a href="mailto:birhanumanayementer@gmail.com"
                                style="text-decoration: none !important;">birhanumanayementer@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p><a href="tel:+251922871100" style="text-decoration: none !important;">+251 92 287 1100</a></p>
                    </div>
                </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
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
    </section><!-- End Contact Section -->

    <div class="credits">
        Made by <a href="https://hsm.earaldtradinget.com/">Habesha Selfmade</a>
    </div>
@endsection
