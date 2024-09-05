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
    <main class="main" style="background-color: #fff;">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Buy Garms Stones
                    <span></span>Blue Color Stone
                </div>
            </div>
        </div>
        <section class="pt-80 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fa-solid fa-search"></i></span>
                                        <div class="product-image-slider bg-light" id="product-one"
                                            style="display: block;">
                                            <figure class="border-radius-10 ">
                                                <img src="assets/images/198421C01_RGB.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10 ">
                                                <img src="assets/images/ring_prodect_detail2.webp" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10 ">
                                                <img src="assets/images/stone_slider_1.webp" alt="product image">
                                            </figure>
                                            <!-- <div
                                                style="position:relative; width: 500px; background-color: white;height: 680px;">
                                                <img src="ring.png"
                                                    style="position: absolute;top: 0;left:0; z-index: 95;margin-top: 20%;"
                                                    alt="">
                                                <img id="skinToneImage" src="hand_light.png" alt="Skin Tone Image"
                                                    style="margin-top: 20%">
                                                <input type="range" min="0" max="100" value="0" id="skinToneRange"
                                                    style=" transform: rotate(90deg); position: absolute;top: 60%;right: -116px;">
                                            </div> -->
                                            <figure class="border-radius-10 ">
                                                <img src="assets/images/198863C01_RGB.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10 ">
                                                <img src="assets/images/198421C01_RGB.jpg" alt="product image">
                                            </figure>
                                        </div>
                                        <!-- Product-one-slider-img -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15" id="Product-one-slider-img"
                                            style="display: block;">
                                            <div><img src="assets/images/Necklaces/necklaces2_1.jpg" alt="product image"
                                                    width="100%"></div>
                                            <div><img src="assets/images/Necklaces/necklaces1.jpg" alt="product image"
                                                    width="100%"></div>
                                            <div><img id="skinToneImage" src="hand_light.png" alt="Skin Tone Image"
                                                    width="100%"></div>
                                            <div><img src="assets/images/ring3.webp" alt="product image" width="100%">
                                            </div>
                                            <div><img src="assets/images/ring4.webp" alt="product image" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <script>
                                    const rangeInput = document.getElementById('skinToneRange');
                                    const output = document.getElementById('output');
                                    const skinToneImage = document.getElementById('skinToneImage');
                                    const canvas = document.createElement('canvas');
                                    const ctx = canvas.getContext('2d');
                                    const lightImage = new Image();
                                    const darkImage = new Image();
                                    // Hand
                                    lightImage.src = 'hand_light.png';
                                    darkImage.src = 'hand_dark.png';
                                    let lightImageData, darkImageData;
                                    lightImage.onload = function () {
                                        canvas.width = lightImage.width;
                                        canvas.height = lightImage.height;
                                        ctx.drawImage(lightImage, 0, 0, lightImage.width, lightImage.height);
                                        lightImageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                                    }
                                    darkImage.onload = function () {
                                        ctx.drawImage(darkImage, 0, 0, darkImage.width, darkImage.height);
                                        darkImageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                                    }
                                    rangeInput.addEventListener('input', function () {
                                        const value = parseInt(this.value);
                                        const percentage = value / 100;
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
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail fs-4">Semi Precious Perl Color Stone Available In All Colors & Size</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> 3 sold in last 17 hours<a href="javascript:void(0)"></a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (2 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">$549
                                                    </span></ins>
                                                <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-10 mb-10"></div>
                                        <div class="short-desc mb-30 d-flex align-items-center justify-content-between">
                                            <h6> <span style="color: red;">$269.70 </span>x 3 Interest Free Payments
                                            </h6>
                                            <a href="javascript:void(0)">
                                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalToggleLabel">
                                                                    Modal 1</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Show a second modal and hide this one with the button
                                                                below.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary"
                                                                    data-bs-target="#exampleModalToggle2"
                                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Open
                                                                    second modal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalToggleLabel2">
                                                                    Modal 2</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Hide this modal and show the first with the button
                                                                below.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary"
                                                                    data-bs-target="#exampleModalToggle"
                                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Back
                                                                    to first</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="" data-bs-toggle="modal" href="#exampleModalToggle"
                                                    role="button">Select Plan</a>
                                            </a>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <!-- <div class="short-desc mb-30 d-flex align-items-center justify-content-between"
                                            style="background: #fcbba4;padding: 6px 10px;">
                                            <h6> <span style="color: red;">10% Off & Free Jewelry Gift(s) </span></h6>
                                            <a href="javascript:void(0)">
                                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalToggleLabel">
                                                                    Modal 1</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Show a second modal and hide this one with the button
                                                                below.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary"
                                                                    data-bs-target="#exampleModalToggle2"
                                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Open
                                                                    second modal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalToggleLabel2">
                                                                    Modal 2</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Hide this modal and show the first with the button
                                                                below.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary"
                                                                    data-bs-target="#exampleModalToggle"
                                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Back
                                                                    to first</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="" data-bs-toggle="modal" href="#exampleModalToggle"
                                                    role="button">View Free Gift</a>
                                            </a>
                                        </div> -->
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function () {
                                                var radioButtons = document.querySelectorAll('input[name="stone"]');
                                                var imageSets = {
                                                    'stone1': {
                                                        productImages: [
                                                        "assets/images/198421C01_RGB.jpg","assets/images/198421C01_RGB.jpg", "assets/images/ring_prodect_detail2.webp","assets/images/stone_slider_1.webp", "assets/images/198863C01_RGB.jpg","assets/images/198421C01_RGB.jpg","assets/images/198421C01_RGB.jpg", "assets/images/ring_prodect_detail2.webp","assets/images/stone_slider_1.webp", "assets/images/198863C01_RGB.jpg","assets/images/198421C01_RGB.jpg"
                                                          
                                                        ],
                                                        thumbnailImages: [
                                                            "assets/images/198421C01_RGB.jpg", "assets/images/ring_prodect_detail2.webp","assets/images/stone_slider_1.webp", "assets/images/198863C01_RGB.jpg","assets/images/198421C01_RGB.jpg",
                                                        ]
                                                    },
                                                    'stone2': {
                                                        productImages: [
                                                        "assets/images/stone9.webp","assets/images/stone5.webp","assets/images/stone6.webp","assets/images/stone7.webp","assets/images/stone8.webp","assets/images/stone9.webp","assets/images/stone5.webp","assets/images/stone6.webp","assets/images/stone7.webp","assets/images/stone8.webp","assets/images/stone9.webp"
                                                        ],
                                                        thumbnailImages: [
                                                        "assets/images/stone5.webp","assets/images/stone6.webp","assets/images/stone7.webp","assets/images/stone8.webp","assets/images/stone9.webp"

                                                        ]
                                                    },
                                                    // Add more entries for additional radio buttons as needed
                                                };
                                        
                                                // Find the radio button for 'stone1' and set it as checked
                                                var defaultRadioButton = document.getElementById('stone1');
                                                defaultRadioButton.checked = true;
                                        
                                                // Trigger the change event for the default radio button to load the associated images
                                                var changeEvent = new Event('change');
                                                defaultRadioButton.dispatchEvent(changeEvent);
                                        
                                                // Initialize thumbnail images for 'stone1'
                                                var defaultThumbnailImages = imageSets['stone1'].thumbnailImages;
                                                var thumbnailImages = document.getElementById("Product-one-slider-img").querySelectorAll("img");
                                                thumbnailImages.forEach(function (image, index) {
                                                    image.src = defaultThumbnailImages[index];
                                                });
                                        
                                                // Add change event listener to radio buttons
                                                radioButtons.forEach(function (radioButton) {
                                                    radioButton.addEventListener("change", function () {
                                                        // Get the corresponding set of images for the selected radio button
                                                        var selectedImages = imageSets[radioButton.id];
                                        
                                                        // Update slider images
                                                        updateSliderImages(selectedImages.productImages, selectedImages.thumbnailImages);
                                                    });
                                                });
                                        
                                                // Function to update slider images
                                                function updateSliderImages(newProductImages, newThumbnailImages) {
                                                    // Change the source of product slider images
                                                    var productImages = document.getElementById("product-one").querySelectorAll("img");
                                                    productImages.forEach(function (image, index) {
                                                        image.src = newProductImages[index];
                                                    });
                                        
                                                    // Change the source of thumbnail slider images
                                                    var thumbnailImages = document.getElementById("Product-one-slider-img").querySelectorAll("img");
                                                    thumbnailImages.forEach(function (image, index) {
                                                        image.src = newThumbnailImages[index];
                                                    });
                                                }
                                            });
                                        </script>
                                        
                                        
                                        
                                        
                                        <div class="attr-detail attr-color mb-15">
                                            <span class="pro_titl">Natural Gemstone Quality : Heirloom</span>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                <div class="px-2 input_radio" id="Stone-One">
                                                    <input type="radio" name="stone" id="stone1" class="input-hidden" />
                                                    <label for="stone1">
                                                        <img src="assets/images/stone.6.webp" alt="Stone 1" />
                                                    </label>
                                                    <p class="text-center input_para">Stone 1</p>
                                                </div>

                                                <div class="px-2 input_radio" id="Stone-Two">
                                                    <input type="radio" name="stone" id="stone2" class="input-hidden" />
                                                    <label for="stone2">
                                                        <img src="assets/images/stone10.webp" alt="Stone 2" />
                                                    </label>
                                                    <p class="text-center input_para">Stone 2</p>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="emotion" id="sad_1"
                                                        class="input-hidden" />
                                                    <label for="sad_1">
                                                        <img src="assets/images/stone12.webp" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">Best</p>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="emotion" id="happy_1"
                                                        class="input-hidden" />
                                                    <label for="happy_1">
                                                        <img src="assets/images/stone14.webp" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">Heirloom</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="attr-detail attr-color">
                                            <span class="pro_titl">Total Carat Weight : 0.88 carat</span>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_1"
                                                        class="input-hidden" />
                                                    <label for="carat_1">
                                                        <img src="assets/images/ring1.webp" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">0.88 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_2"
                                                        class="input-hidden" />
                                                    <label for="carat_2">
                                                        <img src="assets/images/ring2.webp" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">1.21 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_3"
                                                        class="input-hidden" />
                                                    <label for="carat_3">
                                                        <img src="assets/images/ring3.webp" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">1.62 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_4"
                                                        class="input-hidden" />
                                                    <label for="carat_4">
                                                        <img src="assets/images/ring4.webp" alt="I'm happy" />
                                                    </label>
                                                    <p class="text-center input_para">1.81 Carat</p>
                                                </div>
                                                <div class="px-1 input_radio">
                                                    <input type="radio" name="carat" id="carat_5"
                                                        class="input-hidden" />
                                                    <label for="carat_5">
                                                        <img src="assets/images/ring5.webp" alt="I'm sad" />
                                                    </label>
                                                    <p class="text-center input_para">1.92 Carat</p>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="attr-detail attr-color py-3">
                                            <span class="pro_titl">Metal Type : 18K Yellow Gold</span>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                <div class="px-2 input_radio">
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
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="row">
                                            <span class="pro_titl">Ring Size: 10</span>
                                            <div class="col-sm-12 col-11 m-auto d-block  testi_slider_wrapper_1">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_1" class="input-hidden" />
                                                        <label for="ring_size_1" name="dfSSAD">
                                                            <span class="">5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_2" class="input-hidden" />
                                                        <label for="ring_size_2" name="dfSADAS">
                                                            <span class="">5.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_3" class="input-hidden" />
                                                        <label for="ring_size_3" name="dSADSAf">
                                                            <span class="">6</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_4" class="input-hidden" />
                                                        <label for="ring_size_4" name="dasf">
                                                            <span class="">6.6</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_5" class="input-hidden" />
                                                        <label for="ring_size_5" name="dfsadds">
                                                            <span class="">7</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_6" class="input-hidden" />
                                                        <label for="ring_size_6" name="dsadasf">
                                                            <span class="">7.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_7" class="input-hidden" />
                                                        <label for="ring_size_7" name="dfsda">
                                                            <span class="">8</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_8" class="input-hidden" />
                                                        <label for="ring_size_8" name="dfsd">
                                                            <span class="">8.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_9" class="input-hidden" />
                                                        <label for="ring_size_9" name="df">
                                                            <span class="">9</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_10" class="input-hidden" />
                                                        <label for="ring_size_10" name="dsaasfd">
                                                            <span class="">9.5</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_11" class="input-hidden" />
                                                        <label for="ring_size_11" name="das">
                                                            <span class="">10</span>
                                                        </label>
                                                    </div>
                                                    <div class="item pt-3 input_radio">
                                                        <input  type="radio" name="sd"  id="ring_size_12" class="input-hidden" />
                                                        <label for="ring_size_12" name="zxafdas">
                                                            <span class="">10.5</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                         -->
                                        <div class="attr-detail attr-color py-3">
                                            <h5><strong class="pb-3">Select Ring Size</strong></h5>
                                            <div class="pt-3 d-flex align-items-center justify-content-start">
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="metalType" id="5_5"
                                                        class="input-hidden" />
                                                    <label for="5_5">
                                                        <span class="p-2">5.5</span>
                                                    </label>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="metalType" id="5_6"
                                                        class="input-hidden" />
                                                    <label for="5_6">
                                                        <span class="p-2">5.6</span>
                                                    </label>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="metalType" id="5_7"
                                                        class="input-hidden" />
                                                    <label for="5_7">
                                                        <span class="p-2">5.7</span>
                                                    </label>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="metalType" id="5_8"
                                                        class="input-hidden" />
                                                    <label for="5_8">
                                                        <span class="p-2">5.8</span>
                                                    </label>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="metalType" id="5_9"
                                                        class="input-hidden" />
                                                    <label for="5_9">
                                                        <span class="p-2">5.9</span>
                                                    </label>
                                                </div>
                                                <div class="px-2 input_radio">
                                                    <input type="radio" name="metalType" id="6" class="input-hidden" />
                                                    <label for="6">
                                                        <span class="p-2">6.0</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius my-2">
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
                                                    <a href="buy_payment.html" class="text-light bg-trans">Buy Now</a>
                                                </button>
                                                <!-- <button type="submit" class="buy_now my-2 hover-up">
                                                    <a href="#" class="text-light bg-trans button popup-button p-0">Try
                                                        It Now</a>
                                                </button> -->

                                                <!--  -->
                                                <style>
                                                    .tryitnow {
                                                        z-index: 200;
                                                        position: fixed;
                                                        left: 0;
                                                        top: 0;
                                                        width: 100%;
                                                        height: 100%;
                                                        background: transparent;
                                                        opacity: 0;
                                                        visibility: hidden;
                                                        transform: scale(1.1);
                                                        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
                                                    }

                                                    .tryitnow .popup-box {
                                                        width: 50%;
                                                        height: 1050px;
                                                        /* padding: 70px; */
                                                        transform: translate(-50%, -50%) scale(0.5);
                                                        position: absolute;
                                                        top: 50%;
                                                        left: 50%;
                                                        box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.8);
                                                        border-radius: 5px;
                                                        background: #f4dbdb;
                                                        text-align: center;
                                                    }

                                                    .popup-box .close-button {
                                                        width: 35px;
                                                        height: 35px;
                                                        display: inline-block;
                                                        position: absolute;
                                                        top: 10px;
                                                        font-size: 60px;
                                                        right: 10px;
                                                        -webkit-transition: all ease 0.5s;
                                                        transition: all ease 0.5s;
                                                        border-radius: 50%;
                                                        /* background: #7b78ff; */
                                                        font-weight: bold;
                                                        color: #fff;
                                                        text-align: center;
                                                        cursor: pointer;

                                                    }

                                                    .show-container {
                                                        opacity: 1;
                                                        visibility: visible;
                                                        transform: scale(1.0);
                                                        transition: visibility 0s linear 0s, opacity 1.25s 0s, transform 1.25s;
                                                    }

                                                    #searchTypeToggle_tryitnow {
                                                        margin: auto;
                                                        width: 100%;
                                                        box-sizing: border-box;
                                                        background-color: white;
                                                        box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.4);
                                                        text-align: center;
                                                        position: relative;
                                                        border-radius: 2px;
                                                    }

                                                    #searchTypeToggle_tryitnow>div {
                                                        color: white;
                                                        padding-top: 24px;
                                                        display: block;
                                                        position: absolute;
                                                        top: -4px;
                                                        left: -4px;
                                                        bottom: -4px;
                                                        width: calc(33.33% + 8px);
                                                        background-color: rgba(50, 150, 255, 1);
                                                        border-radius: 2px;
                                                        box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.4);
                                                        z-index: 1;
                                                        pointer-events: none;
                                                        transition: transform 0.3s;
                                                    }

                                                    #searchTypeToggle_tryitnow::after {
                                                        content: "";
                                                        display: block;
                                                        clear: both;
                                                    }

                                                    #searchTypeToggle_tryitnow label {
                                                        float: left;
                                                        width: calc(33.333% - 1px);
                                                        position: relative;
                                                        padding: 20px 0px 40px;
                                                        overflow: hidden;
                                                        border-left: solid 1px rgba(0, 0, 0, 0.2);
                                                        transition: color 0.3s;
                                                        cursor: pointer;
                                                        -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
                                                    }

                                                    #searchTypeToggle_tryitnow label:first-child {
                                                        border-left: none;
                                                    }

                                                    #searchTypeToggle_tryitnow label input {
                                                        position: absolute;
                                                        top: -200%;
                                                    }

                                                    #searchTypeToggle_tryitnow label div {
                                                        z-index: 5;
                                                        position: absolute;
                                                        width: 100%;
                                                    }

                                                    #searchTypeToggle_tryitnow label.selected {
                                                        color: white;
                                                    }

                                                    /*  */
                                                </style>
                                                <style>
                                                    .tryitnow_card-wrapper {
                                                        max-width: 100%;
                                                        width: 100%;
                                                        margin: 0 auto;
                                                    }

                                                    .tryitnow_img {
                                                        width: 100%;
                                                        display: block;
                                                    }

                                                    .tryitnow_img-display {
                                                        overflow: hidden;
                                                    }

                                                    .tryitnowimg-showcase {
                                                        display: flex;
                                                        width: 100%;
                                                        transition: all 0.5s ease;
                                                    }

                                                    .tryitnowimg-showcase img {
                                                        min-width: 100%;
                                                    }

                                                    .tryitnow_img-select {
                                                        display: flex;
                                                        justify-content: center;
                                                    }

                                                    .img-item {
                                                        margin: 0.3rem;
                                                    }

                                                    .img-item:nth-child(1),
                                                    .img-item:nth-child(2),
                                                    .img-item:nth-child(3) {
                                                        margin-right: 0;
                                                    }

                                                    .img-item:hover {
                                                        opacity: 0.8;
                                                    }

                                                    .product-content {
                                                        padding: 2rem 1rem;
                                                    }
                                                </style>
                                                <div class="tryitnow">
                                                    <div class="popup-box">
                                                        <a class="close-button popup-close" title="close">×</a>
                                                        <div class="tryitnow_card-wrapper">
                                                            <div class="card w-100">
                                                                <!-- card left -->
                                                                <div class="product-imgs">
                                                                    <div class="tryitnow_img-display">
                                                                        <div class="tryitnowimg-showcase">
                                                                            <img src="assets/images/try it now/light (1).jpeg"
                                                                                width="80%" height="570px"
                                                                                style="object-fit: cover;"
                                                                                alt="shoe image" class="tryitnow_img">
                                                                            <img src="assets/images/try it now/sa.jpeg"
                                                                                width="80%" height="570px"
                                                                                style="object-fit: cover;"
                                                                                alt="shoe image" class="tryitnow_img">
                                                                            <img src="assets/images/try it now/sas.jpeg"
                                                                                width="80%" height="570px"
                                                                                style="object-fit: cover;"
                                                                                alt="shoe image" class="tryitnow_img">
                                                                        </div>
                                                                    </div>
                                                                    <!--  -->
                                                                    <form action="" id="searchTypeToggle_tryitnow"
                                                                        class="my-4 w-75 mx-auto">
                                                                        <div></div>
                                                                        <label class="selected">
                                                                            <input type="radio" name="searchtype"
                                                                                data-location="0" value="one">
                                                                            <div style="font-size: 26px;">On Model</div>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="searchtype"
                                                                                data-location="calc(100% - 8px)"
                                                                                value="two">
                                                                            <div style="font-size: 26px;">On Me</div>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="searchtype"
                                                                                data-location="calc(200% - 12px)"
                                                                                value="three">
                                                                            <div style="font-size: 26px;">Compare</div>
                                                                        </label>
                                                                    </form>
                                                                    <!--  -->
                                                                    <div class="tryitnow_img-select">
                                                                        <div class="img-item">
                                                                            <a href="#" data-id="1">
                                                                                <img src="assets/images/try it now/light (1).jpeg"
                                                                                    style="width: 186px;object-fit: cover;"
                                                                                    height="160px" alt="shoe image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="img-item">
                                                                            <a href="#" data-id="2">
                                                                                <img src="assets/images/try it now/sa.jpeg"
                                                                                    style="width: 186px;object-fit: cover;"
                                                                                    height="160px" alt="shoe image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="img-item"
                                                                            style="position: relative;">
                                                                            <a href="#" data-id="3">
                                                                                <img src="assets/images/try it now/sas.jpeg"
                                                                                    style="width: 186px;object-fit: cover; position: relative;"
                                                                                    height="160px" alt="shoe image">
                                                                                <i class="fa-solid fa-trash-can fa-2x"
                                                                                    style="position: absolute;top: 10px;right: 10px; color: #000;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <!-- <div class = "img-item">
                                                                            <a href = "#" data-id = "4">
                                                                              <img src = "light (1).jpeg" style="width: 186px;object-fit: cover;" height="200px" alt = "shoe image">
                                                                            </a>
                                                                          </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <select class="form-select w-75 m-auto fs-5 mt-4"
                                                            aria-label="Default select example">
                                                            <option selected>Select Size</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>

                                                        <style>
                                                            .seclect_group_1 {
                                                                margin: 25px auto 0;
                                                                width: 80%;
                                                                height: 50px;
                                                                border-bottom: 1px solid #000;
                                                                /* font-size: 22px; */
                                                            }

                                                            .seclect_group_1:focus,
                                                            .seclect_group_1:hover {
                                                                outline: none;
                                                            }

                                                            .try_it_para h6 {
                                                                font-size: 24px;
                                                            }

                                                            .try_it_para p {
                                                                font-size: 30px;
                                                                padding-top: 7px;
                                                            }

                                                            .add_btn button {
                                                                padding: 15px 30px;
                                                                border: 1px solid #000;
                                                                color: #000;
                                                                font-size: 20px;
                                                                background: transparent;
                                                            }

                                                            .add_btn button:hover {
                                                                margin-top: 3px;
                                                                transition: 0.5s;
                                                            }

                                                            .add_btn button {
                                                                -webkit-box-shadow: 0 3px 5px rgba(255, 255, 0, .8);
                                                                box-shadow: 0 3px 5px #fff;
                                                            }
                                                        </style>
                                                        <div
                                                            style="display: flex;justify-content:space-around; padding-top: 25px; align-items: center;">
                                                            <div class="try_it_para">
                                                                <h6>Heart To Heart Set</h6>
                                                                <p>$160.00</p>
                                                            </div>
                                                            <div class="add_btn">
                                                                <button>ADD TO CART</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Model -->
                                            <script>
                                                const containerrr = document.querySelector(".tryitnow");
                                                const buttonnn = document.querySelector(".button");
                                                const closeButtonn = document.querySelector(".close-button");

                                                function togglecontainer() {
                                                    containerrr.classList.toggle("show-container");
                                                }
                                                function windowOnClick(event) {
                                                    if (event.target === containerrr) {
                                                        togglecontainer();
                                                    }
                                                }
                                                buttonnn.addEventListener("click", togglecontainer);
                                                closeButtonn.addEventListener("click", togglecontainer);
                                                window.addEventListener("click", windowOnClick);
                                            </script>

                                            <!--3 Select Buttons  -->
                                            <script>
                                                document.querySelector('#searchTypeToggle').addEventListener('click', function (event) {

                                                    if (event.target.tagName.toLowerCase() == 'input') {
                                                        let input = event.target;
                                                        let slider = this.querySelector('div');
                                                        let labels = this.querySelectorAll('label');
                                                        slider.style.transform = `translateX(${input.dataset.location})`;
                                                        labels.forEach(function (label) {
                                                            if (label == input.parentElement) {
                                                                label.classList.add('selected');
                                                            } else {
                                                                label.classList.remove('selected');
                                                            }
                                                        })
                                                    }
                                                }); 
                                            </script>


                                            <script>
                                                const imgs = document.querySelectorAll('.tryitnow_img-select a');
                                                const imgBtns = [...imgs];
                                                let imgId = 1;

                                                imgBtns.forEach((imgItem) => {
                                                    imgItem.addEventListener('click', (event) => {
                                                        event.preventDefault();
                                                        imgId = imgItem.dataset.id;
                                                        slideImage();
                                                    });
                                                });

                                                function slideImage() {
                                                    const displayWidth = document.querySelector('.tryitnowimg-showcase img:first-child').clientWidth;
                                                    document.querySelector('.tryitnowimg-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
                                                }
                                                window.addEventListener('resize', slideImage);
                                            </script>
                                            <!--  -->

                                            <!-- <a href="buy_payment.html" class="buy_now">Buy Now</a> -->
                                            <div class="hover-up mt-5  d-inline-block pt-2 "><a href="#"><i
                                                        class="fs-4 fa-regular fa-heart"></i></a></div>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#"
                                                rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                        <li>Availability:<span class="in-stock text-success ml-5">8 Items In
                                                Stock</span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info">Additional info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews
                                        (3)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        <p>This contemporary design crafted in 18K yellow gold is a beautiful rendition
                                            of the popular XOXO sign. A captivating oval opal catches the eye with its
                                            mesmerizing play of colors. Brilliant diamonds accent the X motifs that form
                                            the shoulders of this opal criss cross ring.
                                        </p>
                                        <ul class="product-more-infor mt-30">
                                            <li><span>Type Of Packing</span> Bottle</li>
                                            <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                            <li><span>Quantity Per Case</span> 100ml</li>
                                            <li><span>Ethyl Alcohol</span> 70%</li>
                                            <li><span>Piece In One</span> Carton</li>
                                        </ul>
                                        <hr class="wp-block-separator is-style-dots">
                                        <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello
                                            far meadowlark imitatively egregiously hugged that yikes minimally unanimous
                                            pouted flirtatiously as beaver beheld above forward energetic
                                            across this jeepers beneficently cockily less a the raucously that magic
                                            upheld far so the this where crud then below after jeez enchanting drunkenly
                                            more much wow callously irrespective limpet.</p>
                                        <h4 class="mt-30">Packaging & Delivery</h4>
                                        <hr class="wp-block-separator is-style-wide">
                                        <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly
                                            scratched far while thus cackled sheepishly rigid after due one assenting
                                            regarding censorious while occasional or this more crane
                                            went more as this less much amid overhung anathematic because much held one
                                            exuberantly sheep goodness so where rat wry well concomitantly.
                                        </p>
                                        <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously
                                            and and less rattlesnake contrary caustic wow this near alas and next and
                                            pled the yikes articulate about as less cackled dalmatian
                                            in much less well jeering for the thanks blindly sentimental whimpered less
                                            across objectively fanciful grimaced wildly some wow and rose jeepers
                                            outgrew lugubrious luridly irrationally attractively dachshund.
                                        </p>
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
                                                                <p>Thank you very fast shipping from Poland only 3days.
                                                                </p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at
                                                                            3:12 pm </p>
                                                                        <a href="#" class="text-brand btn-reply">Reply<i
                                                                                class="fa-solid fa-angle-right"></i>
                                                                        </a>
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
                                                                        <p class="font-xs mr-30">December 4, 2020 at
                                                                            3:12 pm </p>
                                                                        <a href="#" class="text-brand btn-reply">Reply<i
                                                                                class="fa-solid fa-angle-right"></i>
                                                                        </a>
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
                                                                <p>Authentic and Beautiful, Love these way more than
                                                                    ever expected They are Great earphones</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at
                                                                            3:12 pm </p>
                                                                        <a href="#" class="text-brand btn-reply">Reply
                                                                            <i class="fa-solid fa-angle-right"></i> </a>
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
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                                                    </div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                                                    </div>
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
                                                                <textarea class="form-control w-100" name="comment"
                                                                    id="comment" cols="30" rows="9"
                                                                    placeholder="Write Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name" id="name"
                                                                    type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="email" id="email"
                                                                    type="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="website" id="website"
                                                                    type="text" placeholder="Website">
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
                            <div class="container wow fadeIn animated">
                                <h3 class="section-title style-1 pb-10 mb-10">Related products</h3>
                                <div class="carausel-6-columns-cover position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                                        id="carausel-6-columns-arrows"></div>
                                    <div class="carausel-6-columns" id="carausel-6-columns">
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="assets/images/198421C02_RGB.jpg" alt="">
                                                            <img class="hover-img" src="assets/images/592790C01_RGB.jpg"
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
                                                    <span><a href="shop-product-right.html" tabindex="0">Ulstra Bass
                                                            Headphone</a></span>

                                                    <div class="product-price">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="assets/images/198421C02_RGB.jpg" alt="">
                                                            <img class="hover-img" src="assets/images/592790C01_RGB.jpg"
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
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-12%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="shop-product-right.html" tabindex="0">Smart Bluetooth
                                                            Speaker</a></span>
                                                    <div class="product-price">
                                                        <span>$138.85 </span>
                                                        <span class="old-price">$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="assets/images/198421C02_RGB.jpg" alt="">
                                                            <img class="hover-img" src="assets/images/592790C01_RGB.jpg"
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
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="shop-product-right.html" tabindex="0">Ulstra Bass
                                                            Headphone</a></span>
                                                    <div class="product-price">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0 ">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="assets/images/198421C02_RGB.jpg" alt="">
                                                            <img class="hover-img" src="assets/images/592790C01_RGB.jpg"
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
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-12%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="shop-product-right.html" tabindex="0">Smart Bluetooth
                                                            Speaker</a></span>
                                                    <div class="product-price">
                                                        <span>$138.85 </span>
                                                        <span class="old-price">$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0 ">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="assets/images/198421C02_RGB.jpg" alt="">
                                                            <img class="hover-img" src="assets/images/592790C01_RGB.jpg"
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
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-12%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="shop-product-right.html" tabindex="0">Smart Bluetooth
                                                            Speaker</a></span>
                                                    <div class="product-price">
                                                        <span>$138.85 </span>
                                                        <span class="old-price">$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap p-0 m-0 ">
                                                    <div class="product-img product-img-zoom border-0">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="assets/images/198421C02_RGB.jpg" alt="">
                                                            <img class="hover-img" src="assets/images/592790C01_RGB.jpg"
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
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-12%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap p-0">
                                                    <span><a href="shop-product-right.html" tabindex="0">Smart Bluetooth
                                                            Speaker</a></span>
                                                    <div class="product-price">
                                                        <span>$138.85 </span>
                                                        <span class="old-price">$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 d-flex justify-content-end align-items-center view_detail">
                                    <a href="javascript:void(0)">View More<i
                                            class="fa-solid fa-angle-right ps-2"></i></a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

@endsection

@section('js')

    <!-- owl carousel js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    
@endsection