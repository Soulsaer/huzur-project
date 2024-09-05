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
    <section class="buy_now_payment pt-80 pb-20">
        <div class="container">
            <div class="row">
                <span class="pb-3"> <a href="login.html" class="line">Sign In </a> to checkout faster or <a
                        href="login.html" class="line">Create an Account </a> to manage your order on the go!</span>
                <div class="col-lg-8 py-2">
                    <div class="card p-3">
                        <form action="" class="form_buy_now">
                            <h4 class="title fs-5 pb-3">1. Shipping & Billing </h4>
                            <div class="fields fields--2">
                                <label class="field">
                                    <span class="text" for="firstname">First name</span>
                                    <input class="field__input" type="text" id="firstname" placeholder="John" />
                                </label>
                                <label class="field">
                                    <span class="text" for="lastname">Last name</span>
                                    <input class="field__input" type="text" id="lastname" placeholder="Doe" />
                                </label>
                            </div>
                            <div class="fields fields--2">
                                <label class="field">
                                    <span class="text" for="firstname">Email</span>
                                    <input class="field__input" type="email" id="firstname" placeholder="Email" />
                                </label>
                                <label class="field">
                                    <span class="text" for="lastname">Phone Number</span>
                                    <input class="field__input" type="text" id="lastname" placeholder="Phone Number" />
                                </label>
                            </div>

                            <div class="fields fields--2">
                                <label class="field">
                                    <span class="text" for="zipcode">Pin code</span>
                                    <input class="field__input" type="text" id="Pincode" placeholder="Pin code" />
                                </label>
                                <label class="field">
                                    <span class="text" for="city">City</span>
                                    <input class="field__input" type="text" id="city" placeholder="City" />
                                </label>

                            </div>
                            <div class="fields fields--2">
                                <label class="field">
                                    <span class="text" for="state">State</span>
                                    <select name="state" id="state" class="field__input">
                                        <option value="State"></option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </label>
                                <label class="field">
                                    <span class="text" for="state">Address</span>
                                    <input class="field__input" type="text" id="city" placeholder="Address" />
                                </label>
                                <label class="field">
                                    <span class="text" for="state">Shipping</span>
                                    <div class="check_input">
                                        <label class="check_label">Shipping One
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check_label">
                                            Shipping two
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check_label">
                                            Shipping Three
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </form>
                        <div class="w-100 view_detail">
                            <button class=" mb-3 hover-up   ">
                                <span class="ps-3">Continue To Payment</span>
                                <span class="fas fa-arrow-right ms-2"></span>
                            </button>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="payment_felid card p-4 mt-3">
                        <h5 class="title_card pb-3 fs-6">2. Payment Options</h5>
                        <div class="row">
                            <div class="col-lg-4 py-2">
                                <div class="check_input card p-3">
                                    <label class="check_label">UPI
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="check_label">
                                        Credit/Debit Card
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="check_label">
                                        Net Banking
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="check_label">
                                        Wallets
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="check_label">
                                        Cash on Delivery
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-8 py-2">
                                <div class="Payment_input card p-3">
                                    <div class="px-4">
                                        <div class="row gx-3">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center pb-4">
                                                    <p class="text pt-3">Pay Using UPI ID</p>
                                                    <button class="applied_offer">Applied offers</button>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <p class="text mb-1">Enter UPI ID (Google Pay, BHIM & more)</p>
                                                    <input class="form-control_1 mb-3" type="text"
                                                        placeholder="Enter Your UPI ID">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn btn-primary-1 mb-3">
                                                    <span class="ps-3">Pay Order</span>
                                                    <span class="fas fa-arrow-right ms-2"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-8 py-2">
                            <div class="Payment_input card">
                                <div class="px-4">
                                    <p class="h7 py-3">Payment Details</p>
                                    <div class="row gx-3">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between align-items-center pb-4">
                                                <p class="text pt-3">Pay Using Credit Or Debit</p>
                                                <button class="applied_offer">Applied offers</button>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <p class="text mb-1">Person Name</p>
                                                <input class="form-control_1 mb-3" type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex flex-column">
                                                <p class="text mb-1">Card Number</p>
                                                <input class="form-control_1 mb-3" type="text" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex flex-column">
                                                <p class="text mb-1">Expiry</p>
                                                <input class="form-control_1 mb-3" type="text" placeholder="MM/YYYY">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex flex-column">
                                                <p class="text mb-1">CVV/CVC</p>
                                                <input class="form-control_1 mb-3 pt-2 " type="password" placeholder="***">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn btn-primary-1 mb-3">
                                                <span class="ps-3">Pay Order</span>
                                                <span class="fas fa-arrow-right ms-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>  -->

                            <!-- <div class="col-lg-8 py-2">
                            <div class="Payment_input card">
                                <div class="px-4">
                                    <div class="row gx-3">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between align-items-center pb-4">
                                                <p class="text pt-3">Net Banking</p>
                                                <button class="applied_offer">Applied offers</button>
                                            </div>
                                        </div>
                                        <div class="radio-with-Icon">
                                          <p class="radioOption-Item p-0 m-0">
                                            <input type="radio" name="BannerTypes" id="BannerType_1" value="true" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                            <label for="BannerType_1">
                                              <img src="img/hdfc-logo.webp" style="width: 60%; height:40px" alt="">
                                              HDFC
                                            </label>
                                          </p>
                                          <p class="radioOption-Item p-0 m-0">
                                            <input type="radio" name="BannerTypes" id="BannerType_2" value="true" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                            <label for="BannerType_2">
                                              <img src="img/sbi-logo (1).webp" style="width: 80%; height:40px" alt="">
                                              SBI
                                            </label>
                                          </p>
                                          <p class="radioOption-Item p-0">
                                            <input type="radio" name="BannerTypes" id="BannerType_3" value="true" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                            <label for="BannerType_3">
                                              <img src="img/icici-logo.webp" style="width: 60%; height:40px" alt="">
                                              ICICI
                                            </label>
                                          </p>
                                        
                                          <p class="radioOption-Item">
                                            <input type="radio" name="BannerTypes" id="BannerType_4" value="false" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                            <label for="BannerType_4">
                                              <img src="img/axis-logo.webp" style="width: 80%; height:40px" alt="">
                                              AXIS
                                            </label>
                                          </p>
                                        </div>
                                        
                                        <div class="col-12 pb-3">
                                            <select name="bankname" class="form-control" required>
                                                <option selected="selected" value="0">--Select Bank--</option>
                                                <option value="1">ALLAHABAD BANK </option>
                                                <option value="2">ANDHRA BANK</option>
                                                <option value="3">AXIS BANK</option>
                                                <option value="29">STATE BANK OF INDIA</option>
                                                <option value="4">BANK OF BARODA</option>
                                                <option value="29">UCO BANK</option>
                                                <option value="29">UNION BANK OF INDIA</option>
                                                <option value="5">BANK OF INDIA</option>
                                                <option value="20">BANDHAN BANK LIMITED</option>
                                                <option value="7">CANARA BANK</option>
                                                <option value="32">GRAMIN VIKASH BANK</option>
                                                <option value="8">CORPORATION BANK</option>
                                                <option value="9">INDIAN BANK</option>
                                                <option value="10">INDIAN OVERSEAS BANK</option>
                                                <option value="11">ORIENTAL BANK OF COMMERCE</option>
                                                <option value="12">PUNJAB AND SIND BANK</option>
                                                <option value="13">PUNJAB NATIONAL BANK</option>
                                                <option value="14">RESERVE BANK OF INDIA</option>
                                                <option value="15">SOUTH INDIAN BANK</option>
                                                <option value="16">UNITED BANK OF INDIA</option>
                                                <option value="17">CENTRAL BANK OF INDIA</option>
                                                <option value="18">VIJAYA BANK</option>
                                                <option value="19">DENA BANK</option>
                                                <option value="21">BHARATIYA MAHILA BANK LIMITED</option>
                                                <option value="22">FEDERAL BANK LTD </option>
                                                <option value="23">HDFC BANK LTD</option>
                                                <option value="24">ICICI BANK LTD</option>
                                                <option value="25">IDBI BANK LTD</option>
                                                <option value="66">PAYTM BANK</option>
                                                <option value="29">FINO PAYMENT BANK</option>
                                                <option value="26">INDUSIND BANK LTD</option>
                                                <option value="27">KARNATAKA BANK LTD</option>
                                                <option value="28">KOTAK MAHINDRA BANK</option>
                                                <option value="30">YES BANK LTD</option>
                                                <option value="31">SYNDICATE BANK</option>
                                                <option value="5">BANK OF INDIA</option>
                                                <option value="6">BANK OF MAHARASHTRA</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn btn-primary-1 mb-3">
                                                <span class="ps-3">Pay Order</span>
                                                <span class="fas fa-arrow-right ms-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div> 
                        <div class="col-lg-8 py-2">
                            <div class="Payment_input card">
                                <div class="px-4">
                                    <div class="row gx-3">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text pt-3">Pay Using Online Wallets</p>
                                                <button class="applied_offer">Applied offers</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="radio-with-Icon">
                                              <p class="radioOption-Item p-0 m-0">
                                                <input type="radio" name="BannerTypes" id="BannerType1" value="true" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                                <label for="BannerType1">
                                                  <img src="img/phonepe.webp" style="width: 100%; height:20px" alt="">
                                                </label>
                                              </p>
                                            
                                              <p class="radioOption-Item">
                                                <input type="radio" name="BannerTypes" id="BannerType2" value="false" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                                <label for="BannerType2">
                                                  <img src="img/mobikwik.webp" style="width: 100%; height:20px" alt="">
                                                </label>
                                              </p>
                                              <p class="radioOption-Item p-0">
                                                <input type="radio" name="BannerTypes" id="BannerType3" value="true" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                                <label for="BannerType3">
                                                  <img src="img/freecharge.webp" style="width: 100%; height:20px" alt="">
                                                </label>
                                              </p>
                                            
                                              <p class="radioOption-Item">
                                                <input type="radio" name="BannerTypes" id="BannerType4" value="false" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
                                                <label for="BannerType4">
                                                  <img src="img/azpay.webp" style="width: 100%; height:20px" alt="">
                                                </label>
                                              </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn btn-primary-1 my-3">
                                                <span class="ps-3">Pay Order</span>
                                                <span class="fas fa-arrow-right ms-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div> 
                        <div class="col-lg-8 py-2">
                          <div class="Payment_input card">
                              <div class="px-4">
                                  <div class="row gx-3">
                                      <div class="col-12">
                                          <div class="d-flex justify-content-between align-items-center pb-4">
                                              <p class="text pt-3">Cash On Delivery</p>
                                          </div>
                                      </div>
                                      
                                      <div class="w-100 view_detail">
                                          <button class="mb-3 w-100 hover-up">
                                              <span class="ps-3">Pay with Card</span>
                                              <span class="fas fa-arrow-right ms-2"></span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                            </div>
                      </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2">
                    <div class="card p-4">
                        <div class="d-flex  justify-content-between align-items-center  py-2 px-3 mb-2"
                            style="background: #fcbba4; color: #000;">
                            <h5 class="title_red">Available Offers</h5>
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <h5 class="title fs-5">Order Summary</h5>
                        <div class="detail_payment d-flex justify-content-between pt-3">
                            <span class="title_card">Subtotal</span>
                            <span class="title_red">$5,198</span>
                        </div>
                        <div class="detail_payment d-flex justify-content-between pt-3">
                            <span class="title_card">Promotional Savings (CELEBRATE)</span>
                            <span class="title_red">-$519.80</span>
                        </div>
                        <div class="detail_payment d-flex justify-content-between pt-3">
                            <span class="title_card">Delivery By Aug 08 - Aug 09 </span>
                            <span class="title_red">Free<span style="text-decoration: line-through;color: #fcbba4;"
                                    class="ps-2">Free</span> </span>
                        </div>
                        <div class="detail_payment d-flex justify-content-between pt-3 pb-2">
                            <span class="title_card">Sales Tax </span>
                            <span class="title_red">$0</span>
                        </div>
                        <hr>
                        <div class="detail_payment d-flex justify-content-between align-items-center    "
                            style="border-top: 1px solid var(--darklight);">
                            <span class="title_card">Order Total</span>
                            <span class="title_red">$4,678.20</span>
                        </div>
                    </div>
                    <div class="card p-4 my-2">
                        <h5 class="title fs-5">Need Help?</h5>
                        <div class="detail_payment d-flex align-items-center justify-content-around pt-3">
                            <div class="border py-2 px-4">
                                <span class="fa-solid fa-phone"></span>
                                <span class="title_red"> Call</span>
                            </div>
                            <div class="border py-2 px-4">
                                <span class="fa-solid fa-envelope"></span>
                                <span class="title_red">Email</span>
                            </div>
                        </div>
                        <span class="title_card line pt-3">Shipping and Return Policy
                            FAQs</span>
                    </div>
                    <span class="title_card"><i class="fa-solid fa-lock"></i> Secure Checkout Shopping is always <span
                            class="line"> safe and secure</span>.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- buy now payment end -->
    <!-- payment section start -->
    <section class="payment seller pt-5">
        <div class="container">
            <div class="card py-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-auto d-block text-center py-3 payment_card">
                        <img src="https://images.mamaearth.in/wysiwyg/delivery2x.png" class="m-auto d-block my-2"
                            style="width: 60px; height: 60px;" alt="payment_img">
                        <h5 class="title_card">Free Shipping</h5>
                        <span>On Order Above Rs. 599</span>
                    </div>
                    <div class="col-lg-4 col-md-6 m-auto d-block text-center py-3 payment_card">
                        <img src="https://images.mamaearth.in/wysiwyg/Group_81512x.png" class="m-auto d-block my-2"
                            style="width: 60px; height: 60px;" alt="payment_img">
                        <h5 class="title_card">COD Available</h5>
                        <span>@ Rs.40 Per Order</span>
                    </div>
                    <div class="col-lg-4 col-md-12 m-auto d-block text-center py-3">
                        <h5 class="title fs-5">Have Queries Or Concerns?</h5>
                        <div class="py-3">
                            <a href="#" class="main_btn ">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="payment seller pb-3 pt-0">
        <div class="container">
            <div class="card py-3 px-4">
                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="title_card">Payment</h5>
                        <span><i class="fa-solid fa-check me-1 item-icon_1"
                                style="background-color: var(--main-color);"></i> 100% Payment Protection, Easy Return
                            Policy</span>
                        <div class="payment_card_1">
                            <img src="https://images.mamaearth.in/png/web-payments.png" width="100%" alt="payment_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <!-- Payments -->
    <script>
            document.addEventListener("DOMContentLoaded", function () {
                const paymentOptions = document.querySelectorAll('.Payment_input');
                const radioButtons = document.querySelectorAll('input[name="radio"]');
                radioButtons.forEach(function (radioButton) {
                    radioButton.addEventListener('change', function () {
                        const selectedOption = this.value;
                        paymentOptions.forEach(function (option) {
                            option.style.display = "none";
                        });
                        document.querySelector(`.${selectedOption}`).style.display = "block";
                    });
                });
            });
    </script>

@endsection