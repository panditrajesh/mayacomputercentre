

<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>
<style type="text/css">
     body {
        background: url({{ asset('backend/assets/img/back.jpg') }});
        background-repeat: no-repeat;
        background-size: 100% 100%;
        }
    .bg-primary.bg-soft {
    background-color: rgb(239 128 30 / 34%)!important;
    }
    .card {
    background-color: #213d941c;
    -webkit-box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%);
    box-shadow: 0 0.75rem 1.5rem rgb(79 101 170 / 47%);
    }
    .clr{
        background:white;
    }
</style>
    <body>
        <div class="account-pages my-5 pt-sm-4">
            <div class="container">
                <div class="row ">
                    <!--<div class="col-md-3 col-lg-3 col-xl-3"></div>-->
                    <div class="col-md-6 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-dark p-4">
                                            <!--<h5 class="text-primary text-light">Welcome Back !</h5>-->
                                            <h5 class="text-dark">Maya Computer Center</h5>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="javascript:void(0);" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="75">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/apprise.jpg" alt="" class="rounded-circle"  height"82px" width ="84px">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="user_name" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter username" minlength='3' required>
                                        </div>
                
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" minlength='3' name ="password" required>
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>
<!-- 
                                        <div class="form-check">
                                            <button class="btn btn-sm btn-info"> Login With OTP</button>
                                               
                                        </div> -->
                                        
                                        <div class="mt-3 d-grid ">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" id="login_btn">Log In</button>
                                        </div>
            
                                         <!--<div class="mt-4 text-center">-->
                                         <!--   <h5 class="font-size-14 mb-3">Login with</h5>-->
            
                                            <!--<ul class="list-inline">-->
                                                <!--<li class="list-inline-item">-->
                                                <!--    <a href="otp" class="social-list-item bg-primary text-white border-primary" title="Login With OTP">-->
                                                <!--        <i class="fa fa-mobile"></i>-->
                                                <!--    </a>-->
                                                <!--</li>-->
                                                <!--<li class="list-inline-item">-->
                                                <!--    <a href="javascript::void()" class="social-list-item bg-info text-white border-info" title="Login With QRCode">-->
                                                <!--        <i class="fa fa-qrcode"></i>-->
                                                <!--    </a>-->
                                                <!--</li>-->
                                                <!-- <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li> -->
                                            <!--</ul>-->
                                        <!--</div>-->

                                        <!-- <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                        </div> -->
                                    </form>
                                <!-- </div>  -->
            
                            </div>
                        </div>
                       <!--  <div class="mt-5 text-center">
                            
                            <div>
                                <p>Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> Apprise. Crafted with <i class="mdi mdi-heart text-danger"></i> by OfferPlant</p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/notify.min.js') }}"></script>
        <script>
        $(document).ready(function() {
        $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          //return false;
        $("#login_btn").trigger('click');
        }
        });
        });
    </script>
    </body>
</html>
