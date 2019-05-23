<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesdesign.in/drixo/vertical/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 03:20:24 GMT -->

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
    <!-- DataTables -->
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Dropzone css -->
    <link href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
    
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <style>
        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
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
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close">
                </i>
            </button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">
                    <a href="index.html" class="logo">
                        <img src="asset/images/logo-dark.png" height="20" alt="logo">
                    </a>
                </div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            Main
                        </li>
                        <li>
                            <a href="/admin" class="waves-effect">
                                <i class="dripicons-home">
                                </i>
                                <span>
                                    Halaman Utama
                                </span>
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="ti-package">
                                </i>
                                <span>
                                Master Produk </span>
                                <span class="menu-arrow float-right">
                                    <i class="mdi mdi-chevron-right">
                                    </i>
                                </span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/admin/product_categories">
                                    Kategori Produk</a>
                                </li>
                                <li>
                                    <a href="/admin/product">
                                    Produk</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/admin/courier" class="waves-effect">
                                <i class="ti-truck">
                                </i>
                                <span>
                                    Courier<span class="badge badge-success badge-pill float-right"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/transaction" class="waves-effect">
                                <i class="dripicons-shopping-bag">
                                </i>
                                <span>
                                    Transaksi
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <div class="topbar-left d-none d-lg-block">
                        <div class="text-center">
                            <a href="index.html" class="logo">
                                <img src="{{asset('assets/images/logo.png')}}" height="20" alt="logo">
                            </a>
                        </div>
                    </div>
                    <nav class="navbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit">
                                            <i class="fa fa-search">
                                            </i>
                                        </button>
                                    </div>
                                </form>
                            </li>
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-email-outline noti-icon">
                                    </i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">
                                    5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <span class="badge badge-danger float-right">
                                        367</span>
                                        <h5>
                                        Messages</h5>
                                    </div>
                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="user-img" class="img-fluid rounded-circle">
                                            </div>
                                            <p class="notify-details">
                                                <b>
                                                Charles M. Jones</b>
                                                <span class="text-muted">
                                                Dummy text of the printing and typesetting industry.</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{asset('images/users/user-3.jpg')}}" alt="user-img" class="img-fluid rounded-circle">
                                            </div>
                                            <p class="notify-details">
                                                <b>
                                                Thomas J. Mimms</b>
                                                <span class="text-muted">
                                                You have 87 unread messages</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="user-img" class="img-fluid rounded-circle">
                                            </div>
                                            <p class="notify-details">
                                                Luis M. Konrad<span class="text-muted">
                                                It is a long established fact that a reader will</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="user-img" class="img-fluid rounded-circle">
                                            </div>
                                            <p class="notify-details">
                                                <b>
                                                Kendall E. Walker</b>
                                                <span class="text-muted">
                                                Dummy text of the printing and typesetting industry.</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="user-img" class="img-fluid rounded-circle">
                                            </div>
                                            <p class="notify-details">
                                                <b>
                                                David M. Ryan</b>
                                                <span class="text-muted">
                                                You have 87 unread messages</span>
                                            </p>
                                        </a>
                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-all">
                                    View All</a>
                                </div>
                            </li>
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon">
                                    </i>
                                    <span class="badge badge-success badge-pill noti-icon-badge">
                                    3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <span class="badge badge-danger float-right">
                                        84</span>
                                        <h5>
                                        Notification</h5>
                                    </div>
                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-cart-outline">
                                                </i>
                                            </div>
                                            <p class="notify-details">
                                                Your order is placed<span class="text-muted">
                                                Dummy text of the printing and typesetting industry.</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success">
                                                <i class="mdi mdi-message">
                                                </i>
                                            </div>
                                            <p class="notify-details">
                                                New Message received<span class="text-muted">
                                                You have 87 unread messages</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-martini">
                                                </i>
                                            </div>
                                            <p class="notify-details">
                                                Your item is shipped<span class="text-muted">
                                                It is a long established fact that a reader will</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger">
                                                <i class="mdi mdi-message">
                                                </i>
                                            </div>
                                            <p class="notify-details">
                                                New Message received<span class="text-muted">
                                                You have 87 unread messages</span>
                                            </p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-martini">
                                                </i>
                                            </div>
                                            <p class="notify-details">
                                                Your item is shipped<span class="text-muted">
                                                It is a long established fact that a reader will</span>
                                            </p>
                                        </a>
                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-all">
                                    View All</a>
                                </div>
                            </li>
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ Auth::guard('admin')->user()->profile_image }}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-account-circle m-r-5 text-muted">
                                        </i>
                                    Profile</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge badge-success mt-1 float-right">
                                        5</span>
                                        <i class="mdi mdi-settings m-r-5 text-muted">
                                        </i>
                                    Settings</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-lock-open-outline m-r-5 text-muted">
                                        </i>
                                    Lock screen</a>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout m-r-5 text-muted">
                                        </i>
                                    Logout</a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="ion-navicon">
                                    </i>
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix">
                        </div>
                    </nav>
                </div>
                <!-- Top Bar End -->
                @yield('content')
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
            <footer class="footer">
                © 2019 - <b>
                Kelompok 1</b>
            </footer>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
    @yield('js')
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
    <!-- Dropzone js -->
    <script src="{{asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- jQuery  -->
    <!-- Required datatable js -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- Datatable init js -->
    <script src="{{asset('assets/pages/datatables.init.js')}}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript">
      $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);
      });

      var options = { 
        complete: function(response) 
        {
            if($.isEmptyObject(response.responseJSON.error)){
                $("input[name='judul']").val('');
            $(".print-img").css('display','block');
            $(".print-img").find('img').attr('src','/gambar/'+response.responseJSON.gambar);
                alert('Upload gambar berhasil.');
            }else{
                printErrorMsg(response.responseJSON.error);
            }
        }
      };

      function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
      }
    </script>
    
    <script>
        function changeProfile() {
            $('#image').click();
        }
        $('#image').change(function () {
            var imgPath = $(this)[0].value;
            var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
                readURL(this);
            else
                alert("Please select image file (jpg, jpeg, png).")
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                    $('#remove').val(0);
                }
            }
        }
        function removeImage() {
            $('#preview').attr('src', 'Kosong');
            $('#remove').val(1);
        }
    </script>
</body>

<!-- Mirrored from themesdesign.in/drixo/vertical/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 03:20:24 GMT -->

</html>
