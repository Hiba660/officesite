<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){
        $testimonial = Testimonial::paginate(3);
        return view('backend.testimonial.index', compact('testimonial'));
    }

    public function create(){

        return view('backend.testimonial.create');
    }

    public function store(Request $request){
           
       
        $testimonial = new Testimonial(); 
        $testimonial->name        = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        $testimonial->save();
        return redirect()->route('backend.testimonial.index');
    }

    public function edit(Request $request,$id){

       $testimonials = Testimonial::find($id);
       return view('backend.testimonial.edit',compact('testimonials'));
    }

    public function update(Request $request,Testimonial $testimonial,$id){

        $testimonials = Testimonial::find($id);
        $testimonials->name = $request->name;
        $testimonials->designation = $request->designation;
        $testimonials->description = $request->description;
        $testimonials->save();
        return redirect()->route('backend.testimonial.index');
    }

    public function destroy(Request $request,$id){

        $testimonials = Testimonial::find($id);
        $testimonials->delete();
        return redirect()->route('backend.testimonial.index');
    }


}
