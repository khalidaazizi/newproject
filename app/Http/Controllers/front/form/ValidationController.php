<?php

namespace App\Http\Controllers\front\form;

use App\Models\Validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\form\createFormRequest;
class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('front.form.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createFormRequest $request)
    {
       
        if($request->hasFile('files')){
           
             $file = $request->file('files')->getClientOriginalName();
             $file = time(). '.'.$file;
             $path = $request->file('files')->move('file/files',$file);
        }

        // if ($request->file()) {
        // // $fileName = time().'_'.$request->file->getClientOriginalName();
        //      $fileName = $request->file('files')->getClientOriginalName();
        //      $fileName = time().'_'.$fileName;
        //      $filePath = $request->file('files')->storeAs('uploads', $fileName, 'public');
        // }

        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $image = time().'.'.$image;
            $path = $request->file('image')->move('images/slider',$image);
        
        }
        
        validation::create([
            'fullName'=> $request ->fullName,
            'age' => $request ->age,
            'email'  => $request ->email,
            'password' => $request ->password,
            'phoneNumber' =>$request ->phoneNumber,
            'birthday' =>$request ->birthday,
            'dead_day' =>$request ->dead_day,
            'gender' =>$request ->gender,
            'address' =>$request ->address,
            'files' =>$filePath,
            'image' =>$image,
            'country' =>$request ->country,
            'experience' =>$request ->experience,
            'terms' =>$request ->terms,
         ]);
         return redirect()->route('validation.index');
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
