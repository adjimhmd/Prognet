<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesdesign.in/drixo/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 03:20:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>
    Drixo - Responsive Booststrap 4 Admin & Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div class="accountbg">
        <div class="content-center">
            <div class="content-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-center mt-0 m-b-15">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/logo-dark.png" height="30" alt="logo">
                                        </a>
                                    </h3>
                                    <h4 class="text-muted text-center font-18">
                                        <b>
                                        Sign In</b>
                                    </h4>
                                    <div class="p-2">
                                        <form method="POST" action="{{ route('admin.login') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" required="" placeholder="Username" name="username">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="remember">
                                                        Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center row m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                                    Log In</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

<!-- Mirrored from themesdesign.in/drixo/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 03:20:24 GMT -->

</html>
