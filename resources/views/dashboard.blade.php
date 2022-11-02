@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row gutters">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card gradient-violet3 card-390">
                        <div class="card-body">
                            <div class="get-latest-updates-lg">
                                <div class="update-details"><h5>RCCG CHRIST CHAPEL<br>Administrator &amp;<br>updates!
                                    </h5>
                                    <button type="button" class="download-btn lg"><span class="icon"><img
                                                src="img/download-white.svg" alt="Download"></span>View User End
                                    </button>
                                </div>
                                <img src="img/blocks2.svg"
                                     class="blocks-img animate__animated animate__pulse animate__infinite infinite"
                                     alt="Blocks"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row gutters">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card gradient-violet-pink card-186">
                    <div class="card-body">
                        <div class="card-title">Weekly Activities</div>
                        <div class="row gutters">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="sales-tile2">
                                    <div class="sales-tile2-block">
                                        <div class="sales-tile2-icon"><img src="img/graphcool.svg"
                                                                           alt="Statistics"></div>
                                        <div class="sales-tile2-details"><h2>Tuesday</h2><h5></h5>
                                        </div>
                                    </div>
                                    <div class="sales-tile2-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="sales-tile2">
                                    <div class="sales-tile2-block">
                                        <div class="sales-tile2-icon"><img src="img/graphcool.svg"
                                                                           alt="Statistics"></div>
                                        <div class="sales-tile2-details"><h2>Thursday</h2><h5></h5>
                                        </div>
                                    </div>
                                    <div class="sales-tile2-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="sales-tile2">
                                    <div class="sales-tile2-block">
                                        <div class="sales-tile2-icon"><img src="img/graphcool.svg"
                                                                           alt="Statistics"></div>
                                        <div class="sales-tile2-details"><h2>Sunday</h2><h5></h5>
                                        </div>
                                    </div>
                                    <div class="sales-tile2-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card gradient-pink-teal card-186">
                    <div class="card-body">
                        <div class="uploading-container"><a href="#" class="pause" id="play-pause"><i
                                    class="icon-pause_circle_outline"></i></a>
                            <div class="upload-progress-container">
                                <div class="upload-icon"><img src="img/upload.svg" alt="Download"></div>
                                <div class="upload-progress">
                                    <div class="upload-space-container">
                                        <div>10<span>%</span><span class="ms-2">Uploading...</span>
                                        </div>
                                        <div>1000<span>GB</span></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 0.5%"
                                             aria-valuenow="0.5" aria-valuemin="0"
                                             aria-valuemax="0.5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card gradient-peach3 card-186">
                    <div class="card-body">
                        <div class="upgrade-plan">
                            <div><img src="img/award.svg" alt="Award"></div>
                            <div class="plan-details"><h5 class="mt-2">Upgrade your plan and get
                                    complete access.</h5><a href="pricing.html" class="btn">Upgrade Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
