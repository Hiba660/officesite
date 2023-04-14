<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\MainPortfolio;


//portfolio detail images
class PortfolioController extends Controller
{
    
    public function index(){

        $portfolio = Portfolio::paginate(3);
        return view('backend.portfolio.index',compact('portfolio'));
    }

    public function create(){

        $main = MainPortfolio::all();
        return view('backend.portfolio.create',compact('main'));
    }

    public function store(Request $request){

      
 
   
    if($request->hasfile('project_images'))
     {
        foreach($request->file('project_images') as $key => $value)
        {
            $name = time().rand(1,50).'.'.$value->extension();
            $value->move(public_path('files'), $name);
            $portfolio = new Portfolio();
            $portfolio->main_portfolio_id = $request->project_name;
            $portfolio->project_images = $name;
            $portfolio->save(); 
        }
     }
     
      return redirect()->route('backend.portfolio.index');
    }


     public function edit(Request $request,$id){

        $main = MainPortfolio::all();
        $portfolios = Portfolio::find($id);
        return view('backend.portfolio.edit',compact('portfolios','main'));
     }

     public function update(Request $request,Portfolio $portfolio,$id){


        
        if($request->hasfile('project_images'))
        {
        
            foreach($request->file('project_images') as $key => $value)
            {
                $name = time().rand(1,50).'.'.$value->extension();
                $value->move(public_path('files'), $name);
                $portfolios = Portfolio::find($id);
                $portfolios->project_images    = $name;
                $portfolios->save();
              
            }

            $destination = 'files'.$portfolios->project_images;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

        }
        $portfolios = Portfolio::find($id);
        $portfolios->main_portfolio_id  = $request->project_name;
        $portfolios->save();
        return redirect()->route('backend.portfolio.index');
     }

     public function destroy(Request $request,$id){

        $portfolios = portfolio::find($id);
        $portfolios->delete();
        return redirect()->route('backend.portfolio.index');
     }
}
