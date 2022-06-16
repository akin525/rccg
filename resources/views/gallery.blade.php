@include('layouts.header')
<br>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li>gallery</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-card">Our Gallery</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach($gallery as $dap)
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{asset('storage/img').'/'.$dap->path}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$dap->name}}</h4>
                        <p>RCCG</p>
                        <a href="{{asset('storage/img').'/'.$dap->path}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link text-center" title="{{$dap->name}}"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
            {{$gallery->links()}}

        </div>
    </section>
</main>


@include('layouts.footer')
