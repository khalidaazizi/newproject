@extends('layouts.master')
@section('title','this is index page')
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
        width: 130px;
 
    } 
</style>
@endsection
@section('contant')
@php
    //  use Illuminate\Support\str;
@endphp

<h1>Slider Data</h1>

<section class="container">
    <div class="row">
        <table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th >Image</th>
                    <th >delete</th>
                    <th >edit</th>
                </tr>
            </thead>
            <tbody>
                    @forelse ($data as $item)
                        <tr>
                           <td>{{$item->id}}</td> 
                           <td>{{$item->title}}</td> 
                           <td>{{Illuminate\Support\str::limit($item->description,10)}}</td> 
                           {{-- <td><img src="{{asset('images/slider/'.$item->image)}}" alt="image"> </td> --}}
                           <td><img src="{{$item->image}}" alt="image"></td>
                           <td>
                                <form action="{{route('slider.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                           </td> 
                           <td>
                             <a href="{{route('slider.edit',['id'=> $item->id])}}" class="btn btn-info">edit</a>
                           </td>
                         
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">empty</td>
                        </tr>
                    @endforelse
            </tbody>
            
        </table>
        {{$data->links()}}
         <a href="{{route('slider.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>    
         <a href="{{route('slider.trash')}}" class="btn btn-danger mt-5" cols="3" rows="2">trash</a>  
    </div>
</section>

@endsection