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

<section class="pt-80 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Order Tracking</h2>

                        <!-- Order Tracking Dots -->
                        <div class="d-flex justify-content-between mb-4">
                            <div class="order-dot {{ $order->order_status >= 1 ? 'active' : '' }}">Order Placed</div>
                            <div class="order-dot {{ $order->order_status >= 2 ? 'active' : '' }}">Order Shipped</div>
                            <div class="order-dot {{ $order->order_status >= 3 ? 'active' : '' }}">Order Delivered</div>
                        </div>

                        <!-- Order Tracking Card -->
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title">Order Tracking Information</h5>
                                <p class="card-text">Order Status: {{ $order->order_status }}</p>
                                <p class="card-text">Tracking Number: {{ $order->tracking_number }}</p>
                                <!-- Add more tracking information as needed -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .order-dot {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        color: black;
        font-size: 12px;
    }

    .active {
        background-color: #007bff;
    }
</style>


@endsection
