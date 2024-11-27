@extends('layouts.master')
@section('title','edit')
@section('css')
<style>
    h1{
        text-align: center;
        color:rgb(8, 37, 255)
    }
    table{
       text-align: center;
    }
    td img {
        width: 12%;
    }
    input[type=submit]{
          float: right;
    }
</style>
@endsection
@section('contant')
<h1> edit</h1>
<section class="container">
    <div class="row">
       <form action="{{route('slider.update',['id'=>$slider->id])}}" method="POST" enctype="multipart/form-data" class="form-group" >
        @csrf
        @method('PUT')
            <label for="title">title</label>
            <input type="text" id="title" name="title" value="{{$slider->title}}"  class="form-control" placeholder="enter title">
             @error('title')
                 <p class="text-danger">{{$message}}</p>
             @enderror
            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10"  placeholder="enter description" class="form-control">{{$slider->description}}</textarea>
            @error('title')
                 <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="image">image</label>
            <input type="file" id="image" name="image" value="{{$slider->image}}"  class="form-control">
            @error('title')
                 <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="submit" value="update"  class="btn btn-success mt-2 ">
            
        </form> 
        <a href="{{route('slider.index')}}" class="btn btn-info mt-5">back</a> 
    </div>
</section>

@endsection