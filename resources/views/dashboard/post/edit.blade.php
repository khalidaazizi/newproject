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
       <form action="{{route('post.update',['id'=>$postData->id])}}" method="POST" enctype="multipart/form-data" class="form-group" >
         @csrf
         @method('PUT')
            <label for="title">title</label>
            <input type="text" id="title" name="title" value="{{$postData->title}}" class="form-control" required>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10" required  class="form-control">{{$postData->description}}</textarea>
            @error('description')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <label for="price">price</label>
            <input type="number" id="price" name="price" value="{{$postData->price}}" class="form-control" required >
            @error('price')
                <p class="text-danger">{{$message}}</p>
            @enderror
     

            <label for="first_image">first_image</label>
            <img src="{{asset('images/post/'.$userData->first_image)}}" alt="img">
            <input type="file" id="first_image" name="first_image" value="{{$postData->first_image}}"  class="form-control">
            @error('first_image')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <label for="second_image">second_image</label>
            <img src="{{asset('images/post/'.$postData->second_image)}}" alt="img">
            <input type="file" id="second_image" name="second_image" value="{{$postData->second_image}}"  class="form-control">
            @error('second_image')
                <p class="text-danger">{{$message}}</p>
            @enderror

            
            
            <input type="submit" value="submit"  class="btn btn-success mt-2 ">
        </form>  
    </div>
</section>

@endsection