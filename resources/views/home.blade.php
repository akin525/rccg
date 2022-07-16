@include('layouts.header')

<section id="hero" class="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h1 ><a href="#" >
                                <img src="{{asset('assets/img/1200px-Rccg_logo.png')}}" height="50" width="50"><span><strong>CHRIST CHAPEL</strong></span></a></h1>
                        <h3>EVERYBODY'S WELCOME.</h3>
                        <h3>NOBODY'S PERFECT.</h3>
                        <h3>ANYTHING'S POSSIBLE.</h3>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h1 ><a href="#" >
                                <img src="{{asset('assets/img/1200px-Rccg_logo.png')}}" height="50" width="50"><span><strong>CHRIST CHAPEL</strong></span></a></h1>
                        <h3>LISTEN TO.</h3>
                        <h3>GOD WORD's.</h3>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h1 ><a href="#" >
                                <img src="{{asset('assets/img/1200px-Rccg_logo.png')}}" height="50" width="50"><span><strong>CHRIST CHAPEL</strong></span></a></h1>
                        <h3>GOD IS OUR.</h3>
                        <h3>STRENGTH.</h3>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section>
<main id="main">

    <!-- ======= About Us Section ======= -->

    <!-- ======= About Us Section ======= -->
{{--    <section id="about-us" class="about-us">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="row content">--}}
{{--                <div class="col-lg-6" data-aos="fade-right">--}}
{{--                    <h2>Eum ipsam laborum deleniti velitena</h2>--}}
{{--                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">--}}
{{--                    <p>--}}
{{--                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in--}}
{{--                        culpa qui officia deserunt mollit anim id est laborum--}}
{{--                    </p>--}}
{{--                    <ul>--}}
{{--                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>--}}
{{--                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>--}}
{{--                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>--}}
{{--                    </ul>--}}
{{--                    <p class="fst-italic">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End About Us Section -->--}}
    <!-- ======= Services Section ======= -->
    <section id="services" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Word Of God</h2>
            </div>
{{--                <h3 class="text-center">Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>--}}
            <div class="row">
                @foreach($pe as $news)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('storage/preach').'/'.$news->picture}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Topic: {{$news->topic}}</h4>
                            <span>By: {{$news->preacher}}</span>
                            <button type="button" onclick="window.location='{{route('read-more',$news->id)}}'" class="btn btn-outline-success">Read-More</button>
                        </div>
                    </div>
                </div>
                @endforeach

{{--                <br>--}}
{{--                <br>--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="alert alert-success">--}}
{{--                            <i class="mdi mdi-account"></i>--}}
{{--                    <h4 class=" text-center"> Welcome to RCCG Christ Chapel Church! Our vision is to lead our generation into a transforming relationship with Jesus, and authentic community with each other, so that everyone in the Bay Area and beyond can flourish.</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <center>
        <button type="button" onclick="window.location='{{route('sermon')}}'" class="btn btn-outline-success">View More Sermon</button>
        </center>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach($pam as $dap)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{asset('storage/img').'/'.$dap->path}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$dap->name}}</h4>
                            <p>RCCG</p>
                            <a href="{{asset('storage/img').'/'.$dap->path}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$dap->name}}"><i class="bx bx-plus"></i></a>
                            <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <center>
            <button type="button" onclick="window.location='{{route('gallery')}}'" class="btn btn-outline-success">View All Gallery</button>
            </center>

        </div>
    </section>
    <section id="teams" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Ministers Of God</h2>
            </div>
            {{--                <h3 class="text-center">Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>--}}
            <div class="row">
                @foreach($mini as $ns)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="{{asset('storage/minister').'/'.$ns->picture}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{$ns->name}}</h4>
{{--                                <button type="button" onclick="window.location='{{route('read-more',$news->id)}}'" class="btn btn-outline-success">Read-More</button>--}}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--                <br>--}}
                {{--                <br>--}}
                {{--                <div class="card">--}}
                {{--                    <div class="card-body">--}}
                {{--                        <div class="alert alert-success">--}}
                {{--                            <i class="mdi mdi-account"></i>--}}
                {{--                    <h4 class=" text-center"> Welcome to RCCG Christ Chapel Church! Our vision is to lead our generation into a transforming relationship with Jesus, and authentic community with each other, so that everyone in the Bay Area and beyond can flourish.</h4>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section><!-- End Services Section -->


    <section id="contact" class="contact">
        <div class="container">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact-Us</h2>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
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
    </section><!-- End Contact Section -->




</main><!-- End #main -->
@include('layouts.footer')
