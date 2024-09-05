@extends('layouts.app')
@section('content')

    <main class="">
        <div
            style="background-image:url(https://arihantcollection.in/wp-content/uploads/2023/08/slide3.jpg);background-size:100% 110%;">
            <div class="row justify-content-start mx-auto container py-5">
                <div class="col-md-6 bg-white px-4 rounded  shadow-lg d-flex flex-lg-column  justify-content-center"
                    style="margin: 80px 0px;">
                    <h3 class="py-3 display-6">Grow Your Jewelry Business With Us</h3>
                    <p class="pb-3">From Passion to Prosperity: Your Jewelry Business Deserves
                        the Best, and You Deserve the Best Too</p>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Bulk Order Now</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" class="row justify-content-between">
                                        <input type="text" placeholder="Name" class="my-2  col-lg-6">
                                        <input type="email" placeholder="Email" class="my-2  col-lg-6">
                                        <input type="number" placeholder="Mobile" class="my-2  col-lg-6">
                                        <input type="text" placeholder="Order Quantity" class="my-2  col-lg-6">
                                        <input type="text" placeholder="Country" class="my-2  col-lg-6">
                                        <input type="text" placeholder="Materail" class="my-2  col-lg-6">
                                        <input type="file" placeholder="Attached Image"
                                            class="my-2  col-lg-12 form-control">
                                        <textarea cols="10" rows="1" placeholder="Share Special Details"
                                            class="col-lg-12" style="min-height: 100px;"></textarea>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div
                                        class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                        <a href="javascript:void(0)" class="d-block m-auto fs-6 text-center">
                                            Order Now<i class="fa-solid fa-angle-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                            class="d-block m-auto fs-6 w-100 text-center popup-button">Bulk
                            Order Now<i class="fa-solid fa-angle-right ps-2"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Why Choose Huzurr -->
        <div class="container py-80">
            <h1 class="homepage_heading">Why Choose Huzurr</h1>
            <h3 class="fs-5 mb-4">From Passion to Prosperity:- <br> Your Jewelry Business Deserves the Best, and
                You Deserve the Best Too</h3>
            <div class="row m-0 justify-content-center">
                <div class="col-lg-4 p-0">
                    <div class="border border-dark">
                        <div class="border border-dark">
                            <h2 class="text-center py-3">On Time Delivery</h2>
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-3" style="height: 127px;">
                            <div><img src="delivery-time-flat-illustration_120816-3610.jpg" width="100px" alt=""></div>
                            <div class="align-self-center">
                                <h3>On Time Delivery</h3>
                            </div>
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-3" style="height: 129px;">
                            <div><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMnBK6V_cn251D29wco5f9uip51KPZpfUgeA&usqp=CAU"
                                    width="100px" alt=""></div>
                            <div class="align-self-center">
                                <h3>High Quality Product</h3>
                            </div>
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-3" style="height: 127px;">
                            <div><img
                                    src="data:image/png;base64,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"
                                    width="100px" alt=""></div>
                            <div class="align-self-center">
                                <h3>24/7 customer support</h3>
                            </div>
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4" style="height: 129px;">
                            <div><img
                                    src="https://cdn1.vectorstock.com/i/1000x1000/43/00/shipping-worldwide-international-with-cardboard-vector-23344300.jpg"
                                    width="100px" alt=""></div>
                            <div class="align-self-center">
                                <h3>Worldwide Shipping</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="border border-dark">
                        <div class="border border-dark">
                            <h2 class="text-center py-3">Other All</h2>
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="cross.jpg" width="20%" alt="">
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="cross.jpg" width="20%" alt="">
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="cross.jpg" width="20%" alt="">
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="cross.jpg" width="20%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="border border-dark">
                        <div class="border border-dark bg-dark">
                            <h2 class="text-center text-light py-3">In Huzurr</h2>
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="coreect.jpg" width="20%" alt="">
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="coreect.jpg" width="20%" alt="">
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="coreect.jpg" width="20%" alt="">
                        </div>
                        <div class="d-flex border border-dark justify-content-around py-4">
                            <img src="coreect.jpg" width="20%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Easy And Quick Order On Whatsapp -->
        <div style="background-image: url(./background-image-huzur.jpg);background-size: 100% 100%;">
            <div class="container py-80">
                <h1 class="homepage_heading">Easy And Quick Order On Whatsapp</h1>
                <h3 class="fs-5 mb-4">"Seamless Shopping: Instantly Order with a Text on WhatsApp!</h3>
                <div class="row justify-content-center mx-auto container py-5">
                    <div class="col-md-6">
                        <img src="https://www.woodenstreet.com/images/custom-furniture/mobile-chat.jpg"
                            class="img-fluid rounded shadow-lg" style="height: 100%;width: 100%;object-fit: cover;" />
                    </div>
                    <div class="col-md-6 px-4 rounded  shadow-lg d-flex flex-lg-column  justify-content-center">
                        <h3 class="homepage_heading">Our Actions Go A Bit Beyond Jewelry Supplies</h3>
                        <h3>Share Your Bulk Order Needs Now on Whatshapp</h3>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Bulk Order Now
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row justify-content-between">
                                            <input type="text" placeholder="Name" class="my-2  col-lg-6">
                                            <input type="email" placeholder="Email" class="my-2  col-lg-6">
                                            <input type="number" placeholder="Mobile" class="my-2  col-lg-6">
                                            <input type="text" placeholder="Order Quantity" class="my-2  col-lg-6">
                                            <input type="text" placeholder="Country" class="my-2  col-lg-6">
                                            <input type="text" placeholder="Materail" class="my-2  col-lg-6">
                                            <input type="file" placeholder="Attached Image"
                                                class="my-2  col-lg-12 form-control">
                                            <textarea cols="10" rows="1" placeholder="Share Special Details"
                                                class="col-lg-12" style="min-height: 100px;"></textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <div
                                            class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                            <a href="javascript:void(0)" class="d-block m-auto fs-6 text-center">
                                                Order Now<i class="fa-solid fa-angle-right ps-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="d-block m-auto fs-6  text-center popup-button">Bulk
                                Order Now<i class="fa-solid fa-angle-right ps-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Process Customized Jewelry -->
        <div class="container py-80">
            <h1 class="homepage_heading">Huzurr Offers On Bulk Jewelry Order</h1>
            <h3 class="fs-5 mb-4">Dazzling Deals Await: Elevate Your Style and Savings with Huzurr's Exclusive Offers
                on Bulk Jewelry Orders!</h3>
            <!--  -->
            <div class="row m-0">
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                        src="https://media.istockphoto.com/id/1146425090/vector/handshake-of-business-partners-business-handshake-successful-deal-vector-flat-style.jpg?s=612x612&w=0&k=20&c=O76Y-PAdksWwJONz3CnqhOpXLkJD8bdeTCnKjrC5xyo=" />
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
        <!--  -->
        <div style="background-image: url(./background-image-huzur.jpg);">
            <div class="container py-80">
                <h1 class="homepage_heading">Payment for Bulk Jewelry Order</h1>
                <h3 class="fs-5 mb-4">There are 2 types of payment Process On Huzurr For Bulk Order</h3>
                <div class="row m-0">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h3 class="fs-4">Buy Customized And Personalized Jewelry</h3>
                            <p class="fs-6 mt-4">Huzurr Worldwide stands out as a premier jewelry destination, earning
                                top-notch reviews across Google, Trustpilot, Bark, and Etsy. Renowned
                                for its exquisite craftsmanship and timeless designs, customers
                                consistently praise Huzurr's unparalleled quality and exceptional
                                customer service. With a global presence, this jewelry store has
                                garnered widespread acclaim, making it a trusted choice for those
                                seeking elegant, enduring pieces. Explore Huzurr Worldwide for a
                                world-class shopping experience, where every piece reflects a
                                commitment to excellence and beauty.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12" style="max-height: 400px;">
                        <img class="w-100 shadow h-100" style="object-fit: cover;"
                            src="https://media.istockphoto.com/id/161307099/photo/jewelry-repairing.jpg?s=612x612&w=0&k=20&c=xZPgLaHhCbVyOanFVf7oNysKNwMBq8DVsY-SCPP3Fpo=" />
                    </div>
                </div>
            </div>
        </div>

        <!--  -->

        <div class="slider2 container py-80">
            <h1 class="homepage_heading">Worldwide Jewelry Resellers Doing Business With Us</h1>
            <h3 class="fs-5 mb-4">Join our Global Network of Dazzling Success – Where Worldwide Jewelry Resellers
                Thrive in Unparalleled Excellence! </h3>
            <div class="slide-track2">
                <div class="slide2">
                    <img src="assets/images/stone1.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone2.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone3.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone4.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone5.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone6.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone7.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone8.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone9.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone10.webp" height="200" width="250" alt="" />
                </div>
                <div class="slide2">
                    <img src="assets/images/stone11.webp" height="200" width="250" alt="" />
                </div>
            </div>
        </div>


        <!--  -->
        <div style="background-image: url(./background-image-huzur.jpg);">
            <div class="container py-80">
                <h1 class="homepage_heading">Best Rated Jewelry Store Worldwide</h1>
                <h3 class="fs-5 mb-4">Huzurr Worldwide stands out as a premier jewelry destination, earning
                    top-notch reviews across Google, Trustpilot, Bark, and Etsy.
                    Renowned for its exquisite craftsmanship and timeless designs, customers consistently praise
                    Huzurr's
                    unparalleled quality and exceptional
                    customer service. With a global presence, this jewelry store has garnered widespread acclaim, making
                    it
                    a trusted choice for those seeking
                    elegant, enduring pieces. Explore Huzurr Worldwide for a world-class shopping experience, where
                    every
                    piece reflects a commitment to
                    excellence and beauty.

                </h3>
                <div class="slider container">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--  -->
        <div class="container py-80">
            <h1 class="homepage_heading">RECENT BLOGS</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card my-5" style="width: 100%;">
                        <img src="https://t4.ftcdn.net/jpg/01/42/20/17/360_F_142201762_qMCuIAolgpz4NbF5T5m66KQJzYzrEbUv.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="fs-5 mt-2 text-dark fw-bold">5 Benifits Of Using Libra-Stone The Ultimate Guide
                            </p>
                            <p class="fs-6 mt-2">January 28th 2024</p>
                            <p class="fs-6 my-1 text-dark">Meet the world's number 1 artisan team here, along
                                with customized jewelry</p>
                            <div
                                class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                <a href="javascript:void(0)" class="d-block m-auto fs-6 w-100 text-center">Read More<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-5" style="width: 100%;">
                        <img src="https://t4.ftcdn.net/jpg/01/42/20/17/360_F_142201762_qMCuIAolgpz4NbF5T5m66KQJzYzrEbUv.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="fs-5 mt-2 text-dark fw-bold">5 Benifits Of Using Libra-Stone The Ultimate Guide
                            </p>
                            <p class="fs-6 mt-2">January 28th 2024</p>
                            <p class="fs-6 my-1 text-dark">Meet the world's number 1 artisan team here, along
                                with customized jewelry</p>
                            <div
                                class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                <a href="javascript:void(0)" class="d-block m-auto fs-6 w-100 text-center">Read More<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-5" style="width: 100%;">
                        <img src="https://t4.ftcdn.net/jpg/01/42/20/17/360_F_142201762_qMCuIAolgpz4NbF5T5m66KQJzYzrEbUv.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="fs-5 mt-2 text-dark fw-bold">5 Benifits Of Using Libra-Stone The Ultimate Guide
                            </p>
                            <p class="fs-6 mt-2">January 28th 2024</p>
                            <p class="fs-6 my-1 text-dark">Meet the world's number 1 artisan team here, along
                                with customized jewelry</p>
                            <div
                                class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                <a href="javascript:void(0)" class="d-block m-auto fs-6 w-100 text-center">Read More<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div style="background-image: url(./background-image-huzur.jpg);">
            <div class="container py-80">
                <h1 class="homepage_heading">Recent Added Review</h1>
                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel">
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
        <div class="container py-80" id="myDiv">
            <h3 class="homepage_heading mb-4">More With us</h3>
            <h2 style="line-height: 34px;">
                Discover Timeless Elegance with Huzurr: Your final Destination for Delicate Jewelry</h2>
            <p class="fs-6 my-2">We at Huzurr think that jewelry serves as more than just a
                design piece. We see it as a reflection of your distinct personality and sense of style. It is an
                enduring expression of beauty and a celebration of unique moments. Huzurr cordially welcomes you to
                embark with us on an adventure where creativity and style collide and each piece of jewelry carries
                a
                narrative. Enter the captivating world of Huzurr, where jewelry is a poetic representation of your
                beauty and sense of style. For you, every item in our jewelry collection will serve as more than
                just an
                accessory. Every jewelry item is an exquisite work of art, a masterfully crafted canvas on which the
                true meaning of exquisite jewelry is expressed. Purchase from us to add a wide selection of
                exquisite
                jewelry to your jewelry collection..</p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">What We Are</h2>
            <p class="fs-6 ">In addition to being an online jewelry retailer, Huzurr is a sophisticated and
                fashionable haven. The exquisite jewelry in our collection is a display of your options. We are
                inextricably linked by an unwavering dedication to the highest standards of quality and an unbridled
                passion for beautiful design. Huzurr presents a line of fashionable jewelry that is both timeless
                and
                elegant, hand-picked from a variety of designs. Every item represents our commitment to quality
                craftsmanship, guaranteeing that each one is more than just an accessory but rather a part of your
                exquisite ensemble for that special occasion. </p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">Our Product Range</h2>

            <h3 style="line-height: 34px;margin-top: 2.5rem;">Rings</h3>
            <p class="fs-6">Check out our commitment and style in the range of our ring collection. Here
                each piece is a chapter in the story of love and style. From dazzling engagement rings that
                symbolize
                eternal commitment to statement pieces that express Uniqueness, our collection is a celebration of
                the
                profound emotions that can be expressed with beautiful rings. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Necklaces</h3>

            <p class="fs-6">A symphony of elegance and glamor that exceeds the ordinary to class. Each of
                our necklace is a masterpiece because effortlessly blending with a touch of charm. Whether you seek
                a
                subtle accent for everyday wear or a show-stopping piece for special occasions, our selection
                ensures
                that you find a piece that suits your distinct sense of style.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Earrings</h3>

            <p class="fs-6">Harmonious Blends of Classic and Contemporary Immerse yourself in the artistry
                of our earring collection, In our earing collection classic meets contemporary in a harmonious
                style.
                From timeless studs that show elegance to modern designs that make a bold statement, our earrings
                provide a diverse look on different occasions. Raise your look with each meticulously crafted
                earring
                that reflects a perfect balance of tradition and modernity. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Bracelets</h3>

            <p class="fs-6">In our stunning range of bracelets each piece is a masterpiece that is crafted
                with perfection. Whether you prefer the delicate sparkle of gemstones or the piece of precious
                metals,
                our bracelets are designed to complement your style. </p>

            <h3 style="line-height: 34px;margin-top: 2.5rem;">Birthstones</h3>
            <p class="fs-6">With our 100% genuine birthstones, embark on a mystical adventure. Every
                birthstone is a special illustration of marvels, containing the energy and meaning specific to its
                birth
                month. Discover the assortment of birthstones, where each gem is a carefully chosen cosmic
                connection
                that speaks to your uniqueness rather than just a piece of jewelry. </p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">What we offer </h2>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">100% Original Products</h3>
            <p class="fs-6">Step into the world of Huzurr, where authenticity is not just a claim but a
                sparkling reality. Our pride lies in our coveted birthstones and each one is a genuine and unique
                piece
                with the certification of originality. From the ethereal glow of a moonstone to the fiery brilliance
                of
                a ruby, every gem tells a story. Revel in the assurance that when you choose Huzurr, you choose
                originality, you choose a promise to bring extraordinary to every piece in our collection.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Quality Assurance</h3>
            <p class="fs-6">At Huzurr, we don't just promise quality, we embody it. Our commitment to
                excellence is non-negotiable. Each jewellery piece is a result of meticulous craftsmanship and
                undergoes
                a series of rigorous quality checks. From the selection of materials to the final polish, we leave
                no
                stone unturned to ensure that every detail meets and exceeds the highest standards.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Return Policy</h3>
            <p class="fs-6">Satisfaction is important for every customer, at Huzurr, and we stand behind
                every piece we offer. Explore our hassle-free return policy, developed with our confidence to
                provide
                the best product. We understand that sometimes choices may change, and we want you to shop with
                peace of
                mind. If, for any reason, you're not completely satisfied with your purchase, our straightforward
                return
                process ensures that you can return or exchange your jewelry effortlessly. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Our global presence </h3>
            <p class="fs-6">We at Huzurr have a huge impact that crosses border sales. as we expertly cross
                international boundaries to provide a line of jewelry to every location on the planet. Beyond
                national
                borders, we are devoted to having a global presence. It is the consequence of our steadfast
                commitment
                to transforming style into a globally accessible luxury. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Why choose us </h3>
            <p class="fs-6">At Huzurr, every piece made by our master craftsmen is an expression of art, not
                just a skill. Immerse yourself in a realm where jewelry that has been expertly crafted can fulfill
                your
                dreams. Every item conveys a tale of commitment, accuracy, and a desire to transform emotions into
                wearable works of art. Each piece of jewelry that our artisans create is a wearable work of art
                because
                every detail is meticulously thought out and expertly crafted. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Elevate Your Jewelry Experience</h3>
            <p class="fs-6">Huzurr invites you to elevate your jewelry experience to new heights. Immerse
                yourself in a world where every piece is more than an accessory. From the initial concept to the
                final
                creation, our jewelry embodies a commitment to excellence that stands the test of time. Whether
                you're
                celebrating a special moment or expressing your individuality, Huzurr is your partner in crafting
                memories and making a statement with jewelry that resonates with the essence of you. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Endless Choices</h3>
            <p class="fs-6">Discover a universe of choices at Huzurr, where your individuality takes the
                center of focus. From timeless classics that exude sophistication to modern creations that push the
                boundaries of design, our diverse collection caters to every taste and occasion. Whether you seek
                the
                understated elegance of traditional designs or the bold allure of contemporary pieces, Huzurr offers
                an
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
        <!-- Contant ENd -->

        <!-- Faq -->
        <section class="faq py-80" style="background-image: url(./background-image-huzur.jpg);">
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
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et
                                            leo
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
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et
                                            leo
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
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et
                                            leo
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
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et
                                            leo
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
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et
                                            leo
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
    </main>

@endsection

@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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