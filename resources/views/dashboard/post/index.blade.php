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
    use Illuminate\Support\Facades\Session;
@endphp

<h1>posts Data</h1>

<section class="container">
    <div class="row">
        @if (session::has('success'))
        <div class="alert alert-primary" role="alert">
          {{session::get('success')}}
        </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th >psot</th>
                    {{-- <th >delete</th> --}}
                    {{-- <th >edit</th> --}}
                </tr>
            </thead>
            <tbody>
                    @forelse ($data as $item)
                        <tr>
                           <td>{{$item->id}}</td> 
                           <td>{{$item->name}}</td> 
                           <td>{{$item->email}}</td> 
                           {{-- <td><img src="{{asset('images/post/'.$item->image)}}" alt="image"></td>  --}}
                           
                           {{-- <td>
                                <form action="{{route('slider.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                           </td>  --}}
                           <td>
                             {{-- <a href="{{route('slider.edit',['id'=> $item->id])}}" class="btn btn-info">edit</a> --}}
                           </td>
                         
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">empty</td>
                        </tr>
                    @endforelse
            </tbody>
            
        </table>
        {{-- {{$data->links()}} --}}
         {{-- <a href="{{route('post.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>     --}}
         {{-- <a href="{{route('slider.trash')}}" class="btn btn-danger mt-5" cols="3" rows="2">trash</a>   --}}
    </div>
</section>

@endsection