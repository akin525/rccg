@extends("layouts.header")

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Sermons</h2>
                    <div class="main-button-red">
                        <div class="scroll-to-section"><a href="#contact">Here are some pictures</a></div>
                    </div>
                </div>
            </div>

    </section>
    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Messages</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Programs</h4>
                        <ul style="list-style-type:square">
                            <li><a href="#">Sunday School</a></li>
                            <li><a href="#">Sunday Service </a></li>
                            <li><a href="#">Bible Study</a></li>
                            <li><a href="#">Faith Clinic</a></li>
                            <li><a href="#">Holy Ghost Party With Christ</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="#">All Gallary</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($pe as $sa)
                            <div class="col-lg-6">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>   </span>
                                        </div>
                                        <a href="#"><img src="{{url('/', $sa->picture)}}" alt="New Lecturer Meeting"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>{{$sa->date}}</h6>
                                        </div>
                                        <a href="#"><h4>{{$sa->topic}}</h4></a>
                                        <a href="#"><h4>By:{{$sa->preacher}}</h4></a>
                                        <button type="button" class="btn btn-outline-success">Read more</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Recent Sermon</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @foreach($v as $ve)
                        <div class="item">
                            <img src="{{url('/', $ve->picture)}}" alt="Course One">
                            <div class="down-content">
                                <h4>Topic: {{$ve->topic}}</h4>
                                <center>
                                <button type="button" class="btn btn-outline-success">Read More</button>
                                </center>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

