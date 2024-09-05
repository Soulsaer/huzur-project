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
                    <span></span> Wishlist
                </div>
            </div>
        </div>
        <!--  -->
        <section class="pt-80 pb-20">
            <div class="mx-3">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10 col-10 justify-content-center">
                        <div class="product-cart-wrap my-3 hover-up   m-auto">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product_details.html">
                                        <img class="default-img" src="assets/images/Rings/rings4.jpg"
                                            alt="">
                                        <img class="hover-img" src="assets/images/Rings/rings4_1.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <span><a href="product_details.html" style="font-size: 16px;">Pandora Moments T-Bar Snake Chain Bracelet</a></span>
                                <div class="d-flex justify-content-between my-2">
                                    <span style="font-size: 14px;color: black;font-weight: 400">$85.00</span>
                                    <span style="font-size: 14px;color: white;font-weight: 400;" class="px-2  me-2 rounded text-dark border border-dark">In Stock</span>
                                </div>
                                <div class="view_detail  hover-up mt-4 text-center">
                                <a href="javascript:void(0)" style="font-size: 14px;background-color: white;color: black;" >Add To Cart<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection