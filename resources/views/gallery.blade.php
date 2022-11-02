@extends("layouts.header")

@section('content')

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>WELCOME TO OUR GALLERY</h2>
                    <div class="main-button-red">
                        <div class="scroll-to-section"><a href="#contact">Here are some pictures</a></div>
                    </div>
                </div>
            </div>

    </section>
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                        <div class="col-lg-12">

                            <div class="row grid">
                                @foreach($gallery as $ga)
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="price">
                                                <span> {{$ga->created_at}}  </span>
                                            </div>
                                            <a href="{{url('/', $ga->path)}}"><img src="{{url('/', $ga->path)}}" alt=""></a>
                                        </div>
                                        <div class="down-content">
                                            <div class="date">
{{--                                                <h6>{{$ga->created_at}}</h6>--}}
                                            </div>
                                            <center>
                                            <a><h4>{{$ga->name}}</h4></a>
                                            </center>
{{--                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>--}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination">
{{--                            {{$gallery->links()}}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2021 RCCCG CHRIST CHAPEL. All Rights Reserved.
                <br>Design: <a href="https://5Starcompany.com.ng" target="_parent" title="free css templates">5Star company</a></p>
        </div>
    </section>



    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function () {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
    </script>
    @include('layouts.footer')
@endsection
