<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();
        return view('slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $image = time().'.'.$request->image->extension();
            $request->image->move('images/slider',$image);
        }
    //    $file = $request->file('image');
    //    $image ='';

    //    if (! empty($file)){
    //       $image = md5(time()).'.'.$file->getClientOriginalName();
    //       $file->move('images/slider',$image);
    //    }


        slider::create([
            'title'=>$request ->title,
            'description' =>$request ->description,
            'image'=>$request->$image,
        ]);
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   $slider=slider::findOrfail( $id);
        
        return view('slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        slider::where('id',$id)->update([
            'title'=> $request-> title,
            'description'=> $request-> description,

        ]);
         
        return redirect()->route('slider.index');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    { 
    //    $slider= slider::findOrfail($id);
    //    return $slider; 
       slider::destroy($id);
       return redirect()->route('slider.index');
    }
}
