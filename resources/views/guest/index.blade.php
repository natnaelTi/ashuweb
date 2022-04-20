@extends('layouts.guest')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Ashenafe Mestika</h1>
            <p style="color: #bd1220 !important;">I'm a visual artist.</p>
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
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/profile_img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col pt-4 pt-lg-0 content">
                        <h3>Bio in Brief </h3>
                        <p class="">
                            Ashenafe Mestika was born and raised in Addis Ababa Ethiopia, graduated from Entoto Technical
                            and Vocational Education Training College where he received a 10+3 Diploma in fine art,
                            specialized in painting and Alle School of Fine Art & Designin Addis Ababa University in
                            Bachelor of Fine Arts in Painting in 2020. He have participated in different group exhibition
                            startingfrom 2010 at the Entoto Art College Gallery,Art of Ethiopiaat Sheraton Addis in 2011 and
                            2012, The 1st Annual Ethiopia Visual Art Exhibition at Laphto Art Gallery, Harmony Group Art
                            Exhibition at Ethiopian National Museum, “African Aesthetics” Fine Art|Photographs|Artifacts
                            Exhibition Commemorating the OAU|AU 50th Anniversary at Addis Ababa University Institute of
                            Ethiopian Studies Museum,“Addis Art Fair 2014” at Millennium Hall,“Ras Tafari The Majesty & The
                            Movement Exhibit” at Ethiopian National Museumand Solo Exhibition “Strong Emotions and
                            Expression” at Galley TO.MO.CA. Addis Ababa, 2015. “HEXAGON” Group Art Exhibition @ Laphto Art
                            Gallery, Addis Ababa, Ethiopia Group Art Exhibition at MILLERNTOR GALLERY#6, Hamburg, Germany
                            Group Art Exhibition at MILLERNTOR GALLRY #1 Kampala Uganda Group Art Exhibition at MILLERNTOR
                            GALLERY#7and #8, Hamburg, Germany
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Exhibition Section ======= -->
        <section id="exhibitions">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="mx-auto justify-content-center">Events</h2>
                </div>
            </div>
            <div class="row w-75 mx-auto ex">
                <div class="col-auto">
                    <img src="assets/img/ex.png" data-aos="fade-right"
                        style="max-width: 350px !important; text-align: right !important;">
                </div>
                <div class="col">
                    <div class="container ex-content mb-0" data-aos="fade-left"
                        style="vertical-align: bottom; line-height: 1.5 !important; padding-top: 210px !important;">
                        <h4 style="font-weight: bolder !important; text-align: left !important;">Traces of a Moment / የቅፅበት
                            ፈሊቃት</h4>
                        <p style="text-align: left !important;"></p>
                        <h6 style="text-align: left !important;">Guramayne Art Center</h6>
                        <h5 style="text-align: left !important;">Now Open</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Exhibition Section -->

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
                            <li data-filter=".filter-app">Artwork</li>
                            <!-- <li data-filter=".filter-card">Photography</li> -->
                            <!-- <li data-filter=".filter-web">Video Art</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row my-5 mx-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="font-weight: lighter !important;">
                        2022
                    </h3>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 002.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of A Moment 002</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/PAinting/Trace of a Moment 002.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 003.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of a Moment 003</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Trace of a Moment 003.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bi-eye"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 004.jpg " class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of a Moment 004</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Trace of a Moment 004.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bi-eye"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 005.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of a Moment 005</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Trace of a Moment 005.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bi-eye"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 006.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of a Moment 006</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Trace of a Moment 006.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5 mx-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="font-weight: lighter !important;">
                        2021
                    </h3>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Rebirth 2013.JPG" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rebirth</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Rebirth 2013.JPG"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Thought vs Reality 001 2020.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Thought vs Reality 001</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Thought vs Reality 001 2020.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Thought vs Reality 002 2020.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Thought vs Reality 002</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Thought vs Reality 002 2020.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/Drawing/Balance of life 01 2013.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Balance of life 01</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Balance of life 01 2013.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Balance of life 05 2013.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Balance of life 05</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Balance of life 05 2013.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Inner portrait 04 2014.JPG" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Inner portrait 04</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Inner portrait 04 2014.JPG"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Inner portrait 06 2014.JPG" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Inner protrait 06</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Inner portrait 06 2014.JPG"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 033.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of a Moment 033</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Trace of a Moment 033.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5 mx-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="font-weight: lighter !important;">
                        2020
                    </h3>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Rebirth 2013.JPG" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rebirth</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Rebirth 2013.JPG"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Thought vs Reality 001 2020.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Thought vs Reality 001</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Thought vs Reality 001 2020.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Thought vs Reality 002 2020.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Thought vs Reality 002</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Thought vs Reality 002 2020.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/Drawing/Balance of life 01 2013.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Balance of life 01</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Balance of life 01 2013.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5 mx-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="font-weight: lighter !important;">
                        2019
                    </h3>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/PAinting/Thought vs Reality 002 2020.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Thought vs Reality 002</h4>
                                <p>Painting</p>
                                <div class="portfolio-links">
                                    <a href="/assets/img/art_Collection/PAinting/Thought vs Reality 002 2020.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/art_Collection/Drawing/Balance of life 01 2013.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Balance of life 01</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Balance of life 01 2013.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Balance of life 05 2013.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Balance of life 05</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Balance of life 05 2013.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Inner portrait 04 2014.JPG" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Inner portrait 04</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Inner portrait 04 2014.JPG"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Inner portrait 06 2014.JPG" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Inner protrait 06</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Inner portrait 06 2014.JPG"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/art_Collection/Drawing/Trace of a Moment 033.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Trace of a Moment 033</h4>
                                <p>Drawing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/art_Collection/Drawing/Trace of a Moment 033.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                        title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
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
