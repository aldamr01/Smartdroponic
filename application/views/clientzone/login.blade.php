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

        <!-- Icons css -->
        <link href="{{base_url('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{base_url('assets/libs/dripicons/webfont/webfont.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{base_url('assets/libs/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <!-- build:css -->
        <link href="{{base_url('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
        <!-- endbuild -->

    </head>

    <body class="bg-account-pages">

        <!-- Login -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">

                                    <!-- Logo box-->
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="{{base_url('assets/images/logo_dark.png')}}" alt="" height="28"></span>
                                            </a>
                                        </h2>
                                    </div>

                                    <div class="account-content">
                                        <form action="#">
                                            <div class="form-group mb-3">
                                                <label for="emailaddress" class="font-weight-medium">Alamat Email</label>
                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Masukan Alamat Email">
                                            </div>

                                            <div class="form-group mb-3">
                                                <a href="auth-recoverpassword.html" class="text-muted float-right"><small>Lupa password?</small></a>
                                                <label for="password" class="font-weight-medium">Password</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="Masukan Password Anda">
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="checkbox checkbox-info">
                                                    <input id="remember" type="checkbox">
                                                    <label for="remember">
                                                        Ingat saya
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row text-center">
                                                <div class="col-12">
                                                <a class="btn btn-block btn-success waves-effect waves-light"  href="{{base_url('Home/index')}}">Masuk</a>
                                                </div>
                                            </div>
                                        </form> <!-- end form -->
                                        
                                    </div> <!-- end account-content -->

                                </div> <!-- end account-box -->
                            </div>
                            <!-- end account-page-->
                        </div>
                        <!-- end wrapper-page -->

                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- END HOME -->    


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
