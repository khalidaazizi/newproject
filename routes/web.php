<?php

use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
 });

// route::get('/create',function(){
//    return view('create');
// });


Route::get('/testUrl' , [TestController::class , 'test'])->name('test');


//  get the  data from routes and  return it
// route::get('/about/{username}/{password}',function($user,$pass){
//     return  "<i>my name is $user and my password is $pass </i>  " ;
// })->name('slider.about');
// // we can enter into contact page without send value
// // can be username and password  unll
// route::get('/contact/{username?}/{password?}',function($user=null,$pass=null){
//     return  "<h1>my name is $user and my password is $pass </h1>  " ;
// });
// //  for username can not get numeric value
// route::get('/gallery/{username}/{password}',function($user,$pass){
//      return  "<h1>my name is $user and my password is $pass </h1>  " ;
// })->name('slider.gallery') ->where(['username'=>'[a-zA-Z]+','password'=>'[a-zA-Z0-9]+']);


//  PREFIX FOR SLIDER AND EIDT PAGES
// route::prefix('/admin/panel/')->group(function(){
//     route::get('/slider',function(){
//         return view('/slider');
//      });
//       route::get('/edit',function(){
//         return" this is a edit pages";
//      });
// });



//  REDIRECT TO CREATE PAGE
// Route::get('login', function(){
//     return "this is login";
// })->name('user');
// Route::redirect('login', 'slider/create', 301);


// SHOW VIEW PAGES
// route::get('/slid/about',function(){

// $fristname= 'khalida';
// $lastname= 'azizi';
// $age=112;
// $email='queen@.com';


 // return view (' silder' )->with(['fristname'=> $fristname ,'lastname'=>$lastname,'age'=>$age,'email'=>$email ]);   problem
// return view ('/slider', ['fristname'=> $fristname ,'lastname'=>$lastname,'age'=>$age,'email'=>$email]);
// return view ('slider',compact('fristname','lastname', 'age' , 'email'));
// });

// Route::get('/users',function(){
//     $data=['efat','azizi', '12','google.com'];
//     return view('slider',compact('data'));
// });

// route::get('/slider/{id}',function($id){
//     $id==='khalida';
//     $data =['efat','azizi', '12','google.com'];
//     return view('slider',compact('id','data'));
// });

// Route::get('/slider',[AboutController::class,'index']);
Route::get('/slider', [SliderController::class,'index'])->name('slider');
