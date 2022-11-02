<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="RCF ILA">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>RCF Christ Chapel</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/rcfila.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <!--

    RCF ILA-orangun



</head>

<body>

<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>This is <em>Christ Chapel</em>  website.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="https://facebook.com/rcf.ilaorangun"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->



                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('assets/img/1200px-Rccg_logo.png')}}" alt="rcf" style="width:70px;height:60px;">
                        <span>CHRIST CHAPEL</span>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('home')}}">Home</a></li>
                        <li><a href="{{url('gallery')}}">Gallery</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Message</a>
                            <ul class="sub-menu">
                                <li><a href="#">Audio Message</a></li>
                                <li><a href="{{route('ser')}}">Sermon</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
    @yield('content')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

</div>
@yield('scripts')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="{{asset('js/tabs.js')}}"></script>
<script src="{{asset('js/video.js')}}"></script>
<script src="{{asset('js/slick-slider.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
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
</body>
