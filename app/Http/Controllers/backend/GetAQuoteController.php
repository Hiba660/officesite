<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GetAQuote;

class GetAQuoteController extends Controller
{
    public function create(){

        $getAquote = GetAQuote::find(1);
        return view('backend.getAquote.create',compact('getAquote'));
    }

    public function store(Request $request){

        $getAquote = GetAQuote::UpdateOrCreate([

            "id"  =>  "1"
        ],[

            "days"     => "$request->days",
            "time"     => "$request->time",
            "phone"    => "$request->phone",
            "email"    =>  "$request->email",
            "address"  => "$request->address",
        ]);
    

        $getAquote->save();
        return redirect()->route('backend.getAquote.create');

     }
}
