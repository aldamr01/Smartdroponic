<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Greeva - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{base_url('assets/images/favicon.ico')}}">

        <!-- Icons css -->
        <link href="{{base_url('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{base_url('assets/libs/dripicons/webfont/webfont.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{base_url('assets/libs/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <!-- build:css -->
        <link href="{{base_url('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
        <!-- endbuild -->

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <header id="topnav">
                <nav class="navbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">                       
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="{{base_url('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle"> <span class="ml-1">Gondwana<i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i> <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-gear"></i> <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-help"></i> <span>Support</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-lock"></i> <span>Lock Screen</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-power"></i> <span>Logout</span>
                                </a>
    
                            </div>
                        </li>                      
                    </ul>
    
                    <ul class="list-unstyled menu-left mb-0">
                        <li class="float-left">
                            <a href="{{base_url('Home/index')}}" class="logo">
                                <span class="logo-lg">
                                    <img src="{{base_url('assets/images/logo.png')}}" alt="" height="20">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{base_url('assets/images/logo_sm.png')}}" alt="" height="28">
                                </span>
                            </a>
                        </li>
                        <li class="float-left">
                            <a class="button-menu-mobile open-left navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Kebun Saya</li>

                            <li>
                                <a href="{{base_url('Home/dashboard')}}">
                                    <i class="mdi mdi-pine-tree"></i> <span> Monitoring Kebun </span>
                                </a>
                            </li>  
                            <li>
                                <a href="#">
                                    <i class="dripicons-time-reverse"></i> <span> Data Histori </span>
                                </a>
                            </li>  
                            <li>
                                <a href="{{base_url('Home/notifikasi')}}">
                                    <i class="dripicons-information"></i> <span> Notifikasi </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{base_url('Home/pengaturan')}}">
                                    <i class="dripicons-gear"></i> <span> Pengaturan Kebun </span>
                                </a>
                            </li>      
                            
                            <li class="menu-title">Profile</li>

                            <li>
                                <a href="#">
                                    <i class="dripicons-user"></i> <span> Profile Saya </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{base_url('Home/login')}}">
                                    <i class="dripicons-exit"></i> <span> Logout </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->


            <!-- Page Content Start -->
            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page title box -->
                        <div class="page-title-box">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Kebun Saya</a></li>
                                <li class="breadcrumb-item active">Notifikasi</li>
                            </ol>
                            <h4 class="page-title">Notifikasi</h4>
                        </div>
                        <!-- End page title box -->

                        <div class="row">
                            <div class="col-12">
                                <div class="timeline">
        
                                    <!-- Timeline button -->
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-danger w-lg">Today</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-info"><i class="mdi mdi-adjust"></i></span>
                                                    <h4 class="text-danger">5 Oktober 2018</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 pm</small></p>
                                                    <p>
                                                        Kebun "Aldion's garden" telah terhubung
                                                    </p>
        
                                                </div>
                                            </div>
                                        </div>
                                    </article>  
                                                                                                       
        
                                    <!-- Timeline Button-->
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-danger w-lg">Yesterday</a>
                                            </div>
                                        </div>
                                    </article>
        
                                    <!-- Timeline item-->
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon bg-info"><i class="mdi mdi-adjust"></i></span>
                                                    <h4 class="text-danger">4 Oktober 2018</h4>
                                                    <p class="timeline-date text-muted"><small>10:25 am</small></p>
                                                    <p>
                                                        Kebun "Aldion's garden" kembali offline
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-info"><i class="mdi mdi-adjust"></i></span>
                                                    <h4 class="text-danger">4 Oktober 2018</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>
                                                        Kebun "Aldion's garden" telah terhubung
                                                    </p>
        
                                                </div>
                                            </div>
                                        </div>
                                    </article>   

                                </div>
                                <!-- end timeline -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->        

                    </div> <!-- end container-fluid-->
                </div> <!-- end contant-->
            </div>
            <!-- End Page Content-->


            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                                2018 © Gondwana - Smartdroponic
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->


        </div>
        <!-- End #wrapper -->

        <!-- jQuery  -->
        <script src="{{base_url('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{base_url('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{base_url('assets/libs/metismenu/metisMenu.min.js')}}"></script>

        <!-- App js -->
        <script src="{{base_url('assets/js/jquery.core.js')}}"></script>
        <script src="{{base_url('assets/js/jquery.app.js')}}"></script>

    </body>
</html>