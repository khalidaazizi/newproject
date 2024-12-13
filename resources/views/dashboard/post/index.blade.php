@extends('layouts.master')
@section('title','this is index page')
@section('css')
<style>
    h1{
        margin: 40px  0  ;
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
                    <th>title</th>
                    <th>description</th>
                    <th>image</th>
                    <th >user_id</th>
                    <th >user name</th>
                    <th >delete</th>
                    <th >edit</th>
                </tr>
            </thead>
            <tbody>
                    @forelse ($userData as $items)
                        <tr>
                           <td >{{$items->id}}</td> 
                           <td >{{$items->title}}</td> 
                           <td >{{$items->description}}</td>
                           <td ><img src="{{asset('images/post/'.$items->image)}}" alt="image" style="width: 50px; height: 50px;"></td>
                           <td>{{$items->user_id}}</td>
                           <td>{{$items->user->name}}</td>
                           <td>
                                <form action="{{route('post.destroy', $items->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                           </td> 
                           <td>
                             <a href="{{route('post.edit',['id'=> $items->id])}}" class="btn btn-info">edit</a>
                           </td>
                         
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">empty</td>
                        </tr>
                    @endforelse
            </tbody>
            
        </table>
        {{$userData->links()}}
         <a href="{{route('post.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>    
         <a href="{{route('post.trash')}}" class="btn btn-danger mt-5" cols="3" rows="2">trash</a>  
    </div>
</section>

@endsection