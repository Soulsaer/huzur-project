@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>
        <section class="pt-80 pb-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="accordion_section">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="fs-6">Fillter</h2>
                                <a href="">Clear All</a>
                            </div>
                            <style>
                                input[type=checkbox]{
                                    width: 10px; 
                                    cursor: pointer;
                                }
                            </style>
                            <div class="accordion">
                              <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">METAL TYPE </span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            White Gold (599)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Yellow Gold (588)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Rose Gold (581)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Platinum (507)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Silver (106)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Two Tone Gold (18)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">GEMSTONE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Blue Sapphire (139)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Aquamarine (110) </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Ruby (95)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Amethyst (94)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Emerald (90)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Diamond (88)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Garnet (81)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Opal (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Opal (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Morganite (69)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">GEMSTONE SHAPE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Round (213)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Oval (170) </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Cushion (62)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Emerald Cut (58)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Pear (42)   </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Cushion Rectangular (13)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Square (13)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Princess (9)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Heart (8)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Square Emerald Cut (5)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">JEWELRY STYLES</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Fashion (273)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Classic (213)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Side Stones (196)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Solitaire (183)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Halo (163)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Stackables (69)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Three Stone (69)    </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Vintage Inspired (61)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Infinity (44)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Two Stone (31)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">CARAT WEIGHT</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Over 3.01 (106)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            1.51 - 3.00 (82)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            0.51-1.00 (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">0.01-0.50 (70)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">1.01 - 1.50 (59)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">JEWELRY TYPES</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">Rings (213)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Bands (98)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Earrings (45)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Pendants (32)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Necklaces (11)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">OCCASION</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">Engagement (310)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Wedding (277)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Promise (23)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">ZODIAC JEWELRY</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">Aquarius (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Aries (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Cancer (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Capricorn (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Gemini (1)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">PEARL SIZE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2"> 8mm (59)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">10mm (40)    </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            0.51-1.00 (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">9mm (31)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">7mm (19)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2"> 6mm (12)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">73mm (3)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">PRICE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">$1,000 & Under(252)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$1,000 - $2,000
                                            (337)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$2,000 - $3,000
                                            (331)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$3,000 - $4,000
                                            (271)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$4,000 - $5,000
                                            (235)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$5,000 & Over
                                            (380)</span>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">688</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="d-flex align-items-center">
                                    <div class="sort-by-cover my-2">
                                        <div class="sort-by-product-wrap">
                                            <div class="sort-by">
                                                <span><i class="fa-solid fa-sort"></i>Sort by:</span>
                                            </div>
                                            <div class="sort-by-dropdown-wrap">
                                                <span> Featured <i class="fa-solid fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sort-by-dropdown">
                                            <ul>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">Price: Low to High</a></li>
                                                <li><a href="#">Price: High to Low</a></li>
                                                <li><a href="#">Release Date</a></li>
                                                <li><a href="#">Avg. Rating</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom content_video">
                                            <a href="shop-product-right.html">
                                                <img class="image_video" src="assets/images/product_catecary_ring1.webp" alt="">
                                                <!-- <img class="hover-img" src="assets/images/product_catecary_ring1_1.webp" alt=""> -->
                                                <video class="video_video" style="display:none;" width="100%" height="240px" loop>
                                                    <source src="v.mp4" autoplay="true" muted="muted" type="video/mp4" />
                                                </video>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Aquamarine and Diamond Twisted Vine Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom content_video">
                                            <a href="shop-product-right.html">
                                                <img class="image_video" src="assets/images/product_catecary_ring2.webp" alt="">
                                                <!-- <img class="hover-img" src="assets/images/product_catecary_ring2_1.webp" alt=""> -->
                                                <video class="video_video" style="display:none;" width="100%" height="240px" loop>
                                                    <source src="v.mp4" autoplay="true" muted="muted" type="video/mp4" />
                                                </video>
                                            </a>
                                        </div>
                    1                   <!--<div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div> -->
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="javscript:void(0)" class="product-title">Solitaire Oval Opal Criss Cross Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom content_video">
                                            <a href="shop-product-right.html">
                                                <img class="image_video" src="assets/images/product_catecary_ring3.webp" alt="">
                                                <!-- <img class="hover-img" src="assets/images/product_catecary_ring3_1.webp" alt=""> -->
                                                <video class="video_video" style="display:none;" width="100%" height="240px" loop>
                                                    <source src="v.mp4" autoplay="true" muted="muted" type="video/mp4" />
                                                </video>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html" class="product-title">Solitaire Emerald Infinity Knot Ring Infinity Knot Ring</a></span>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring4.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring4_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Oval Solitaire Opal Cocktail Ring Infinity Knot Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring5.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring5_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Princess Diana Inspired Blue Sapphire Ring with Diamond</a></span>
                                        <div class="product-price">
                                            <span>$909  </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring6.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring6_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Solitaire Freshwater Pearl Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring7.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring7_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Opal and Diamond Split Shank Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring8.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Cushion Garnet Solitaire Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring9.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring9_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Rectangular Cushion Morganite Halo Engagement</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring10.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring10_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Solitaire Diamond Twist Shank Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring11.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring11_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Prong-Set Oval Opal Halo Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring12.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring12_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Freshwater Pearl Twist Shank Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring13.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring13_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Rectangular Cushion Morganite Halo Engagement</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring14_1.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring14.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Solitaire Diamond Twist Shank Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring15.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring15_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Prong-Set Oval Opal Halo Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring16.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring16_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Freshwater Pearl Twist Shank Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-categories section-padding pt-80 pb-40">
            <div class="mx-3 wow fadeIn animated">
                <h3 class="section-title">#CelebrateWithColor</h3>
                <p class="pb-3">Keep up with @angarajewelry making colorful noise in the world.</p>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_1" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_2" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_3" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_imagwe" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_5" width="100%" alt="img">
                                <img src="" alt="">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_6" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- -----------------------------------------------------------------------------Model For Galaery------------------------------------------------------------------------- -->

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"     >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Product Galary</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/cele_image_6" width="500px" height="400px" alt="img">
            </div>
            <div class="col-lg-6"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection