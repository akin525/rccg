<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('assets/img/1200px-Rccg_logo.png')}}">
    <title>RCCG CHRIST CHAPEL - Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/icomoon/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/overlay-scroll/OverlayScrollbars.min.css')}}">
    @yield('styles')
</head>
<body>
<div id="loading-wrapper">
    <div class="spinner-border"></div>
    <div class="loading-messsage">
        <span>R</span>
        <span>C</span>
        <span>C</span>
        <span>G</span>
    </div>
</div>
@include('sweetalert::alert')
<div class="page-wrapper">
    <nav class="sidebar-wrapper">
        <div class="sidebar-brand"><a href="{{route('dashboard')}}" class="logo"><img src="{{asset('assets/img/1200px-Rccg_logo.png')}}"
                                                                          alt="Admin Dashboard"/></a></div>
        <div class="sidebarMenuScroll">
            <div class="sidebar-menu">
                <ul>
                    <li class=""><a href="{{route('dashboard')}}"><i
                                class="icon-house_siding gradient-blue"></i><span class="menu-text">Dashboards</span></a>
                    </li>
                    <li class=""><a href="{{route('admins')}}"><i
                                class="icon-house_siding gradient-blue"></i><span class="menu-text">Admins</span></a>
                    </li>
                    <li class=""><a href="{{route('add-minister')}}"><i
                                class="icon-ad_units gradient-blue"></i><span class="menu-text">Add Minister</span></a>
                    </li>
                    <li class=""><a href="{{route('add-sermon')}}"><i
                                class="icon-book_online gradient-blue"></i><span class="menu-text">Add Sermon</span></a>
                    </li>
                    <li class=""><a href="{{route('createslide')}}"><i
                                class="icon-lightbulb_outline gradient-blue"></i><span class="menu-text">Create Slide</span></a>
                    </li>
                    <li class=""><a href="{{route('add-gallery')}}"><i
                                class="icon-lightbulb_outline gradient-blue"></i><span class="menu-text">Gallery</span></a>
                    </li>

                    <li class=""><a href="{{route('myaccount')}}"><i
                                class="icon-account_box gradient-blue"></i><span class="menu-text">My Account</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-container">
        <div class="page-header">
            <div class="breadcrumb-container">
                <div class="toggle-sidebar" id="toggle-sidebar"><i class="icon-menu"></i></div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="icon-house_siding"></i><a href="{{route('dashboard')}}">Home</a></li>
                </ol>
            </div>
            <div class="header-actions-container">
                <div class="search-container">
                    <div class="input-group"><input type="text" class="form-control" placeholder="Search...">
                        <button class="btn" type="button"><i class="icon-search"></i></button>
                    </div>
                </div>
                <ul class="header-actions">
                    <li class="dropdown"><a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                            aria-haspopup="true"><span
                                class="user-name d-none d-md-block">{{Auth::user()->name}}</span><span class="avatar"><img
                                    src="img/user.png" alt="User Avatar"><span class="status online"></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-avatar"><img src="{{asset('img/user.png')}}" alt="Avatar"></div>
                            <div class="header-profile-block"><h5>{{Auth::user()->name}}</h5>
                                <p>Admin</p></div>
                            <div class="header-profile-actions"><a href="{{route('myaccount')}}" class="gradient-blue"><i
                                        class="icon-person_outline"></i>Profile</a><a href="#"
                                                                                      class="gradient-green"><i
                                        class="icon-edit_road"></i>Settings</a><a href="{{route('logout')}}" class="gradient-red"><i
                                        class="icon-power_settings_new"></i>Logout</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-wrapper-scroll">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <div class="app-footer"><span>© RCCG CHRIST CHAPEL admin 2022</span></div>
        </div>
    </div>
</div>
@yield('scripts')
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/js/modernizr.js')}}"></script>
<script src="{{asset('admin/js/moment.js')}}"></script>
<script src="{{asset('admin/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('admin/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>
<script src="{{asset('admin/vendor/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/vendor/apex/custom/home2/byDeviceGraph.js')}}"></script>
<script src="{{asset('admin/vendor/apex/custom/home2/earningsGraph.js')}}"></script>
<script src="{{asset('admin/vendor/apex/custom/home2/salesGraph.js')}}"></script>
<script src="{{asset('admin/vendor/apex/custom/home2/sparklineGraphs.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
</body>
