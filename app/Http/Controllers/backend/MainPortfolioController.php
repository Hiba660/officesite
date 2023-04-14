<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\MainPortfolio;

class MainPortfolioController extends Controller
{
    public function index(){

        $mainPortfolio = MainPortfolio::paginate(3);
        return view('backend.mainPortfolio.index',compact('mainPortfolio'));
    }

    public function create(){

        return view('backend.mainPortfolio.create');
    }

    public function store(Request $request){

        $mainPortfolio = new MainPortfolio();
        $mainPortfolio->project_name = $request->project_name;

        if($request->file('image')){

            $file     = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(Public_Path('file'),$filename);
            $mainPortfolio->image = $filename;
        }

        $mainPortfolio->save();
        return redirect()->route('backend.mainPortfolio.index');
    }

    public function edit(Request $request,$id){
          
        $mainPortfolios = MainPortfolio::find($id);
        return view('backend.mainPortfolio.edit',compact('mainPortfolios'));

    }

    public function update(Request $request,MainPortfolio $mainPortfolio,$id){

        $mainPortfolios = MainPortfolio::find($id);
        $mainPortfolios->project_name = $request->project_name;

        if($request->hasfile('image')){

            $destination = 'file'.$mainPortfolios->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('file'), $filename);
            $mainPortfolios->image = $filename;
        }

        $mainPortfolios->save();
        return redirect()->route('backend.mainPortfolio.index');
    }

    public function destroy(Request $request,$id){

        $mainPortfolios = MainPortfolio::find($id);
        $mainPortfolios->delete();
        return redirect()->route('backend.mainPortfolio.index');
    }
}
