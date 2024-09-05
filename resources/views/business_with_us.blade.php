@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection

@section('style')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style>
        .custm-btn {
            background: #FFD922;
            margin-top: 15px;
            display: block;
            width: 240px;
            padding: 12px;
            text-align: center;
            color: #000;
            font-size: 1rem;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            border-radius: 3px
        }

        .custm-banner {
            position: relative;
            height: 436px;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center
        }

        .custm-banner .container {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0
        }

        .custm-banner .banner-title {
            font-size: 2.8125rem;
            line-height: normal;
            margin-bottom: 15px
        }

        .custm-banner .banner-title span {
            display: block;
        }

        .custm-banner aside {
            font-size: 1.25rem;
            text-align: left;
            color: #fff;
            margin-left: 100px
        }

        .custm-banner figure:before {
            padding-top: 23%
        }

        .banner-customize {
            font-size: 1.5625rem;
            text-align: left;
            width: 42%;
            padding: 30px;
            line-height: normal
        }

        .banner-customize span {
            display: block;
        }

        .banner-customize ul {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 15px
        }

        .banner-customize ul li {
            width: 50%;
            text-align: center;
            font-size: .9375rem;
            padding: 20px;
        }

        .banner-customize ul li img {
            display: block;
            margin: 0px auto 10px
        }

        .banner-customize ul li:nth-child(odd) {
            border-right: 1px solid #e5e5e5
        }

        .banner-customize ul li:nth-child(-n+2) {
            border-bottom: 1px solid #e5e5e5
        }

        .made-section {
            text-align: center;
            padding: 20px 0;
            color: #1C2E34;
            border-bottom: 1px solid #e5e5e5
        }

        .made-section .made-title {
            font-size: 1.25rem;
            margin: 0px 0px 5px;
            font-weight: normal
        }

        .made-section .more-content {
            font-size: .875rem;
            max-width: 940px;
            margin: auto;
            height: 20px;
            overflow: hidden
        }

        .custome-imagine {
            padding: 40px 0;
            text-align: center;
            border-bottom: 1px solid #e5e5e5
        }

        .custome-imagine ul {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px
        }

        .custome-imagine ul li {
            width: 24%
        }

        .custome-imagine ul li img {
            margin-left: 50px
        }

        .custome-imagine ul li span {
            display: block;
            font-weight: bold;
            color: black;
            font-size: 1.25rem;
            margin: 15px 0 5px
        }

        .custom-make {
            padding: 40px 0;
            color: #1C2E34
        }

        .custom-make article {
            background: #F5F5F5;
            position: relative;
            overflow: hidden
        }

        .custom-make article:before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            top: -50%;
            left: 0;
            right: 0;
            background: #fff;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;
            -khtml-border-radius: 100%;
            border-radius: 100%
        }

        .custom-make ul {
            display: flex;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.28);
            -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.28);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.28);
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            border-radius: 5px;
            width: 790px;
            margin: 90px auto;
            background: #fff;
            position: relative
        }

        .custom-make ul li {
            width: 33%;
            text-align: center;
            border-right: 1px solid #e5e5e5;
            font-size: 1.125rem;
        }

        .custom-make ul li span {
            display: block;
            padding: 15px 20px;
            border-bottom: 1px solid #e5e5e5;
            line-height: 40px
        }

        .custom-make ul li:first-child {
            text-align: left
        }

        .custom-make ul li:first-child span:last-child {
            border: none
        }

        .custom-make ul li:last-child {
            border: none;
            width: 34%;
            margin: -45px 0;
            background: #fff;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.28);
            -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.28);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.28);
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            border-radius: 5px;
            overflow: hidden
        }

        .custom-make ul li label {
            padding: 20px 20px 0px;
            display: block;
            font-size: 1.25rem
        }

        .custom-make ul li p {
            font-size: .75rem;
            padding: 20px;
            line-height: normal
        }

        .custom-make ul li p strong {
            font-size: 1.25rem;
            display: block;
            font-weight: normal;
            margin-bottom: 10px
        }

        .custom-make ul li .close {
            color: red
        }

        .custom-heading {
            font-size: 1.875rem;
            text-align: center;
            color: black;
        }

        .custom-make ul li img {
            margin-right: 10px;
            vertical-align: middle
        }

        .custom-make .btn_common {
            margin-bottom: 20px
        }

        .custom-make .makmodal {
            background: black;
            color: #fff;
            padding: 20px
        }

        .custmCollage .custom-heading {
            margin-bottom: 20px
        }

        .mid-section {
            color: #1C2E34;
            text-align: center;
            line-height: normal;
            border-bottom: 1px solid #e5e5e5
        }

        .mid-section figure {
            display: inline-block;
            vertical-align: middle;
            width: 45%
        }

        .mid-section figure:before {
            padding-top: 115%
        }

        .mid-section aside {
            display: inline-block;
            vertical-align: middle;
            margin-left: 40px;
            text-align: left
        }

        .mid-section strong {
            display: block;
            font-size: 2.1875rem;
        }

        .mid-section p {
            margin: 15px 0
        }

        .mid-section .title {
            font-size: 1.25rem;
        }

        .mid-section .title img {
            float: left;
            margin-right: 20px;
        }

        .mid-section .title:after {
            width: 180px;
            height: 3px;
            content: '';
            display: block;
            background: #55CD6C;
            margin: 20px 0
        }

        .btn_common {
            font-size: .875rem;
            color: #fff;
            background: black;
            padding: 8px 30px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            border-radius: 3px;
            border: 0px solid;
        }

        .btn_common:hover {
            background: #e57200;
        }
        .card-body {
    margin: 0rem 1rem 1rem 1rem;
}
</style>
@endsection

@section('content')

<main class="">
    <section class="custm-banner lazy" data-was-processed="true"
    style="background-image:url({{ asset('storage/'.$businessSection->banner) }});background-size: 100% 100% ;">
        <div class="container">
        <aside>
            <div class="banner-title"><span>Custom </span>Jewellery Design</div>
            We custom build your dream Jewellery
            <!-- <a class="custm-btn">Customize Now</a> -->
        </aside>
            <article class="bg-white banner-customize p-0 border rounded">
                <div class="bg-white p-4 py-3 rounded  shadow-lg ">
                <form action="{{ route('enquiry.submit') }}" method="post" id="enquiry-form" enctype="multipart/form-data" class="row justify-content-between">
                     @csrf
                    <input type="text" name="name" placeholder="Name" class="my-2 col-lg-12" required>
                    <input type="email" name="email" placeholder="Email" class="my-2 col-lg-5" required>
                    <input type="number" name="mobile" placeholder="Mobile" class="my-2 col-lg-5" required>
                    <input type="file" name="file" placeholder="File" class="my-2 col-lg-12 form-control">
                    <textarea name="description" cols="10" rows="1" placeholder="Description" class="col-lg-12" style="min-height: 100px;"></textarea>
                    <div class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                        <button class="d-block m-auto fs-6 w-100 text-center" type="submit" id="enquirySubmitBtn">Submit<i
                            class="fa-solid fa-angle-right ps-2"></i></button>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </section>


    <!-- Process Customized Jewelry -->
    <div class=" py-80">
        <h1 class="homepage_heading mx-3">{{ $businessSection->bjo_section_title }}</h1>
        <h3 class="fs-5 mb-4 mx-3">{{ $businessSection->bjo_section_tag_line }}</h3>
        
        <div class="row m-0">
            <div class="col-lg-6 col-12" style="max-height: 400px;">
                <img class="w-100 shadow h-100" style="object-fit: cover;"
                src="{{ asset('storage/'.$businessSection->bjo_section_image) }}" />
            </div>
            <div class="col-lg-6">
                <div class="row m-0 justify-content-center pt-5">
                    <div class="col-lg-6 p-0">
                        <div class="border border-dark">
                            <div class="border border-dark bg-dark">
                                <h2 class="text-center text-light py-3">Order Quantity</h2>
                            </div>
                            <div class="d-flex border border-dark justify-content-around py-4">
                                <h3>Ordering 10+ Pieces</h3>
                            </div>
                            <div class="d-flex border border-dark justify-content-around py-4">
                                <h3>Ordering 50+ Pieces</h3>
                            </div>
                            <div class="d-flex border border-dark justify-content-around py-4">
                                <h3>Ordering 99+ Pieces</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="border border-dark">
                            <div class="border border-dark bg-dark">
                                <h2 class="text-center text-light py-3">In Huzurr</h2>
                            </div>
                            <div class="d-flex border border-dark justify-content-around py-4">
                                <h3 class="fw-bold">25% Off</h3>
                            </div>
                            <div class="d-flex border border-dark justify-content-around py-4">
                                <h3 class="fw-bold">30% Off</h3>
                            </div>
                            <div class="d-flex border border-dark justify-content-around py-4">
                                <h3 class="fw-bold">35% Off</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="background-image: url(./background-image-huzur.jpg);">
        <div class="py-80">
            <h1 class="homepage_heading mx-3">{{ $businessSection->pbjo_section_title }}</h1>
            <h3 class="fs-5 mb-4 mx-3">{{ $businessSection->pbjo_section_tag_line }}</h3>
            <div class="row m-0">
                <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4">{{ $businessSection->pbjo_section_sub_title }}</h3>
                        <p class="fs-6 mt-4">{!! $businessSection->pbjo_section_content !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                    src="{{ asset('storage/'.$businessSection->pbjo_section_image) }}" alt="{{ $businessSection->pbjo_section_sub_title }}" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                    src="{{ asset('storage/'.$businessSection->pbjo_section_2_image) }}" alt="{{ $businessSection->pbjo_section_2_sub_title }}" />
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4">{{ $businessSection->pbjo_section_2_sub_title }}</h3>
                        <p class="fs-6 mt-4">{!! $businessSection->pbjo_section_2_content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <section class="custom-make">
        <div class="custom-heading">Why choose ?<span> Huzurr</span>
            <p style="font-size: 16px;" class="mt-4">Huzurr bypasses the middlemen and brings your custom-made
                furniture directly to you,
            hassle-free!</p>
        </div>
        <article>
            @if($whyChoose)
            <ul>
                <li><label>Process</label>
                    @foreach($whyChoose as $data)
                    <span><img src="{{ asset('storage/'.$data->process_image) }}">{{ $data->process }}</span>
                    <!-- <span><img src="https://www.woodenstreet.com/images/custom-furniture/warehouse.svg">Wholesaler</span>
                    <span><img src="https://www.woodenstreet.com/images/custom-furniture/retailer.svg">Retailer</span>
                    <span><img src="https://www.woodenstreet.com/images/custom-furniture/truck.svg">Customer</span> -->
                    @endforeach
                </li>
                <li><label>The Market Model</label>
                    @foreach($whyChoose as $data)
                    {!! $data->market_model !!}
                    <!-- <span>Rs 500</span>
                    <span>Rs 700</span>
                    <span>Rs 1000</span>
                    <p><strong>Rs 2000</strong> Everyone in the chain adds to the cost, which you end up paying for
                    </p> -->
                    @endforeach
                </li>
                <li><label class="makmodal">Huzurr <br> Model</label>
                    @foreach($whyChoose as $data)
                    {!! $data->huzurr_model !!}
                    @endforeach
                    <!-- <span>Rs 500</span><span
                    class="close">X</span><span class="close">X</span>
                    <p><strong>Rs 500</strong> Your furniture leaves the care of craftsmen and is delivered to your
                    doorstep. No middlemen, no hidden costs!</p><a href="javascript:;" class="btn btn_common"
                    onclick="$('#customize-form').swpmodal({closeOnEsc: false,
                        closeOnOverlayClick: false});getCustomPopup();">Customize Now</a> -->
                </li>
            </ul>
            @endif
        </article>
    </section>


                    
        <section class="mid-section">
            <figure><img class="lazy loaded" src="https://www.woodenstreet.com/images/custom-furniture/mobile-chat.jpg"
                data-src="https://www.woodenstreet.com/images/custom-furniture/mobile-chat.jpg" data-was-processed="true"></figure>
            <aside>
                <div class="title clearfix"><img
                    src="https://www.woodenstreet.com/images/custom-furniture/whatsapp.svg">
                    We do a little more than
                    <strong>Customization</strong>
                </div>
                <p>Share with us your custom furniture designs on WhatsApp </p>
                <!-- <a class="btn btn_common">Customize Now</a> -->
                <a class="btn btn_common" href="https://api.whatsapp.com/send?phone=+919610000114">Customize Now</a>
            </aside>
        </section>

                            <!--  -->

        <div class="slider2 py-80">
            <h1 class="homepage_heading text-start ms-3">{{ $businessSection->wjr_section_title }}</h1>
            <h3 class="fs-5 mb-4 text-start ms-3">{{ $businessSection->wjr_section_tag_line }} </h3>
            <div class="slide-track2">
                @if(!empty($resellers) && count($resellers) > 0)
                @foreach($resellers as $reseller)
                <div class="slide2">
                    <img src="{{ asset('storage/'.$reseller->image) }}" height="100%" width="100%" alt="{{ $reseller->name }}" />
                </div>
                @endforeach
                @endif
            </div>
        </div>


        <!--  -->
        <div style="background-image: url(./background-image-huzur.jpg);">
            <div class="py-80" style="overflow: hidden;">
                <h1 class="homepage_heading text-start ms-3">{{ $businessSection->brjs_section_title }}</h1>
                <h3 class="fs-5 mb-4 text-start ms-3">
                    {!! $businessSection->brjs_section_content !!}
                </h3>
                <div class="slide-track2">
                    <!-- @if(!empty($businessSection->brjs_section_images) && is_array($businessSection->brjs_section_images) && count($businessSection->brjs_section_images) > 0)
                    @foreach($businessSection->brjs_section_images as $image)
                    <div class="slide2">
                        <img src="{{ asset('storage/'.$image) }}" height="100%" width="100%" alt="" />
                    </div>
                    @endforeach
                    @endif -->

                    @if(!empty($br_jewelries) && count($br_jewelries) > 0)
                    @foreach($br_jewelries as $br)
                    <div class="slide2">
                        <a href="{{ $br->link }}"><img src="{{ asset('storage/'.$br->image) }}" height="100%" width="100%" alt="{{ $br->alt }}" /></a>
                    </div>
                    @endforeach
                    @endif
                    
                    </div>
                </div>

            </div>
        </div>

        <!--  -->
        <div class="py-80 mx-3">
            <h1 class="homepage_heading text-start">RECENT BLOGS</h1>
            <div class="row">
                @if($lastblog)
                @foreach($lastblog as $_items)
                <div class="col-lg-3">
                    <a href="{{ route('singleblogs', ['id' => $_items->id]) }}">
                        <div class="card my-5" style="width: 100%;">
                            <img src="{{ asset('storage/'.$_items->lastblog_image) }}"
                            class="card-img-top" alt="{{ $_items->banner_heading }}">
                            <div class="card-body">
                                <p class="fs-5 mt-2 text-dark fw-bold">{{ $_items->banner_heading }}
                                </p>
                                <p class="fs-6 mt-2">{{ date(config('huzurr.datetime_format'), strtotime($_items->created_at)) }}</p>
                                <p class="fs-6 my-1 text-dark">{!! Str::limit($_items->description, 100) !!}</p>
                                <div
                                class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                <!-- <a href="javascript:void(0)" class="d-block m-auto fs-6 w-100 text-center">Read More<i
                                    class="fa-solid fa-angle-right ps-2"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>

        <!--  -->
        <div style="background-image: url(./background-image-huzur.jpg);">
            <div class="py-80">
                <h1 class="homepage_heading text-start mx-3 mb-4">Recent Added Reiews</h1>
                <div class="wrapper mx-3">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel mx-3" style="padding: 15px 0;">
                        <li class="card">
                            <div class="img"><img
                                src="https://t4.ftcdn.net/jpg/03/50/40/93/240_F_350409330_2bqhjowfBmrqEia5U8lBsGrvD7h8EIo6.jpg"
                                alt="img" draggable="false"></div>
                                <h2>Blanche Pearson</h2>
                                <span>Sales Manager</span>
                            </li>
                            <li class="card">
                                <div class="img"><img
                                    src="https://t3.ftcdn.net/jpg/00/57/55/40/240_F_57554079_g3LhdDR5C0f2mc2ZxjFgsbb6WMqouUwQ.jpg"
                                    alt="img" draggable="false"></div>
                                    <h2>Joenas Brauers</h2>
                                    <span>Web Developer</span>
                                </li>
                                <li class="card">
                                    <div class="img"><img
                                        src="https://t3.ftcdn.net/jpg/06/15/91/36/240_F_615913669_1GvdMMT0H44Z4owh9SCYsml6mCcy8g3G.jpg"
                                        alt="img" draggable="false"></div>
                                        <h2>Lariach French</h2>
                                        <span>Online Teacher</span>
                                    </li>
                                    <li class="card">
                                        <div class="img"><img
                                            src="https://t3.ftcdn.net/jpg/02/60/67/80/240_F_260678009_gV1PBTotxDIwTngnmn3nYqWshbznYf24.jpg"
                                            alt="img" draggable="false"></div>
                                            <h2>James Khosravi</h2>
                                            <span>Freelancer</span>
                                        </li>
                                        <li class="card">
                                            <div class="img"><img
                                                src="https://t3.ftcdn.net/jpg/03/99/91/62/240_F_399916297_1JwXdmC6ViCG4YhZuhLVz7xfuZhfHCY9.jpg"
                                                alt="img" draggable="false"></div>
                                                <h2>Kristina Zasiadko</h2>
                                                <span>Bank Manager</span>
                                            </li>

                                            <li class="card">
                                                <div class="img"><img
                                                    src="https://t4.ftcdn.net/jpg/06/81/01/43/240_F_681014359_dyMjwn4JYLtY985umiBOeytmLmVxEjC0.jpg"
                                                    alt="img" draggable="false"></div>
                                                    <h2>Donald Horton</h2>
                                                    <span>App Designer</span>
                                                </li>
                                            </ul>
                                            <i id="right" class="fa-solid fa-angle-right"></i>
                                        </div>
                                        <script>
                                            const wrapper = document.querySelector(".wrapper");
                                            const carousel = document.querySelector(".carousel");
                                            const firstCardWidth = carousel.querySelector(".card").offsetWidth;
                                            const arrowBtns = document.querySelectorAll(".wrapper i");
                                            const carouselChildrens = [...carousel.children];

                                            let isDragging = false,
                                            isAutoPlay = true,
                                            startX,
                                            startScrollLeft,
                                            timeoutId;

                    // Get the number of cards that can fit in the carousel at once
                    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

                    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
                    carouselChildrens
                    .slice(-cardPerView)
                    .reverse()
                    .forEach((card) => {
                        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
                    });

                    // Insert copies of the first few cards to end of carousel for infinite scrolling
                    carouselChildrens.slice(0, cardPerView).forEach((card) => {
                        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
                    });

                    // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
                    carousel.classList.add("no-transition");
                    carousel.scrollLeft = carousel.offsetWidth;
                    carousel.classList.remove("no-transition");

                    // Add event listeners for the arrow buttons to scroll the carousel left and right
                    arrowBtns.forEach((btn) => {
                        btn.addEventListener("click", () => {
                            carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
                        });
                    });

                    const dragStart = (e) => {
                        isDragging = true;
                        carousel.classList.add("dragging");
                        // Records the initial cursor and scroll position of the carousel
                        startX = e.pageX;
                        startScrollLeft = carousel.scrollLeft;
                    };

                    const dragging = (e) => {
                        if (!isDragging) return; // if isDragging is false return from here
                        // Updates the scroll position of the carousel based on the cursor movement
                        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
                    };

                    const dragStop = () => {
                        isDragging = false;
                        carousel.classList.remove("dragging");
                    };

                    const infiniteScroll = () => {
                        // If the carousel is at the beginning, scroll to the end
                        if (carousel.scrollLeft === 0) {
                            carousel.classList.add("no-transition");
                            carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
                            carousel.classList.remove("no-transition");
                        }
                        // If the carousel is at the end, scroll to the beginning
                        else if (
                            Math.ceil(carousel.scrollLeft) ===
                            carousel.scrollWidth - carousel.offsetWidth
                            ) {
                            carousel.classList.add("no-transition");
                        carousel.scrollLeft = carousel.offsetWidth;
                        carousel.classList.remove("no-transition");
                    }

                        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
                        clearTimeout(timeoutId);
                        if (!wrapper.matches(":hover")) autoPlay();
                    };

                    const autoPlay = () => {
                        if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
                        // Autoplay the carousel after every 2500 ms
                        timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
                    };
                    autoPlay();

                    carousel.addEventListener("mousedown", dragStart);
                    carousel.addEventListener("mousemove", dragging);
                    document.addEventListener("mouseup", dragStop);
                    carousel.addEventListener("scroll", infiniteScroll);
                    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
                    wrapper.addEventListener("mouseleave", autoPlay);

                </script>
            </div>
        </div>
        <!--  -->

        <!-- Contant -->
        <div class="px-3 pt-80 text-start" id="myDiv">
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
                    <h2 class="homepage_heading mb-4 text-start">Frequently Asked Questions</h2>
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
        </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#enquiry-form').submit(function(e) {
                console.log('hii');
                e.preventDefault();
                let formData = new FormData($(this)[0]);

                $.ajax({
                    url: $('#enquiry-form').attr('action'),
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(response) {
                        alert('An error occurred.');
                    }
                });
            });
        });

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
    <!-- Should be add in Every Page -->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })

        jQuery(document).ready(function ($) {
            var $slickElement = $('.slideshow');

            $slickElement.slick({
                autoplay: true,
                dots: false,
            });

        });

    </script>

@endsection