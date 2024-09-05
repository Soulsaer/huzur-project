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
        <section class="home-slider position-relative"  >
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1" >
                <div class="single-hero-slider single-animation-wrap" >
                    <div class="container-fluid slider_banner p-0 m-0">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-12 slider_pro">
                                <img src="assets/images/banner_donantion_1.jpeg" style="height: 620px;"  alt="">
                                <!-- <div class="banner_overlay ">
                                    <h5 class="banner_overlay_title ">NEW ARRIVALS</h5>
                                    <h2 class="banner_overlay_sub_title ">Milancélos</h2>
                                    <p class=" banner_para">Quisquemos sodale suscipit delio condiment <br>
                                        cosmo lacus meleifend blanditos.</p>
                                    <div class="d-flex justify-content-start align-items-center view_detail w-100">
                                        <a href="javascript:void(0)" class="d-block m-auto">View More<i class="fa-solid fa-angle-right ps-2"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container-fluid p-0 m-0">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-12 slider_pro">
                                <img src="assets/images/banner_donation_2.jpeg" style="height: 620px;" alt="">
                                <!-- <div class="banner_overlay_2">
                                    <h5 class="banner_overlay_title ">NEW ARRIVALS</h5>
                                    <h2 class="banner_overlay_sub_title ">Milancélos</h2>
                                    <p class=" banner_para">Quisquemos sodale suscipit delio condiment <br>
                                        cosmo lacus meleifend blanditos.</p>
                                    <div class="d-flex justify-content-start align-items-center view_detail w-100">
                                        <a href="javascript:void(0)" class="d-block m-auto">View More<i class="fa-solid fa-angle-right ps-2"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- product category -->
        <section class="featured section-padding pt-80 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="custem_title text-center fs-1">Donate For Poor Children</h4>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-lg-6 col-sm-12 mb-md-6 mb-lg-0 py-2 fs-6" style="height: 100%;">
                        <div class="card p-4">
                            <form method="post" action="{{ route('donate.submit') }}">
                                @csrf
                                <div class="input-group-donate py-2">
                                    <label for="" class="pb-1">Enter Name</label>
                                    <input type="text" class="input-donate" placeholder="Enter Your Name" required name="name" id="">
                                </div>
                                <div class="input-group-donate py-2">
                                    <label for="" class="pb-1">Enter Phone Number</label>
                                    <input type="text" class="input-donate" placeholder="Enter Your Phone Number" required name="number" id="">
                                </div>
                                <div class="input-group-donate py-2">
                                    <label for="" class="pb-1">E-mail</label>
                                    <input type="text" class="input-donate" placeholder="Enter Your E-mail" required name="email" id="">
                                </div>
                                <div class="input-group-donate py-2">
                                    <label for="" class="pb-1">Donate For</label>
                                    <select name="salect" id="" class="donation_select_box text-secondary">
                                        <option value="Poor Childrens">Poor Childrens</option>
                                        <option value="Education">Education</option>
                                        <option value="Oldage Hom">Oldage Home</option>
                                    </select>
                                </div>
                                <div class="input-group-donate py-2">
                                    <label for="" class="pb-1">Enter Amount</label>
                                    <input type="tel" class="input-donate" placeholder="Enter Amount" required name="amount" id="">
                                </div>
                                <div class="py-4 w-100 d-flex justify-content-center align-items-center view_detail">
                                    <button type="submit" class="w-100">DONATE<i class="fa-solid fa-angle-right ps-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-md-6 mb-lg-0 py-2 fs-6 hover-up">
                        <img src="assets/images/donation1.jpg" style="height: 100%; width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection