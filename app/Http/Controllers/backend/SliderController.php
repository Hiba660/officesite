<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::paginate(3);
        return view('backend.slider.index',compact('slider'));
    }

    public function create(){

        return view('backend.slider.create');
    }

    public function store(Request $request){

        $slider = new Slider();
        $slider->heading = $request->heading;
        $slider->description = $request->description;
       
        if($request->file('image')){
            $file= $request->file('image');
            $filename= time().'.'.$file->getClientOriginalName();
            $file-> move(public_path('public/Images'), $filename);
            $slider->image = $filename;
        }
        if($request->file('b_image')){
            $file= $request->file('b_image');
            $filename= time().'.'.$file->getClientOriginalName();
            $file-> move(public_path('public/Images'), $filename);
            $slider->b_image = $filename;
        }
            
       $slider->save();
       return redirect()->route('backend.slider.index');
    }

     public function edit(Request $request,$id){

        $sliders = Slider::find($id);
        return view('backend.slider.edit',compact('sliders'));

    }

    public function update(Request $request,Slider $slider,$id)
    {
        $sliders = Slider::find($id);
        $sliders->heading = $request->heading;
        $sliders->description = $request->description;
        
        if($request->hasfile('image')){

            $destination = 'public/Images/'.$sliders->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('public/Images'), $filename);
            $sliders->image = $filename;
        }

        if($request->hasfile('b_image')){

            $destination = 'public/Images/'.$sliders->b_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('b_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('public/Images'), $filename);
            $sliders->b_image = $filename;
        }

        $sliders->save();
        return redirect()->route('backend.slider.index');
    }

   public function destroy(Request $request,$id){

     $sliders = Slider::find($id);
     $sliders->delete();
     return redirect()->route('backend.slider.index');
   }
}
