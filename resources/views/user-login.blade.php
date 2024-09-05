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

<section class="pt-80 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login">
                        <div class="login_detail">
                            <div class="forms">
                                <div class="form login">
                                    <div>
                                        <span class="title text-start">Login</span>
                                    </div>
                    
                                    <!--<form action=""  style="width: 100%;">-->
                                   
                                    <!--    <div class="input-field">-->
                                    <!--        <input type="text" placeholder="Enter your email" required>-->
                                    <!--        <i class="uil uil-envelope icon"></i>-->
                                    <!--    </div>-->
                                    <!--    <div class="input-field">-->
                                    <!--        <input type="password" class="password" placeholder="Enter your password" required>-->
                                    <!--        <i class="uil uil-lock icon"></i>-->
                                    <!--        <i class="uil uil-eye-slash showHidePw"></i>-->
                                    <!--    </div>-->
                    
                                    <!--    <div class="checkbox-text">-->
                                    <!--        <div class="checkbox-content">-->
                                    <!--            <input type="checkbox" id="logCheck" style="width: 10px;-->
                                    <!--            height: 10px;">-->
                                    <!--            <label for="logCheck" class="text">Remember me</label>-->
                                    <!--        </div>-->
                                            
                                    <!--        <a href="#" class="text">Forgot password?</a>-->
                                    <!--    </div>-->
                
                                    <!--    <div class=" pt-3 w-100 d-flex justify-content-center align-items-center view_detail">-->
                                    <!--        <button type="submit" class="w-100">LOGIN<i class="fa-solid fa-angle-right ps-2"></i></button>-->
                                    <!--    </div>-->
                    
                                    <!--</form>-->
                                    <form action="{{ route('web-login') }}" method="post" style="width: 100%;">
                                        @csrf
                                        <div class="input-field">
                                            <input type="text" name="email" placeholder="Enter your email" >
                                            <i class="uil uil-envelope icon"></i>
                                        </div>
                                        @if($errors->has('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                        @endif
                                        <div class="input-field">
                                            <input type="password" name="password" class="password" placeholder="Enter your password" >
                                            <i class="uil uil-lock icon"></i>
                                            <i class="uil uil-eye-slash showHidePw"></i>
                                        </div>
                                         @if($errors->has('password'))
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                        @endif
                                
                                        <div class="checkbox-text">
                                            <div class="checkbox-content">
                                                <input type="checkbox" name="remember_me" id="logCheck" style="width: 10px; height: 10px;">
                                                <label for="logCheck" class="text">Remember me</label>
                                            </div>
                                             @if($errors->has('remember_me'))
                                            <span class="text-danger">{{$errors->first('remember_me')}}</span>
                                            @endif
                                
                                            <a href="#" class="text">Forgot password?</a>
                                        </div>
                                
                                        <div class=" pt-3 w-100 d-flex justify-content-center align-items-center view_detail">
                                            <button type="submit" class="w-100">LOGIN<i class="fa-solid fa-angle-right ps-2"></i></button>
                                        </div>
                                    </form>
                    
                                    <div class="login-signup">
                                        <span class="text">Not a member?
                                            <a href="{{url('register')}}" class="text signup-link">Signup Now</a>
                                        </span>
                                    </div>
                                </div>
                    
                                <!-- Registration Form -->
                                <!--<div class="form signup">-->
                                <!--    <span class="title m-auto d-block ms-3">Registration</span>-->
                    
                                <!--    <form action="{{ route('register') }}" method="post" >-->
                                <!--         @csrf-->
                                <!--        <div class="input-field">-->
                                <!--            <input type="text" name="name" placeholder="Enter your name" >-->
                                <!--            <i class="fa-solid fa-user"></i>-->
                                <!--        </div>-->
                                <!--        @if($errors->has('name'))-->
                                <!--        <span class="text-danger">{{$errors->first('name')}}</span>-->
                                <!--        @endif-->
                                <!--        <div class="input-field">-->
                                <!--            <input type="email" name="email" placeholder="Enter your email" >-->
                                <!--            <i class="uil uil-envelope icon"></i>-->
                                <!--        </div>-->
                                <!--         @if($errors->has('email'))-->
                                <!--        <span class="text-danger">{{$errors->first('email')}}</span>-->
                                <!--        @endif-->
                                <!--        <div class="input-field">-->
                                <!--            <input type="password" name="password" class="password" placeholder="Create a password" >-->
                                <!--            <i class="uil uil-lock icon"></i>-->
                                <!--        </div>-->
                                <!--         @if($errors->has('password'))-->
                                <!--        <span class="text-danger">{{$errors->first('password')}}</span>-->
                                <!--        @endif-->
                                <!--        <div class="input-field">-->
                                <!--            <input type="password" name="password_confirmation" class="password" placeholder="Confirm a password" >-->
                                <!--            <i class="uil uil-lock icon"></i>-->
                                <!--            <i class="uil uil-eye-slash showHidePw"></i>-->
                                <!--        </div>-->
                                <!--        @if($errors->has('password'))-->
                                <!--        <span class="text-danger">{{$errors->first('password')}}</span>-->
                                <!--        @endif-->
                                
                                <!--        <div class="checkbox-text">-->
                                <!--            <div class="checkbox-content">-->
                                <!--                <input type="checkbox" id="termCon" name="termCon" style="width: 10px; height: 10px;">-->
                                <!--                <label for="termCon" class="text">I accept all terms and conditions</label>-->
                                <!--            </div>-->
                                <!--            @if($errors->has('termCon'))-->
                                <!--            <span class="text-danger">{{$errors->first('termCon')}}</span>-->
                                <!--            @endif-->
                                <!--        </div>-->
                                <!--        <div class="py-4 w-100 d-flex justify-content-center align-items-center view_detail">-->
                                <!--            <button type="submit" class="w-100">SIGNUP<i class="fa-solid fa-angle-right ps-2"></i></button>-->
                                <!--        </div>-->
                                <!--    </form>-->
                    
                                <!--    <div class="login-signup">-->
                                <!--        <span class="text">Already a member?-->
                                <!--            <a href="#" class="text login-link">Login Now</a>-->
                                <!--        </span>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hover-up">
                    <img src="assets/images/login/login.jpg" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
            </div>
        </div>                              
    </section>
    @endsection