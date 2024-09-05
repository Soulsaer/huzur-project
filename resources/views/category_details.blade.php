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
                    <a href="{{ url('/') }}" rel="nofollow">Home</a>
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
                                <p> We found <strong class="text-brand">{{ count($productDetails) }}</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="d-flex align-items-center">
                                    <!-- <div class="sort-by-cover mr-10 my-2">
                                        <div class="sort-by-product-wrap me-2">
                                            <div class="sort-by">
                                                <span><i class="fa-regular fa-grid-2"></i>Show:</span>
                                            </div>
                                            <div class="sort-by-dropdown-wrap">
                                                <span> 50 <i class="fa-solid fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sort-by-dropdown">
                                            <ul>
                                                <li><a href="#">50</a></li>
                                                <li><a href="#">100</a></li>
                                                <li><a href="#">150</a></li>
                                                <li><a href="#">200</a></li>
                                                <li><a href="#">All</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
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
                            @if ($productDetails)
                            @foreach($productDetails as $_productDetails)
                          
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}">
                                                   
                                                <img class="default-img" src="{{asset('storage/'.$_productDetails->product_image)}}" alt="">
                                                <img class="hover-img" src="{{asset('storage/'.$_productDetails->second_image)}}" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                         
                                        <span>
                                            <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}"  class="product-title"><!-- {{$_productDetails->name}} -->
                                             {{ \Illuminate\Support\Str::limit($_productDetails->name, $limit = 40, $end = '...') }}
                                            </a></span>
                                         
                                        <div class="product-price">
                                            <span>$ {{$_productDetails->special_price}} </span>
                                            <span class="old-price">$ {{$_productDetails->price}}</span>
                                        </div>   
                                        <div class="product-action-1 pt-3 show">
                                            <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a> -->
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('add.to.cart', $_productDetails->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!--pagination-->
                        <!-- <style>
                           
                            .page-item.active .page-link {
                                background: #000;
                                color: #fff !important;
                            }
                            .page-link {
                                position: relative;
                                display: block;
                                color: #000;
                                text-decoration: none;
                                background-color: #fff;
                                border: 1px solid #000;
                                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                            }
                            .page-link:hover {
                                position: relative;
                                display: block;
                                color: #fcbba4;
                                text-decoration: none;
                                background-color: #000;
                                border: 1px solid #dee2e6;
                                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                            }
                        </style> -->
                        <!-- <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
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
                        </div> -->
                        @if($productDetails && count($productDetails) > 0)
                        {!! $productDetails->links() !!}
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-categories section-padding pt-80 pb-40">
            <div class="container wow fadeIn animated">
                <h3 class="section-title">#CelebrateWithColor</h3>
                <p class="pb-3">Keep up with making colorful noise in the world.</p>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="/assets/images/cele_image_1" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="/assets/images/cele_image_2" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="/assets/images/cele_image_3" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="/assets/images/cele_imagwe" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="/assets/images/cele_image_5" width="100%" alt="img">
                                <img src="" alt="">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="/assets/images/cele_image_6" width="100%" alt="img">
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
    
        <div class="container my-5">
            <h2 class="text-center pb-20 fs-3">Contant</h2>
            <p class="fs-6 text-center myDiv" id="myDiv" >{!! $content !!}</p>
            <div class="d-flex justify-content-center align-items-center pt-3 view_detail w-100 hover-up">
                <a href="javascript:void(0)" class="d-block m-auto" onclick="toggleHeight()">Read More<i class="fa-solid fa-angle-right ps-2"></i></a>
            </div>
             <!-- <button >Toggle Height</button> -->
             <div>
                <img src="/linedesign.png"  alt="loghhk">
            </div>
        </div>
    @endsection