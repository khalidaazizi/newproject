@extends('layouts.master')

@section('title')
this is slider page
@endsection

@section('contant')

<section class="row m-0">
<div class=" col-6 offset-3 my-5 jumbotron">
 <h1>this is a laravel page </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolore facilis maxime fugiat, vel vitae, incidunt obcaecati inventore libero assumenda possimus quidem officiis delectus nemo laudantium magnam perferendis cupiditate harum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, est velit! Assumenda quia amet quas exercitationem dolorem voluptatum aperiam magnam molestiae labore laborum laboriosam pariatur eaque, officiis ex, ea veritatis?
     </p>
     <a href="" class="btn btn-danger mt-5 btn-block">login</a>


      {{-- @if ($id ==='khalida')
      <h1>welcome {{$id}} </h1>
      <a href="/create" class="btn btn-info">go to create</a>
      @elseif ($id==='azizi')
       <h1>welcome {{$id}} </h1>
      <a href="/create" class="btn btn-info">go to create</a>

      @elseif ($id==='efat')
     <h1>welcome {{$id}} </h1>
     <a href="/user" class="btn btn-info">go to user</a>

      @else
     <h1>welcome {{$id}} </h1>
     <a href="" class="btn btn-danger">register</a>
      @endif --}}


      {{-- @switch()
          @case()
              
              @break
      
          @default
              
      @endswitch --}}

       {{-- @foreach ( $data as $items )
           <h1> {{$items}} </h1>
      @endforeach  --}}

{{-- 
      @for ($i = 0; $i<=count($data) ;$i++ )
          
          <h1>{{$data[$i]}}</h1>       error

      @endfor --}}
     
      {{-- @forelse ($data as $items )
          <h1>
           {{ $items}}
          </h1>
      @empty
         <h1> there is no data </h1>
      @endforelse --}}

    {{--<h1>slider </h1> --}}
     {{--  send value to other page   --}}
    {{-- <h1><a href="{{route('slider.create')}}">slider-create </a></h1>
    <h1><a href="{{route('slider.about',['username'=>'azizi','password'=>'123445'])}}">slider-about </a></h1> --}}
    {{-- onther way send value to other page   --}}
    {{-- <h1><a href="{{ url('contact',['username'=>'azizi','password'=>'123445']) }}">slider-contact </a></h1> --}}
    
  




    {{-- <h1>
        show values 
    </h1> --}}
    {{-- <p>
        <h2>{{$fristname}}</h2>
        <h2>{{$lastname}}</h2>
        <h2>{{$age}}</h2>
        <h2>{{$email}}</h2>
        
    </p> --}}
    {{-- @forelse ($data as $item)
        <h1>{{$item}}</h1>
    @empty
       <h1>this is empty</h1> 
    @endforelse --}}
</div>
</section>
   
@endsection 