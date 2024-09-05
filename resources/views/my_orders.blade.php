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
<?php
// dd($product); 
?>
   <main class="main" style="background-color: #fff;">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span>Prong Set Princess-Cut Diamond Split Shank Promise Ring
                </div>
            </div>
        </div>
        <style>
        img {
            max-width: 100%;
          }
          input[type="range"] {
          -webkit-appearance: none;
          appearance: none;
          width : 300px;
          height: 15px;
          background: linear-gradient(
            to right,
            #E5C9C6,
            #D4B2A8,
            #C29D94,
            #9C7065,
            #85574A
          );
          border-radius: 20px;
          transform: rotate(90deg);
        }
        
        
        input[type="range"]::-webkit-slider-thumb {
          -webkit-appearance: none;
          appearance: none;
          width: 10px; /* Set the width of the thumb */
          height: 10px; /* Set the height of the thumb */
          background: #fff; /* Set the color of the thumb */
          border: 2px solid #000; /* Add a border to the thumb */
          border-radius: 50%; /* Make the thumb circular */
          cursor: pointer; /* Adjust the margin to center the thumb vertically */
        }
        
        input[type="range"]::-moz-range-thumb {
          width: 20px; /* Set the width of the thumb */
          height: 30px; /* Set the height of the thumb */
          background: #fff; /* Set the color of the thumb */
          border: 2px solid #000; /* Add a border to the thumb */
          border-radius: 50%; /* Make the thumb circular */
          cursor: pointer; /* Adjust the margin to center the thumb vertically */
        }
        
        </style>
        <!-- <script src="assets/js/main.js"></script> -->
        <section class="pt-80 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <h2>Order Listing</h2>
    
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order Name</th>
                                            <th>Order Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->product->name }}</td>
                                                <td>
                                                    @if($row->order_status == 1)
                                                        Order Placed
                                                    @elseif($row->order_status == 2)
                                                        Order Shipped
                                                    @elseif($row->order_status == 3)
                                                        Order Delivered
                                                    @else
                                                        Order Pending
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('order.track', ['order_id' => $row->id]) }}" class="btn btn-info">Track Order</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </section>
    </main>

@endsection