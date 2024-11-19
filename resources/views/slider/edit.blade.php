@extends('layouts.master')
@section('title','trash')
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
            <input type="text" id="title" name="title" value="{{$slider->title}}" class="form-control" placeholder="enter title">

            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10"  placeholder="enter description" class="form-control">{{$slider->description}}</textarea>

            <label for="image">image</label>
            <input type="file" id="image" name="image" value="{{$slider->description}}"  class="form-control">

            <input type="submit" value="update"  class="btn btn-success mt-2 ">
        </form>  
    </div>
</section>

@endsection