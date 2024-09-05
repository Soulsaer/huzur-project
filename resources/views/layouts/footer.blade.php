<footer class="">
    <section class="newsletter py-3 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col my-4 my-md-0 des">
                            <h5 class="ms-3 mb-0" style="font-weight: 400;font-size: 16px;">You’re invited! Join our
                                mailing list to get 12% off your first order, new launches and more!</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control w-100 bg-white font-small"
                            placeholder="Enter your email">
                        <div class="d-flex justify-content-end align-items-center view_detail">
                            <a href="javascript:void(0)" class="px-3 fs-6">Subscribe</a>
                        </div>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid d-none d-sm-none d-md-block" style="background-color: black !important;">
        <div class="container pt-15 pb-20">
            <div class="footer_main">
                <div class="footer_content">
                    <img src="{{asset('assets/images/logo0.png')}}" width="60%" alt="">
                    <p class="mt-3 fs-6 w-75 text-light">A Jewellery fashion space for all. Unleash the beauty of
                        jewellery and
                        enhance .</p>
                </div>
                <div class="footer_content">
                    <h4>CATEGORIES</h4>
                    <ul class="footer-list">
                        <li><a href="{{ url('rings') }}">Rings</a></li>
                        <li><a href="{{ url('gemstones') }}">Gemstones</a></li>
                        <li><a href="{{ url('necklaces') }}">Necklace</a></li>
                        <!-- <li><a href="{{ url('bangles') }}">Bangles</a></li> -->
                        <li><a href="{{ url('earrings') }}">Earrings</a></li>
                        <li><a href="{{ url('bracelets') }}">Bracelets</a></li>
                    </ul>
                </div>
                <div class="footer_content">
                    <h4>OUR COMPANY</h4>
                    <ul class="footer-list">
                        <li><a href="{{ route('about_us') }}">About Us</a></li>
                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <!-- <li><a href="{{ route('orders') }}">Track My Order</a></li>
                        <li><a href="{{ route('orders') }}">My Order</a></li> -->
                        <li><a href="{{ route('shipping_policy') }}">Shipping Policy</a></li>
                        <li><a href="{{ route('return_policy') }}">Return/Exchange Policy</a></li>
                        <li><a href="{{ url('privacy-policy') }}">Privacy  Policy</a></li>
                        <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                        <li><a href="{{ route('donation') }}">Donation</a></li>
                        <li><a href="{{ route('your-donations') }}">Your Donation</a></li>
                    </ul>
                </div>
                <div class="footer_content">
                    <h4>International Shops</h4>
                    <ul class="footer-list">
                        <!-- <li>
                            <a href="donation.html">Getsby</a>
                        </li>
                        <li>
                            <a href="Business_With_Us.html">Angara</a>
                        </li> -->
                        @foreach($international_shop as $_shop)
                        <li class="d-flex">
                            <img src="{{asset('storage/shop_image/'.$_shop->image)}}" width="18px" height="18px" class="me-2 align-self-center" alt="{{ $_shop->alt_tag }}">
                            <a href="{{ $_shop->link }}">{{ $_shop->name }}</a>       
                        </li>
                  
                      @endforeach
                    </ul>
                </div>
                <div class="footer_content">
                    <h4>Customer Support</h4>
                    <div>
                        <span class="text-light"><i class="fa-solid fa-phone-volume pe-2 py-2"></i>+123456789</span>
                    </div>
                    <div>
                        <span class="text-light"><i
                                class="fa-solid fa-envelope pe-2 text-light fa-1x py-2"></i>admin2gmail.com</span>
                    </div>
                    <div>

                    </div>
                    <div>
                        <h6 class="fs-6 pb-3 pt-4 mt-3 text-light">Follow On</h6>
                        <a href="https://www.facebook.com/huzurrjewelry/" ><i class="fs-4 hover-up fa-brands fa-facebook text-light"></i></a>
                        <a href="https://www.instagram.com/huzurrjewels/" ><i class="fs-4 hover-up fa-brands fa-instagram text-light"></i></a>
                        <a href="https://twitter.com/huzurrjewelry" ><i class="fs-4 hover-up fa-brands fa-twitter text-light"></i></a>
                        <a href="https://www.youtube.com/@Huzurrjewelry" ><i class="fs-4 hover-up fa-brands fa-youtube text-light"></i></a>
                        
                        <!-- <a href="https://www.linkedin.com/company/huzurr/" ><i class="fs-4 hover-up fa-brands fa-linkedin"></i></a>
                        <a href="#" ><i class="fs-4 hover-up fa-brands fa-pinterest"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer_mobile_menu_wrapper_faq d-block d-sm-inline-block d-md-none d-lg-none"
        style="background-color: black !important;">

        <button class="footer_mobile_menu main-acc one">Ordering and Payment</button>
        <div class="panel main-panel">
            <button class="footer_mobile_menu_1 sub-acc">How do I place an order?</button>
            <button class="footer_mobile_menu_1 sub-acc">What payment methods do you accept?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I change or update my order?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I cancel an order?</button>
        </div>
        <button class="footer_mobile_menu main-acc one">Ordering and Payment</button>
        <div class="panel main-panel">
            <button class="footer_mobile_menu_1 sub-acc">How do I place an order?</button>
            <button class="footer_mobile_menu_1 sub-acc">What payment methods do you accept?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I change or update my order?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I cancel an order?</button>
        </div>
        <button class="footer_mobile_menu main-acc one">Ordering and Payment</button>
        <div class="panel main-panel">
            <button class="footer_mobile_menu_1 sub-acc">How do I place an order?</button>
            <button class="footer_mobile_menu_1 sub-acc">What payment methods do you accept?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I change or update my order?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I cancel an order?</button>
        </div>
        <button class="footer_mobile_menu main-acc one">Ordering and Payment</button>
        <div class="panel main-panel">
            <button class="footer_mobile_menu_1 sub-acc">How do I place an order?</button>
            <button class="footer_mobile_menu_1 sub-acc">What payment methods do you accept?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I change or update my order?</button>
            <button class="footer_mobile_menu_1 sub-acc">How do I cancel an order?</button>
        </div>




    </div>



    <!-- <section class="section-padding footer-mid" style="background-color: #f7e3dc;">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                   
                        <h5 class="widget-title wow fadeIn animated">Customer Service</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Product &amp; ConditionsCare</a></li>
                            <li><a href="#">Online & Instore Prices</a></li>
                            <li><a href="#">Warranty</a></li>
                        </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Store Locator</a></li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-6">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="container-fluid pb-20 px-5 wow fadeIn animated"
        style="background-color: black; border-top: 1px solid white;">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom border-light  "></div>
            </div>
            <div class="col-lg-12">
                <p class="float-md-left font-sm text-light mb-0 text-center">&copy; 2023, <strong
                        class="text-brand"></strong>ALL
                    RIGHTS RESERVED.

                </p>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/counterup.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.vticker-min.js"></script>
<script src="assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="./assets/js/main.js?v=3.4"></script>
<script src="./assets/js/shop.js?v=3.4"></script>

<script>
    var acc = document.getElementsByClassName("footer_mobile_menu");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var parent = this.parentElement;
            var panel = this.nextElementSibling;
            var mainPanel = document.querySelector(".main-panel");
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                // panel.style.border = "none";
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                parent.style.maxHeight =
                    parseInt(parent.style.maxHeight) + panel.scrollHeight + "px";
            }
        });
    }


    const hamburger = document.querySelector(".hamburger-menu");
    const navLinks = document.querySelector(".nav-links");

    hamburger.addEventListener("click", function () {
        navLinks.classList.toggle("show");
    });
</script>


<script>
    // Get all elements with class product-img
    const productImages = document.querySelectorAll('.content_video');

    // Loop through each product image
    productImages.forEach(productImage => {
        const image = productImage.querySelector('.image_video');
        const video = productImage.querySelector('.video_video');

        productImage.addEventListener('mouseover', function () {
            image.style.display = "none";
            video.style.display = "block";
        });

        productImage.addEventListener('mouseleave', function () {
            image.style.display = "block";
            video.style.display = "none";
        });

        video.addEventListener('mouseover', function () {
            this.muted = true;
            this.load();
            this.play();
        });

        video.addEventListener('mouseleave', function () {
            this.currentTime = 0;
            this.pause();
            this.style.display = "none";
            image.style.display = "block";
        });
    });
</script>