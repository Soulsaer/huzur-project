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

    <div class="container mt-5" id="">
        <h1 class="display-5 my-5 text-center">Shipping Policy
        </h1>
        <h2 style="line-height: 34px;">What Is The Charge Of Shipping?
        </h2>
        <p class="fs-6 my-2">Huzurr is pleased to offer free shipping on all orders! Enjoy the convenience of having
            your favorite jewelry items delivered to your doorstep without any additional shipping charges. Our
            commitment to providing a seamless shopping experience includes making sure you don't have to worry about
            shipping fees. Shop with confidence and explore our exquisite collection today!
            <br>
        </p>

        <h2 style="line-height: 34px;margin-top: 2.5rem;">How To Track Your Order?
        </h2>
        <p class="fs-6 ">Alternatively, visit our dedicated "Track Your Order" page on our website.Enter your registered
            email or Order ID number to access real-time tracking information for your shipment.

        </p>

        <h2 style="line-height: 34px;margin-top: 2.5rem;">What is your return policy?
        </h2>
        <p class="fs-6 pb-5">
            To view <a href="https://www.huzurr.com/return-policy">return policy , please click here. </a><br>
        </p>
        </main>
    </div>

@endsection

@section('js')

        <!-- Should be add in Every Page -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>

            jQuery(document).ready(function ($) {
                var $slickElement = $('.slideshow');

                $slickElement.slick({
                    autoplay: true,
                    dots: false,
                });

            });

        </script>

@endsection