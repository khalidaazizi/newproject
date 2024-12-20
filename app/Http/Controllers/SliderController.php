<?php

namespace App\Http\Controllers;
use App\Models\dashboard\Slider;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use Illuminate\Http\Request;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = Slider::withoutTrashed()->paginate(5);
        return view('dashboard.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.slider.create');
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
        session::flash('success', 'successfully done');
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
        return view('dashboard.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateSliderRequest $request, string $id)
    { 
          $slider=slider::findOrfail($id);
            $image ='';
          if($request->hasFile('image')){

           if(file_exists('images/slider/'.$slider->image)){
              unlink('images/slider/'.$slider->image);
            }
            $image = $request->file('image')->getClientOriginalName();
            $image = time().'.'.$image;
            $path = $request->file('image')->move('images/slider',$image);
       
          }else{
            $image=$slider->image;
          }
         Slider::where('id','=',$id)->update([
            'title'=> $request-> title,
            'description'=> $request-> description,
             'image'=> $image
        ]);
        session::flash('success', 'successfully done');
        return redirect()->route('slider.index');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    { 
        slider::findOrfail($id)->Delete();
        return redirect()->route('slider.index');
      
    }
    // trash page
    public function trash(){
      $slider= Slider::onlyTrashed()->get();
      return view('dashboard.slider.trash',compact('slider'));
    }
  
    // restore
    public function restore(string $id){
       slider::onlyTrashed()->findOrfail($id)->restore();
        session::flash('success', 'successfully done');
       return redirect()->route('slider.index');
     
    }

     // forceDelete
    public function delete(string $id){    
        $slider = Slider::onlyTrashed()->findOrFail($id);
        $imagePath = 'images/slider/' . $slider->image;
        if (!empty($slider->image) && file_exists($imagePath)) {
            unlink($imagePath);
        }
        $slider->forceDelete();
        session()->flash('success', 'Successfully done');
        return redirect()->route('slider.trash');
     }


}
