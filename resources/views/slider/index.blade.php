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
    /* td img {
        width: 12%;
    } */
</style>
@endsection
@section('contant')


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
                    @forelse ($data as $items)
                        <tr>
                           <td>{{$items->id}}</td> 
                           <td>{{$items->title}}</td> 
                           <td>{{$items->description}}</td> 
                           <td><img src="{{asset('images/slider/'.$items->image)}}" alt="image"> </td>
                           <td>
                                <form action="{{route('slider.destroy', $items->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                           </td> 
                           <td>
                             <a href="{{route('slider.edit',['id'=> $items->id])}}" class="btn btn-info">edit</a>
                           </td>
                         
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">empty</td>
                        </tr>
                    @endforelse
            </tbody>
        </table>
         <a href="{{route('slider.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>     
    </div>
</section>

@endsection