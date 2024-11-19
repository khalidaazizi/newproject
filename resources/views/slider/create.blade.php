@extends('layouts.master')
@section('title','create')
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
<h1> create</h1>
<section class="container">
    <div class="row">
       <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data" class="form-group" >
         @csrf
            <label for="title">title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="enter title">

            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="enter description" class="form-control"></textarea>

            <label for="image">image</label>
            <input type="file" id="image" name="image" class="form-control">

            <input type="submit" value="submit"  class="btn btn-success mt-2 ">
        </form>  
    </div>
</section>

@endsection