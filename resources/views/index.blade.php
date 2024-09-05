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
    <!-- Floating btn -->
    <!-- <div class="fab-wrapper">
        <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
        <label class="fab" for="fabCheckbox">
          <span class="fab-dots fab-dots-1"></span>
          <span class="fab-dots fab-dots-2"></span>
          <span class="fab-dots fab-dots-3"></span>
        </label>
        <div class="fab-wheel">
          <a class="fab-action fab-action-1 hover-up">
            <p>Business</p>
          </a>
          <a class="fab-action fab-action-2 hover-up">
            <p>Customization</p>
          </a>
              <a class="fab-action fab-action-3 hover-up">
                <p>Live Sale</p>
          </a>
            <a class="fab-action fab-action-4 hover-up">
                <p>Your Products</p>
          </a>
        </div>
      </div> -->

    <!-- Floating btns -->
    <!-- <a href="Business_With_Us.html" class="float hover-up" target="_blank">
        <p class="fs-6">Business With Us</p>
    </a>
    <a href="Customization-2.html" class="float2 hover-up" target="_blank">
        <p class="fs-6">Customization</p>
    </a> -->
    <!-- Floating btns End-->

    <!-- Preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- header -->
    <!-- <div id="header"></div> -->
    <!-- header End -->

    <!-- <div class="overlay_model">
        <div class="modal_home_popup">
            @foreach($ads as $item)
            <button id="close-modal-btn" class="border-0 border border-dark border-2"
                style="position: absolute;top: 0;left: 0;background-color: transparent;">X</button>
            <img src="{{asset('storage/'.$item->banner)}}" class="h-100 w-100" alt="">
            @endforeach
        </div>
    </div>
 -->
    <!-- body -->
    <main class="main">
        <section class="home-slider position-relative">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach($slider as $_slider)
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container-fluid slider_banner p-0 m-0">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-12 slider_pro">
                                @if($_slider->media_type == 'video')
                                    <video width="100%" height="75%" autoplay muted loop >
                                        <source src="{{ asset('storage/'.$_slider->slider_image) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>

                                    <!-- <figure>
                                        <video src="{{ asset('storage/'.$_slider->slider_image) }}" loop muted autoplay
                                            width="100%" height="400px" style="object-fit: cover;"></video>
                                    </figure> -->
                                @else
                                    <img src="{{ asset('storage/'.$_slider->slider_image) }}"
                                    class="h-100" alt="{{ $_slider->alt_tag }}">
                                @endif
                                
                                <!-- <video width="100%" height="100%" loop autoplay muted>
                                    <source src="banner_video.mp4" type="video/mp4">
                                </video> -->

                                <!-- <div class="banner_overlay " style="left: 26% !important;top: 35%;">
                                    <p style="font-size: 50px;font-weight: 400;font-family: Poppins, sans-serif;padding-bottom: 30px;color: black;">The Summer Sale</p>
                                    <p style="font-size: 32px;font-weight: 400;font-family: Poppins, sans-serif;;padding-bottom: 30px;color: black;">Celebrate With Color</p>
                                    <div class="d-flex justify-content-start align-items-center view_detail w-100 hover-up">
                                        <a href="javascript:void(0)" class="d-block m-auto" style="background-color: transparent;color: black;">Shop Now<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>

        <!-- product category -->
        <section class="featured section-padding  py-80 position-relative">
            <div class="mx-3">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="homepage_heading mb-4">Discover Jewelry For Every Story</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach($discover as $item)
                    <div class="col-lg-2 col-md-4 mb-md-3 col-6 mb-lg-0 py-1 fs-6">
                        <a href="{{ url($item->slug) }}">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{asset('storage/'.$item->banner)}}" alt="{{$item->alt}}">
                                <h4 class="bg-1">{{ $item->banner_heading }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- shop_slider -->
        <section class="shop_slider section-padding py-80">
            <div class="">
                <div class="row m-0">
                    <div class="col-lg-12 m-0 p-0">
                        <h3 class="homepage_heading ms-3">{{ $homeSection->mto_section_title }}</h3>
                        <p class="fs-6 mb-4 text--center ms-3">{{ $homeSection->mto_section_tag_line }}</p>

                        <div class="row m-0">
                            <div class="col-lg-6 p-0">
                                <video src="assets/video/11.mp4" loop muted autoplay width="100%"
                                height="100%"></video>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 py-3 ph-md-0 d-flex align-items-start flex-column justify-content-center " style="background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRE2h8-AjCDRTpTM3O6E1rmfBv6iS3R0GaHq2yC0RN_QXomTvh) no-repeat;background-size: cover;">
                                <h3 class="title_shop text-center">{{ $homeSection->mto_section_sub_title }}</h3>
                                <p class="para_shop text-center">{{ $homeSection->mto_section_sub_tag_line }}</p>
                                <div class="py-3 d-flex justify-content-end align-items-center view_detail hover-up mx-auto">
                                    <a href="{{ url('customized-jewelry') }}" class="fs-6">{{ $homeSection->mto_section_btn_title }}<i
                                            class="fa-solid fa-angle-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="popular-categories section-padding py-80">
            <div class="mx-3 wow fadeIn animated">
                <h3 class="homepage_heading uppercase">Most Liked By People</h3>
                <p class="fs-6 mb-4">From The Artist’s Heart To Your Jewelry Box.</p>
                <div class="carausel-4-columns-cover arrow-center position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                        id="carausel-4-columns-arrows"></div>
                    <div class="carausel-4-columns carausel-arrow-center mb-3   "
                        id="carausel-6-columns">
                        @if($mostLiked)
                        @foreach($mostLiked as $_productDetails)
                        <div class="product-cart-wrap my-3 hover-up">
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
                        @endforeach
                        @endif
                        
                    </div>
                </div>
                <div class="py-4 d-flex justify-content-end align-items-center view_detail hover-up">
                    <a href="javascript:void(0)" class="fs-6">View More<i class="fa-solid fa-angle-right ps-2"></i></a>
                </div>
            </div>
        </section>

        <!-- BEST COLLECTIONS -->
        <section class="section-padding py-80">
            <div class="mx-3">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h4 class="homepage_heading uppercase">{{ $homeSection->rlc_section_title }}</h4>
                        <p class="fs-6 mb-4">{{ $homeSection->rlc_section_title }}</p>
                        
                        <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block  must_detail">
                    <div class="border p-0 rounded hover-up pt-0 h-100">
                        <div class="h-100">
                            <img src="{{ asset('storage/'.$homeSection->rlc_section_image_1) }}" alt="" width="500px" height="600px">
                        </div>
                        <div class="text-center" style="background-color:black;border-radius:0 0 5px 5px;margin-top:-10px">
                            <h4 class="py-2 text-light">{{ $homeSection->rlc_section_image_1_title }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 m-auto d-block  must_detail">
                    <div class="border p-0 rounded hover-up pt-0 h-100">
                        <div class="h-100">
                        <video src="assets/video/neckless.mp4" loop muted autoplay width="100%"
                                        height="600px" style="object-fit:cover"></video>
                        </div>
                        <div class="text-center" style="background-color:black;border-radius:0 0 5px 5px;margin-top:-10px">
                            <h4 class="py-2 text-light">{{ $homeSection->rlc_section_image_video_title }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block must_detail">
                        <div class="border p-0 rounded hover-up pt-0 h-100">
                            <div class="h-100">
                            <img src="{{ asset('storage/'.$homeSection->rlc_section_image_2) }}" alt="" width="500px" height="600px">
                            </div>
                            <div class="text-center" style="background-color:black;border-radius:0 0 5px 5px;margin-top:-10px">
                                <h4 class="py-2 text-light">{{ $homeSection->rlc_section_image_2_title }}</h4>
                                </div>
                            </div>
                        </div>
                </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Monthly Best Sell -->
       <section class="section-padding">
            <div class="mx-3 py-80">
                <div class="heading-tab d-flex">
                    <div class="heading-tab-left wow fadeIn animated">
                        <h3 class="homepage_heading mb-4">New & Notable Selling Product</h3>
                    </div>
                    <div class="heading-tab-right wow fadeIn animated">
                        <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one"
                                        aria-selected="true">Rings
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two"
                                        aria-selected="false">Earrings
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three"
                                        aria-selected="false">Necklaces
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-four-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-four-1" type="button" role="tab" aria-controls="tab-four"
                                        aria-selected="false">Bracelets
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns">
                                        @if ($product1) 
                                        @foreach($product1 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
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
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns-2">
                                        @if ($product2)
                                        @foreach($product2 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
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
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns-3">
                                        @if ($product3)
                                        @foreach($product3 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
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
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-four-1" role="tabpanel" aria-labelledby="tab-four-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-4-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns-4">
                                        @if ($product4)
                                        @foreach($product4 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
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
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--MUST HAVE -->
        <section class="Must " style="overflow-x: hidden;">
            <div class="mx-3 py-80">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="homepage_heading">{{ $homeSection->bjp_section_title }}</h5>
                        <p class="fs-6 mb-4">{{ $homeSection->bjp_section_tag_line }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block py-2 must_detail">
                    <div class="border p-0 rounded hover-up pt-0" style="background-color:#f8e7e7;">
                        <div class="">
                            <img src="{{ asset('storage/'.$homeSection->bjp_section_image_1) }}" alt="{{ $homeSection->bjp_section_image_1_alt }}">
                        </div>
                        <div class="text-center">
                            <h3 class="pt-3">{{ $homeSection->bjp_section_image_1_title }}</h3>
                            <h4 class="py-2">{{ $homeSection->bjp_section_image_1_name }}</h4>
                            <div class="d-flex justify-content-start align-items-center view_detail w-100  mb-3">
                                <a href="{{ $homeSection->bjp_section_image_1_link }}" class="d-block m-auto p-1 px-3" style="font-size: 14px;background-color: transparent;color: black;">Shop Now<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 m-auto d-block py-2 must_detail">
                    <div class="border p-0 rounded hover-up pt-0" style="background-color: #e2eff5;">
                        <div class="">
                            <img src="{{ asset('storage/'.$homeSection->bjp_section_image_2) }}" alt="{{ $homeSection->bjp_section_image_2_alt }}">
                        </div>
                        <div class="text-center">
                            <h3 class="pt-3">{{ $homeSection->bjp_section_image_2_title }}</h3>
                            <h4 class="py-2">{{ $homeSection->bjp_section_image_2_name }}</h4>
                            <div class="d-flex justify-content-start align-items-center view_detail w-100  mb-3">
                                <a href="{{ $homeSection->bjp_section_image_2_link }}" class="d-block m-auto p-1 px-3" style="font-size: 14px;background-color: transparent;color: black;">Shop Now<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block py-2 must_detail">
                        <div class="border p-0 rounded hover-up pt-0" style="background-color: #e0dbee;">
                            <div class="">
                                <img src="{{ asset('storage/'.$homeSection->bjp_section_image_3) }}" alt="{{ $homeSection->bjp_section_image_3_alt }}">
                            </div>
                            <div class="text-center">
                                <h3 class="pt-3">{{ $homeSection->bjp_section_image_3_title }}</h3>
                                <h4 class="py-2">{{ $homeSection->bjp_section_image_3_name }}</h4>
                                <div class="d-flex justify-content-start align-items-center view_detail w-100  mb-3">
                                    <a href="{{ $homeSection->bjp_section_image_3_link }}" class="d-block m-auto p-1 px-3" style="font-size: 14px;background-color: transparent;color: black;">Shop Now<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!--  -->
        <section class="donetion py-80">
            <div class="mx-3">
                <div class="row">
                    <h3 class="homepage_heading mb-4">{{ $homeSection->bwu_section_title }}</h3>
                    <div class="col-lg-6 py-3">
                        <div class="row">
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_1) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_1_alt }}">
                            </div>
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_2) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_2_alt }}">
                            </div>
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_3) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_3_alt }}">
                            </div>
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_4) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_4_alt }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-3 d-flex flex-column align-content-center justify-content-center ps-lg-4">
                        <h3 class="title_shop fs-1">{{ $homeSection->bwu_section_sub_title }}</h3>
                        <p class="para_shop py-4">
                            {{ $homeSection->bwu_section_content }}
                        </p>
                        <div class=" d-flex justify-content-sm-start align-items-center view_detail hover-up">
                            <a href="{{ $homeSection->bwu_section_btn_link }}" class="fs-6">{{ $homeSection->bwu_section_btn_title }}<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blogs -->
        <div class="py-80 mx-3">
            <h1 class="homepage_heading text-start">RECENT BLOGS</h1>
            <div class="row">
                @if($lastblog)
                @foreach($lastblog as $_items)
      
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <a href="{{ route('singleblogs', ['id' => $_items->id]) }}">
                    <div class="blog-card m-1 my-3">
                    <div class="card-banner">
                      <p class="category-tag popular">Real Stone</p>
                      <img class="banner-img" src="{{ asset('storage/lastblog_image/'.$_items->lastblog_image) }}" alt='{{ $_items->alt }}'>
                    </div>
                    <div class="card-body">
                      <!-- <p class="blog-hashtag">#Food #Pizza</p> -->
                      <h2 class="blog-title">{{ $_items->banner_heading }}</h2>
                      <p class="blog-description">{!! Str::limit($_items->description, 100) !!}</p>
                      
                      <div class="card-profile">
                        <img class="profile-img" src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpYJQKSoM7S75P_KMRtQHqAAIPh133CSxByw&usqp=CAU' alt=''>
                        <div class="card-profile-info">
                          <h3 class="profile-name">{{ $_items->author }}</h3>
                          <!-- <p class="profile-followers">5.2k followers</p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  </a>
                </div>
              
              @endforeach
              @endif
            </div>
        </div>

        <!-- blogs Slider -->
         
        <!-- Image -->
        <section class="py-80">
            <div class="mx-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="homepage_heading mb-4 uppercase">Customer Gallery</h2>
                    </div>
                </div>
                <div class="row image_show">
                    @if($gellary) 
                    @foreach ($gellary as $gallary) 
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-1 m-auto d-block image_show_hover hover-up">
                        <img src="{{ asset('storage/'.$gallary->image) }}" style="width: 100%;height: 100%;" alt="{{ $gallary->alt }}">
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center align-items-center pt-3 view_detail w-100 hover-up">
                            <a href="javascript:void(0)" class="d-block m-auto fs-6">View More<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
        
        
        
        <!-- Contant -->
        <div class="px-3 pt-80" id="myDiv">
            <h3 class="homepage_heading mb-4">More With us</h3>
            <h2 style="line-height: 34px;">
                Discover Timeless Elegance with Huzurr: Your final Destination for Delicate Jewelry</h2>
            <p class="fs-6 my-2">We at Huzurr think that jewelry serves as more than just a
                design piece. We see it as a reflection of your distinct personality and sense of style. It is an
                enduring expression of beauty and a celebration of unique moments. Huzurr cordially welcomes you to
                embark with us on an adventure where creativity and style collide and each piece of jewelry carries a
                narrative. Enter the captivating world of Huzurr, where jewelry is a poetic representation of your
                beauty and sense of style. For you, every item in our jewelry collection will serve as more than just an
                accessory. Every jewelry item is an exquisite work of art, a masterfully crafted canvas on which the
                true meaning of exquisite jewelry is expressed. Purchase from us to add a wide selection of exquisite
                jewelry to your jewelry collection..</p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">What We Are</h2>
            <p class="fs-6 ">In addition to being an online jewelry retailer, Huzurr is a sophisticated and
                fashionable haven. The exquisite jewelry in our collection is a display of your options. We are
                inextricably linked by an unwavering dedication to the highest standards of quality and an unbridled
                passion for beautiful design. Huzurr presents a line of fashionable jewelry that is both timeless and
                elegant, hand-picked from a variety of designs. Every item represents our commitment to quality
                craftsmanship, guaranteeing that each one is more than just an accessory but rather a part of your
                exquisite ensemble for that special occasion. </p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">Our Product Range</h2>

            <h3 style="line-height: 34px;margin-top: 2.5rem;">Rings</h3>
            <p class="fs-6">Check out our commitment and style in the range of our ring collection. Here
                each piece is a chapter in the story of love and style. From dazzling engagement rings that symbolize
                eternal commitment to statement pieces that express Uniqueness, our collection is a celebration of the
                profound emotions that can be expressed with beautiful rings. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Necklaces</h3>

            <p class="fs-6">A symphony of elegance and glamor that exceeds the ordinary to class. Each of
                our necklace is a masterpiece because effortlessly blending with a touch of charm. Whether you seek a
                subtle accent for everyday wear or a show-stopping piece for special occasions, our selection ensures
                that you find a piece that suits your distinct sense of style.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Earrings</h3>

            <p class="fs-6">Harmonious Blends of Classic and Contemporary Immerse yourself in the artistry
                of our earring collection, In our earing collection classic meets contemporary in a harmonious style.
                From timeless studs that show elegance to modern designs that make a bold statement, our earrings
                provide a diverse look on different occasions. Raise your look with each meticulously crafted earring
                that reflects a perfect balance of tradition and modernity. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Bracelets</h3>

            <p class="fs-6">In our stunning range of bracelets each piece is a masterpiece that is crafted
                with perfection. Whether you prefer the delicate sparkle of gemstones or the piece of precious metals,
                our bracelets are designed to complement your style. </p>

            <h3 style="line-height: 34px;margin-top: 2.5rem;">Birthstones</h3>
            <p class="fs-6">With our 100% genuine birthstones, embark on a mystical adventure. Every
                birthstone is a special illustration of marvels, containing the energy and meaning specific to its birth
                month. Discover the assortment of birthstones, where each gem is a carefully chosen cosmic connection
                that speaks to your uniqueness rather than just a piece of jewelry. </p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">What we offer </h2>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">100% Original Products</h3>
            <p class="fs-6">Step into the world of Huzurr, where authenticity is not just a claim but a
                sparkling reality. Our pride lies in our coveted birthstones and each one is a genuine and unique piece
                with the certification of originality. From the ethereal glow of a moonstone to the fiery brilliance of
                a ruby, every gem tells a story. Revel in the assurance that when you choose Huzurr, you choose
                originality, you choose a promise to bring extraordinary to every piece in our collection.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Quality Assurance</h3>
            <p class="fs-6">At Huzurr, we don't just promise quality, we embody it. Our commitment to
                excellence is non-negotiable. Each jewellery piece is a result of meticulous craftsmanship and undergoes
                a series of rigorous quality checks. From the selection of materials to the final polish, we leave no
                stone unturned to ensure that every detail meets and exceeds the highest standards.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Return Policy</h3>
            <p class="fs-6">Satisfaction is important for every customer, at Huzurr, and we stand behind
                every piece we offer. Explore our hassle-free return policy, developed with our confidence to provide
                the best product. We understand that sometimes choices may change, and we want you to shop with peace of
                mind. If, for any reason, you're not completely satisfied with your purchase, our straightforward return
                process ensures that you can return or exchange your jewelry effortlessly. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Our global presence </h3>
            <p class="fs-6">We at Huzurr have a huge impact that crosses border sales. as we expertly cross
                international boundaries to provide a line of jewelry to every location on the planet. Beyond national
                borders, we are devoted to having a global presence. It is the consequence of our steadfast commitment
                to transforming style into a globally accessible luxury. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Why choose us </h3>
            <p class="fs-6">At Huzurr, every piece made by our master craftsmen is an expression of art, not
                just a skill. Immerse yourself in a realm where jewelry that has been expertly crafted can fulfill your
                dreams. Every item conveys a tale of commitment, accuracy, and a desire to transform emotions into
                wearable works of art. Each piece of jewelry that our artisans create is a wearable work of art because
                every detail is meticulously thought out and expertly crafted. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Elevate Your Jewelry Experience</h3>
            <p class="fs-6">Huzurr invites you to elevate your jewelry experience to new heights. Immerse
                yourself in a world where every piece is more than an accessory. From the initial concept to the final
                creation, our jewelry embodies a commitment to excellence that stands the test of time. Whether you're
                celebrating a special moment or expressing your individuality, Huzurr is your partner in crafting
                memories and making a statement with jewelry that resonates with the essence of you. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Endless Choices</h3>
            <p class="fs-6">Discover a universe of choices at Huzurr, where your individuality takes the
                center of focus. From timeless classics that exude sophistication to modern creations that push the
                boundaries of design, our diverse collection caters to every taste and occasion. Whether you seek the
                understated elegance of traditional designs or the bold allure of contemporary pieces, Huzurr offers an
                extensive range that empowers you to curate a jewelry collection as unique as you are. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Global Trust</h3>
            <p class="fs-6">Become part of a global community that relies on Huzurr for more than just
                jewelry. Our foundation is built on trust, authenticity, and an unwavering commitment to quality.
                Joining hands with us means embracing a brand that prioritizes the authenticity of its products,
                ensuring that each piece is a genuine representation of beauty and craftsmanship. </p>

            <!-- <button >Toggle Height</button> -->
        </div>
        <div class="py-80 pt-0 d-flex justify-content-center my-4 align-items-center view_detail w-100 hover-up">
            <a href="javascript:void(0)" id="readMoreBtn" class="d-block m-auto fs-6" onclick="toggleHeight()">Read
                More<i class="fa-solid fa-angle-right ps-2"></i></a>
        </div>
        <script>
            function toggleHeight() {
                var myDiv = document.getElementById('myDiv');
                var btn = document.getElementById('readMoreBtn');

                myDiv.classList.toggle('expanded');

                if (myDiv.classList.contains('expanded')) {
                    btn.innerText = 'Read Less';
                } else {
                    btn.innerText = 'Read More';
                }
            }
        </script>
        <!-- Contant ENd -->

        <!-- Faq -->
        <section class="faq py-80" style="background-image: url('assets/images/background_image_starts.jpg');">
            <div class="container">
                <h2 class="homepage_heading mb-4">Frequently Asked Questions</h2>
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="faq_section">
                            <div class="accordion_faq">
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="false">
                                        <span class="accordion-title fs-6">Why is the moon sometimes out during the
                                            day?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" aria-expanded="false">
                                        <span class="accordion-title fs-6">Why is the sky blue?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-3" aria-expanded="false">
                                        <span class="accordion-title fs-6">Will we ever discover aliens?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-4" aria-expanded="false">
                                        <span class="accordion-title fs-6">How much does the Earth weigh?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-5" aria-expanded="false">
                                        <span class="accordion-title fs-6">How do airplanes stay up?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq js -->
        <script>
            const items = document.querySelectorAll('.accordion_faq button');

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }

            items.forEach((item) => item.addEventListener('click', toggleAccordion));
        </script>
    </main>
@endsection

@section('js')
        <!-- faq js -->
        <script>
            const items = document.querySelectorAll('.accordion_faq button');

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }

            items.forEach((item) => item.addEventListener('click', toggleAccordion));
        </script>
    


    <script>
        const modal = document.querySelector(".overlay_model");

        setTimeout(function () {
            modal.classList.add("show-modal");
        }, 5000);

        document.querySelector("#close-modal-btn").addEventListener("click", () => {
            modal.classList.remove("show-modal");
            modal.classList.add("hide-modal");
            modal.style.display = "none";
        })
    </script>
@endsection