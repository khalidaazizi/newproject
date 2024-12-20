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
    public function index() {    
        $postData = Post::with('User:id,name')->paginate(10);
        return view('dashboard.post.index',compact('postData'));
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
    
       if($request->hasFile('first_image')){
           $first_image= $request->file('first_image')->getClientOriginalName();
           $first_image = time(). '.'.$first_image; 
           $path = $request->file('first_image')->move('images/post/',$first_image);
       }
       
       if($request->hasFile('second_image')){
           $second_image= $request->file('second_image')->getClientOriginalName();
           $second_image = time(). '.'.$second_image; 
           $path = $request->file('second_image')->move('images/post/',$second_image);
       }
        Post::create([
            'title'=>$request->title,
            'description' =>$request->description,
            'price' =>$request->price,
            'first_image'=> $first_image,
            'second_image'=> $second_image,
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
        $postData = Post::findOrfail($id);
        // return  $userData;
        return view('dashboard.post.edit',compact('postData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $postData = Post::findOrfail($id);
// for first_image 
          if($request->hasFile('first_image')){

            if(!empty($postData->first_image) && file_exists('images/post/'.$postData->first_image)){
                 if (is_file('images/post/' . $postData->first_image)){
                     unlink('images/post/' . $postData->first_image);
                }
            }
            $first_image = $request->file('first_image')->getClientOriginalName();
            $first_image = time().'.'.$first_image;
            $path = $request->file('first_image')->move('images/post',$first_image);
       
          }else{
            $first_image=$postData->first_image;
          }
// for  second_image
        if($request->hasFile('second_image')){

            if(!empty($userData->second_image) && file_exists('images/post/'.$userData->second_image)){
                 if (is_file('images/post/' . $userData->second_image)){
                     unlink('images/post/' . $userData->second_image);
                }
            }
            $second_image = $request->file('second_image')->getClientOriginalName();
            $second_image = time().'.'.$second_image;
            $path = $request->file('second_image')->move('images/post',$second_image);
       
        }else{
            $second_image=$postData->second_image;
        }

         Post::where('id','=',$id)->update([
            'title'=> $request-> title,
            'description'=> $request-> description,
            'price' =>$request->price,
            'first_image'=> $first_image,
            'second_image'=> $second_image,
        ]);
        session::flash('success', 'successfully done');
        return redirect()->route('post.index');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Post::findOrfail($id)->Delete();
        return redirect()->route('post.index');
    }

    // trash
    public function trash(){
       $post= Post::onlyTrashed()->get();
       return view('dashboard.post.trash',compact('post'));
    }
    // restore
    public function restore(string $id){
        Post::onlyTrashed()->findOrfail($id)->restore();
        session::flash('success', 'successfully done');
        return redirect()->route('post.trash');
     
    }
    //  forceDelete
     public function delete(string $id){
        $post = Post::onlyTrashed()->findOrFail($id);
        $imagePath = 'images/post/' . $post->first_image;
        if (!empty($post->first_image) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $imagePath = 'images/post/' . $post->second_image;
        if (!empty($post->second_image) && file_exists($imagePath)) {
            unlink($imagePath);
        }
       $post->forceDelete();
       session::flash('success', 'successfully done');
       return redirect()->route('post.trash');
     
    }
}
 