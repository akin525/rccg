@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="profile-header"><h1>Welcome, {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
                <div class="profile-header-content">
                    <div class="profile-header-tiles">
                        <div class="row gutters">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="profile-tile"><span class="icon"><i
                                            class="icon-location_history"></i></span><h6>Name - <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                    </h6></div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="profile-tile"><span class="icon"><i
                                            class="icon-email"></i></span><h6>Email -
                                        <span>{{\Illuminate\Support\Facades\Auth::user()->email}}</span></h6></div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="profile-tile"><span class="icon"><i
                                            class="icon-contacts"></i></span><h6>Contact -
                                        <span>{{\Illuminate\Support\Facades\Auth::user()->number}}</span></h6></div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="profile-tile"><span class="icon"><i class="icon-map"></i></span>
                                    <h6>Location - <span>Nigeria</span></h6></div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-avatar-tile"><img src="img/user2.png" class="img-fluid"
                                                          alt="User Profile">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
            <div class="stats-tile1 gradient-teal">
                <div class="stats-icon1 gradient-pearl"><i class="icon-receipt"></i></div>
                <h3>{{number_format(intval(Auth::user()->sermon *1))}}</h3><h4>No of Post</h4></div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
            <div class="stats-tile1 gradient-orange">
                <div class="stats-icon1 gradient-pearl"><i class="icon-stars"></i></div>
                <h3>{{number_format(intval(Auth::user()->gallery *1))}}</h3><h4>No of Gallery</h4></div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
            <div class="stats-tile1 gradient-green">
                <div class="stats-icon1 gradient-pearl"><i class="icon-money"></i></div>
                <h3>{{number_format(intval(Auth::user()->gallery *1))}}</h3><h4>Total File</h4></div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="create-offer-container"><h4>Share your thoughts</h4>
                <div class=" control-dark"><textarea class="form-control" rows="3">Hello,</textarea></div>
                <div class="share-thoughts-footer">
                    <div class="share-icons"><a href="#"><i class="icon-map"></i></a><a href="#"><i
                                class="icon-attach_email"></i></a><a href="#"><i
                                class="icon-camera_alt"></i></a><a href="#"><i
                                class="icon-supervised_user_circle"></i></a></div>
                    <button class="btn btn-light btn-sm">Post</button>
                </div>
            </div>
        </div>
    </div>
@endsection
