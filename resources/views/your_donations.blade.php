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

    <div class="row m-0">
      <div class="col-12 pt-5 pb-2">
          <h4 class="homepage_heading mb-2">Your Donation</h4>
          <p class="fs-6 mb-4 text-center " style="font-family: Poppins, sans-serif !important;">This Is What We Do Of Your Donation</p>
      </div>
      <div class="gallery"> 
          @foreach($yourdonations as $item)
            <img src="{{asset('adsimg/'.$item->banner)}}" alt="{{ $item->alt }}">
          @endforeach
      </div>
  </div>

  
    <div class="gallery">
      <img src="https://th.bing.com/th/id/R.335fe899a186f7afd3390cbbf15655f7?rik=kqN%2fpeRtGb1XXQ&riu=http%3a%2f%2fwww.tfikidsfund.org%2fwp-content%2fuploads%2f2019%2f04%2fiStock-883662290.jpg&ehk=2I4fKQD5FjiuLgnPQtgEo8V9P043rJ9bCUiOQrTIdFw%3d&risl=&pid=ImgRaw&r=0" alt="">
      <img src="https://www.americasthrift.com/wp-content/uploads/Kid-Donating.jpg" alt="">
      <img src="https://th.bing.com/th/id/OIP.rY5JdvoEyNElRBO7quLaSQHaFh?w=202&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
      <img src="https://th.bing.com/th/id/OIP.hjW1LO_9bI5yGQju3MUGSAHaE8?w=255&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
      <img src="https://images.pexels.com/photos/5699509/pexels-photo-5699509.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
      <img src="https://images.pexels.com/photos/7162533/pexels-photo-7162533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
      <img src="https://images.pexels.com/photos/3808904/pexels-photo-3808904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
      <img src="https://images.pexels.com/photos/3944091/pexels-photo-3944091.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
      <img src="https://images.pexels.com/photos/821738/pexels-photo-821738.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
  </div>

@endsection