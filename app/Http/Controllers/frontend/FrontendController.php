<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\MainPortfolio;
use App\Models\Portfolio;


class FrontendController extends Controller
{
    public function index(){

        $slider = Slider::all();
        $services  = Service::take(4)->get();
        $mainPortfolio = MainPortfolio::take(6)->get();
        $testimonial = Testimonial::all();
        return view('frontend.home',compact('slider','services','testimonial','mainPortfolio'));
    }


    public function service(){
        
        $services = Service::all();
        return view('frontend.service',compact('services'));
    }

    public function portfolio(){

        $portfolio     = Portfolio::all();
        $mainPortfolio = MainPortfolio::all();
        return view('frontend.portfolio',compact('mainPortfolio','portfolio'));
    }

    public function portfolioDetail(Request $request,$id){

       
        // $portfolio = Portfolio::find($id);
        $mainPortfolio = MainPortfolio::all();
        $portfolio = portfolio::where('main_portfolio_id', $id)->get();
        return view('frontend.portfolio',compact('portfolio','mainPortfolio'));
    }


   
}

