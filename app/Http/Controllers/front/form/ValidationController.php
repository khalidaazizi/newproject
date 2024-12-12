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
        //     // مدیریت آپلود فایل‌ها
        // $file = null;
        // if ($request->hasFile('files')) {
        //     $file = time() . '_' . $request->file('files')->hashName();
        //     $request->file('files')->move(public_path('file/files'), $file);
        // }

        // $image = null;
        // if ($request->hasFile('image')) {
        //     $image = time() . '_' . $request->file('image')->hashName();
        //     $request->file('image')->move(public_path('images/slider'), $image);
        // }

        // // آماده‌سازی داده‌ها
        // $data = $request->only([
        //     'fullName', 'age', 'email', 'password', 'phoneNumber', 
        //     'birthday', 'dead_day', 'gender', 'address', 'country', 'terms'
        // ]);
        // // $data['experience'] = implode(',', $data['experience']); convert to srt

        // //  $data['experience'] = $request->input('experience', []);  array
        // $data['files'] = $file;
        // $data['image'] = $image;

        // // ذخیره‌سازی داده‌ها
        // Validation::create($data);

        // بازگشت به مسیر موردنظر
        return redirect()->route('validation.index')->with('success', 'اطلاعات با موفقیت ذخیره شد.');

        // if($request->hasFile('files')){
           
        //      $file =  $request->file('files')->getClientOriginalName();
        //      $file = time(). '.'.$file;
        //      $path = $request->file('files')->move('file/files',$file);
        // }

        // if($request->hasFile('image')){
        //     $image = $request->file('image')->getClientOriginalName();
        //     $image = time().'.'.$image;
        //     $path = $request->file('image')->move('images/slider',$image);
        
        // }

        // $data = $request->all();
        // $data['experience'] = $data['experience'] ?? [];

        // validation::create([
        //     'fullName'=> $request ->fullName,
        //     'age' => $request ->age,
        //     'email'  => $request ->email,
        //     'password' => $request ->password,
        //     'phoneNumber' =>$request ->phoneNumber,
        //     'birthday' =>$request ->birthday,
        //     'dead_day' =>$request ->dead_day,
        //     'gender' =>$request ->gender,
        //     'address' =>$request ->address,
        //     'files' =>$file,
        //     'image' =>$image,
        //     'country' =>$request ->country,
        //     'experience' =>$request ->experience,
        //     'terms' =>$request ->terms,
        //  ]);
        //  return redirect()->route('validation.index');
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
