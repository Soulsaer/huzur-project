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
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="about_title">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container my-5">
            <p style="font-size: 30px;" class="my-3 text-dark">Aboghjgkjgkjut Us</p>
            <p class="my-3 " style="font-size:16px;">We’re so glad you’re looking here for the perfect piece of jewelry! Our hope is that every piece you create with us speaks to your soul, in the way only vibrant colored gemstones can.</p>
            <p class="my-3 " style="font-size:16px;">It is with this very hope that my wife, Aditi, and I brought Angara into the world more than 15 years ago. Jewelry is our destiny. Both of us come from generations of jewelers. Colored gemstones – with all their power and history – are in our blood.</p>
            <p class="my-3 " style="font-size:16px;">For a while, I thought I could escape the lure of jewelry. Following a stint at McKinsey & Company, I pursued my MBA at Harvard. But I was eventually compelled to return to my roots. It all started when Aditi and I were looking for jewelry to commemorate a milestone in our marriage, but nothing we saw really spoke to us or captured our relationship in a unique and memorable way. Everything was stamped out. Commercial. With little personality or individualism.</p>
            <p class="my-3 " style="font-size:16px;">Talking with several of our friends and peers, we realized that we weren’t the only ones who felt this way. So together, Aditi and I set out to build Angara to combine the power of creation with the ancient energy of colored gemstones.</p>
            <p class="my-3 " style="font-size:16px;">When you come to our website, we want you to be able to design a piece of jewelry that captures everything you want to say: in any stone, in any style, in any metal, in any setting. Whether for yourself or, as in our case, a gift.</p>
            <p class="my-3 " style="font-size:16px;">In this way, we want you to be the hero of your jewelry saga. It all harkens back to centuries ago when only royalty would have their jewelry custom designed. Today, combining technology and craft, we offer those services to you, so that you can have that custom one-of-a-kind piece of jewelry without the long wait and heavy price tag!</p>
            <p class="my-3 " style="font-size:16px;">We built Angara from the stone, up. We are vertically-integrated, which means every step in the making of your jewelry is carefully handled by us. We source every single one of our gemstones sustainably. We cut and polish them ourselves with the utmost skill and respect, never forgetting that colored gemstones and diamonds can take 30 million years to form in the depths of the earth. We then handcraft the designs you choose around them.</p>
            <p class="my-3 " style="font-size:16px;">Handmade also extends to our service. So unlike regular ecommerce businesses where a chatbot and an inbox are considered sufficient, we have a team of dedicated jewelry experts who can help with everything from education to style guru-ship (even explaining how garnets are connected to pomegranates).</p>
            <p class="my-3 " style="font-size:16px;">In fact, our service has earned us many recognitions, including awards from Newsweek, Bizrate Insights and Business Intelligence, all validating us as the “Internet’s Best Jeweler".</p>
            <p class="my-3 " style="font-size:16px;">Now we’ve told you a lot about Angara, but we saved our name for last.</p>
            <p class="my-3 " style="font-size:16px;">In ancient Sanskrit, Angara means “the fire within.” We love how it captures the power of the color that burns inside our gemstones, as well as the fire of imagination that inspires you to create jewelry with colors that reflect you.</p>
            <p class="my-3 " style="font-size:16px;">After all, color brings out the best in people, and our mission is to bring more of it to the world.</p>
            <p class="my-3 " style="font-size:16px;">Life’s precious moments should be celebrated with color!</p>
        </div>
        <!--  -->
        <div class="container">
            <p style="font-size: 30px;" class="my-3 text-dark">Awards & Accolades:</p>
            <div class="row m-0 my-5">
                <div class="col-lg-1 col-6 col-sm-6 col-md-4">
                    <img width="200px" height="100px" src="https://assets.angara.com/assets/icons/newsweek-about.svg" alt="">
                </div>
                <div class="col-lg-1 col-6 col-sm-6 col-md-4">
                    <img width="200px" height="100px" src="https://assets.angara.com/assets/icons/fast-company-logo.png" alt="">
                </div>
                <div class="col-lg-1 col-6 col-sm-6 col-md-4">
                    <img width="200px" height="100px" src="https://assets.angara.com/assets/landingpage/angara-press/circle-excellence-about-us.svg" alt="">
                </div>
                <div class="col-lg-1 col-6 col-sm-6 col-md-4">
                    <img width="200px" height="100px" src="https://assets.angara.com/assets/icons/excellence-in-customer-service.svg" alt="">
                </div>
                <div class="col-lg-1 col-6 col-sm-6 col-md-4">
                    <img width="200px" height="100px" src="https://assets.angara.com/assets/icons/Inc-5000-logo.svg" alt="">
                </div>
                <div class="col-lg-1 col-6 col-sm-6 col-md-4">
                    <img width="200px" height="100px" src="https://assets.angara.com/assets/icons/big-innovation.svg" alt="">
                </div>
            </div>
        </div>
    </main>


@endsection