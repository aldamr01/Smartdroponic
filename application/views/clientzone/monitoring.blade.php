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
        <link href="{{base_url('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

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
                                <img src="{{base_url('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle"> <span class="ml-1">Gondwana <i class="mdi mdi-chevron-down"></i> </span>
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
                                <li class="breadcrumb-item active">Monitoring kebun</li>
                            </ol>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <!-- End page title box -->

                        <!--row judul-->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card-box">
                                    <h4 class="header-title">Aldio's Garden</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Live data informasi pada kebun : "Aldio's Garden"
                                    </p>
                                    <p class="text-muted m-b-21  font-1">Sinkronasi : <span class="badge badge-success">Success</span></p>
                                </div>

                            </div>
                        </div>
                        <!--end row judul-->
                        <div class="row">
                            <div class="col-xl-4">
                                        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-md">
                                    <div class="float-left">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="24" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">Suhu Ruangan</p>
                                        <h3 class="text-white">24°</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                            <div class="col-xl-4">
                                        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-md">
                                    <div class="float-left">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="5.8" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">pH Air</p>
                                        <h3 class="text-white">5.8.1</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                            <div class="col-xl-4">
                                        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-md">
                                    <div class="float-left">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">Nutrisi Air</p>
                                        <h3 class="text-white">1092 ppM</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                            
                        </div>
                        <!-- end row -->
                        <!-- row 2 -->
                        <div class="row">
                            <div class="col-xl-4">
                                        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-md">
                                    <div class="float-left">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="52" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">Kelembaban Udara</p>
                                        <h3 class="text-white">52%</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                            <div class="col-xl-4">
                                        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-md">
                                    <div class="float-left">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="34" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">Jumlah nutrisi A</p>
                                        <h3 class="text-white">34%</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                            <div class="col-xl-4">
                                        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-md">
                                    <div class="float-left">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="32" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">Jumlah nutrisi B</p>
                                        <h3 class="text-white">32%</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                            
                        </div>
                        <!-- end row -->                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title">Data staistik Suhu ruangan sekarang</h4>
                                    <div id="website-stats1" style="height: 350px;" class="flot-chart mt-5"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row --> 

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title">Data statistik nutrisi air sekarang</h4>
                                    <div id="website-stats2" style="height: 350px;" class="flot-chart mt-5"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row --> 

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title">Data statistik kelembaban sekarang</h4>
                                    <div id="website-stats3" style="height: 350px;" class="flot-chart mt-5"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row --> 

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