@extends('layouts.master')
@section('title','this is trash page')
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


<h1>Slider trash </h1>
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
                    <th >restore</th>
                </tr>
            </thead>
            <tbody>
                    @forelse ($slider as $item)
                        <tr>
                           <td>{{$item->id}}</td> 
                           <td>{{$item->title}}</td> 
                           <td>{{$item->description}}</td> 
                           <td><img src="{{asset('images/slider/'.$item->image)}}" alt="image"> </td>
                           <td>
                                <form action="{{route('slider.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                                
                           </td> 
                           <td>
                             <form action="{{route('slider.restore', $item->id)}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="restore">
                                </form>
                                
                           </td>
                         
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">empty</td>
                        </tr>
                    @endforelse
            </tbody>
        </table>
         {{-- <a href="{{route('slider.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>      --}}
    </div>
</section>
