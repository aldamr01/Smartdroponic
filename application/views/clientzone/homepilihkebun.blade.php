<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Smart-Droponic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{base_url('assets/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="{{base_url('assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet')}}" />

        <!-- DataTables -->
        <link href="{{base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>

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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Smartdroponic</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Monitoring Kebun</a></li>
                                <li class="breadcrumb-item active">Pilih Kebun</li>
                            </ol>
                            <h4 class="page-title">Pilih Kebun</h4>
                        </div>
                        <!-- End page title box -->

                        <!--row judul-->
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{base_url('Home/monitoring')}}">
                                    <div class="card-box">
                                        <h4 class="header-title">Aldio's Garden</h4>
                                        <p class="text-muted m-b-20 font-13">
                                            Surabaya, Jawa-timur
                                        </p>
                                        <p class="text-muted m-b-21  font-1">Status : <span class="badge badge-success">Online</span></p>
                                    </div>                                
                                </a>                                
                            </div>
                            <div class="col-md-4">
                                
                                    <div class="card-box">
                                        <h4 class="header-title">Kebun Pak Eko</h4>
                                        <p class="text-muted m-b-20 font-13">
                                        Surabaya, Jawa-timur
                                        </p>
                                        <p class="text-muted m-b-21  font-1">Status : <span class="badge badge-danger">Offline</span></p>
                                    </div>  
                                                             
                            </div>
                        </div>
                        <!--end row judul-->                        
                    </div>
                </div>
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

        <!-- KNOB JS -->
        <script src="{{base_url('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

        <!-- Flot chart -->
        <script src="{{base_url('assets/libs/flot/jquery.flot.js')}}"></script>
        <script src="{{base_url('assets/libs/flot/jquery.flot.time.js')}}"></script>
        <script src="{{base_url('assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{base_url('assets/libs/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{base_url('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
        <script src="{{base_url('assets/libs/flot-axislabels/jquery.flot.axislabels.js')}}"></script>
        <script src="{{base_url('assets/libs/flot/jquery.flot.selection.js')}}"></script>
        <script src="{{base_url('assets/libs/flot/jquery.flot.stack.js')}}"></script>

        <script src="{{base_url('assets/js/jquery.flot.js')}}"></script>

    

        <!-- Dashboard Init JS -->
        <script src="{{base_url('assets/js/jquery.dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{base_url('assets/js/jquery.core.js')}}"></script>
        <script src="{{base_url('assets/js/jquery.app.js')}}"></script>
        

    </body>
</html>