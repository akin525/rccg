
<!doctype html><html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Sep 2022 17:10:22 GMT -->
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('assets/img/1200px-Rccg_logo.png')}}">
    <title>RCCG CHRIST CHAPEL - Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/icomoon/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
</head>
<body class="login-container">
<div id="loading-wrapper">
    <div class="spinner-border"></div>
    <div class="loading-messsage">
        <span>R</span>
        <span>C</span>
        <span>C</span>
        <span>G</span>
        {{--        <span>i</span>--}}
        {{--        <span>n</span>--}}
        {{--        <span>g</span>--}}
    </div>
</div>
<div class="container">
    @include('sweetalert::alert')
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="login-box">

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="login-blocks-img"></div>
            <div class="login-form">
                <a href="{{route('administrator')}}" class="">
                    <img width="100" src="{{asset('assets/img/1200px-Rccg_logo.png')}}" />
                </a>
                <div class="login-welcome">RCCG CHRIST CHAPEL ADMIN</div>
                <div class="login-form-block" >
                    <label class="login-form-label" style="background-color: #0b0e23">Email</label>
                    <input type="email" name="email"  class="login-form-control text-success"  required>
                </div>
                <div class="login-form-block">
                    <label class="login-form-label" style="background-color: #0b0e23">Password</label>
                    <input type="password" name="password" class="login-form-control text-white" required>
                </div>
                <div class="login-form-actions">
                    {{--                    <a href="forgot-password.html" class="btn-link">Forgot password?</a>--}}
                    <button type="submit" class="btn"><span class="icon">
                        <i class="icon-login"></i>
                    </span>Login</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
<!-- Mirrored from bootstrap.gallery/cliq/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Sep 2022 17:10:27 GMT -->
</html>
