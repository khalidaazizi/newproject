<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use  App\Models\dashboard\Post;
use App\Models\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
      
        $userData = Post::with('User:id,name')->paginate(10);
        return view('dashboard.post.index',compact('userData'));
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
        session::flash('success', 'successfully done');
        return redirect()->route('post.index');
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
        $userData = Post::findOrfail($id);
        // return  $userData;
        return view('dashboard.post.edit',compact('userData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userData = Post::findOrfail($id);

          if($request->hasFile('image')){

            if(!empty($userData->image) && file_exists('images/post/'.$userData->image)){
                 if (is_file('images/post/' . $userData->image)){
                     unlink('images/post/' . $userData->image);
                }
            }
            $image = $request->file('image')->getClientOriginalName();
            $image = time().'.'.$image;
            $path = $request->file('image')->move('images/post',$image);
       
          }else{
            $image=$userData->image;
          }
         Post::where('id','=',$id)->update([
            'title'=> $request-> title,
            'description'=> $request-> description,
            'image'=> $image,
        ]);
        session::flash('success', 'successfully done');
        return redirect()->route('post.index');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrfail($id)->Delete();
        return redirect()->route('post.index');
    }

    public function trash(){
       $post= Post::onlyTrashed()->get();
       return view('dashboard.post.trash',compact('post'));
    }
  
    public function restore(string $id){
        Post::onlyTrashed()->findOrfail($id)->restore();
        session::flash('success', 'successfully done');
        return redirect()->route('post.trash');
     
    }

     public function delete(string $id){
       Post::onlyTrashed()->findOrfail($id)->forceDelete();
       session::flash('success', 'successfully done');
       return redirect()->route('post.trash');
     
    }
}
 