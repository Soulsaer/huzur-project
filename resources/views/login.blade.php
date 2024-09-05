<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>JEWELLRY</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    
    <link rel="stylesheet" href="assets/css/main.css?v=3.4">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--  -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
    <script> 
    $(function(){
      $("#header").load("header.html"); 
      $("#footer").load("footer.html"); 
    });
    </script> 
</head>
<body>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- header -->
    <div id="header"></div>
    <!--  -->
    <section class="pt-80 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pb-4">
                    <div class="login">
                        <div class="login_detail">
                            <div class="forms">
                                <div class="form login">
                                    <div>
                                        <span class="title text-start pb-2">Login</span>
                                    </div>
                    
                                    <form action="#" style="width: 100%;">
                                        <div class="input-field">
                                            <input type="text" placeholder="Enter your email" required>
                                            <i class="uil uil-envelope icon"></i>
                                        </div>
                                        <div class="input-field">
                                            <input type="password" class="password" placeholder="Enter your password" required>
                                            <i class="uil uil-lock icon"></i>
                                            <i class="uil uil-eye-slash showHidePw"></i>
                                        </div>
                    
                                        <div class="checkbox-text">
                                            <div class="checkbox-content">
                                                <input type="checkbox" id="logCheck" style="width: 10px;
                                                height: 10px;">
                                                <label for="logCheck" class="text">Remember me</label>
                                            </div>
                                            
                                            <a href="#" class="text">Forgot password?</a>
                                        </div>
                
                                        <div class=" pt-3 w-100 d-flex justify-content-center align-items-center view_detail">
                                            <button type="button" class="w-100">LOGIN<i class="fa-solid fa-angle-right ps-2"></i></button>
                                        </div>
                    
                                    </form>
                    
                                    <div class="login-signup">
                                        <span class="text">Not a member?
                                            <a href="#" class="text signup-link">Signup Now</a>
                                        </span>
                                    </div>
                                </div>
                    
                                <!-- Registration Form -->
                                <div class="form signup">
                                    <span class="title m-auto d-block ms-3">Registration</span>
                    
                                    <form action="#">
                                        <div class="input-field">
                                            <input type="text" placeholder="Enter your name" required>
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" placeholder="Enter your email" required>
                                            <i class="uil uil-envelope icon"></i>
                                        </div>
                                        <div class="input-field">
                                            <input type="password" class="password" placeholder="Create a password" required>
                                            <i class="uil uil-lock icon"></i>
                                        </div>
                                        <div class="input-field">
                                            <input type="password" class="password" placeholder="Confirm a password" required>
                                            <i class="uil uil-lock icon"></i>
                                            <i class="uil uil-eye-slash showHidePw"></i>
                                        </div>
                    
                                        <div class="checkbox-text">
                                            <div class="checkbox-content">
                                                <input type="checkbox" id="termCon" style="width: 10px;
                                                height: 10px;">
                                                <label for="termCon" class="text">I accepted all terms and conditions</label>
                                            </div>
                                        </div>
                                        <div class="py-4 w-100 d-flex justify-content-center align-items-center view_detail">
                                            <button type="button" class="w-100">SIGNUP<i class="fa-solid fa-angle-right ps-2"></i></button>
                                        </div>
                                    </form>
                    
                                    <div class="login-signup">
                                        <span class="text">Already a member?
                                            <a href="#" class="text login-link">Login Now</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hover-up text-center">
                    <img src="assets/images/login/login.jpg" style="width: 95%; height: 100%;object-fit: cover;" alt="">
                </div>
            </div>
        </div>                              
    </section>
    
    <!-- Footer -->
    <div id="footer"></div>
    <!-- Footer End-->

       <!-- Should be add in Every Page -->
       <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load",function(){
            loader.style.display="none";
        })
      </script>

</body>

</html>