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

    <div class="m-0 p-0">
        <img class="w-100" style="max-height: 300px;object-fit: cover;object-position: center;" src="{{asset('storage/lastblog_image/'.$blog->lastblog_image)}}" alt="{{ $blog->alt }}" />
        <div style="top: -80px;" class="mx-auto text-secondary position-relative container">
          <div class="text-center mb-4">
          <img src="https://avatars0.githubusercontent.com/u/39916324?s=460&u=602ca47fcce463981a2511a21148236f304ec934&v=4" style="width: 120px; border: 5px solid #eee; background-color: white;" class="rounded-circle mx-auto text-center" />
          <div>
              <small>
                <a href="#" class="text-primary">Election</a>, <a href="#" class="text-primary">Politics</a>
            </small>
          </div>
          <h1 class="text-center font-weight-bold text-dark">{{ $blog->banner_heading }}
      </h1>
          <div>
              <small class="text-dark">
                Written by <a href="#" class="text-primary">{{ $blog->author }}</a>
            </small>
          </div>  
          </div>
          
          <p class="my-2" style="line-height: 2;"> {!! $blog->description !!} </p>
          
          <div class="my-3">
            <small>
                <a href="#" class="text-primary">#election</a>, <a href="#" class="text-primary">#politics</a>, <a href="#" class="text-primary">#trump</a>, <a href="#" class="text-primary">#revenge</a>, <a href="#" class="text-primary">#2020</a>
            </small>
          </div>

          <div>
          </div>
          
        </div>
    </div>
@endsection