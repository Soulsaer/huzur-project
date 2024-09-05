@extends('layouts.app')

@section('style')
<style type="text/css">
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

@endsection
@section('content')



   <main class="main" style="background-color: #fff;">
        <div class="page-header breadcrumb-wrap" style="background-color: #000;">
            <div class="container">
                <div class="breadcrumb" class="text-light">
                    <a href="index.html" class="text-light" rel="nofollow">Home /</a>
                    <span class="p-0 text-light">Fashion /</span>
                    <span class="p-0 text-light">Prong Set Princess-Cut Diamond Split Shank Promise Ring</span>
                </div>
            </div>
        </div>
      
        <section class="pt-50 mb-50">
            <div>
                <div class="row m-0 ">
                    <div class="col-lg-12">
                        <div class="product-detail accordion-detail">
                            <div class="content-container mb-50">
                                <div class="content hide-scroll-bar">
                                    <div class="row m-0 ">
                                        <div class="col-lg-6 my-2" style="height: 400px;">
                                            <div class="product-image-slider bg-light">
                                                <figure class="border-radius-10 ">
                                                    <img src="{{asset('storage/'.$product->product_image)}}" class="h-100" alt="product image">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-2" style="height: 400px;">
                                            <div class="product-image-slider bg-light">
                                                <figure class="border-radius-10 ">
                                                    <video src="{{asset('storage/'.$product->video)}}" loop muted autoplay
                                                        width="100%" height="400px" style="object-fit: cover;"></video>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-2" style="height: 400px;">
                                            <div class="product-image-slider bg-light">
                                                <!-- <figure class="border-radius-10 ">
                                                    <img src="{{asset('storage/'.$product->second_image)}}" class="h-100" alt="product image">
                                                </figure> -->

                                            <!-- <div style="position:relative; width: 500px; background-color: white;height: 680px;">
                                                <img src="{{ asset('assets/ring.png') }}" style="position: absolute;top: 0;left:0; z-index: 95;margin-top: 20%;" alt="">
                                                <img id="skinToneImage" src="hand_light.png" alt="Skin Tone Image" style="margin-top: 20%">
                                                <input type="range" min="0" max="100" value="0" id="skinToneRange" style=" transform: rotate(90deg); position: absolute;top: 60%;right: -116px;">
                                            </div> -->
                                            <div style="position:relative; background-color: white;height: 680px;">
                                                <img src="{{ asset('assets/earring.png') }}" style="position: absolute;top: 0;left:0; z-index: 99;" alt="">
                                                <img id="skinToneImage" src="{{ asset('assets/light.jpeg') }}" alt="Skin Tone Image">
                                                <input type="range" min="0" max="100" value="0" id="skinToneRange" style=" transform: rotate(90deg); position: absolute;top: 50%;right: -116px;">
                                              </div>
                                              <!-- <div style="position:relative; width: 500px; background-color: white;height: 680px;">
                                                <img src="{{ asset('assets/braslet.png') }}" style="position: absolute;top: 0;left:0; z-index: 99;" alt="">
                                                <img id="skinToneImage" src="wrist_light.png" alt="Skin Tone Image">
                                                <input type="range" min="0" max="100" value="0" id="skinToneRange" style=" transform: rotate(90deg); position: absolute;top: 50%;right: -116px;">
                                              </div> -->
                                              
                                              <!-- <div style="position:relative; width: 500px; background-color: white;height: 680px;">
                                                <img src="{{ asset('assets/neckless.png') }}" style="position: absolute;top: 0;left:0; z-index: 99;" alt="">
                                                <img id="skinToneImage" src="neck_light.png" alt="Skin Tone Image" >
                                                <input type="range" min="0" max="100" value="0" id="skinToneRange" style=" transform: rotate(90deg); position: absolute;top: 50%;right: -116px;">
                                              </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-2" style="height: 400px;">
                                            <div class="product-image-slider bg-light">
                                                <figure class="border-radius-10 ">
                                                    <img src="{{asset('storage/'.$product->test_one)}}" class="h-100"
                                                        alt="product image">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-2" style="height: 400px;">
                                            <div class="product-image-slider bg-light">
                                                <figure class="border-radius-10 ">
                                                    <img src="{{asset('storage/'.$product->test_two)}}" class="h-100"
                                                        alt="product image">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-2" style="height: 400px;">
                                            <div class="product-image-slider bg-light">
                                                <figure class="border-radius-10 ">
                                                    <img src="{{asset('storage/'.$product->test_three)}}" class="h-100"
                                                        alt="product image">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-sidebar">
                                    <div class="detail-info content-navigation">
                                        <h2 class="title-detail fs-4  mt-2 " style="line-height: 26px;">{{$product->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <!-- <span> 3 sold in last 17 hours<a href="javascript:void(0)"></a></span> -->
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand" style="color: black !important;">${{$product->special_price}}
                                                    </span></ins>
                                                <ins><span class="old-price font-md ml-15">${{$product->price}}</span></ins>
                                                @php 

                                                    $per = ($product->special_price / $product->price) * 100;

                                                @endphp
                                                <span class="save-price  font-md color3 ml-15">{{ intval(100 - $per) }}% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-10 mb-10"></div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <!-- <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crow m-0  n mr-5"></i> Vendor:  ThemeVale</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> SKU: DW00-109DA</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Availability: In Stock</li>
                                            </ul>
                                        </div> -->
                                        @if($product->gemstone_variants && !empty($product->gemstone_variants) && count($product->gemstone_variants) > 0)
                                        <div class="attr-detail attr-color mb-15">
                                            <span class="pro_titl" style="color: black;">Gemstone</span>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                @foreach($product->gemstone_variants as $variant)

                                                <div class="px-2 input_radio">
                                                    <!-- <input type="radio" name="emotion" id="sad" class="input-hidden" /> -->
                                                    
                                                    <label for="sad">
                                                        <a href="{{$variant->link}}" data-toggle="tooltip" data-placement="top" title="{{$variant->variant->name}}"><img src="{{ asset('storage/'.$variant->variant->image) }}" alt="{{$variant->variant->alt}}" /></a>
                                                    </label>
                                                    <!-- <a href="{{$variant->link}}">
                                                        <p class="text-center input_para">{{$variant->variant->name}}</p>
                                                    </a> -->
                                                </div>
                                                @endforeach
                                                <!-- <div class="px-2 input_radio">
                                                    <input type="radio" name="emotion" id="happy"
                                                        class="input-hidden" />
                                                    <label for="happy">
                                                        <img src="{{ asset('assets/images/stone_2.webp') }}" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">Better</p>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="emotion" id="sad_1"
                                                        class="input-hidden" />
                                                    <label for="sad_1">
                                                        <img src="{{ asset('assets/images/stone_1.webp') }}" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">Best</p>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="emotion" id="happy_1"
                                                        class="input-hidden" />
                                                    <label for="happy_1">
                                                        <img src="{{ asset('assets/images/stone_2.webp') }}" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">Heirloom</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        @endif
                                        <!-- <div class="attr-detail attr-color">
                                            <span class="pro_titl" style="color: black;">Total Carat Weight : {{$product->weight}}
                                                carat</span>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_1"
                                                        class="input-hidden" />
                                                    <label for="carat_1">
                                                        <img src="{{ asset('assets/images/ring1.webp') }}" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">0.88 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_2"
                                                        class="input-hidden" />
                                                    <label for="carat_2">
                                                        <img src="{{ asset('assets/images/ring2.webp') }}" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">1.21 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_3"
                                                        class="input-hidden" />
                                                    <label for="carat_3">
                                                        <img src="{{ asset('assets/images/ring3.webp') }}" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">1.62 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_4"
                                                        class="input-hidden" />
                                                    <label for="carat_4">
                                                        <img src="{{ asset('assets/images/ring4.webp') }}" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">1.81 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_5"
                                                        class="input-hidden" />
                                                    <label for="carat_5">
                                                        <img src="{{ asset('assets/images/ring5.webp') }}" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">1.92 Carat</p>
                                                </div>
                                            </div>
                                        </div> -->

                                        @if($product->metal_variants && !empty($product->metal_variants) && count($product->metal_variants) > 0)
                                        <div class="attr-detail attr-color py-3">
                                            <span class="pro_titl" style="color: black;">Metal Type</span>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                @foreach($product->metal_variants as $variant)

                                                <div class="px-2 input_radio">
                                                    <!-- <input type="radio" name="emotion" id="sad" class="input-hidden" /> -->
                                                    
                                                    <label for="sad">
                                                        <a href="{{$variant->link}}" data-toggle="tooltip" data-placement="top" title="{{$variant->variant->name}}"><img src="{{ asset('storage/'.$variant->variant->image) }}" alt="{{$variant->variant->alt}}" /></a>
                                                    </label>
                                                    <!-- <a href="{{$variant->link}}">
                                                        <p class="text-center input_para">{{$variant->variant->name}}</p>
                                                    </a> -->
                                                </div>
                                                @endforeach
                                                
                                                <!-- <div class="px-2 input_radio">
                                                    <input type="radio" name="sdf" id="one" class="input-hidden" />
                                                    <label for="one">
                                                        <span class="p-2">14k</span>
                                                    </label>
                                                    <p class="text-center input_para">White Gold</p>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="sdf" id="two" class="input-hidden" />
                                                    <label for="two">
                                                        <span class="p-2">18k</span>
                                                    </label>
                                                    <p class="text-center input_para">Rose Gold</p>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="sdf" id="three" class="input-hidden" />
                                                    <label for="three">
                                                        <span class="p-2">24k</span>
                                                    </label>
                                                    <p class="text-center input_para">Yellow Gold</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        @endif
                                        <!-- <div class="row m-0    ">
                                            <span class="pro_titl">Ring Size: 10</span>
                                            <div class="col-sm-12 col-11 m-auto d-block  testi_slider_wrapper_1">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_1"
                                                            class="input-hidden" />
                                                        <label for="ring_size_1" name="dfSSAD">
                                                            <span class="">5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_2"
                                                            class="input-hidden" />
                                                        <label for="ring_size_2" name="dfSADAS">
                                                            <span class="">5.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_3"
                                                            class="input-hidden" />
                                                        <label for="ring_size_3" name="dSADSAf">
                                                            <span class="">6</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_4"
                                                            class="input-hidden" />
                                                        <label for="ring_size_4" name="dasf">
                                                            <span class="">6.6</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_5"
                                                            class="input-hidden" />
                                                        <label for="ring_size_5" name="dfsadds">
                                                            <span class="">7</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_6"
                                                            class="input-hidden" />
                                                        <label for="ring_size_6" name="dsadasf">
                                                            <span class="">7.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_7"
                                                            class="input-hidden" />
                                                        <label for="ring_size_7" name="dfsda">
                                                            <span class="">8</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_8"
                                                            class="input-hidden" />
                                                        <label for="ring_size_8" name="dfsd">
                                                            <span class="">8.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_9"
                                                            class="input-hidden" />
                                                        <label for="ring_size_9" name="df">
                                                            <span class="">9</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_10"
                                                            class="input-hidden" />
                                                        <label for="ring_size_10" name="dsaasfd">
                                                            <span class="">9.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_11"
                                                            class="input-hidden" />
                                                        <label for="ring_size_11" name="das">
                                                            <span class="">10</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input type="radio" name="sd" id="ring_size_12"
                                                            class="input-hidden" />
                                                        <label for="ring_size_12" name="zxafdas">
                                                            <span class="">10.5</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        @if (isset($product->category) && !empty($product->category) && $product->category->name == 'Rings')
                                        <div class="attr-detail attr-color pt-3">
                                            <span class="pro_titl" style="color: black;">Select Ring Size</span>
                                            <div class="mt-3">
                                                <select class="form-select rounded" aria-label="Select Metal Type">
                                                    <option selected disabled class="fs-6">Select Metal Type
                                                    </option>
                                                    <option value="5.5">5.5</option>
                                                    <option value="5.6">5.6</option>
                                                    <option value="5.7">5.7</option>
                                                    <option value="5.8">5.8</option>
                                                    <option value="5.9">5.9</option>
                                                    <option value="6.0">6.0</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <p class="pro_titl" style="color: black;">Select Quantity</p>
                                            <div class="detail-qty border radius my-2 ">
                                                <a href="#" class="qty-down"><i class="fa-solid fa-angle-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fa-solid fa-angle-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="submit" class="buy_now my-2 hover-up">
                                                    <a href="buy_payment.html" class="text-light bg-trans">Add to
                                                        cart</a>
                                                </button>
                                                <!-- <button type="submit" class="buy_now">Buy Now</button> -->
                                                <button type="submit" class="buy_now my-2 hover-up">
                                                    <a href="buy_payment.html" class="text-light bg-trans">Buy
                                                        Now</a>
                                                </button>
                                            </div>
                                            <!-- <a href="buy_payment.html" class="buy_now">Buy Now</a> -->
                                            <div class="hover-up mt-5  d-inline-block pt-2 "><a href="#"><i
                                                        class="fs-4 fa-regular fa-heart"></i></a></div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">{{ $product->sku }}</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Ring</a>,
                                                <a href="#"
                                                    rel="tag">Neckless</a>, <a href="#" rel="tag">Jwelery</a> </li>
                                            <li>Availability:<span class="fw-bold ">{{ $product->qty }} Items In
                                                    Stock</span></li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        
                                
                        <div class="tab-style3 mt-4">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        {!! $product->description !!}
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Additional-info">
                                    <table class="font-md">
                                        <tbody>
                                            <tr class="stand-up">
                                                <th>Stand Up</th>
                                                <td>
                                                    <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                </td>
                                            </tr>
                                            <tr class="folded-wo-wheels">
                                                <th>Folded (w/o wheels)</th>
                                                <td>
                                                    <p>32.5″L x 18.5″W x 16.5″H</p>
                                                </td>
                                            </tr>
                                            <tr class="folded-w-wheels">
                                                <th>Folded (w/ wheels)</th>
                                                <td>
                                                    <p>32.5″L x 24″W x 18.5″H</p>
                                                </td>
                                            </tr>
                                            <tr class="door-pass-through">
                                                <th>Door Pass Through</th>
                                                <td>
                                                    <p>24</p>
                                                </td>
                                            </tr>
                                            <tr class="frame">
                                                <th>Frame</th>
                                                <td>
                                                    <p>Aluminum</p>
                                                </td>
                                            </tr>
                                            <tr class="weight-wo-wheels">
                                                <th>Weight (w/o wheels)</th>
                                                <td>
                                                    <p>20 LBS</p>
                                                </td>
                                            </tr>
                                            <tr class="weight-capacity">
                                                <th>Weight Capacity</th>
                                                <td>
                                                    <p>60 LBS</p>
                                                </td>
                                            </tr>
                                            <tr class="width">
                                                <th>Width</th>
                                                <td>
                                                    <p>24″</p>
                                                </td>
                                            </tr>
                                            <tr class="handle-height-ground-to-handle">
                                                <th>Handle height (ground to handle)</th>
                                                <td>
                                                    <p>37-45″</p>
                                                </td>
                                            </tr>
                                            <tr class="wheels">
                                                <th>Wheels</th>
                                                <td>
                                                    <p>12″ air / wide track slick tread</p>
                                                </td>
                                            </tr>
                                            <tr class="seat-back-height">
                                                <th>Seat back height</th>
                                                <td>
                                                    <p>21.5″</p>
                                                </td>
                                            </tr>
                                            <tr class="head-room-inside-canopy">
                                                <th>Head room (inside canopy)</th>
                                                <td>
                                                    <p>25″</p>
                                                </td>
                                            </tr>
                                            <tr class="pa_color">
                                                <th>Color</th>
                                                <td>
                                                    <p>Black, Blue, Red, White</p>
                                                </td>
                                            </tr>
                                            <tr class="pa_size">
                                                <th>Size</th>
                                                <td>
                                                    <p>M, S</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="mb-30">Customer questions & answers</h4>
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="assets/imgs/page/avatar-6.jpg" alt="">
                                                                <h6><a href="#">Jacky Chan</a></h6>
                                                                <p class="font-xxs">Since 2012</p>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Thank you very fast shipping from Poland only 3days.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                        <a href="#" class="text-brand btn-reply">Reply<i class="fa-solid fa-angle-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="assets/imgs/page/avatar-7.jpg" alt="">
                                                                <h6><a href="#">Ana Rosie</a></h6>
                                                                <p class="font-xxs">Since 2008</p>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Great low price and works well.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                        <a href="#" class="text-brand btn-reply">Reply<i class="fa-solid fa-angle-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="assets/imgs/page/avatar-8.jpg" alt="">
                                                                <h6><a href="#">Steven Keny</a></h6>
                                                                <p class="font-xxs">Since 2010</p>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Authentic and Beautiful, Love these way more than ever expected They are Great earphones</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                        <a href="#" class="text-brand btn-reply">Reply <i class="fa-solid fa-angle-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="mb-30">Customer reviews</h4>
                                                <div class="d-flex mb-30">
                                                    <div class="product-rate d-inline-block mr-15">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6>4.8 out of 5</h6>
                                                </div>
                                                <div class="progress">
                                                    <span>5 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                </div>
                                                <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comment form-->
                                    <div class="comment-form">
                                        <h4 class="mb-15">Add a review</h4>
                                        <div class="product-rate d-inline-block mb-30">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <form class="form-contact comment_form" action="#" id="commentForm">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-extra-link2">
                                                        <button type="submit" class="buy_now">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="popular-categories section-padding mt-15 mb-25">
                            <div class=" wow fadeIn animated">
                                <h3 class="section-title style-1 pb-10 mb-10">Related products</h3>
                                <div class="carausel-6-columns-cover position-relative">
                                    <div class="slider-arrow m-0     slider-arrow m-0   -2 carausel-6-columns-arrow m-0    "
                                        id="carausel-6-columns-arrow m-0    s"></div>
                                    <div class="carausel-6-columns" id="carausel-6-columns">
                                        @if($products && !empty($products) && count($products) > 0)
                                        @foreach($products as $product)
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" class="product-name-class"
                                                            tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('storage/'.$product->product_image) }}" alt="">
                                                            <img class="hover-img" src="{{ asset('storage/'.$product->second_image) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fa-sharp fa-regular fa-eye"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                            class="action-btn small hover-up" href="shop-wishlist.html"
                                                            tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="shop-product-right.html" class="product-name-class"
                                                            tabindex="0">{{$product->name}}</a></span>

                                                    <div class="product-price">
                                                        <span>${{$product->special_price}} </span>
                                                        <span class="old-price">${{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- <div class="py-4 d-flex justify-content-end align-items-center view_detail">
                                    <a href="javascript:void(0)">View More<i
                                            class="fa-solid fa-angle-right ps-2"></i></a>
                                </div> -->
                            </div>
                        </section>

                        <!-- Huzur Special Featues -->
                        <div class="row m-0  m-0 pt-80 justify-content-between">
                            <h2 class="text-center pt-50">Huzurr Special Featues</h2>
                            <div class="col-lg-2 " style="position: relative;">
                                <img src="{{ asset('assets/video/ShareIdea.gif') }}" alt="">
                                <p
                                    style="font-size: 13px;font-weight: 400;line-height: 24px;color: black;text-align: center;">
                                    Customized
                                    By
                                    You,<br> Handcrafted By Us</p>
                            </div>
                            <div class="col-lg-2 " style="position: relative;">
                                <img src="{{ asset('assets/video/Approve.gif') }}" alt="">
                                <p
                                    style="font-size: 13px;font-weight: 400;line-height: 24px;color: black;text-align: center;">
                                    Customized
                                    By
                                    You,<br> Handcrafted By Us</p>
                            </div>
                            <div class="col-lg-2 " style="position: relative;">
                                <img src="{{ asset('assets/video/Desging.gif') }}" alt="">
                                <p
                                    style="font-size: 13px;font-weight: 400;line-height: 24px;color: black;text-align: center;">
                                    Authenticity &<br>Quality Check</p>
                            </div>
                            <div class="col-lg-2 " style="position: relative;">
                                <img src="{{ asset('assets/video/Manufacthuring.gif') }}" alt="">
                                <p
                                    style="font-size: 13px;font-weight: 400;line-height: 24px;color: black;text-align: center;">
                                    Easy Pay<br>Installments</p>
                            </div>
                            <div class="col-lg-2 " style="position: relative;">
                                <img src="{{ asset('assets/video/Deliver.gif') }}" alt="">
                                <p
                                    style="font-size: 13px;font-weight: 400;line-height: 24px;color: black;text-align: center;">
                                    Customer Ratings<br>of 4.5/5 stars
                                </p>
                            </div>
                        </div>

                        <section class="popular-categories section-padding mt-15 mb-25">
                            <div class=" wow fadeIn animated">
                                <h3 class="section-title style-1 pb-10 mb-10">Variations Products</h3>
                                <div class="carausel-6-columns-cover position-relative">
                                    <div class="slider-arrow m-0     slider-arrow m-0   -2 carausel-6-columns-arrow m-0    "
                                        id="carausel-7-columns-arrow m-0    s"></div>
                                    <div class="carausel-6-columns" id="carausel-7-columns">
                                        @if($product->gemstone_variants && !empty($product->gemstone_variants) && count($product->gemstone_variants) > 0)
                                        @foreach($product->gemstone_variants as $variant)
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="{{$variant->link}}" class="product-name-class"
                                                            tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('storage/'.$variant->product->product_image) }}" alt="">
                                                            <img class="hover-img" src="{{ asset('storage/'.$variant->product->second_image) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fa-sharp fa-regular fa-eye"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                            class="action-btn small hover-up" href="shop-wishlist.html"
                                                            tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="{{$variant->link}}" class="product-name-class"
                                                            tabindex="0">{{ $variant->variant->name }}</a></span>

                                                    <div class="product-price">
                                                        <span>${{ $variant->product->special_price }} </span>
                                                        <span class="old-price">${{ $variant->product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                        @if($product->metal_variants && !empty($product->metal_variants) && count($product->metal_variants) > 0)
                                        @foreach($product->metal_variants as $variant)
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="{{$variant->link}}" class="product-name-class"
                                                            tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('storage/'.$variant->product->product_image) }}" alt="">
                                                            <img class="hover-img" src="{{ asset('storage/'.$variant->product->second_image) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fa-sharp fa-regular fa-eye"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                            class="action-btn small hover-up" href="shop-wishlist.html"
                                                            tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="{{$variant->link}}" class="product-name-class"
                                                            tabindex="0">{{ $variant->variant->name }}</a></span>

                                                    <div class="product-price">
                                                        <span>${{ $variant->product->special_price }} </span>
                                                        <span class="old-price">${{ $variant->product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- Image Galary -->
                <!-- Image -->
                <section class="py-80">
                    <div class="container">
                        <div class="row m-0 ">
                            <div class="col-12">
                                <h2 class="homepage_heading mb-4 uppercase">Customer Gallery</h2>
                            </div>
                        </div>

                        <div class="row m-0 ">
                            <div class="col-lg-12">
                                <div
                                    class="d-flex justify-content-center align-items-center pt-3 view_detail w-100 hover-up">
                                    <a href="javascript:void(0)" class="d-block m-auto fs-6">View More<i
                                            class="fa-solid fa-angle-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!--  -->
            </div>
            </div>
        </section>
    </main>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $('.testi_slider_wrapper_1 .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 10
                    }
                }
            })
        })
    </script>
    <script>
        window.addEventListener("load", () => {
            // Retrieve all help sections
            const sections = Array.from(document.querySelectorAll("section[id]"));

            // Once a scrolling event is detected, iterate all elements
            // whose visibility changed and highlight their navigation entry
            const scrollHandler = entries =>
                entries.forEach(entry => {
                    const section = entry.target;
                    const sectionId = section.id;
                    const sectionLink = document.querySelector(`a[href="#${sectionId}"]`);

                    if (entry.intersectionRatio > 0) {
                        section.classList.add("visible");
                        sectionLink.classList.add("visible");
                    } else {
                        section.classList.remove("visible");
                        sectionLink.classList.remove("visible");
                    }
                });

            // Creates a new scroll observer
            const observer = new IntersectionObserver(scrollHandler);

            //noinspection JSCheckFunctionSignatures
            sections.forEach(section => observer.observe(section));
        });

    </script>
    <script>
        const rangeInput = document.getElementById('skinToneRange');
        const output = document.getElementById('output');
        const skinToneImage = document.getElementById('skinToneImage');
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const lightImage = new Image();
        const darkImage = new Image();

        // Hand
        // lightImage.src = 'hand_light.png';
        // darkImage.src = 'hand_dark.png';

        // Neck
            // lightImage.src = 'neck_light.png';
            // darkImage.src = 'neck_dark.png';

        // Ear
        lightImage.src = '{{ asset("assets/light.jpeg") }}';
        darkImage.src = '{{ asset("assets/dark.jpeg") }}';

        // Wrist
        // lightImage.src = 'wrist_light.png';
        // darkImage.src = 'wrist_dark.png';

        let lightImageData, darkImageData;

        lightImage.onload = function() {
          canvas.width = lightImage.width;
          canvas.height = lightImage.height;
          ctx.drawImage(lightImage, 0, 0, lightImage.width, lightImage.height);
          lightImageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        }

        darkImage.onload = function() {
          ctx.drawImage(darkImage, 0, 0, darkImage.width, darkImage.height);
          darkImageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        }

        rangeInput.addEventListener('input', function() {
          const value = parseInt(this.value);
          const percentage = value / 100;
          // output.innerHTML = Skin Tone:  ${value}%;

          const combinedImageData = ctx.createImageData(canvas.width, canvas.height);

          for (let i = 0; i < combinedImageData.data.length; i += 4) {
            combinedImageData.data[i] = Math.round(lightImageData.data[i] * (1 - percentage) + darkImageData.data[i] * percentage);
            combinedImageData.data[i + 1] = Math.round(lightImageData.data[i + 1] * (1 - percentage) + darkImageData.data[i + 1] * percentage);
            combinedImageData.data[i + 2] = Math.round(lightImageData.data[i + 2] * (1 - percentage) + darkImageData.data[i + 2] * percentage);
            combinedImageData.data[i + 3] = lightImageData.data[i + 3]; // Preserve alpha value
          }

          ctx.putImageData(combinedImageData, 0, 0);

          const newDataUrl = canvas.toDataURL();
          skinToneImage.src = newDataUrl;
        });
    </script>
@endsection