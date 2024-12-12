<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard\Post;
use App\Models\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = User::with('Post')->get();
        return $data;
        
        // return view('dashboard.post.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
    
       if($request->hasFile('image')){
           $image= $request->file('image')->getClientOriginalName();
           $image = time(). '.'.$image; 
           $path = $request->file('image')->move('images/post/',$image);
       }
        Post::create([
            'title'=>$request->title,
            'description' =>$request->description,
            'image'=> $image,
            'user_id'=> auth()->id()
        ]);
        // session::flash('success', 'successfully done');
        return redirect()->route('post.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
