<?php

namespace App\Http\Controllers\validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\validation\Form;

class FormController extends Controller
{
    public function index()
    {   
       
        
    }

   
    public function create()
    {
        return view('front.form.form');
    }

   
    public function store(Request $request)
    {   
         
    
           $data = $request->validate([
            'fullName' => 'required|string',
            'age' => 'required|integer',
            'email' => 'required|email',
            'password' => 'required|confirmed|string|min:4|max:10',
            'phoneNumber' => 'required',
            'birthday' => 'required|date|before:2024-11-26',
            'dead_day' => 'required|date|after:today',
            'gender' => 'required|in:male,female',
            'address' => 'required|string',
            // 'files' => 'required|file|mimes:pdf,doc,docx,zip',
            // 'image' => 'required|file|mimes:jpg,jpeg,png',
            'country' => 'required|string',
            'experience' => 'nullable|array', 
            'terms' => 'required|boolean',
        ]);
        //  if ($request->hasFile('files')) {
        //     $file = $request->file('files');
        //     $fileName = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('uploads/files'), $fileName);
        //     $data['files'] = $fileName;
        // }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('uploads/images'), $imageName);
        //     $data['image'] = $imageName;
        // }
    //    array to str
    //   $data['experience'] = isset($request->experience) ? implode(',', $request->experience) : null; //  ...?

    //  default value
        $data['terms'] = $request->has('terms') ? 1 : 0;
         
    
        form::create([
            'fullName'=>$request->fullName ,
           'age' =>$request ->age ,
            'email' =>$request ->email,
           'password' =>$request->password,
           'phoneNumber' =>$request ->phoneNumber,
            'birthday' =>$request ->birthday,
           'dead_day' =>$request ->dead_day,
            'gender' =>$request ->gender,
            'address'=>$request ->address,
            // 'files' => $file,
            // 'image'=> $image,
            'country' =>$request ->country,
           'experience' =>$request ->experience,
           'terms'=>$request ->terms, 
        ]);
        return redirect()->route('form.create');
       
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
