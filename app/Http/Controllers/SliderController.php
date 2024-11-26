<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use Illuminate\Http\Request;
// use Illuminate\Support\str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = Slider::withoutTrashed()->paginate(5);
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
    public function store(createSliderRequest $request)
    {   
        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $image = time().'.'.$image;
            $path = $request->file('image')->move('images/slider',$image);
        
        }

        slider::create([
            'title'=>$request ->title,
            'description' =>$request ->description,
            'image'=> $image,

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
    public function update(updateSliderRequest $request, string $id)
    { 
          $slider=slider::findOrfail($id);
            $image ='';
          if($request->hasFile('image')){

            if(file_exists('images/slider'.$slider->image)){
               unlink('images/slider'.$slider->image);
            }
            $image = $request->file('image')->getClientOriginalName();
            $image = time().'.'.$image;
            $path = $request->file('image')->move('images/slider',$image);
       
          }else{
            $image=$slider->image;
          }
        slider::where('id','=',$id)->update([
            'title'=> $request-> title,
            'description'=> $request-> description,
             'image'=> $image
        ]);
         
        return redirect()->route('slider.index');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    { 
   
       slider::onlyTrashed()->findOrfail($id)->forceDelete();
       return redirect()->route('slider.trash');
    }

    public function trash(){
      $slider= Slider::onlyTrashed()->get();
      return view('slider.trash',compact('slider'));

    }
    public function restore(string $id){
       slider::onlyTrashed()->findOrfail($id)->restore();
       return redirect()->route('slider.trash');
    }
}
