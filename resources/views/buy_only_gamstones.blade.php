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
        <section class="business mb-5" ></section>

        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Create With Angara
                </div>
            </div>
        </div>
        <section class="pt-3 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 my-2">
                        <div class="card p-3">
                            <h5>1. Gemstone</h5>
                            <p>Select a Gemstone</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 my-2">
                        <div class="card p-3">
                            <h5>2. Design</h5>
                        <p>Design Your Ring</p>
                        </div>
                    </div>
                </div>
               
                <div class="row pt-3 pb-4">
                    <div class="col-sm-12 col-11 m-auto d-block  testi_slider_wrapper_1">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_1" class="input-hidden p-0" />
                                    <label for="carat_1" >
                                        <img alt="Gina" src="assets/images/stone_1.webp" class="image p-0 w-100  h-100 m-auto d-block">
                                    </label>
                                  <p class="name_stone">Blue Sapphire</p>
                                </div>
                            </div>
                            <div class="item">
                              <div class="Seller_card text-center input_radio">
                                  <input  type="radio" name="one"  id="carat_2" class="input-hidden p-0" />
                                 <label for="carat_2" >
                                     <img  alt="Gina" src="assets/images/stone_2.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                </label>
                                <p class="name_stone">peridot</p>
                              </div>
                            </div>
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_3" class="input-hidden p-0" />
                                     <label for="carat_3" >
                                         <img  alt="Gina" src="assets/images/stone_1.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                    </label>
                                <p class="name_stone">Swiss Blue Topaz</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_4" class="input-hidden p-0" />
                                     <label for="carat_4" >
                                         <img  alt="Gina" src="assets/images/stone_2.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                    </label>
                                    <p class="name_stone">Ruby</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_5" class="input-hidden p-0" />
                                     <label for="carat_5" >
                                         <img  alt="Gina" src="assets/images/stone_1.webp" class="image p-0 w-100  h-100 m-auto d-block">
                                    </label>
                                  <p class="name_stone">Blue Sapphire</p>
                                </div>
                            </div>
                            <div class="item">
                              <div class="Seller_card text-center input_radio">
                                  <input  type="radio" name="one"  id="carat_6" class="input-hidden p-0" />
                                 <label for="carat_6" >
                                     <img  alt="Gina" src="assets/images/stone_2.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                </label>
                                <p class="name_stone">peridot</p>
                              </div>
                            </div>
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_7" class="input-hidden p-0" />
                                     <label for="carat_7" >
                                         <img  alt="Gina" src="assets/images/stone_1.webp" class="image p-0 w-100  h-100 m-auto d-block">
                                    </label>
                                  <p class="name_stone">Blue Sapphire</p>
                                </div>
                            </div>
                            <div class="item">
                              <div class="Seller_card text-center input_radio">
                                  <input  type="radio" name="one"  id="carat_8" class="input-hidden p-0" />
                                 <label for="carat_8" >
                                     <img  alt="Gina" src="assets/images/stone_2.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                </label>
                                <p class="name_stone">peridot</p>
                              </div>
                            </div>
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_9" class="input-hidden p-0" />
                                     <label for="carat_9" >
                                         <img  alt="Gina" src="assets/images/stone_1.webp" class="image p-0 w-100  h-100 m-auto d-block">
                                    </label>
                                  <p class="name_stone">Blue Sapphire</p>
                                </div>
                            </div>
                            <div class="item">
                              <div class="Seller_card text-center input_radio">
                                  <input  type="radio" name="one"  id="carat_10" class="input-hidden p-0" />
                                 <label for="carat_10" >
                                     <img  alt="Gina" src="assets/images/stone_2.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                </label>
                                <p class="name_stone">peridot</p>
                              </div>
                            </div>
                            <div class="item">
                                <div class="Seller_card text-center input_radio">
                                    <input  type="radio" name="one"  id="carat_11" class="input-hidden p-0" />
                                     <label for="carat_12" >
                                         <img  alt="Gina" src="assets/images/stone_1.webp" class="image p-0 w-100  h-100 m-auto d-block">
                                    </label>
                                  <p class="name_stone">Blue Sapphire</p>
                                </div>
                            </div>
                            <div class="item">
                              <div class="Seller_card text-center input_radio">
                                  <input  type="radio" name="one"  id="carat_13" class="input-hidden p-0" />
                                 <label for="carat_13" >
                                     <img  alt="Gina" src="assets/images/stone_2.webp" class="image p-0 w-100 h-100 m-auto d-block">
                                </label>
                                <p class="name_stone">peridot</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="d-flex justify-content-center align-items-center">
                            <span class="name_stones border p-2 px-3 mb-3" style="cursor: pointer;" id="show-hidden-menu">Expand Filters <i class="fa-solid fa-angle-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 pb-4 hidden-menu" style="display: none;">
                    <div class="col-sm-12 col-11 m-auto d-block  testi_slider_wrapper_3">
                        <div class="owl-carousel owl-theme">
                            <div class="">
                                <div class=" text-center pt-3">
                                    <div class="shape-list-cover cp bg-none"><div class="shape-list"><a class=" d-flex border py-3 text-dark align-items-center justify-content-center p-1 fs-6" href="#"><img src="https://assets.angara.com/stone_icon/peridot.png?width=56" style="width: 20px; height: 20px;" class="me-2" alt="Emerald Cut" data-uw-rm-ima-original="emerald cut">Precious</a></div></div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" text-center pt-3">
                                    <div class="shape-list-cover cp bg-none"><div class="shape-list"><a class=" d-flex border py-3 text-dark align-items-center justify-content-center p-1 fs-6" href="#"><img src="https://assets.angara.com/stone_icon/peridot.png?width=56" style="width: 20px; height: 20px;" class="me-2" alt="Emerald Cut" data-uw-rm-ima-original="emerald cut">Semi Precious </a></div></div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" text-center pt-3">
                                    <div class="shape-list-cover cp bg-none"><div class="shape-list"><a class=" d-flex border py-3 text-dark align-items-center justify-content-center p-1 fs-6" href="#"><img src="https://assets.angara.com/stone_icon/peridot.png?width=56" style="width: 20px; height: 20px;" class="me-2" alt="Emerald Cut" data-uw-rm-ima-original="emerald cut"> Semulated</a></div></div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" text-center pt-3">
                                    <div class="shape-list-cover cp bg-none"><div class="shape-list"><a class=" d-flex border py-3 text-dark align-items-center justify-content-center p-1 fs-6" href="#"><img src="https://assets.angara.com/stone_icon/peridot.png?width=56" style="width: 20px; height: 20px;" class="me-2" alt="Emerald Cut" data-uw-rm-ima-original="emerald cut">CutStone</a></div></div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" text-center pt-3">
                                    <div class="shape-list-cover cp bg-none"><div class="shape-list"><a class=" d-flex border py-3 text-dark align-items-center justify-content-center p-1 fs-6" href="#"><img src="https://assets.angara.com/stone_icon/peridot.png?width=56" style="width: 20px; height: 20px;" class="me-2" alt="Emerald Cut" data-uw-rm-ima-original="emerald cut">Khushan</a></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex pt-3 justify-content-center">
                        <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Carat Weight:
                                    0.51 - 26.20</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> Design Ring With Gemstone (119)</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="d-flex align-items-center">
                                    <div class="sort-by-cover my-2">
                                        <div class="sort-by-product-wrap">
                                            <div class="sort-by">
                                                <span><i class="fa-solid fa-sort"></i>Sort by:</span>
                                            </div>
                                            <div class="sort-by-dropdown-wrap">
                                                <span>Most Viewed <i class="fa-solid fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sort-by-dropdown">
                                            <ul>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">Price: Low to High</a></li>
                                                <li><a href="#">Price: High to Low</a></li>
                                                <li><a href="#">Release Date</a></li>
                                                <li><a href="#">Avg. Rating</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone1.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone2.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">2.19 Carat GIA Certified Round Teal Montana Sapphire</h5>
                                <p class="section-para-stone py-2">$12,174 <span style="text-decoration: line-through;"> $13,526</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone3.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone4.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone5.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone6.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone7.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone8.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone9.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone10.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone11.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone2.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone2.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone4.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone5.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 my-2 hover-up">
                        <div class="card card-stone">
                            <figure>
                                <img src="assets/images/stone6.webp" class="p-2" alt="">
                            </figure>
                            <div class="card-body">
                                <h5 class="section-title-stone">3.25 Carat GIA Certified Round Yellow Sapphire</h5>
                                <p class="section-para-stone py-2">$11,991 <span style="text-decoration: line-through;">$13,323</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider_stone section start -->
            
        <section class="popular-categories section-padding mt-15 mb-25 buy_only_stones">
            <div class="container wow fadeIn animated">
                <h3 class="section-title style-1 pb-10 mb-10">Related products</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns pt-3" id="carausel-6-columns">
                        <div class="card-1  wow fadeIn animated animated animated ">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap p-0 m-0">
                                    <div class="product-img product-img-zoom border-0">
                                        <a href="shop-product-right.html" tabindex="0">
                                            <img class="default-img" src="assets/images/stone5.webp"  alt="">
                                            <img class="hover-img" src="assets/images/stone6.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap p-0">
                                    <span><a href="shop-product-right.html" tabindex="0">Daimond Stone</a></span>
                                    
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated animated animated ">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap p-0 m-0">
                                    <div class="product-img product-img-zoom border-0">
                                        <a href="shop-product-right.html" tabindex="0">
                                            <img class="default-img" src="assets/images/stone5.webp" alt="">
                                            <img class="hover-img" src="assets/images/stone6.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                               </div>
                                <div class="product-content-wrap p-0">
                                    <span><a href="shop-product-right.html" tabindex="0">Daimond Stones</a></span>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$145.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated animated animated ">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap p-0 m-0">
                                    <div class="product-img product-img-zoom border-0">
                                        <a href="shop-product-right.html" tabindex="0">
                                            <img class="default-img" src="assets/images/stone5.webp" alt="">
                                            <img class="hover-img" src="assets/images/stone6.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap p-0">
                                    <span><a href="shop-product-right.html" tabindex="0">Ulstra Bass Headphone</a></span>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated animated animated ">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap p-0 m-0 ">
                                    <div class="product-img product-img-zoom border-0">
                                        <a href="shop-product-right.html" tabindex="0">
                                            <img class="default-img" src="assets/images/stone5.webp" alt="">
                                            <img class="hover-img" src="assets/images/stone6.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap p-0">
                                    <span><a href="shop-product-right.html" tabindex="0">Daimond Stones</a></span>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$145.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated animated animated ">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap p-0 m-0 ">
                                    <div class="product-img product-img-zoom border-0">
                                        <a href="shop-product-right.html" tabindex="0">
                                            <img class="default-img" src="assets/images/stone5.webp" alt="">
                                            <img class="hover-img" src="assets/images/stone6.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap p-0">
                                    <span><a href="shop-product-right.html" tabindex="0">Daimond Stones</a></span>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$145.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated animated animated ">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap p-0 m-0 ">
                                    <div class="product-img product-img-zoom border-0">
                                        <a href="shop-product-right.html" tabindex="0">
                                            <img class="default-img" src="assets/images/stone5.webp" alt="">
                                            <img class="hover-img" src="assets/images/stone6.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap p-0">
                                    <span><a href="shop-product-right.html" tabindex="0">Daimond Stones</a></span>
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
                    <a href="javascript:void(0)" class="fs-6">View More<i class="fa-solid fa-angle-right ps-2"></i></a>
                </div>
            </div>
        </section>

        <section class="need_help pt-80 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h5 class="fs-3 ">NEED HELP?</h5>
                        <p class="py-3">We’re Here for You 24/7!</p>
                        <span class="w-md-50">Got the 'hows' and 'whats' popping in your head? Our Jewelry Advisers are ready to answer them!</span>
                        <div class="my-5">
                            <span class="border p-3 px-sm-5 hover-up" style="cursor: pointer;"><i class="fa-solid fa-phone"></i> Call</span>
                            <span class="border p-3 px-sm-5 hover-up" style="cursor: pointer;"><i class="fa-solid fa-envelope"></i> Email</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
     <!-- owl carousel js cdn -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 

     <script>
        $(document).ready(function() {
        $('.testi_slider_wrapper_1 .owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:6
                },
                1000:{
                    items:10
                }
            }
        })
        })

        $(document).ready(function() {
        $('.testi_slider_wrapper_2 .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive:{
                0:{
                    items:1
                },
                380:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
        })

        $(document).ready(function() {
        $('.testi_slider_wrapper_3 .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive:{
                0:{
                    items:1
                },
                370:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
        })
      </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#show-hidden-menu').click(function(){
                    $('.hidden-menu').toggle();
                })
            })
        </script>
@endsection