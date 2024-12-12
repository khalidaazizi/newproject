@extends('layouts.master')
@section('title','slider')
@section('css')
<style>
    img{
        width: 400px;
        height: 600px;
    }
    .carousel-caption{
        width: 35%;
        transform: translate(0%, -77%);
        text-align: start;
    }
    .carousel-caption h5{
        font-size: 40px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 30px
    }
    .carousel-caption p{
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        margin-bottom: 30px
    }
   
   
</style>
@endsection
@section('contant')
 <section class="row">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- carousel  carousel-indicators --}}
            @foreach ($sliders as $key => $item)
            <div class="carousel-item {{$key == 0 ? 'active': ''}} " data-bs-interval="2000">
                <img src="{{asset('images/slider/'.$item->image)}}" class="d-block w-100" >
                <div class="carousel-caption  d-none d-md-block">
                    <h5>{{$item->title}}</h5>
                    <p>{{$item->description}}</p>
                </div>
            </div>
          @endforeach
        </div>
        <div class="carousel-indicators">
            {{-- din  carousel-indicators --}}
             @foreach (range(0, $sliders->count() - 1) as $carouselRepetIndex)
                <button type="button" data-bs-target="#carouselExampleCaptions" 
                        data-bs-slide-to="{{$carouselRepetIndex}}" 
                        class="{{$carouselRepetIndex == 0 ? 'active' : ''}}" 
                        aria-current="{{$carouselRepetIndex == 0 ? 'true' : 'false'}}" 
                        aria-label="Slide {{$carouselRepetIndex + 1}}">
                </button>
            @endforeach
        </div>

         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
 </section>


@endsection