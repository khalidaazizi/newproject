<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Data') }}
            
        </h2>
        {{-- btns --}}
         <div style="display: flex;justify-content: end;">
            <a style="margin-right: 20px;" href="{{route('post.create')}}" class="btn btn-success mt-5" cols="3" rows="2">create data</a>    
            <a href="{{route('post.trash')}}" class="btn btn-danger mt-5" cols="3" rows="2">trash</a>  
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
                    <!-- table  data-->
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>price</th>
                                <th>first_image</th>
                                <th>second_image</th>
                                <th >user_id</th>
                                <th >user name</th>
                                <th >delete</th>
                                <th >edit</th>
                            </tr>
                        </thead>
                        <tbody>
                                @forelse ($postData as $items)
                                    <tr>
                                    <td >{{$items->id}}</td> 
                                    <td >{{$items->title}}</td> 
                                    <td >{{$items->description}}</td>
                                    <td >{{$items->price}}</td>
                                    <td ><img src="{{asset('images/post/'.$items->first_image)}}" alt="image 1" style="width: 50px; height: 50px;"></td>
                                    <td ><img src="{{asset('images/post/'.$items->second_image)}}" alt="image 2" style="width: 50px; height: 50px;"></td>
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
                                        <td colspan="10">empty</td>
                                    </tr>
                                @endforelse
                        </tbody>
                        
                    </table>
        
                    <!-- دکمه‌های اضافی -->
                    {{$postData->links()}}
        
                </div>
           </section>
        </div>
    </div>
</x-app-layout>
