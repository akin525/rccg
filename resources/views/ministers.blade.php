@include('layouts.header')
<br>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Ministers</h2>
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>RCCG</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
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

@include('layouts.footer')
