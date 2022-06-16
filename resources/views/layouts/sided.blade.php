<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MotaAdmin - Bootstrap Admin Dashboard" />
    <meta property="og:title" content="MotaAdmin - Bootstrap Admin Dashboard" />
    <meta property="og:description" content="MotaAdmin - Bootstrap Admin Dashboard" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <title>Topic: {{$mo->topic}}</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('storage/preach').'/'.$mo->picture}}" />

    <link href="{{asset('user/vendor/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

    <link href="{{asset('user/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/summernote/summernote.css')}}" rel="stylesheet">

</head>
<body>

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>


<div id="main-wrapper">

    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="{{asset('user/image/1200px-Rccg_logo.png')}}" alt="">
            <img class="logo-compact" src="{{asset('user/image/1200px-Rccg_logo.png')}}" alt="">
            <img class="brand-title" src="{{asset('user/image/1200px-Rccg_logo.png')}}" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>



    <div class="fixed-content-box">
        <div class="head-name">
           Sermon
            <span class="close-fixed-content fa-left d-lg-none">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24" /><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" /><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " /></g></svg>
</span>
        </div>
        <div class="fixed-content-body dz-scroll" id="DZ_W_Fixed_Contant">
            <div class="tab-content" id="menu">
                <div class="tab-pane chart-sidebar fade show active" id="dashboard-area" role="tabpanel"></div>
                <div class="tab-pane fade"  role="tabpanel">


                </div>
                <div class="tab-pane fade" id="apps">
                </div>
                <div class="tab-pane fade" id="components">
                </div>
            </div>
        </div>
    </div>


    <div class="header">
    </div>


    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="nav menu-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#dashboard">
                        <svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#apps">
                        <svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </a>
                </li>

            </ul>
        </div>
        <a href="page-login.html" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
    </div>


    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>{{$mo->topic}}</h4>
{{--                        <span>Sermon Of The Day</span>--}}
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Post</a></li>
{{--                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>--}}
                    </ol>
                </div>
            </div>


            <script src="{{asset('user/vendor/global/global.min.js')}}"></script>
            <script src="{{asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
            <script src="{{asset('user/vendor/chart.js/Chart.bundle.min.js')}}"></script>
            <script src="{{asset('user/js/custom.min.js')}}"></script>
            <script src="{{asset('user/js/deznav-init.js')}}"></script>

            <script src="{{asset('user/vendor/apexchart/apexchart.js')}}"></script>
            <script src="{{asset('user/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
            <script src="{{asset('user/vendor/jquery-validation/jquery.validate.min.js')}}"></script>

            <script src="{{asset('user/js/plugins-init/jquery.validate-init.js')}}"></script>

            <script src="{{asset('user/js/plugins-init/jquery-steps-init.js')}}"></script>

            <script src="{{asset('user/vendor/svganimation/vivus.min.js')}}"></script>
            <script src="{{asset('user/vendor/svganimation/svg.animation.js')}}"></script>
