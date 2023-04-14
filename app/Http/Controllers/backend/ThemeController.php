<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Theme;

class ThemeController extends Controller
{
    public function index(){

       
        return view('backend.theme.index');
    }

    public function create(){
        $theme = Theme::find(1);
        return view('backend.theme.create',compact('theme'));
    }

    public function store(Request $request){

        $theme = Theme::UpdateOrCreate([

            "id"  =>  "1"
        ],[

            "file_name"    => "$request->file_name",
           
        ]);
        $theme->save();
        return redirect()->route('backend.theme.create');
    }

    // public function edit(Request $request,$id){

    //     $themes =  Theme::find($id);
    //     return view('backend.theme.edit',compact('themes'));
    // }

    // public function update(Request $request,Theme $theme,$id){

    //     $themes = Theme::find($id);
    //     $themes->file_name = $request->file_name;
    //     $themes->save();
    //     return redirect()->route('backend.theme.index');
    // }
    // public function destroy(Request $request,$id){

    //     $themes = Theme::find($id);
    //     $themes->delete();
    //     return redirect()->route('backend.theme.index');
    // }
}
