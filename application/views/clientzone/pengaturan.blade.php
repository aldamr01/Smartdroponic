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

        <!-- Plugins css -->
        <link href="{{base_url('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{base_url('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{base_url('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet">
        <link href="{{base_url('assets/libs/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{base_url('assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" />
        <link href="{{base_url('assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />
        <link href="{{base_url('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" />
        <link href="{{base_url('assets/libs/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />


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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Kebun Saya</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pengaturan Kebun</a></li>
                                <li class="breadcrumb-item active">Aldio's Garden</li>
                            </ol>
                            <h4 class="page-title">Pengaturan Kebun</h4>
                        </div>
                        <!-- End page title box -->


        
                        <div class="row">        
                            <div class="col-md-3">
                                <div class="card-box">
                                    <h4 class="header-title">Pendingin Ruangan</h4>
        
                                    <p class="mb-1 mt-3 font-weight-medium text-muted">Rak Atas</p>                                   
                                    <div class="switchery-demo text-muted font-13">
                                        OFF&nbsp;<input type="checkbox"  data-plugin="switchery" data-color="#1bb99a"/>&nbsp;ON                       
                                    </div>

                                    <p class="mb-1 mt-4 font-weight-medium text-muted">Rak Tengah</p>                    
                                    <div class="switchery-demo text-muted font-13">
                                        OFF&nbsp;<input type="checkbox"  data-plugin="switchery" data-color="#1bb99a"/>&nbsp;ON
                                    </div>

                                    <p class="mb-1 mt-4 font-weight-medium text-muted">Rak Bawah</p>                    
                                    <div class="switchery-demo text-muted font-13">
                                        OFF&nbsp;<input type="checkbox"  data-plugin="switchery" data-color="#1bb99a"/>&nbsp;ON
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-9">
                                <div class="card-box">
                                    <h4 class="header-title">Lampu Penerangan</h4>
                                    <p class="text-muted font-13">
                                        Lampu penerangan , lampu yang digunakan sebagai
                                        pengganti penerangan pada tanaman ketika Growing-LED berhenti
                                        menyala.
                                    </p>
                                    <p class="mb-1 mt-3 font-weight-medium text-muted">Hidup Otomatis</p> 
                                    <p class="text-muted font-13">
                                        Akan otomatis hidup ketika Growing-LED mati.
                                    </p>                               
                                    <div class="switchery-demo text-muted font-13">
                                        OFF&nbsp;<input type="checkbox"  data-plugin="switchery" data-color="#1bb99a"/>&nbsp;ON
                                    </div>
        
        
                                    <p class="mb-1 mt-4 font-weight-medium text-muted">Tingkat kecerahan lampu</p>                                            
                                    <div class="switchery-demo text-muted font-13">
                                        <input class="form-control" type="range" name="range" min="0" max="10">
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div><!-- end row -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title">Growing LED</h4>
                                    <p class="text-muted font-14">
                                        Nyalakan Lampu Pertumbuhan
                                    </p>
                                    <div class="switchery-demo text-muted font-13">
                                        OFF&nbsp;<input type="checkbox"  data-plugin="switchery" data-color="#1bb99a"/>&nbsp;ON
                                    </div>
                                    
                                    <p class="mb-1 mt-3 font-weight-medium text-muted">Hidup Otomatis</p> 
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="timepicker3" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div> 
                                        <p class=" mt-3 font-weight-medium text-muted">Sampai</p> 
                                        <div class="input-group">
                                            <input id="timepicker" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                                                                                                  
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->                                    
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title">Pompa Air</h4>
                                    <p class="text-muted font-14">
                                        Set waktu rutin untuk menyalakan pompa air
                                    </p>
        
                                    <div class="input-group">
                                        <input id="timepicker2" type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                        </div>
                                    </div>                                           
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->                                    
                        </div>
                        <!-- end row -->
                        <div class="row"> 
                            <div class="col-lg-12">
                                <input  type="button" class="btn btn-success" name="" id="" value="Simpan konfigurasi">
                            </div>                                                                                   
                        </div>
                        <br><br>
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

        <!-- select2 js -->
        <script src="{{base_url('assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{base_url('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{base_url('assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
        <script src="{{base_url('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <!-- Mask input -->
        <script src="{{base_url('assets/libs/jquery-mask-plugin/jquery.mask.min.js')}}"></script>
        <!-- Bootstrap Select -->
        <script src="{{base_url('assets/libs/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

        <script src="{{base_url('assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>

        <script src="{{base_url('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>

        <script src="{{base_url('assets/libs/moment/moment.js')}}"></script>

        <script src="{{base_url('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

        <script src="{{base_url('assets/libs/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <!-- Init Js file -->
        <script src="{{base_url('assets/js/jquery.form-advanced.js')}}"></script>

        <!-- App js -->
        <script src="{{base_url('assets/js/jquery.core.js')}}"></script>
        <script src="{{base_url('assets/js/jquery.app.js')}}"></script>

    </body>
</html>
