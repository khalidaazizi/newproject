<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slider Data') }}
        </h2>
        {{-- btn  --}}
         <div style="display: flex;justify-content: end;">
                <a style="margin-right: 20px;" href="{{route('slider.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>    
                <a href="{{route('slider.trash')}}" class="btn btn-danger mt-5" cols="3" rows="2">trash</a>  
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="container">
                <div class="row">
                    <!-- success mag-->
                    @if (Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{Illuminate\Support\Facades\Session::get('success') }}
                    </div>
                    @endif

                 <!-- table data -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td> 
                                <td>{{ $item->title }}</td> 
                                <td>{{ Illuminate\Support\Str::limit($item->description, 10) }}</td> 
                                <td><img src="{{ asset('images/slider/' . $item->image) }}" alt="image" style="width: 100px;"> </td> 
                                <td>
                                    <form action="{{ route('slider.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td> 
                                <td>
                                    <a href="{{ route('slider.edit', ['id' => $item->id]) }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">No data available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $data->links() }}
                   
                </div>
            </section>
        </div>
    </div>
</x-app-layout>






























{{-- @extends('layouts.master')
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

<h1>Slider Data</h1>

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
                           <td><img src="{{asset('images/slider/'.$item->image)}}" alt="image"> </td> 
                           {{-- <td><img src="{{$item->image}}" alt="image"></td> --}}
                           {{-- <td>
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

@endsection --}}