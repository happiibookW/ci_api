<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url('admin/') ?>app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('admin/') ?>app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/') ?>app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="javascript:void(0);">

                            <img src="<?php echo base_url('admin/') ?>app-assets/images/ico/s4.jpg" width="50" height="50">
                            <h2 class="brand-text text-primary ml-1">Hapiverse</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="<?php echo base_url('admin/') ?>app-assets/images/pages/login-v2.svg" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title font-weight-bold mb-1">Welcome to Happiverse!</h2>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form class="auth-login-form mt-2"  method="POST">
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">Email</label>
                                        <input class="form-control" id="login-email" type="text" name="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Password</label><a href="forgot-password.php"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" />
                                            <label class="custom-control-label" for="remember-me"> Remember Me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                                </form>
                                <!-- <p class="text-center mt-2"><span>New on our platform?</span><a href="Register.php"><span>&nbsp;Create an account</span></a></p> -->
                                <!-- <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div> -->
                                <!-- <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="facebook.com"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="twitter.com"><i data-feather="twitter"></i></a><a class="btn btn-google" href="google.com"><i data-feather="mail"></i></a><a class="btn btn-github" href="github.com"><i data-feather="github"></i></a></div> -->
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url('admin/') ?>app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url('admin/') ?>app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url('admin/') ?>app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url('admin/') ?>app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url('admin/') ?>app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>