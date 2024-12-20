@extends('layouts.master')
@section('title','post')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/posts/_offers.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/posts/style.css')}}">
@endsection
@section('contant')
     
     <h5 class="produtcts-title">پیشنهادات ویژه</h5>
      <section class="container my-5 style" id="special-offers">
        <div class="row mt-5">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mb-5">
            @foreach ($data as $items)
            <div class="offer">
              <div class="offer-image">
                <img
                  class="offer-first-img"
                  src="{{asset('images/post/'.$items->first_image)}}"
                  alt="headphone"
                />
                <img
                  class="offer-second-img"
                  src="{{asset('images/post/'.$items->second_image)}}"
                  alt="headphone"
                />
              </div>
              <div class="offer-details">
                <a href="#">{{$items->title}}</a>
                <div class="offer-star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="offer-price"><s>3000 افغانی</s>{{$items->price}} افغانی</div>
                <p>
                  {{$items->description}}
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mb-5">
            @foreach ($data as $items)
            <div class="offer">
              <div class="offer-image">
                <img
                  class="offer-first-img"
                  src="{{asset('images/post/'.$items->first_image)}}"
                  alt="headphone"
                />
                <img
                  class="offer-second-img"
                  src="{{asset('images/post/'.$items->second_image)}}"
                  alt="headphone"
                />
              </div>
              <div class="offer-details">
                <a href="#">{{$items->title}}</a>
                <div class="offer-star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="offer-price"><s>3000 افغانی</s>{{$items->price}} افغانی</div>
                <p>
                  {{$items->description}}
                </p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

@endsection