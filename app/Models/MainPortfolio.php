<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPortfolio extends Model
{
    use HasFactory;

    protected $fillable = [

        'project_name',
        'image',
    ];


    public function MainPortfolio(){

        $portfolio = Portfolio::where('main_portfolio_id', $this->id)->get();
        return $portfolio;
         
     }
}
