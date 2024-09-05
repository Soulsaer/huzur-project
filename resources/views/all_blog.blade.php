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

@endsection

@section('content')
    
    <h1 style="color: black;text-align: center;margin: 45px 0px;font-size: 50px;">Our Blogs</h1>
    <div class="row justify-content-start m-0">
      @foreach($allblog as $_items)
      
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <a href="{{ route('singleblogs', ['id' => $_items->id]) }}">
            <div class="blog-card m-1 my-3">
            <div class="card-banner">
              <p class="category-tag popular">Real Stone</p>
              <img class="banner-img" src="{{ asset('storage/lastblog_image/'.$_items->lastblog_image) }}" alt='{{ $_items->alt }}'>
            </div>
            <div class="card-body">
              <!-- <p class="blog-hashtag">#Food #Pizza</p> -->
              <h2 class="blog-title">{{ $_items->banner_heading }}</h2>
              <p class="blog-description">{!! Str::limit($_items->description, 100) !!}</p>
              
              <div class="card-profile">
                <img class="profile-img" src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpYJQKSoM7S75P_KMRtQHqAAIPh133CSxByw&usqp=CAU' alt=''>
                <div class="card-profile-info">
                  <h3 class="profile-name">{{ $_items->author }}</h3>
                  <!-- <p class="profile-followers">5.2k followers</p> -->
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
      
      @endforeach
      <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag technology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone3.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Biryani #Food</p>
            <h2 class="blog-title">Which city is famous for biryani in India?</h2>
            <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography tools for this year</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Darrell Steward</h3>
                <p class="profile-followers">15.7k followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone4.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone5.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone6.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone7.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone8.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone9.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
@endsection



