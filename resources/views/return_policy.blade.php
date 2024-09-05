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


    <div class="container mt-5 mb-5" id="">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 my-5 text-center">Return Policy
                </h1>
                <h2 style="line-height: 34px;">Returns Eligibility:

                </h2>
                <p class="fs-6 my-2">Items must be unused and in the same condition as received. <br>
                    Items must be returned within 21 days of the delivery date. <br>
                    Custom or personalized orders are non-refundable.

                </p>

                <h2 style="line-height: 34px;margin-top: 2.5rem;">Return Process:

                </h2>
                <p class="fs-6 ">Contact us at help@huzurr.com to initiate a return. <br>
                    Provide your order number, reason for return, and any relevant details. <br>
                    Wait for approval and further instructions before returning the item.


                </p>

                <h2 style="line-height: 34px;margin-top: 2.5rem;">
                    Refund/Exchange Procedure:

                </h2>
                <p class="fs-6 ">Once the returned item is received and inspected, we will notify you of the approval or
                    rejection of your refund or exchange. <br>
                    If approved, refunds will be processed to the original payment method. <br>
                    Exchanges will be processed, and the replacement item will be shipped to you.


                </p>
                <h2 style="line-height: 34px;margin-top: 2.5rem;">
                    Return Shipping:


                </h2>
                <p class="fs-6 ">Customers are responsible for return shipping costs unless the return is due to our error. <br>
                    For exchanges, we will cover the shipping costs of sending the replacement item.



                </p>
                <h2 style="line-height: 34px;margin-top: 2.5rem;">Damaged or Defective Items:</h2>
                <p class="fs-6 ">If you receive a damaged or defective item, please contact us immediately with photos and
                    details. <br>
                    We will provide instructions for returning the item or arrange for a replacement.</p>

                <h2 style="line-height: 34px;margin-top: 2.5rem;">Non-Returnable Items:</h2>
                <p class="fs-6 ">Certain items, such as custom-made jewelry, are non-returnable unless defective.</p>

                <h2 style="line-height: 34px;margin-top: 2.5rem;">Late or Missing Refunds:

                </h2>
                <p class="fs-6 ">If you haven’t received a refund yet, please check your bank account or contact your credit
                    card company. <br>
                    If the issue persists, contact us at help@huzurr.com or +919610000114.
                </p>
                <h2 style="line-height: 34px;margin-top: 2.5rem;">Cancellations:


                </h2>
                <p class="fs-6 ">Please note that our shop does not accept order cancellations. Once an order is placed, it is
                    processed promptly to ensure timely delivery. We encourage customers to review their orders carefully before
                    confirming. For any concerns or issues, please refer to our Returns and Exchanges policy.

                </p>
                <h2 style="line-height: 34px;margin-top: 2.5rem;">Policy Changes:

                </h2>
                <p class="fs-6 ">We reserve the right to update or change our Returns and Exchanges policy at any time.


                </p>
                <p class="fs-6  my-5"><span>Note:-</span>  When a buyer purchases $100 and more from our store, his or her order ships free and
                    as quickly as possible.</p>
            </div>
        </div>

    </div>

@endsection

@section('js')
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