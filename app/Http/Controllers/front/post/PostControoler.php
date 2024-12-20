<?php

namespace App\Http\Controllers\front\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\dashboard\Post;
class PostControoler extends Controller
{
    public function index(){
        $data = Post::all();
        // dd($data->all());
        return view('front.posts.index',compact('data'));
    }
}
