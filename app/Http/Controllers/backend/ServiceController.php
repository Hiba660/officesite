<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
   public function index(){

      $service = Service::paginate(3);
      return view('backend.services.index',compact('service'));
   } 

   public function create(){

     $service = Service::find(1);
     return view('backend.services.create',compact('service'));
   }

   public function store(Request $request){

      $service              = new Service();
      $service->icon        = $request->icon;
      $service->heading     = $request->heading;
      $service->description = $request->description;
  
      $service = Service::UpdateOrCreate([

         "id"  =>  "1"
     ],[

         "detail"    => "$request->detail",
         
     ]);

      $service->save();
      return redirect()->route('backend.services.index');
   }

   public function edit(Request $request,$id){

      $services = Service::find($id);
      return view('backend.services.edit',compact('services'));
   }
   
   public function update(Request $request,Service $service,$id){

      
      $services              = service::find($id);
      $services->icon        = $request->icon;
      $services->heading     = $request->heading;
      $services->description = $request->description;
      $services->save();
      return redirect()->route('backend.services.index');
   }

   public function destroy(Request $request,$id){

      $services = Service::find($id);
      $services->delete();
      return redirect()->route('backend.services.index');
   }
}
