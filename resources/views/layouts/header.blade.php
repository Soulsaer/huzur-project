<!-- <script>
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

</script> -->
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block" style="background-color: black !important;">
        <div class="row m-0  align-items-center ">
            <marquee class="text-light">
                Get great devices up to 50% off <a href="#" class="text-light">View details</a>
            </marquee>
        </div>
    </div>
    <div class="header-middle py-2 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div style="width:50%;display:flex">
                    <div class="customer-support b1" aria-label="Customer Support" style="padding-right:5px">24/7 Customer Support</div>
                    <div class="contact-details" style="border-left: 2px solid;padding-left: 5px;"><a class="call b1 animated-title notranslate" target="_blank" href="/b/contact-us" aria-label="+1-844-527-4367 - open in a new tab" data-uw-rm-ext-link="" uw-rm-external-link-id="#" data-uw-rm-brl="PR" data-uw-original-href="#">+919610000114</a></div>
                </div>
                <div class="header-right text-center">
                        <div class="">
                        <a href="{{ url('/') }}">
                        <!-- <h2 class="brand_logo">Huzuur</h2> -->
                        <img src="{{asset('assets/images/logo.png')}}" width="110px" alt="">
                    </a>
                        </div>
                      </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                        <input type="text" placeholder="Search . . ." required>
                            <div class="header-action-icon-2">
                                <a href="{{ route('wishlist')}}">
                                    <i class="fa-regular fa-heart fs-5"></i>
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('cart')}}">
                                    <!-- <img alt="Evara" src="{{asset('assets/images/icons/icon-cart.svg')}}"> -->
                                    <i class="fa fa-shopping-cart fs-5"></i>
                                    <span class="pro-count blue">2</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="{{route ('userlogin')}}"><i class="fa-regular fa-user fs-5"></i></a>
                            </div>
                            <!-- <div class="header-action-icon-2">
                                <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none d-xl-none">
                    <a href="{{ url('/') }}">
                        <h2 class="brand_logo"><img src="assets/images/fav_logo.png" class="img-fluid" alt=""></h2>
                    </a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <div class="align-self-center">
                                    <a href="{{ url('/') }}">
                                        <img id="image" src="assets/images/fav_logo.png" width="90px" class="mt-2 me-4"
                                            style="display: none;" alt="">
                                    </a>
                                </div>
                                <script>
                                    window.addEventListener('scroll', function () {
                                        var scrollPosition = window.scrollY;
                                        var image = document.getElementById('image');

                                        if (scrollPosition > 200 && image.style.display === 'none') {
                                            image.style.display = 'block';
                                        } else if (scrollPosition <= 100 && image.style.display === 'block') {
                                            image.style.display = 'none';
                                        }
                                    });
                                </script>
                                @foreach($formatTreeCategory as $treeCategory)  
                                        <li class="position-static" style="text-transform: uppercase;"><a href="{{ route($treeCategory->url) }}">{{$treeCategory->name}}  <i class="fa-solid fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                            @if(isset($treeCategory->children))
                                            @foreach($treeCategory->children as $treeCategoryChildren)
                                                @if($treeCategoryChildren->children->isEmpty())
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="javascript:void(0)">{{$treeCategoryChildren->name}}</a>
                                                    <ul>
                                                        
                                                        
                                                        @foreach($subChieldcategory as $_subChieldcategory)
                                                            @if($treeCategory->id == $_subChieldcategory->parent_category && $treeCategoryChildren->id == $_subChieldcategory->sub_category)
                                                                <li>
                                                                    <a href="{{ route('child_category_details', ['slug' => $treeCategory->url, 'child_slug' => $_subChieldcategory->url]) }}">
                                                                        <img src="{{ asset('storage/category_img/' . $_subChieldcategory->image) }}" class="stone_shape" alt="">
                                                                        {{ $_subChieldcategory->name }}
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach

                                                        
                                                        
                                                        

                                                    </ul>   
                                                </li>
                                                @endif
                                            @endforeach
                                            @endif
                                                
                                            </ul>
                                        </li>
                                        @endforeach
                                <!-- <li>
                                    <a href="{{ route('buy-Only-Gamstones') }}">BUY GEMS</i></a>
                                </li> -->
                                <li>
                                    <div>
                                        <a href="{{ route('business_us') }}" class="bg-dark text-light p-2 rounded">Business With us</i></a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a  href="{{ route('customizaton') }}" class="bg-dark text-light p-2 rounded">Customization</i></a>
                                    </div>
                                </li>
                                <!-- <li><a href="javascript:void(0)">MORE<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="your_Donations.html">Your Donation</i></a>
                                        </li>
                                        <li>
                                            <a href="customizaton.html">Customizaton</i></a>
                                        </li>
                                       
                                    </ul>
                                </li> -->
                                <!-- <li><a href="javascript:void(0)">GIFT<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="your_Donations.html">Under 10$</i></a>
                                        </li>
                                        <li>
                                            <a href="customizaton.html">Under 20$</i></a>
                                        </li>
                                       
                                    </ul>
                                </li> -->
                                <!-- <a href="Business_With_Us.html"
                                    class="border rounded px-2 rounded py-2 text-light fw-bold  align-self-center"
                                    style="background-color: black;">BUSINESS WITH US</i></a>
                                <a href="Customization-2.html"
                                    class="border rounded px-2 py-2 text-light rounded fw-bold  ms-3 align-self-center"
                                    style="background-color: black;;">CUSTOMIZED JEWELRY</i></a> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Evara" src="assets/imgs/theme/icons/icon-heart.svg">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="shop-cart.html">
                                <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara"
                                                    src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara"
                                                    src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart.html">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="header-action-icon-2 d-block d-lg-none">
                            <a href=""><i class="fa-regular fa-user"></i></a>
                        </div> -->
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="profile-icon">
                                <a href="login.html"><i class="fa-regular fa-user"
                                        style="font-size: 16px; color: #000;"></i></a>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ url('/') }}">
                    <h2 class="brand_logo"><img src="assets/images/fav_logo.png" alt=""></h2>
                </a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span>
                            <a href="#">RINGS</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">NECKLACES </a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">EARRINGS</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">OCCASION </a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Wedding</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Engagement</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">BRACELETS</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="javascript:void(0)">COLLECTIONS </a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0)">ALL COLLECTIONS</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="page-contact.html"> Our location </a>
                </div>
                <!-- <div class="single-mobile-header-info">
                    <a href="page-login-register.html">Log In / Sign Up </a>
                </div> -->
                <div class="single-mobile-header-info">
                    <a href="#">(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>