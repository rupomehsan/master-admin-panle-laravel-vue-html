<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="x7DJ4JIy4De2Y9GLcC5C1S4j01UPDZtGVkzPgNs6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('backend/assets/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('backend/assets/logo.png')}}" type="image/x-icon">
    <title>Dashbaord</title>
    <!--Google font-->
    <link href="{{asset('backend/assets/css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css(1)')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/fontawesome.css')}}">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icofont.css')}}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/themify.css')}}">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/flag-icon.css')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/bootstrap.css')}}">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/custom.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/app.scss')}}">
    {{--
    <link rel="stylesheet" href="{{asset('backend/assets/style.css')}}"> --}}
</head>

<body main-theme-layout="main-theme-layout-4"
    class="pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done "
    cz-shortcut-listen="true">
    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>



    <!--page-wrapper Start-->
    <div class="page-wrapper" id="app" data-v-app="">
        <div>
            <div class="page-main-header">
                <!--Page Header Start-->
                <div class="main-header-left" semilight-bg-color="bg-default-light-colo">
                    <div class="logo-wrapper">
                        <a href="http://127.0.0.1:8000/dashboard#/admin" id="logo" class="d-flex align-items-end gap-1">
                            <img src="{{asset('backend/assets/logo-light.png')}}" class="image-light" alt="">
                            {{-- <span class="text-white h4">Dashboard</span> --}}
                        </a>
                    </div>
                </div>
                <div class="main-header-right row" header-bg-color="bg-default-light-colo">
                    <div class="mobile-sidebar col-1 ps-0">
                        <div class="text-start switch-sm"><label class="switch"><input type="checkbox"
                                    id="sidebar-toggle" checked="checked"><span class="switch-state"></span></label>
                        </div>
                    </div>
                    <div class="nav-right col">
                        <ul class="nav-menus">
                            <li class="onhover-dropdown">
                                <div class="d-flex align-items-center"><img
                                        class="align-self-center pull-right flex-shrink-0 me-2"
                                        src="{{asset('backend/assets/user.png')}}" alt="header-user">
                                    <div>
                                        <h6 class="m-0 txt-dark f-16"> My Account <i
                                                class="fa fa-angle-down pull-right ms-2"></i></h6>
                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div p-20">
                                    <li><a href="http://127.0.0.1:8000/dashboard#"><i class="icon-user"></i> Edit
                                            Profile </a></li>
                                    <li><a href="http://127.0.0.1:8000/dashboard#"><i class="icon-power-off"></i> Logout
                                        </a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
                <!--Page Header Ends-->
            </div>
            <!--Page Body Start-->
            <div class="page-body-wrapper">
                <div>
                    <div class="page-sidebar custom-scrollbar page-sidebar-open">
                        <!--Page Sidebar Start-->
                        <div class="sidebar-user text-center">
                            <div><img class="img-50 rounded-circle" src="{{asset('backend/assets/1.jpg')}}" alt="#">
                            </div>
                            <h6 class="mt-3 f-12">Admin</h6>
                        </div>
                        <div class="sidebar-menu">

                            <li class="my-2 d-flex align-items-center gap-2">
                                <i class="icon-desktop"></i>
                                <a href="{{route('dashboard.admin')}}">Dashboard</a>
                            </li>
                            <li class="my-2 d-flex align-items-center gap-2">
                                <i class="icon-desktop"></i>
                                <a class="d-flex align-items-center" href="{{route('dashboard.admin')}}">CRUD</a>
                            </li>
                        </div>
                    </div>
                    <div class="page-body">
                        <div>
                            <!-- Container-fluid starts -->
                            <div class="container-fluid">
                                <div class="page-header">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5> Dashboard </h5>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- &lt;ol class=&quot;breadcrumb pull-right&quot;&gt;
                            &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-home&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                            &lt;li class=&quot;breadcrumb-item active&quot;&gt;Sample Page&lt;/li&gt;
                        &lt;/ol&gt; -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Container-fluid Ends -->
                            <!-- Container-fluid starts -->
                            <div class="container-fluid">
                                <div class="card border-widgets shadow mb-4">
                                    <div class="row m-0">
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-user font-primary align-self-center me-3"></i>
                                                    <div><span class="mt-0">Teachers</span>
                                                        <h4 class="counter">15</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-id-badge font-secondary align-self-center me-3"></i>
                                                    <div><span class="mt-0">Students</span>
                                                        <h4 class="counter">457</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-camera font-success align-self-center me-3"></i>
                                                    <div><span class="mt-0">Photos</span>
                                                        <h4 class="counter">37</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-video-camera font-info align-self-center me-3"></i>
                                                    <div><span class="mt-0">Videos</span>
                                                        <h4 class="counter">16</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-widgets shadow mb-4">
                                    <div class="row m-0">
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-harddrives font-primary align-self-center me-3"></i>
                                                    <div><span class="mt-0">Blog Posts</span>
                                                        <h4 class="counter">27</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-files font-secondary align-self-center me-3"></i>
                                                    <div><span class="mt-0">Notices</span>
                                                        <h4 class="counter">457</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-zip font-success align-self-center me-3"></i>
                                                    <div><span class="mt-0">News</span>
                                                        <h4 class="counter">37</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-6 xs-width-100">
                                            <div class="crm-top-widget card-body">
                                                <div class="d-flex"><i
                                                        class="icon-book font-info align-self-center me-3"></i>
                                                    <div><span class="mt-0">Digital Books</span>
                                                        <h4 class="counter">16</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Container-fluid starts -->
                        </div>
                    </div>
                </div>
            </div>
            <!--Page Body Ends-->
        </div>
    </div>
    <!--page-wrapper Ends-->





    <!-- latest jquery-->
    <script src="{{asset('backend/assets/jquery-3.2.1.min.js.download')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('backend/assets/bootstrap.bundle.min.js.download')}}"></script>
    <!-- Theme js-->
    <script src="{{asset('backend/assets/script.js.download')}}" defer=""></script>
    <script src="{{asset('backend/assets/sweet_alert.js.download')}}" defer=""></script>
    <script src="{{asset('backend/assets/pace.js.download')}}"></script>
    <!-- Scripts -->
    <script type="module" src="{{asset('backend/assets/client')}}"></script>
    <script type="module" src="{{asset('backend/assets/app.js.download')}}"></script>
    <script referrerpolicy="origin" type="application/javascript" id="tiny-script_57932211011697630123463"
        src="{{asset('backend/assets/tinymce.min.js.download')}}"></script>
</body>

</html>
