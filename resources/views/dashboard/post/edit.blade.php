@extends('layouts.master')
@section('title','create page')
@section('css')
<style>
    h1{ 
        margin-top: 30px;
        text-align: center;
        color:rgb(8, 37, 255)
    }
    table{
       text-align: center;
    }
     img {
        width: 12%;
    }
    input[type=submit]{
          float: right;
    }
</style>
@endsection
@section('contant')
<h1> Edit posts</h1>
<section class="container">
    <div class="row">
       <form action="{{route('post.update',['id'=>$userData->id])}}" method="POST" enctype="multipart/form-data" class="form-group" >
         @csrf
         @method('PUT')
            <label for="title">title</label>
            <input type="text" id="title" name="title" value="{{$userData->title}}" class="form-control" required>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10" required  class="form-control">{{$userData->description}}</textarea>
            @error('description')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <label for="image">image</label>
            <img src="{{asset('images/post/'.$userData->image)}}" alt="img">
            <input type="file" id="image" name="image" value="{{$userData->image}}"  class="form-control">
            
            <input type="submit" value="submit"  class="btn btn-success mt-2 ">
        </form>  
    </div>
</section>

@endsection