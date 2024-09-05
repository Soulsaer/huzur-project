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
        <h1 class="display-5 my-5 text-center">Terms & Conditions
        </h1>
        <h2 style="line-height: 34px;">Welcome to Huzurr Jewelry!</h2>
        <p class="fs-6 my-2">Thanks for visiting our store. When you shop with us, you agree to the following terms and conditions. Please read them carefully.</p>

        <h2 style="line-height: 34px;">1. Products and Orders</h2>
        <p class="fs-6 my-2">Product Description: We try our best to show and describe our jewelry as accurately as possible. But colors and details may look different on different screens.
        Order Confirmation: Once you place an order, you’ll get an email confirming we received it. If there’s an issue with your order, we’ll let you know as soon as we can.</p>
        <h2 style="line-height: 34px;">2. Payments</h2>
        <p class="fs-6 my-2">Payment Methods: We accept major credit cards, debit cards, and PayPal. Payments must be made in full at the time of purchase.
        Pricing: Prices are listed in [your currency]. We can change our prices at any time, but the price you see when you order is the price you’ll pay.</p>
        <h2 style="line-height: 34px;">3. Shipping and Delivery</h2>
        <p class="fs-6 my-2">Shipping Time: We’ll pack and ship your order within [number] business days. Delivery times depend on your location.
        Shipping Cost: Shipping costs will be calculated at checkout. We offer free shipping on orders over [amount].
        International Shipping: If you’re outside of [your country], you may have to pay extra taxes or duties. These are your responsibility.</p>
        <h2 style="line-height: 34px;">4. Returns and Exchanges</h2>
        <p class="fs-6 my-2">Return Policy: If you’re not happy with your purchase, you can return it within [number] days for a refund or exchange. Items must be in their original condition and packaging.
        How to Return: Contact us at [email/phone number] to start a return. We’ll give you instructions on how to send the item back.
        Refunds: Once we get your return, we’ll process your refund. It might take a few days to show up on your account.</p>
        <h2 style="line-height: 34px;">5. Privacy</h2>
        <p class="fs-6 my-2">Your Information: We respect your privacy. We’ll use your personal information to process your order and improve your shopping experience. We won’t share your info with anyone else without your permission.</p>
        <h2 style="line-height: 34px;">6. Customer Service</h2>
        <p class="fs-6 my-2">Contact Us: If you have any questions or concerns, please reach out to us at [email/phone number]. We’re here to help!</p>
        <h2 style="line-height: 34px;">7. Changes to These Terms</h2>
        <p class="fs-6 my-2">Updates: We might update these terms from time to time. If we make big changes, we’ll let you know by email or on our website.</p>
        <h2 style="line-height: 34px;">8. Your Consent</h2>
        <p class="fs-6 my-2">Agreement: By using our site and buying our products, you agree to these terms and conditions.</p>
        
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