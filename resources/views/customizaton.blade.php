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
<style>
@keyframes scroll {
0% {transform: translateX(0);}100% {transform: translateX(calc(-250px * 7));}}
.slider {background: white;box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125);height: 100px;margin: auto;overflow: hidden;position: relative;width: 100%;}

.slider::before,
.slider::after {background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);content: "";height:00px;position: absolute;width: 200px;z-index: 2;}.slider::after {right: 0;top: 0;transform: rotateZ(180deg);}

.slider::before {left: 0;top: 0;}
.slide-track {animation: scroll 45s linear infinite;display: flex;width: calc(250px * 14);}

.slide {height: 100px;width: 250px;}
.slider2 {background: white;height: 100%;margin: auto;overflow: hidden;position: relative;width: 100%;}
.slider2::before,
.slider2::after {
background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);content: "";height: 100px;position: absolute;width: 200px;z-index: 2;}
.slider2::after {right: 0;top: 0;transform: rotateZ(180deg);}
.slider2::before {left: 0;top: 0;}
.slide-track2 {animation: scroll 30s linear infinite;display: flex;width: calc(250px * 10);}
.slide2 {height: 200px;width: 250px;}
/* Css For Reviews */
        .spacer{
  height:150px;
  width:100%;
}
.spacer2{
  height:20px;
  width:100%;
}
/* spacer ends */

/* slider styles */
.sd_master_wrapper{
  position: relative; 
  max-width:900px;
  margin:0 auto;
  padding:0;
  border-radius:10px;
  /* z-index:9999; */
}
.sdtestBg3{
  height: 100%;
    width: 80%;
    background: #fff;
    position: absolute;
    bottom: -40px;
    left: 10%;
    border-radius: 20px;
    box-shadow: 0px 18px 52.8537px rgb(215 228 249 / 50%);
  z-index:1;
}
.sdtestBg2{
  height: 100%;
    width: 90%;
    background: #fff;
    position: absolute;
    bottom: -22px;
    left: 5%;
    border-radius: 20px;
    box-shadow: 0px 18px 52.8537px rgb(215 228 249 / 50%);
  z-index:2;
}

.sd_scroll {
  height: auto;
    max-height: 180px;
    overflow: auto;
}
  
.slideshow {
    position: relative;
    min-height: 300px;
    height: auto;
    background: #fff;
    box-shadow: 0px 18px 52.8537px rgba(215, 228, 249, 0.5);
    border-radius: 20px;
    background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/quote1.png), url(https://farsighttechnologies.com/wp-content/uploads/2021/03/quote.png);
    background-position: top 15px left 15px, bottom 40% right 15px;
    background-repeat: no-repeat;
    background-size: 180px, 180px;
  z-index:3;
}
button.slick-prev.slick-arrow {
    position: absolute;
    /* z-index: 9999; */
    bottom: -80px;
    right: 160px;
    background: transparent;
    color: transparent;
    border: none;
    outline: none;
    cursor: pointer;
    height: 15px;
    width: 30px;
    padding: 0;
    background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/left-icon.png);
    background-size: 100% 100%;
}
button.slick-next.slick-arrow {
    position: absolute;
    bottom: -82px;
    right: 105px;
    background: transparent;
    color: transparent;
    border: none;
    padding: 0;
    cursor: pointer;
    outline: none;
    height: 18px;
    width: 40px;
    background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/right-icon.png);
    background-size: 100% 100%;
}
.pagingInfo {
    position: absolute;
    bottom: 0;
    z-index: 999;
}
.sdCustomSliderHeadig {
    color: #94A2B3;
    font-family: "Poppins", Sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.6em;
    text-align: center;
}
.sdCustomSliderBtn{
    display: inline-block;
    text-decoration: none;
    font-family: montserrat;
    background: #E31C3A;
    color: #fff;
    padding: 12px 25px;
    margin-top: 30px;
    border-radius: 4px;
    outline: none;
    font-size: 14px;
    font-weight: 500;
}
.sdAllContent{
  width:75%;
  margin:auto;
}
.thumbnail img {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    margin: auto;
    margin-top: 15px;
    margin-bottom: 15px;
}
.content{
  display:block !important;
  padding: 5px;
}
.SdClientName {
    text-align: center;
    color: #272D4E;
    font-family: "Poppins", Sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.4em;
  margin-top: 15px;
}
.SdClientDesc {
    text-align: center;
    color: #7854F7;
    font-family: "Poppins", Sans-serif;
    font-size: 14px;
    line-height: 1.4em;
  margin-bottom: 10px;
}


/* style for moblile */
@media (max-width:576px){
.sd_scroll {
    height: auto;
    overflow: auto;
  max-height:240px;
}

.thumbnail, .btnNtxt{
  width: 100% !important;
    display: block !important;
}

}
/* scroll bar */
/* total width */
.sd_scroll::-webkit-scrollbar {
    background-color:transparent;
    width:6px;
}

/* background of the scrollbar except button or resizer */
.sd_scroll::-webkit-scrollbar-track {
    background-color:transparent;
}
.sd_scroll::-webkit-scrollbar-track:hover {
    background-color:transparent;
}

/* scrollbar itself */
.sd_scroll::-webkit-scrollbar-thumb {
    background-color:#babac0;
    border-radius:16px;
    
}
.sd_scroll::-webkit-scrollbar-thumb:hover {
    background-color:#a0a0a5;
}



        
         .faq_section h2{
                font-size: 20px;
            }
            
            .accordion_faq .accordion-item {
              border-bottom: 1px solid #e5e5e5;
            }
            
            .accordion_faq .accordion-item button[aria-expanded='true'] {
              border-bottom: 1px solid #fcbba2;
            }
            
            .accordion_faq button {
              position: relative;
              display: block;
              text-align: left;
              width: 100%;
              padding: 1em 0;
              color: #7288a2;
              font-size: 1.15rem;
              font-weight: 400;
              border: none;
              background: none;
              outline: none;
            }
            
            .accordion_faq button:hover,
            .accordion_faq button:focus {
              cursor: pointer;
              color: #fcbba2;
            }
            
            .accordion_faq button:hover::after,
            .accordion_faq button:focus::after {
              cursor: pointer;
              color: #fcbba2;
              border: 1px solid #fcbba2;
            }
            
            .accordion_faq button .accordion-title fs-6 {
              padding: 1em 1.5em 1em 0;
            }
            
            .accordion_faq button .icon {
              display: inline-block;
              position: absolute;
              top: 18px;
              right: 0;
              width: 22px;
              height: 22px;
              border: 1px solid;
              border-radius: 22px;
            }
            
            .accordion_faq button .icon::before {
              display: block;
              position: absolute;
              content: '';
              top: 9px;
              left: 5px;
              width: 10px;
              height: 2px;
              background: currentColor;
            }
            .accordion_faq button .icon::after {
              display: block;
              position: absolute;
              content: '';
              top: 5px;
              left: 9px;
              width: 2px;
              height: 10px;
              background: currentColor;
            }
            
            .accordion_faq button[aria-expanded='true'] {
              color: #fcbba2;
            }
            .accordion_faq button[aria-expanded='true'] .icon::after {
              width: 0;
            }
            .accordion_faq button[aria-expanded='true'] + .accordion-content {
              opacity: 1;
              max-height: 9em;
              transition: all 200ms linear;
              will-change: opacity, max-height;
            }
            .accordion_faq .accordion-content {
              opacity: 0;
              max-height: 0;
              overflow: hidden;
              transition: opacity 200ms linear, max-height 200ms linear;
              will-change: opacity, max-height;
            }
            .accordion_faq .accordion-content p {
              font-size: 1rem;
              font-weight: 300;
              margin: 2em 0;
            }


    </style>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <main class="">
        <div style="background-color:#caedf7">
            <div class="row justify-content-center mx-auto container py-5">
                <div class="col-md-6 d-none d-md-block " style="max-height: 510px;">
                    <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80"
                        class="img-fluid rounded shadow-lg" style="height: 100%;width: 100%;object-fit: cover;" />
                </div>
                <div class="col-md-6 bg-white px-4 rounded  shadow-lg">
                    <h3 class="py-3 display-6">Personalized Your Jewellery</h3>
                    <p class="pb-3">Fill The Form For Customized Jewellery. Our Team Will Contact You WithIn 2 Hours</p>
                   <form action="{{ url('/jewelry/submit') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Name" class="my-2 col-lg-12">
                        <input type="email" name="email" placeholder="Email" class="my-2 col-lg-5">
                        <input type="number" name="mobile" placeholder="Mobile" class="my-2 col-lg-5">
                        <textarea name="description" cols="10" rows="1" placeholder="Description" class="col-lg-12" style="min-height: 100px;"></textarea>
                        <div class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                            <button type="submit" class="d-block m-auto fs-6 w-100 text-center">Submit<i class="fa-solid fa-angle-right ps-2"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
        
        
        
        
        


        <!-- Process Customized Jewelry -->
        <h1 class="text-center display-6 pt-5">Process Customized Jewelry</h1>
        <h3 class="text-center">5 Simple Steps Buy Custmized jewelry</h3>
        <!--  -->
        
        
       <div class="container my-5">
            <div class="row m-0">
                 @foreach($processcustomized_one as $item)
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                        src="{{asset('process-customized/'.$item->banner)}}" />
                </div>
                  <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4"><span class="display-1" style="color:#4ed9ff;line-height: 1px;">1</span> {{ $item->title }} </h3>
                        <p class="fs-6 mt-4">{{ $item->discripation }}</p>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
        <!--  -->
        <div class="container my-5">
            <div class="row m-0">
                      @foreach($processcustomized_two as $item)
                <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4"><span class="display-1" style="color:#4ed9ff;line-height: 1px;">2</span>{{ $item->title }}</h3>
                        <p class="fs-6 mt-4">{{ $item->discripation }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                        src="{{asset('process-customized/'.$item->banner)}}" />
                </div>
                  @endforeach
            </div>
        </div>
        <!--  -->
        <div class="container my-5">
            <div class="row m-0">
                  @foreach($processcustomized_three as $item)
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                        src="{{asset('process-customized/'.$item->banner)}}" />
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4"><span class="display-1" style="color:#4ed9ff;line-height: 1px;">3</span>{{ $item->title }}</h3>
                        <p class="fs-6 mt-4">{{ $item->discripation }}</p>
                    </div>
                </div>
                   @endforeach
            </div>
        </div>
        <!--  -->
        <div class="container my-5">
            <div class="row m-0">
                  @foreach($processcustomized_four as $item)
                <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4"><span class="display-1" style="color:#4ed9ff;line-height: 1px;">4</span>{{ $item->title }}</h3>
                        <p class="fs-6 mt-4">{{ $item->discripation }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                        src="{{asset('process-customized/'.$item->banner)}}" />
                </div>
                 @endforeach
            </div>
        </div>
        <!--  -->
        <div class="container pt-5">
            <div class="row m-0">
                  @foreach($processcustomized_five as $item)
                     <div class="col-lg-6 col-12" style="max-height: 400px;">
                    <img class="w-100 shadow h-100" style="object-fit: cover;"
                        src="{{asset('process-customized/'.$item->banner)}}" />
                </div>
                     <div class="col-lg-6">
                    <div class="p-5">
                        <h3 class="fs-4"><span class="display-1" style="color:#4ed9ff;line-height: 1px;">5</span>{{ $item->title }}</h3>
                        <p class="fs-6 mt-4">{{ $item->discripation }}</p>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
        
        
        
        
        
<!--                  <div class="container my-5">-->
<!--    <div class="row m-0">-->
<!--        @foreach($processcustomized as $item)-->
<!--        <div class="col-lg-6">-->
<!--            <div class="p-5">-->
<!--                <h3 class="fs-4"><span class="display-1" style="color:#4ed9ff;line-height: 1px;"></span>{{ $item->title }}</h3>-->
<!--                <p class="fs-6 mt-4"> {{ $item->discripation }} </p>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="col-lg-6 col-12" style="max-height: 400px;">-->
<!--            <img class="w-100 shadow h-100" style="object-fit: cover;" src="{{asset('process-customized/'.$item->banner)}}" />-->
<!--        </div>-->
<!--        @endforeach-->
<!--    </div>-->
<!--</div>-->
        <!--  -->


   
        <!--  -->
        <div class="slider2 container pt-5">
            <h1 class="text-center display-6 pt-5">Custom Furniture “Made to Order”</h1>
            <div class="slide-track2">
                @foreach($custom_furniture as $banner) 
                    <div class="slide2">
                        <img src="{{ asset('custom-furniture/' . $banner->banner) }}" alt="{{ $banner->alt }}" class="w-100 h-75 my-4">
                    </div>
                 @endforeach
             
            
            </div>
        </div>
        <!--  -->
        <div class="slider container">
            <div class="slide-track">
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                </div>
            </div>
        </div>

<!--  -->
        <div class="container pt-5">
            <h1 class="text-center display-6 pt-5">Our Custmized Jewelry Team</h1>
            <h3 class="text-center mt-4 fs-5">Skilled Artisans With 27+ Years Of Experience</h3>
            <div class="row m-0">

            @foreach($team as $item)
                <div class="col-lg-3">
                    <div class="card my-5" style="width: 100%;">
                        <img src="{{asset('teamimg/'.$item->banner)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="fs-3 fw-bold mt-2 text-center text-dark">{{ $item->name }}</p>
                          <p class="fs-6 my-3 text-center">{{ $item->about }}</p>
                        </div>
                      </div>
                </div>
            @endforeach
             
            </div>
        </div>
<!--  -->
        <div class="container pt-5">
            <h1 class="text-center display-6 pt-5">Custmized Jewelry In Work Shop</h1>
            <h3 class="text-center mt-4 fs-5">Meet the world's number 1 artisan team here, along with customized jewelry</h3>
            <div style="position: relative;">
                <!--@foreach($custmizatiobanner as $banner)-->

                <!--<img src="{{asset('c-banner/'.$banner->banner)}}" alt="{{$banner->alt}}" class="w-100 h-75 my-4" alt="">-->
                
                <!--<video src="production_id_4974748 (2160p).mp4" style="width: 50%;position: absolute;top: 30%;left: 40%;" class="rounded" autoplay loop muted></video>-->
                
                <!--@endforeach-->
                @foreach($custmizatiobanner as $banner)
                    <img src="{{ asset('c-banner/' . $banner->banner) }}" alt="{{ $banner->alt }}" class="w-100 h-75 my-4">
                  <video src="{{ asset('c-banner/' . $banner->video) }}" style="width: 50%; position: absolute; top: 30%; left: 40%;" class="rounded" autoplay loop muted></video>

                @endforeach


            </div>
        </div>



        <!--  -->
        <div class="container pt-5">
            <h1 class="text-center display-6 pt-5">Our Work Shop</h1>
            <h3 class="text-center mt-4 fs-5">Elevate Your Style, Crafted with Precision in Every Sparkling Detail at our Jewelry Workshop</h3>
            <div class="gallery pt-4" style="background-color: white;">
                @foreach($workshopimg as $item)
                        <img src="{{asset('workshopimg/'.$item->banner)}}" alt="{{$item->alt}}">
                 @endforeach
            </div>
          
        </div>
        <div class="container pt-5">
            <h1 class="text-center display-6 pt-5">Best Rated Jewelry Store Worldwide</h1>
            <h3 class="text-center mt-4 fs-5">Huzurr Worldwide stands out as a premier jewelry destination, earning top-notch reviews across Google, Trustpilot, Bark, and Etsy.
                Renowned for its exquisite craftsmanship and timeless designs, customers consistently praise Huzurr's unparalleled quality and exceptional
                customer service. With a global presence, this jewelry store has garnered widespread acclaim, making it a trusted choice for those seeking
                elegant, enduring pieces. Explore Huzurr Worldwide for a world-class shopping experience, where every piece reflects a commitment to
                excellence and beauty.
                </h3>
                <div class="slider container">
                    <div class="slide-track">
                         @foreach($cbimg as $item)
                        <div class="slide">
                            <img src="{{asset('bestjewelry/'.$item->banner)}}" alt="{{$item->alt}}" height="100" width="250" />
                        </div>
                           @endforeach
                       
                    </div>
                </div>
            
        </div>

        <div class="container pt-5">
            <h1 class="text-center display-6 pt-5">RECENT BLOGS</h1>
            <div class="row">
                 @foreach($blog as $_items)
                      <div class="col-lg-4">
                    <div class="card my-5" style="width: 100%;">
                        <img src="{{asset('/lastblog_image/'.$_items->lastblog_image)}}" alt='{{ $_items->alt}}'
                            class="card-img-top">
                        <div class="card-body">
                            <p class="fs-5 mt-2 text-dark fw-bold">{{ $_items->banner_heading}} </p>
                            <p class="fs-6 mt-2">January 28th 2024</p>
                            <p class="fs-6 my-1 text-dark">{!! Str::limit($_items->description, 100) !!}</p>
                            <div
                                class="d-flex justify-content-center align-items-center py-3 view_detail w-100 hover-up">
                                <a href="javascript:void(0)" class="d-block m-auto fs-6 w-100 text-center">Read More<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>

        <!--  -->
        <div class="container pt-5">
            <h1 class="text-center display-6 py-5">Recent Added Reiews</h1>
            <div class="sd_master_wrapper"> 
              <div class="sdtestBg2"></div>
              <div class="sdtestBg3"></div>
                           <div class="slideshow">
                        @foreach($recent_reviews as $_item)
                    <div class="content"> <!-- slide 1 -->
                        <div class="thumbnail">
                            
                           
                            <img src="{{asset('reviews_image/'.$_item->banner)}}" alt="">
                        </div>
                            <div class="btnNtxt">  
                                    <div class="sdAllContent">
                                        <div class="sd_scroll">
                                            <h1 class="sdCustomSliderHeadig">{{ $_item->review_comment}}</h1>
                                        </div>
                                            <p class="SdClientName">{{ $_item->name}}</p>
                                            <p class="SdClientDesc">{{ $_item->category_tags}}</p>
                                    </div>
                       </div>
                </div>
                    @endforeach
            </div>
            </div>  
            <div class="spacer"></div>
        </div>
        <style>
            #myDiv {
                height: 300px;
                overflow: hidden;
                transition: height 0.5s ease; /* Add transition for smooth animation */
            }
        
            #myDiv.expanded {
                height: 100%;
            }
        </style>

        <div class="container mt-5"  id="myDiv">
           {!!  $content !!}
            </div>
            
            
            
            
            <div class="d-flex justify-content-center mt-4 align-items-center view_detail w-100 hover-up">
                <a href="javascript:void(0)" id="readMoreBtn" class="d-block m-auto fs-6" onclick="toggleHeight()">Read More<i class="fa-solid fa-angle-right ps-2"></i></a>
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


<section class="faq py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-10 col-12">
                <div class="faq_section">
                        <h1 class="text-center display-6 py-5">Frequently Asked Questions (FAQ)</h1>
                    <div class="accordion_faq">
                           @foreach($faq as $_faq)
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title fs-6"> {{ $_faq->question}} </span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    {{ $_faq->answer}}
                                </p>
                            </div>
                        </div>
                         @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    </main>
    
    
    
        <!-- faq js -->
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

    <!-- Should be add in Every Page -->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })

        jQuery(document).ready(function($){
  var $slickElement = $('.slideshow');

  $slickElement.slick({
    autoplay: true,
    dots: false,
  });

});

    </script>

    @endsection